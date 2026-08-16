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
    'repModuleOpenLdapSync' => '[Open] Synchronizace s LDAP/AD - %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] Synchronizace s LDAP/AD',
    'BreadcrumbModuleOpenLdapSync' => '[Open] Synchronizace s LDAP/AD',
    'SubHeaderModuleOpenLdapSync' => 'Modul umožňuje načíst uživatele z domény',
    'module_open_ldap_LdapServerConnectionHeader' => 'Nastavení připojení řadiče domény',
    'module_open_ldap_AddServer' => 'Přidat server',
    'module_open_ldap_AddServerShort' => 'Přidat',
    'module_open_ldap_NoAnyServers' => 'Nejsou nakonfigurovány žádné servery',
    'module_open_ldap_TableColumnServerName' => 'Adresa serveru',
    'module_open_ldap_OrganizationalUnit' => 'Pododdělení',
    'module_open_ldap_BaseDN' => 'Kořen domény',
    'module_open_ldap_ldapType' => 'Typ serveru',
    'module_open_ldap_LdapServerName' => 'Adresa řadiče domény',
    'module_open_ldap_LdapServerPort' => 'Přístav',
    'module_open_ldap_LdapAdminLogin' => 'Uživatelské jméno a heslo s přístupem pro čtení/zápis do domény',
    'module_open_ldap_LdapBaseDN' => 'Kořen domény',
    'module_open_ldap_LdapPassword' => 'Heslo',
    'module_open_ldap_LdapAttributesHeader' => 'Atributy v doméně pro párování s daty v MikoPBX',
    'module_open_ldap_UserExtensionAttribute' => 'Interní číslo uživatele',
    'module_open_ldap_UserMobileAttribute' => 'Mobilní telefon',
    'module_open_ldap_UserEmailAttribute' => 'E-mailová adresa',
    'module_open_ldap_UserNameAttribute' => 'Jméno a příjmení uživatele',
    'module_open_ldap_UserAccountControl' => 'Atribut, kde je uložen stav blokování uživatele',
    'module_open_ldap_UserAvatarAttribute' => 'Atribut s fotografií',
    'module_open_ldap_UpdateAttributes' => 'Aktualizace dat v doméně při její změně v MikoPBX (vyžaduje se oprávnění k zápisu)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Pododdělení',
    'module_open_ldap_LdapUserFilter' => 'Další uživatelský filtr',
    'module_open_ldap_LdapCheckGetListHeader' => 'Otestujte a získejte seznam uživatelů LDAP',
    'module_open_ldap_LdapCheckGetUsersList' => 'Pomocí zadaných přístupových parametrů a filtrů provedeme požadavek na LDAP/AD a obdržíme část 20 uživatelů k synchronizaci',
    'module_open_ldap_LdapGetUsersButton' => 'Spustit požadavek',
    'module_open_ldap_user_not_found' => 'Uživatel nemá přístup k doméně nebo jsou zadané parametry nesprávné',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'Adresa řadiče domény není vyplněna',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'Port řadiče domény není obsazen',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'Přihlašovací jméno pro uživatele domény není vyplněno',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'Není vyplněno heslo pro uživatele domény',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'Kořen domény není vyplněn',
    'module_open_ldap_LdapManualSyncHeader' => 'Ruční synchronizace',
    'module_open_ldap_LdapManualSyncManual' => 'Po kliknutí na tlačítko bude část 20 uživatelů synchronizována mezi určeným doménovým řadičem a MikoPBX',
    'module_open_ldap_LdapManualSyncButton' => 'Synchronizujte data',
    'module_open_ldap_usersSyncResult' => 'Postavení',
    'module_open_ldap_userHadChangesOnTheSide' => 'Aktualizováno',
    'module_open_ldap_OnPBXSide' => 'uvnitř MikoPBX',
    'module_open_ldap_OnDomainSide' => 'v doméně',
    'module_open_ldap_SKIPPED' => 'přeskočeno',
    'module_open_ldap_UPDATED' => 'zpracováno',
    'module_open_ldap_EnableAutoSync' => 'Povolit plánovanou synchronizaci',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'Atribut s uživatelským jménem v doméně není vyplněn',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Atribut s mobilním telefonem uživatele v doméně není vyplněn',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'Atribut s interním telefonním číslem uživatele v doméně není vyplněn',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'Atribut s e-mailem uživatele v doméně není vyplněn',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'Atribut s atributem aktivity uživatele v doméně není vyplněn',
    'module_open_ldap_TableColumnAutoSync' => 'Automatická synchronizace',
    'module_open_ldap_NoAnyConflicts' => 'Nebyly nalezeny žádné problémy',
    'module_open_ldap_ConflictsTabHeader' => 'Synchronizační konflikty',
    'module_open_ldap_deleteCurrentConflict' => 'Smazat aktuální záznam, nezmění data ani v ústředně ani na straně LDAP/AD serveru',
    'module_open_ldap_ConflictTime' => 'Datum',
    'module_open_ldap_ConflictUserData' => 'Uložená data',
    'module_open_ldap_ConflictSide' => 'Kdo odmítl',
    'module_open_ldap_ConflictErrorMessages' => 'Důvod odmítnutí',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'PBX',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'LDAP/AD',
    'module_open_ldap_CONFLICT' => 'konflikt',
    'module_open_ldap_SyncTabHeader' => 'Synchronizace a konflikty',
    'module_open_ldap_TabAttributes' => 'Synchronizační pole',
    'module_open_ldap_DeleteAllConflicts' => 'Vymažte všechny konflikty',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UpdateAttributesMessage' => 'Při změně dat v MikoPBX budou v doméně aktualizovány: interní číslo, mobilní číslo, email, avatar, SIP heslo',
    'module_open_ldap_UserPasswordAttribute' => 'SIP heslo',
    'module_open_ldap_UserName' => 'Uživatelské jméno',
    'module_open_ldap_UserNumber' => 'Číslo pobočky',
    'module_open_ldap_findExtension' => 'Najděte v seznamu uživatelů',
    'module_open_ldap_DeletedUsersHeader' => 'Zaměstnanci zakázaní v LDAP/AD',
    'module_open_ldap_DeletedUsersEmpty' => 'Žádní zaměstnanci se zdravotním postižením',
    'module_open_ldap_UserEmail' => 'E-mail',
];
