# ModuleOpenLdapSync

`ModuleOpenLdapSync` is an independently installable, community GPL fork of
MikoPBX's LDAP/Active Directory employee synchronization module. It has its own
module identifier, routes, assets, translations, and database namespace, and it
does not declare a MikoPBX marketplace product or feature ID.

> **Unofficial project:** this module is not affiliated with, sponsored by,
> supported by, or endorsed by MIKO LLC or the MikoPBX project. The MikoPBX
> name is used only to identify compatibility and the upstream source.

## Features

- Active Directory, OpenLDAP, and Authentik presets
- LDAP, StartTLS, and LDAPS transports
- Optional certificate verification with a custom PEM CA bundle
- Configurable name, extension, mobile, email, avatar, SIP-password, and
  account-status attributes
- Manual and scheduled synchronization
- Optional PBX-to-directory write-back
- Change tracking, conflict reporting, and disabled-user reporting

### Authentik

Select the `Authentik` server type to use Authentik's built-in `uid` as the
stable synchronization identifier and `ak-active` as the account-status field.
No custom `entryUUID` attribute is required. Add `telephoneNumber` and `mobile`
to each Authentik user as custom attributes; Authentik already supplies
`displayName` and `mail`. Keep PBX-to-directory write-back disabled because an
Authentik LDAP provider is intended for bind and directory-search access. The
default Authentik filter imports only users that have a `telephoneNumber`, so
the LDAP bind service account is not created as a PBX employee.

## Compatibility

- MikoPBX 2025.1.1 or newer
- PHP 8.4 runtime supplied by MikoPBX

Install the release ZIP through **Modules → Marketplace → Upload New Module**.
Do not install it over `ModuleLdapSync`; it is intentionally a separate module.
Disable the other LDAP synchronization module before enabling this one so two
workers do not update the same employees concurrently.

### Building a release from source

Install the locked production dependencies with Composer, then run:

```sh
./scripts/build-release.sh /absolute/path/ModuleOpenLdapSync.1.1.4.zip
```

The build refuses to run if `vendor/autoload.php` or any bundled dependency
license is missing. The generated archive contains the complete PHP and
JavaScript source, including the unminified JavaScript under
`public/assets/js/src/`.

## Security notes

Prefer StartTLS or LDAPS with certificate verification enabled. Use a dedicated
directory bind account and grant write access only to the mapped fields if
two-way synchronization is enabled.

## Licensing and attribution

This derivative is distributed under GPL-3.0-or-later. It is based on the
public [`mikopbx/ModuleLdapSync`](https://github.com/mikopbx/ModuleLdapSync)
source. Original copyright notices remain in the source files. See `LICENSE`
and `NOTICE.md`. Bundled dependency licenses and source references are listed
in `THIRD_PARTY_NOTICES.md`.

The GPL license covers the software distribution; it does not grant access to
MikoPBX Marketplace services, license keys, proprietary binaries, or official
support. Please report fork-specific issues through this repository's
[issue tracker](https://github.com/davidjaksa/ModuleOpenLdapSync/issues), not
to the upstream MikoPBX support channels.
