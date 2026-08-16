<?php
return [
    /*
 * MikoPBX - free phone system for small business
 * Copyright © 2017-2023 Alexey Portnov and Nikolay Beketov
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program.
 * If not, see <https://www.gnu.org/licenses/>.
 */
    'repModuleOpenLdapSync' => '[Open] Synchronisierung mit LDAP/AD – %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] Synchronisierung mit LDAP/AD',
    'BreadcrumbModuleOpenLdapSync' => '[Open] Synchronisierung mit LDAP/AD',
    'SubHeaderModuleOpenLdapSync' => 'Mit dem Modul können Sie Benutzer aus einer Domäne laden',
    'module_open_ldap_LdapServerConnectionHeader' => 'Verbindungseinstellungen des Domänencontrollers',
    'module_open_ldap_AddServer' => 'Server hinzufügen',
    'module_open_ldap_AddServerShort' => 'Hinzufügen',
    'module_open_ldap_NoAnyServers' => 'Keine Server konfiguriert',
    'module_open_ldap_TableColumnServerName' => 'Serveradresse',
    'module_open_ldap_OrganizationalUnit' => 'Unterteilung',
    'module_open_ldap_BaseDN' => 'Domänenstamm',
    'module_open_ldap_ldapType' => 'Server Typ',
    'module_open_ldap_LdapServerName' => 'Adresse des Domänencontrollers',
    'module_open_ldap_LdapServerPort' => 'Hafen',
    'module_open_ldap_LdapAdminLogin' => 'Benutzername und Passwort mit Lese-/Schreibzugriff auf die Domäne',
    'module_open_ldap_LdapBaseDN' => 'Domänenstamm',
    'module_open_ldap_LdapPassword' => 'Passwort',
    'module_open_ldap_LdapAttributesHeader' => 'Attribute in der Domäne zum Abgleich mit Daten in MikoPBX',
    'module_open_ldap_UserExtensionAttribute' => 'Interne Rufnummer des Benutzers',
    'module_open_ldap_UserMobileAttribute' => 'Mobiltelefon',
    'module_open_ldap_UserEmailAttribute' => 'E-Mail-Adresse',
    'module_open_ldap_UserNameAttribute' => 'Vor- und Nachname des Benutzers',
    'module_open_ldap_UserAccountControl' => 'Attribut, in dem der Sperrstatus des Benutzers gespeichert wird',
    'module_open_ldap_UserAvatarAttribute' => 'Attribut mit Foto',
    'module_open_ldap_UpdateAttributes' => 'Daten in der Domäne aktualisieren, wenn diese in MikoPBX geändert werden (Schreibrechte erforderlich)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Unterteilung',
    'module_open_ldap_LdapUserFilter' => 'Zusätzlicher Benutzerfilter',
    'module_open_ldap_LdapCheckGetListHeader' => 'Testen Sie, um eine Liste der LDAP-Benutzer zu erhalten',
    'module_open_ldap_LdapCheckGetUsersList' => 'Mithilfe der angegebenen Zugriffsparameter und Filter führen wir eine Anfrage an LDAP/AD aus und erhalten einen Teil von 20 Benutzern zur Synchronisierung',
    'module_open_ldap_LdapGetUsersButton' => 'Anforderung ausführen',
    'module_open_ldap_user_not_found' => 'Der Benutzer hat keinen Zugriff auf die Domäne oder die angegebenen Parameter sind falsch',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'Die Adresse des Domänencontrollers ist nicht ausgefüllt',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'Domänencontroller-Port nicht belegt',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'Die Anmeldung für den Domänenbenutzer ist nicht ausgefüllt',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'Das Passwort für den Domänenbenutzer ist nicht ausgefüllt',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'Domänenstamm nicht ausgefüllt',
    'module_open_ldap_LdapManualSyncHeader' => 'Manuelle Synchronisierung',
    'module_open_ldap_LdapManualSyncManual' => 'Wenn Sie auf die Schaltfläche klicken, wird ein Teil von 20 Benutzern zwischen dem angegebenen Domänencontroller und MikoPBX synchronisiert',
    'module_open_ldap_LdapManualSyncButton' => 'Daten synchronisieren',
    'module_open_ldap_usersSyncResult' => 'Status',
    'module_open_ldap_userHadChangesOnTheSide' => 'Aktualisiert',
    'module_open_ldap_OnPBXSide' => 'innerhalb von MikoPBX',
    'module_open_ldap_OnDomainSide' => 'in der Domäne',
    'module_open_ldap_SKIPPED' => 'übersprungen',
    'module_open_ldap_UPDATED' => 'verarbeitet',
    'module_open_ldap_EnableAutoSync' => 'Aktivieren Sie die geplante Synchronisierung',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'Das Attribut mit dem Benutzernamen in der Domäne ist nicht gefüllt',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Das Attribut mit dem Mobiltelefon des Benutzers in der Domain ist nicht gefüllt',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'Das Attribut mit der internen Telefonnummer des Benutzers in der Domäne ist nicht gefüllt',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'Das Attribut mit der E-Mail-Adresse des Benutzers in der Domäne ist nicht gefüllt',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'Das Attribut mit dem Attribut der Benutzeraktivität in der Domäne ist nicht gefüllt',
    'module_open_ldap_TableColumnAutoSync' => 'Automatische Synchronisation',
    'module_open_ldap_ConflictSide' => 'Wer weigerte sich',
    'module_open_ldap_ConflictErrorMessages' => 'Grund für die Ablehnung',
    'module_open_ldap_ConflictsTabHeader' => 'Synchronisierungskonflikte',
    'module_open_ldap_NoAnyConflicts' => 'Keine Probleme gefunden',
    'module_open_ldap_deleteCurrentConflict' => 'Löscht den aktuellen Eintrag, verändert weder die Daten in der TK-Anlage noch auf der LDAP/AD-Serverseite',
    'module_open_ldap_ConflictTime' => 'Datum',
    'module_open_ldap_ConflictUserData' => 'Gespeicherte Daten',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'Telefonanlage',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'LDAP/AD',
    'module_open_ldap_CONFLICT' => 'Konflikt',
    'module_open_ldap_SyncTabHeader' => 'Synchronisation und Konflikte',
    'module_open_ldap_TabAttributes' => 'Synchronisierungsfelder',
    'module_open_ldap_DeleteAllConflicts' => 'Beseitigen Sie alle Konflikte',
    'module_open_ldap_UserPasswordAttribute' => 'SIP-Passwort',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UpdateAttributesMessage' => 'Wenn sich Daten in MikoPBX ändern, wird Folgendes in der Domäne aktualisiert: interne Nummer, Mobiltelefonnummer, E-Mail, Avatar, SIP-Passwort',
    'module_open_ldap_UserName' => 'Benutzername',
    'module_open_ldap_UserNumber' => 'Durchwahlnummer',
    'module_open_ldap_findExtension' => 'Suchen Sie in der Benutzerliste',
    'module_open_ldap_DeletedUsersHeader' => 'In LDAP/AD deaktivierte Mitarbeiter',
    'module_open_ldap_DeletedUsersEmpty' => 'Keine Mitarbeiter mit Behinderung',
    'module_open_ldap_UserEmail' => 'E-Mail',
];
