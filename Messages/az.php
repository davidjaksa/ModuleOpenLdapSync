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
    'repModuleOpenLdapSync' => '[Open] LDAP/AD ilə sinxronizasiya - %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] LDAP/AD ilə sinxronizasiya',
    'BreadcrumbModuleOpenLdapSync' => '[Open] LDAP/AD ilə sinxronizasiya',
    'SubHeaderModuleOpenLdapSync' => 'Modul istifadəçiləri bir domendən yükləməyə imkan verir',
    'module_open_ldap_LdapServerConnectionHeader' => 'Domen nəzarətçisi əlaqə parametrləri',
    'module_open_ldap_AddServer' => 'Server əlavə edin',
    'module_open_ldap_AddServerShort' => 'əlavə et',
    'module_open_ldap_NoAnyServers' => 'Heç bir server konfiqurasiya edilməmişdir',
    'module_open_ldap_TableColumnServerName' => 'Server ünvanı',
    'module_open_ldap_OrganizationalUnit' => 'Bölmə',
    'module_open_ldap_BaseDN' => 'Domen kökü',
    'module_open_ldap_ldapType' => 'Server növü',
    'module_open_ldap_LdapServerName' => 'Domen nəzarətçi ünvanı',
    'module_open_ldap_LdapServerPort' => 'Liman',
    'module_open_ldap_LdapAdminLogin' => 'Domenə oxumaq/yazmaq imkanı olan istifadəçi adı və parol',
    'module_open_ldap_LdapBaseDN' => 'Domen kökü',
    'module_open_ldap_LdapPassword' => 'parol',
    'module_open_ldap_LdapAttributesHeader' => 'MikoPBX-də verilənlərlə uyğunluq üçün domendəki atributlar',
    'module_open_ldap_UserExtensionAttribute' => 'İstifadəçinin daxili nömrəsi',
    'module_open_ldap_UserMobileAttribute' => 'Mobil telefon',
    'module_open_ldap_UserEmailAttribute' => 'E-poçt ünvanı',
    'module_open_ldap_UserNameAttribute' => 'İstifadəçinin adı və soyadı',
    'module_open_ldap_UserAccountControl' => 'İstifadəçinin bloklama statusunun saxlandığı atribut',
    'module_open_ldap_UserAvatarAttribute' => 'Foto ilə atribut',
    'module_open_ldap_UpdateAttributes' => 'Domendəki məlumatları MikoPBX-də dəyişdirərkən yeniləyin (yazma hüquqları tələb olunur)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Bölmə',
    'module_open_ldap_LdapUserFilter' => 'Əlavə istifadəçi filtri',
    'module_open_ldap_LdapCheckGetListHeader' => 'LDAP istifadəçilərinin siyahısını əldə etmək üçün test edin',
    'module_open_ldap_LdapCheckGetUsersList' => 'Müəyyən edilmiş giriş parametrləri və filtrlərindən istifadə edərək, biz LDAP/AD-a sorğu yerinə yetirəcəyik və sinxronizasiya üçün 20 istifadəçinin bir hissəsini alacağıq',
    'module_open_ldap_LdapGetUsersButton' => 'Sorğunu icra edin',
    'module_open_ldap_user_not_found' => 'İstifadəçinin domenə girişi yoxdur və ya göstərilən parametrlər yanlışdır',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'Domen nəzarətçi ünvanı doldurulmayıb',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'Domen nəzarətçi portu doldurulmayıb',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'Domen istifadəçisi üçün giriş doldurulmayıb',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'Domen istifadəçisi üçün parol doldurulmayıb',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'Domen kökü doldurulmayıb',
    'module_open_ldap_LdapManualSyncHeader' => 'Əl ilə sinxronizasiya',
    'module_open_ldap_LdapManualSyncManual' => 'Düyməni kliklədiyiniz zaman 20 istifadəçinin bir hissəsi göstərilən domen nəzarətçisi və MikoPBX arasında sinxronlaşdırılacaq',
    'module_open_ldap_LdapManualSyncButton' => 'Məlumatları sinxronlaşdırın',
    'module_open_ldap_usersSyncResult' => 'Vəziyyət',
    'module_open_ldap_userHadChangesOnTheSide' => 'Yenilənib',
    'module_open_ldap_OnPBXSide' => 'MikoPBX daxilində',
    'module_open_ldap_OnDomainSide' => 'domenində',
    'module_open_ldap_SKIPPED' => 'atladı',
    'module_open_ldap_UPDATED' => 'işlənmişdir',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'Domendə istifadəçi fəaliyyətinin atributuna malik atribut doldurulmayıb',
    'module_open_ldap_EnableAutoSync' => 'Planlaşdırılmış sinxronizasiyanı aktivləşdirin',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'Domendə istifadəçi adı olan atribut doldurulmayıb',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Domendə istifadəçinin mobil telefonu ilə atribut doldurulmayıb',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'Domendəki istifadəçinin daxili telefon nömrəsi ilə atribut doldurulmayıb',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'Domendə istifadəçinin e-poçtu olan atribut doldurulmayıb',
    'module_open_ldap_TableColumnAutoSync' => 'Avtomatik sinxronizasiya',
    'module_open_ldap_NoAnyConflicts' => 'Heç bir problem tapılmadı',
    'module_open_ldap_ConflictTime' => 'Tarix',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'ATS',
    'module_open_ldap_ConflictsTabHeader' => 'Sinxronizasiya münaqişələri',
    'module_open_ldap_deleteCurrentConflict' => 'Cari girişi silin, nə PBX-də, nə də LDAP/AD server tərəfində məlumatları dəyişmir',
    'module_open_ldap_ConflictUserData' => 'Saxlanan data',
    'module_open_ldap_ConflictSide' => 'Kim imtina etdi',
    'module_open_ldap_ConflictErrorMessages' => 'İmtina səbəbi',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'LDAP/AD',
    'module_open_ldap_CONFLICT' => 'münaqişə',
    'module_open_ldap_TabAttributes' => 'Sinxronizasiya sahələri',
    'module_open_ldap_DeleteAllConflicts' => 'Bütün münaqişələri təmizləyin',
    'module_open_ldap_SyncTabHeader' => 'Sinxronizasiya və münaqişələr',
    'module_open_ldap_UpdateAttributesMessage' => 'MikoPBX-də məlumat dəyişdikdə, domendə aşağıdakılar yenilənəcək: daxili nömrə, mobil nömrə, e-poçt, avatar, SIP parol',
    'module_open_ldap_UserPasswordAttribute' => 'SIP parol',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UserName' => 'İstifadəçi adı',
    'module_open_ldap_UserNumber' => 'Uzatma nömrəsi',
    'module_open_ldap_findExtension' => 'İstifadəçilər siyahısında tapın',
    'module_open_ldap_DeletedUsersHeader' => 'LDAP/AD-də əlil olan işçilər',
    'module_open_ldap_DeletedUsersEmpty' => 'Əlil işçi yoxdur',
    'module_open_ldap_UserEmail' => 'E-poçt',
];
