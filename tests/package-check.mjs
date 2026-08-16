import assert from 'node:assert/strict';
import { readFile, readdir } from 'node:fs/promises';
import { join } from 'node:path';
import { fileURLToPath } from 'node:url';

const moduleRoot = join(fileURLToPath(new URL('.', import.meta.url)), '..');

async function filesUnder(directory) {
  const result = [];
  for (const entry of await readdir(directory, { withFileTypes: true })) {
    if (entry.name === 'vendor' || entry.name === 'tests') continue;
    const absolute = join(directory, entry.name);
    if (entry.isDirectory()) result.push(...await filesUnder(absolute));
    else result.push(absolute);
  }
  return result;
}

const manifest = JSON.parse(await readFile(join(moduleRoot, 'module.json'), 'utf8'));
assert.equal(manifest.moduleUniqueID, 'ModuleOpenLdapSync');
assert.equal(manifest.version, '1.1.1');
assert.equal(manifest.min_pbx_version, '2025.1.1');
assert.ok(!Object.hasOwn(manifest, 'lic_product_id'));
assert.ok(!Object.hasOwn(manifest, 'lic_feature_id'));

const files = await filesUnder(moduleRoot);
const textFiles = files.filter((file) => !file.endsWith('composer.lock') && !file.endsWith('.svg'));
const textByFile = new Map();
for (const file of textFiles) {
  const content = await readFile(file, 'utf8');
  textByFile.set(file, content);
  assert.ok(!content.includes('Modules\\ModuleLdapSync'), `old namespace in ${file}`);
  assert.ok(!content.includes('/ModuleLdapSync/'), `old module path in ${file}`);
  assert.ok(!content.includes('module-ldap-sync/'), `old route in ${file}`);
}

const autoload = await readFile(join(moduleRoot, 'vendor/composer/autoload_psr4.php'), 'utf8');
assert.ok(autoload.includes("'Modules\\\\ModuleOpenLdapSync\\\\'"));
assert.ok(!autoload.includes("'Modules\\\\ModuleLdapSync\\\\'"));

const englishMessages = await readFile(join(moduleRoot, 'Messages/en.php'), 'utf8');
assert.ok(englishMessages.includes("'mo_ModuleModuleOpenLdapSync'"));
assert.ok(englishMessages.includes("'BreadcrumbModuleOpenLdapSync'"));
const translationReferences = new Set();
for (const content of textByFile.values()) {
  for (const match of content.matchAll(/globalTranslate\.(module_open_ldap_[A-Za-z0-9_]+)/g)) {
    translationReferences.add(match[1]);
  }
  for (const match of content.matchAll(/t\._\(['"](module_open_ldap_[A-Za-z0-9_]+)['"]\)/g)) {
    translationReferences.add(match[1]);
  }
}
for (const key of translationReferences) {
  assert.ok(englishMessages.includes(`'${key}'`), `missing English translation ${key}`);
}

const connector = await readFile(join(moduleRoot, 'Lib/LdapSyncConnector.php'), 'utf8');
assert.ok(connector.includes("$this->ldapType === 'Authentik' ? 'uid' : ''"));
assert.ok(connector.includes("$this->ldapType === 'Authentik'"));
assert.ok(connector.includes("['1', 'true', 'yes', 'on']"));

const form = await readFile(join(moduleRoot, 'App/Forms/LdapConfigForm.php'), 'utf8');
assert.ok(form.includes("'Authentik' => 'Authentik'"));
const sourceJs = await readFile(
  join(moduleRoot, 'public/assets/js/src/module-open-ldap-sync-modify.js'),
  'utf8',
);
const compiledJs = await readFile(
  join(moduleRoot, 'public/assets/js/module-open-ldap-sync-modify.js'),
  'utf8',
);
for (const javascript of [sourceJs, compiledJs]) {
  assert.ok(javascript.includes('Authentik: {'));
  assert.ok(javascript.includes("userAccountControl: 'ak-active'"));
  assert.ok(javascript.includes("userFilter: '(&(objectClass=user)(telephoneNumber=*))'"));
}

const requiredFiles = [
  'App/Controllers/ModuleOpenLdapSyncController.php',
  'App/Views/ModuleOpenLdapSync/index.volt',
  'Lib/LdapSyncConf.php',
  'Lib/LdapSyncConnector.php',
  'Lib/LdapSyncMain.php',
  'Models/ModuleOpenLdapSync.php',
  'Setup/PbxExtensionSetup.php',
  'LICENSE',
  'NOTICE.md',
  'THIRD_PARTY_NOTICES.md',
  'third_party/licenses/ldaprecord-MIT.md',
  'third_party/licenses/laravel-MIT.md',
  'third_party/licenses/php-fig-simple-cache-MIT.md',
];
for (const file of requiredFiles) {
  assert.ok(files.includes(join(moduleRoot, file)), `missing ${file}`);
}

const notice = await readFile(join(moduleRoot, 'NOTICE.md'), 'utf8');
assert.ok(notice.includes('modified on 2026-08-17'));
assert.match(notice, /not\s+affiliated with/);

const composer = JSON.parse(await readFile(join(moduleRoot, 'composer.json'), 'utf8'));
assert.equal(composer.license, 'GPL-3.0-or-later');
assert.equal(composer.homepage, 'https://github.com/davidjaksa/ModuleOpenLdapSync');
assert.deepEqual(composer.support, {
  issues: 'https://github.com/davidjaksa/ModuleOpenLdapSync/issues',
  source: 'https://github.com/davidjaksa/ModuleOpenLdapSync',
});
assert.ok(!Object.hasOwn(composer, 'funding'));

const dependencyLicenseFiles = [
  'vendor/directorytree/ldaprecord/license.md',
  'vendor/illuminate/collections/LICENSE.md',
  'vendor/illuminate/conditionable/LICENSE.md',
  'vendor/illuminate/contracts/LICENSE.md',
  'vendor/illuminate/macroable/LICENSE.md',
  'vendor/psr/simple-cache/LICENSE.md',
];
for (const file of dependencyLicenseFiles) {
  const content = await readFile(join(moduleRoot, file), 'utf8');
  assert.ok(content.includes('MIT License'), `invalid dependency license ${file}`);
  assert.ok(content.includes('Permission is hereby granted'), `incomplete dependency license ${file}`);
}

const thirdPartyNotices = await readFile(join(moduleRoot, 'THIRD_PARTY_NOTICES.md'), 'utf8');
const installed = JSON.parse(
  await readFile(join(moduleRoot, 'vendor/composer/installed.json'), 'utf8'),
).packages;
for (const dependency of installed) {
  assert.deepEqual(dependency.license, ['MIT'], `unexpected license for ${dependency.name}`);
  assert.ok(thirdPartyNotices.includes(`| ${dependency.name} | ${dependency.version} |`),
    `missing third-party inventory row for ${dependency.name}`);

  const packageRoot = join(moduleRoot, 'vendor', dependency.name);
  const packageFiles = await readdir(packageRoot);
  assert.ok(packageFiles.some((name) => /^licen[cs]e(?:\.|$)/i.test(name)),
    `missing bundled license file for ${dependency.name}`);
}

for (const content of textByFile.values()) {
  assert.ok(!content.includes('qa.mikopbx.ru'), 'upstream support forum remains');
  assert.ok(!content.includes('t.me/mikopbx'), 'upstream support chat remains');
  assert.ok(!content.includes('patreon.com/mikopbx'), 'upstream funding link remains');
}

console.log(
  `Package check passed (${files.length} files and ${translationReferences.size} translation references inspected).`,
);
