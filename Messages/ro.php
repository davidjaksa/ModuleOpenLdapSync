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
    'repModuleOpenLdapSync' => '[Open] Sincronizare cu LDAP/AD - %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] Sincronizare cu LDAP/AD',
    'BreadcrumbModuleOpenLdapSync' => '[Open] Sincronizare cu LDAP/AD',
    'SubHeaderModuleOpenLdapSync' => 'Modulul vă permite să încărcați utilizatori dintr-un domeniu',
    'module_open_ldap_LdapServerConnectionHeader' => 'Setări de conectare a controlerului de domeniu',
    'module_open_ldap_AddServer' => 'Adauga server',
    'module_open_ldap_AddServerShort' => 'Adăuga',
    'module_open_ldap_NoAnyServers' => 'Nu au fost configurate servere',
    'module_open_ldap_TableColumnServerName' => 'Adresa serverului',
    'module_open_ldap_OrganizationalUnit' => 'Subdiviziune',
    'module_open_ldap_BaseDN' => 'Rădăcina domeniului',
    'module_open_ldap_ldapType' => 'Tip server',
    'module_open_ldap_LdapServerName' => 'Adresa controlerului de domeniu',
    'module_open_ldap_LdapServerPort' => 'Port',
    'module_open_ldap_LdapAdminLogin' => 'Nume de utilizator și parolă cu acces de citire/scriere la domeniu',
    'module_open_ldap_LdapBaseDN' => 'Rădăcina domeniului',
    'module_open_ldap_LdapPassword' => 'Parola',
    'module_open_ldap_LdapAttributesHeader' => 'Atribute din domeniu pentru potrivirea cu datele din MikoPBX',
    'module_open_ldap_UserExtensionAttribute' => 'Numărul intern al utilizatorului',
    'module_open_ldap_UserMobileAttribute' => 'Telefon mobil',
    'module_open_ldap_UserEmailAttribute' => 'Adresa de e-mail',
    'module_open_ldap_UserNameAttribute' => 'Prenumele și numele utilizatorului',
    'module_open_ldap_UserAccountControl' => 'Atributul în care este stocată starea de blocare a utilizatorului',
    'module_open_ldap_UserAvatarAttribute' => 'Atribut cu fotografie',
    'module_open_ldap_UpdateAttributes' => 'Actualizați datele din domeniu atunci când le modificați în MikoPBX (sunt necesare drepturi de scriere)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Subdiviziune',
    'module_open_ldap_LdapUserFilter' => 'Filtru suplimentar de utilizator',
    'module_open_ldap_LdapCheckGetListHeader' => 'Testați pentru a obține lista de utilizatori LDAP',
    'module_open_ldap_LdapCheckGetUsersList' => 'Folosind parametrii de acces și filtrele specificați, vom executa o solicitare către LDAP/AD și vom primi o porțiune din 20 de utilizatori pentru sincronizare',
    'module_open_ldap_LdapGetUsersButton' => 'Rulați cererea',
    'module_open_ldap_user_not_found' => 'Utilizatorul nu are acces la domeniu sau parametrii specificați sunt incorecți',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'Adresa controlerului de domeniu nu este completată',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'Portul controlerului de domeniu nu este populat',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'Conectarea pentru utilizatorul de domeniu nu este completată',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'Parola nu a fost completată pentru utilizatorul de domeniu',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'Rădăcina domeniului nu este completată',
    'module_open_ldap_LdapManualSyncHeader' => 'Sincronizare manuală',
    'module_open_ldap_LdapManualSyncManual' => 'Când faceți clic pe butonul, o parte din 20 de utilizatori vor fi sincronizate între controlerul de domeniu specificat și MikoPBX',
    'module_open_ldap_LdapManualSyncButton' => 'Sincronizați datele',
    'module_open_ldap_usersSyncResult' => 'stare',
    'module_open_ldap_userHadChangesOnTheSide' => 'Actualizat',
    'module_open_ldap_OnPBXSide' => 'în interiorul MikoPBX',
    'module_open_ldap_OnDomainSide' => 'în domeniu',
    'module_open_ldap_SKIPPED' => 'sarit',
    'module_open_ldap_UPDATED' => 'prelucrate',
    'module_open_ldap_EnableAutoSync' => 'Activați sincronizarea programată',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'Atributul cu numele de utilizator din domeniu nu este completat',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Atributul cu telefonul mobil al utilizatorului din domeniu nu este completat',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'Atributul cu numărul de telefon intern al utilizatorului din domeniu nu este completat',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'Atributul cu e-mailul utilizatorului din domeniu nu este completat',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'Atributul cu atributul activității utilizatorului în domeniu nu este completat',
    'module_open_ldap_TableColumnAutoSync' => 'Auto-sincronizare',
    'module_open_ldap_ConflictTime' => 'Data',
    'module_open_ldap_ConflictsTabHeader' => 'Conflicte de sincronizare',
    'module_open_ldap_NoAnyConflicts' => 'Nu s-au găsit probleme',
    'module_open_ldap_deleteCurrentConflict' => 'Ștergeți intrarea curentă, nu modifică datele nici în PBX, nici pe partea serverului LDAP/AD',
    'module_open_ldap_ConflictUserData' => 'Date salvate',
    'module_open_ldap_ConflictSide' => 'Cine a refuzat',
    'module_open_ldap_ConflictErrorMessages' => 'Motivul refuzului',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'PBX',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'LDAP/AD',
    'module_open_ldap_CONFLICT' => 'conflict',
    'module_open_ldap_SyncTabHeader' => 'Sincronizare și conflicte',
    'module_open_ldap_TabAttributes' => 'Câmpuri de sincronizare',
    'module_open_ldap_DeleteAllConflicts' => 'Ștergeți toate conflictele',
    'module_open_ldap_UserPasswordAttribute' => 'parola SIP',
    'module_open_ldap_UpdateAttributesMessage' => 'Când datele se modifică în MikoPBX, următoarele vor fi actualizate în domeniu: număr intern, număr de mobil, e-mail, avatar, parolă SIP',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UserName' => 'Nume de utilizator',
    'module_open_ldap_UserNumber' => 'Numărul de extensie',
    'module_open_ldap_findExtension' => 'Găsiți în lista de utilizatori',
    'module_open_ldap_DeletedUsersHeader' => 'Angajați cu dizabilități în LDAP/AD',
    'module_open_ldap_DeletedUsersEmpty' => 'Fără angajați cu dizabilități',
    'module_open_ldap_UserEmail' => 'E-mail',
];
