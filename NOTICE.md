# Attribution and modification notice

This distribution was modified on 2026-08-17 by the ModuleOpenLdapSync
community contributors. It is an unofficial community project and is not
affiliated with, sponsored by, supported by, or endorsed by MIKO LLC or the
MikoPBX project.

ModuleOpenLdapSync is a modified derivative of the publicly available
MikoPBX ModuleLdapSync project:

- Upstream source: https://github.com/mikopbx/ModuleLdapSync
- Upstream revision used: `a81edeb44100e51d9aab31457d627622bf3aa8b8`
- Upstream authors: Alexey Portnov, Nikolay Beketov, and contributors
- License: GNU General Public License, version 3 or later

Changes in this distribution:

- Assigned the distinct module ID `ModuleOpenLdapSync`.
- Renamed namespaces, controller/model identities, routes, views, assets,
  JavaScript objects, and translation keys to avoid collisions with upstream.
- Assigned an independent community package identity and release versioning.
- Omitted marketplace product and feature identifiers so this derivative is
  treated as a non-commercial custom module by MikoPBX's standard module API.
- Added packaging validation and installation guidance.

Initial community-fork release date: 2026-08-16.

Version 1.1.0 additionally adds native Authentik LDAP-provider compatibility:

- Uses Authentik's built-in `uid` value as the stable synchronization key.
- Interprets `ak-active` values instead of treating attribute presence as a
  disabled-account marker.
- Adds an Authentik configuration preset to the module UI.

Version 1.1.1, modified 2026-08-17, adds publication-compliance metadata,
third-party notices, complete bundled dependency license texts, and clearer
separation from upstream support and branding.

Version 1.1.2, modified 2026-08-17, synchronizes the Composer lock metadata
with the independent package identity and public repository information.

No MikoPBX license keys, license-service code, or marketplace binaries are
included or modified by this distribution.

The names MIKO and MikoPBX are used only to identify the compatible platform
and upstream source. No trademark license or official support is claimed.
