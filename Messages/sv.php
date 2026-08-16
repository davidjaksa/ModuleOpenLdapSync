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
    'repModuleOpenLdapSync' => '[Open] Synkronisering med LDAP/AD - %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] Synkronisering med LDAP/AD',
    'BreadcrumbModuleOpenLdapSync' => '[Open] Synkronisering med LDAP/AD',
    'SubHeaderModuleOpenLdapSync' => 'Modulen låter dig ladda användare från en domän',
    'module_open_ldap_LdapServerConnectionHeader' => 'Domänkontrollantens anslutningsinställningar',
    'module_open_ldap_AddServer' => 'Lägg till server',
    'module_open_ldap_AddServerShort' => 'Lägg till',
    'module_open_ldap_NoAnyServers' => 'Inga servrar konfigurerade',
    'module_open_ldap_TableColumnServerName' => 'Server adress',
    'module_open_ldap_OrganizationalUnit' => 'Indelning',
    'module_open_ldap_BaseDN' => 'Domänrot',
    'module_open_ldap_ldapType' => 'Servertyp',
    'module_open_ldap_LdapServerName' => 'Domänkontrollantadress',
    'module_open_ldap_LdapServerPort' => 'Hamn',
    'module_open_ldap_LdapAdminLogin' => 'Användarnamn och lösenord med läs/skrivbehörighet till domänen',
    'module_open_ldap_LdapBaseDN' => 'Domänrot',
    'module_open_ldap_LdapPassword' => 'Lösenord',
    'module_open_ldap_LdapAttributesHeader' => 'Attribut i domänen för matchning med data i MikoPBX',
    'module_open_ldap_UserExtensionAttribute' => 'Användarens anknytningsnummer',
    'module_open_ldap_UserMobileAttribute' => 'Mobiltelefon',
    'module_open_ldap_UserEmailAttribute' => 'E-postadress',
    'module_open_ldap_UserNameAttribute' => 'Användarens för- och efternamn',
    'module_open_ldap_UserAccountControl' => 'Attribut där användarens låsstatus lagras',
    'module_open_ldap_UserAvatarAttribute' => 'Fotoattribut',
    'module_open_ldap_UpdateAttributes' => 'Uppdatera data i domänen när du ändrar den i MikoPBX (skrivrättigheter krävs)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Indelning',
    'module_open_ldap_LdapUserFilter' => 'Ytterligare användarfilter',
    'module_open_ldap_LdapCheckGetListHeader' => 'Testa för att få lista över LDAP-användare',
    'module_open_ldap_LdapCheckGetUsersList' => 'Med de angivna åtkomstparametrarna och filtren kommer vi att utföra en begäran till LDAP/AD och ta emot en del av 20 användare för synkronisering',
    'module_open_ldap_LdapGetUsersButton' => 'Kör begäran',
    'module_open_ldap_user_not_found' => 'Användaren har inte åtkomst till domänen eller så är de angivna parametrarna felaktiga',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'Domänkontrollantens adress är inte ifylld',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'Domänkontrollantporten är inte ifylld',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'Inloggning för domänanvändare är inte ifylld',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'Lösenordet är inte ifyllt för domänanvändaren',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'Domänroten är inte ifylld',
    'module_open_ldap_LdapManualSyncHeader' => 'Manuell synkronisering',
    'module_open_ldap_LdapManualSyncManual' => 'När du klickar på knappen kommer en del av 20 användare att synkroniseras mellan den angivna domänkontrollanten och MikoPBX',
    'module_open_ldap_LdapManualSyncButton' => 'Synkronisera data',
    'module_open_ldap_usersSyncResult' => 'Status',
    'module_open_ldap_userHadChangesOnTheSide' => 'Uppdaterad',
    'module_open_ldap_OnPBXSide' => 'inuti MikoPBX',
    'module_open_ldap_OnDomainSide' => 'i domänen',
    'module_open_ldap_SKIPPED' => 'hoppat över',
    'module_open_ldap_UPDATED' => 'bearbetas',
    'module_open_ldap_EnableAutoSync' => 'Aktivera schemalagd synkronisering',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'Attributet med användarnamnet i domänen är inte ifyllt',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Attributet med användarens mobiltelefon i domänen är inte ifyllt',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'Attributet med användarens interna telefonnummer i domänen är inte ifyllt',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'Attributet med användarens e-post i domänen är inte ifyllt',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'Attributet med attributet för användaraktivitet i domänen är inte ifyllt',
    'module_open_ldap_TableColumnAutoSync' => 'Automatisk synkronisering',
    'module_open_ldap_ConflictsTabHeader' => 'Synkroniseringskonflikter',
    'module_open_ldap_NoAnyConflicts' => 'Inga problem hittades',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'PBX',
    'module_open_ldap_deleteCurrentConflict' => 'Radera den aktuella posten, ändrar inte data varken i telefonväxeln eller på LDAP/AD-serversidan',
    'module_open_ldap_ConflictTime' => 'Datum',
    'module_open_ldap_ConflictUserData' => 'Sparad data',
    'module_open_ldap_ConflictSide' => 'Som vägrade',
    'module_open_ldap_ConflictErrorMessages' => 'Orsak till avslag',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'LDAP/AD',
    'module_open_ldap_CONFLICT' => 'konflikt',
    'module_open_ldap_SyncTabHeader' => 'Synkronisering och konflikter',
    'module_open_ldap_TabAttributes' => 'Synkroniseringsfält',
    'module_open_ldap_DeleteAllConflicts' => 'Rensa alla konflikter',
    'module_open_ldap_UpdateAttributesMessage' => 'När data ändras i MikoPBX kommer följande att uppdateras i domänen: internnummer, mobilnummer, e-post, avatar, SIP-lösenord',
    'module_open_ldap_UserPasswordAttribute' => 'SIP-lösenord',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UserName' => 'Användarnamn',
    'module_open_ldap_UserNumber' => 'Anknytningsnummer',
    'module_open_ldap_findExtension' => 'Hitta i listan över användare',
    'module_open_ldap_DeletedUsersHeader' => 'Anställda inaktiverade i LDAP/AD',
    'module_open_ldap_DeletedUsersEmpty' => 'Inga funktionshindrade anställda',
    'module_open_ldap_UserEmail' => 'E-post',
];
