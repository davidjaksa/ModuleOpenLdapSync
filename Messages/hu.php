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
    'repModuleOpenLdapSync' => '[Open] Szinkronizálás LDAP/AD-vel – %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] Szinkronizálás LDAP/AD-vel',
    'BreadcrumbModuleOpenLdapSync' => '[Open] Szinkronizálás LDAP/AD-vel',
    'SubHeaderModuleOpenLdapSync' => 'A modul lehetővé teszi felhasználók betöltését egy tartományból',
    'module_open_ldap_LdapServerConnectionHeader' => 'Csatlakozási beállítások egy tartományvezérlőhöz',
    'module_open_ldap_EnableAutoSync' => 'Ütemezett szinkronizálás engedélyezése',
    'module_open_ldap_AddServer' => 'Szerver hozzáadása',
    'module_open_ldap_AddServerShort' => 'Hozzáadás',
    'module_open_ldap_NoAnyServers' => 'Nincsenek konfigurálva szerverek',
    'module_open_ldap_TableColumnAutoSync' => 'Automatikus szinkronizáció',
    'module_open_ldap_TableColumnServerName' => 'Szerver címe',
    'module_open_ldap_OrganizationalUnit' => 'Felosztás',
    'module_open_ldap_BaseDN' => 'Domain gyökér',
    'module_open_ldap_ldapType' => 'Szerver típusa',
    'module_open_ldap_LdapServerName' => 'A tartományvezérlő címe',
    'module_open_ldap_LdapServerPort' => 'Kikötő',
    'module_open_ldap_LdapAdminLogin' => 'Felhasználónév és jelszó írási és olvasási jogosultsággal a tartományban',
    'module_open_ldap_LdapBaseDN' => 'Domain gyökér',
    'module_open_ldap_LdapPassword' => 'Jelszó',
    'module_open_ldap_LdapAttributesHeader' => 'Attribútumok a tartományban a MikoPBX-ben lévő adatokkal való egyeztetéshez',
    'module_open_ldap_UserExtensionAttribute' => 'Felhasználó belső száma',
    'module_open_ldap_UserMobileAttribute' => 'Mobiltelefon',
    'module_open_ldap_UserEmailAttribute' => 'E-mail cím',
    'module_open_ldap_UserNameAttribute' => 'Felhasználó kereszt- és vezetékneve',
    'module_open_ldap_UserAccountControl' => 'Az attribútum, ahol a felhasználó blokkolási állapota tárolva van',
    'module_open_ldap_UserAvatarAttribute' => 'Attribútum fotóval',
    'module_open_ldap_UpdateAttributes' => 'A MikoPBX-ben történő módosításkor frissítse a domain adatait (írási jogosultság szükséges)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Felosztás',
    'module_open_ldap_LdapUserFilter' => 'További felhasználói szűrő',
    'module_open_ldap_LdapCheckGetListHeader' => 'Teszt az LDAP-felhasználók listájának megszerzéséhez',
    'module_open_ldap_LdapCheckGetUsersList' => 'A megadott hozzáférési paraméterek és szűrők használatával végrehajtunk egy kérést az LDAP/AD felé, és 20 felhasználóból álló részt kapunk szinkronizálásra.',
    'module_open_ldap_LdapGetUsersButton' => 'A kérés végrehajtása',
    'module_open_ldap_user_not_found' => 'A felhasználó nem fér hozzá a tartományhoz, vagy a paraméterek helytelenek.',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'A tartományvezérlő címe üres',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'A tartományvezérlő portja nincs tele',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'A domain felhasználó bejelentkezési azonosítója nincs kitöltve',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'A domain felhasználó jelszava nincs kitöltve',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'A domain gyökér nincs kitöltve',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'A domainben lévő felhasználónévvel rendelkező attribútum nincs kitöltve',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Az attribútum a felhasználó mobiltelefonjával a domainben nincs kitöltve',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'A felhasználó belső telefonszámát tartalmazó attribútum a domainben nincs kitöltve',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'A domainben lévő felhasználó e-mail-címét tartalmazó attribútum nincs kitöltve',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'A felhasználói tevékenység attribútuma a tartományban nincs kitöltve',
    'module_open_ldap_LdapManualSyncHeader' => 'Kézi szinkronizálás',
    'module_open_ldap_LdapManualSyncManual' => 'Ha rákattint a gombra, 20 felhasználó egy része szinkronizálva lesz a megadott tartományvezérlő és a MikoPBX között.',
    'module_open_ldap_LdapManualSyncButton' => 'Adatok szinkronizálása',
    'module_open_ldap_usersSyncResult' => 'Állapot',
    'module_open_ldap_userHadChangesOnTheSide' => 'Frissítve',
    'module_open_ldap_OnPBXSide' => 'MikoPBX-en belül',
    'module_open_ldap_OnDomainSide' => 'a domainben',
    'module_open_ldap_SKIPPED' => 'nem fogadott',
    'module_open_ldap_UPDATED' => 'feldolgozott',
    'module_open_ldap_ConflictSide' => 'Aki megtagadta',
    'module_open_ldap_ConflictsTabHeader' => 'Szinkronizálási ütközések',
    'module_open_ldap_NoAnyConflicts' => 'Nem található probléma',
    'module_open_ldap_deleteCurrentConflict' => 'Törölje az aktuális bejegyzést, nem módosítja az adatokat sem az alközpontban, sem az LDAP/AD szerver oldalon',
    'module_open_ldap_ConflictTime' => 'Dátum',
    'module_open_ldap_ConflictUserData' => 'Mentett adatok',
    'module_open_ldap_ConflictErrorMessages' => 'Az elutasítás oka',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'PBX',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'LDAP/AD',
    'module_open_ldap_CONFLICT' => 'konfliktus',
    'module_open_ldap_SyncTabHeader' => 'Szinkronizálás és konfliktusok',
    'module_open_ldap_TabAttributes' => 'Szinkronizálási mezők',
    'module_open_ldap_DeleteAllConflicts' => 'Törölje az összes ütközést',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UpdateAttributesMessage' => 'Amikor a MikoPBX-ben változnak az adatok, a következők frissülnek a domainben: belső szám, mobilszám, email, avatar, SIP jelszó',
    'module_open_ldap_UserPasswordAttribute' => 'SIP jelszó',
    'module_open_ldap_UserName' => 'Felhasználónév',
    'module_open_ldap_UserNumber' => 'Kiterjesztés száma',
    'module_open_ldap_findExtension' => 'Keresse meg a felhasználók listájában',
    'module_open_ldap_DeletedUsersHeader' => 'LDAP/AD-ben letiltott alkalmazottak',
    'module_open_ldap_DeletedUsersEmpty' => 'Nincsenek fogyatékkal élő alkalmazottak',
    'module_open_ldap_UserEmail' => 'Email',
];
