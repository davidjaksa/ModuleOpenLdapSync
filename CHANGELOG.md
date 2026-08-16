# Changelog

## 1.1.2 - 2026-08-17

- Regenerate the Composer lock content hash after finalizing the independent
  package identity and GitHub repository metadata.
- Keep the source validation workflow and install archive on the same release
  version.

## 1.1.1 - 2026-08-17

- Add dated GPL modification and independent-project notices.
- Remove upstream support, funding, and repository metadata that could imply
  official support for this fork.
- Add third-party dependency inventory and missing bundled MIT license texts.

## 1.1.0 - 2026-08-16

- Add an Authentik directory type and configuration preset.
- Use Authentik's built-in `uid` as the stable synchronization identifier.
- Map `ak-active=false` to a disabled LDAP employee and reactivate employees
  when it becomes true again.
- Preserve existing Active Directory and generic OpenLDAP behavior.
- Apply server presets to all fields when creating a new server record.

## 1.0.0 - 2026-08-16

- Initial independently identified GPL community distribution.
