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
    'repModuleOpenLdapSync' => '[Open] Синхронізація з LDAP/AD - %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] Синхронізація з LDAP/AD',
    'BreadcrumbModuleOpenLdapSync' => '[Open] Синхронізація з LDAP/AD',
    'SubHeaderModuleOpenLdapSync' => 'Модуль дозволяє завантажувати користувачів із домену',
    'module_open_ldap_LdapServerConnectionHeader' => 'Параметри підключення до контролера домену',
    'module_open_ldap_AddServer' => 'Додати сервер',
    'module_open_ldap_AddServerShort' => 'Додати',
    'module_open_ldap_NoAnyServers' => 'Немає налаштованих серверів',
    'module_open_ldap_TableColumnServerName' => 'Адреса сервера',
    'module_open_ldap_OrganizationalUnit' => 'Підрозділ',
    'module_open_ldap_BaseDN' => 'Корінь домену',
    'module_open_ldap_ldapType' => 'Тип сервера',
    'module_open_ldap_LdapServerName' => 'Адреса контролера домену',
    'module_open_ldap_LdapServerPort' => 'Порт',
    'module_open_ldap_LdapAdminLogin' => 'Ім\'я користувача та пароль із правами на читання та запис у домені',
    'module_open_ldap_LdapBaseDN' => 'Корінь домену',
    'module_open_ldap_LdapPassword' => 'Пароль',
    'module_open_ldap_LdapAttributesHeader' => 'Атрибути в домені для порівняння з даними в MikoPBX',
    'module_open_ldap_UserExtensionAttribute' => 'Внутрішній номер користувача',
    'module_open_ldap_UserMobileAttribute' => 'Мобільний телефон',
    'module_open_ldap_UserEmailAttribute' => 'Адреса електронної пошти',
    'module_open_ldap_UserNameAttribute' => 'Ім\'я та прізвище користувача',
    'module_open_ldap_UserAccountControl' => 'Атрибут, де зберігається статус блокування користувача',
    'module_open_ldap_UserAvatarAttribute' => 'Атрибут із фотографією',
    'module_open_ldap_UpdateAttributes' => 'Оновлювати дані в домені при зміні їх у MikoPBX (потрібні права на запис)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Підрозділ',
    'module_open_ldap_LdapUserFilter' => 'Додатковий фільтр користувачів',
    'module_open_ldap_LdapCheckGetListHeader' => 'Тест отримання списку користувачів LDAP',
    'module_open_ldap_LdapCheckGetUsersList' => 'Використовуючи вказані параметри доступу та фільтри, виконаємо запит до LDAP/AD і отримаємо порцію з 20 користувачів для синхронізації',
    'module_open_ldap_LdapGetUsersButton' => 'Виконати запит',
    'module_open_ldap_user_not_found' => 'Користувач не має доступу до домену або вказано неправильні параметри',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'Не заповнено адресу контролера домену',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'Не заповнено порт контролера домену',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'Не заповнено логін для користувача домену',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'Не заповнено пароль для користувача домену',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'Не заповнено корінь домену',
    'module_open_ldap_LdapManualSyncHeader' => 'Ручна синхронізація',
    'module_open_ldap_LdapManualSyncManual' => 'При натисканні на кнопку буде виконано синхронізацію порції з 20 користувачів між вказаним контролером домену та MikoPBX',
    'module_open_ldap_LdapManualSyncButton' => 'Синхронізувати дані',
    'module_open_ldap_usersSyncResult' => 'Статус',
    'module_open_ldap_userHadChangesOnTheSide' => 'Оновлено',
    'module_open_ldap_OnPBXSide' => 'всередині MikoPBX',
    'module_open_ldap_OnDomainSide' => 'у домені',
    'module_open_ldap_SKIPPED' => 'пропущений',
    'module_open_ldap_UPDATED' => 'оброблений',
    'module_open_ldap_EnableAutoSync' => 'Включити синхронізацію за розкладом',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'Не заповнено атрибут з ім\'ям користувача в домені',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Не заповнено атрибут із мобільним телефоном користувача в домені',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'Не заповнено атрибут із внутрішнім номером телефону користувача в домені',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'Не заповнено атрибут з електронною поштою користувача у домені',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'Не заповнено атрибут з атрибутом активності користувача в домені',
    'module_open_ldap_TableColumnAutoSync' => 'Автосинхронізація',
    'module_open_ldap_ConflictsTabHeader' => 'Конфлікти синхронізації',
    'module_open_ldap_NoAnyConflicts' => 'Проблем не виявлено',
    'module_open_ldap_deleteCurrentConflict' => 'Видалити поточний запис, що не змінює даних ні в PBX ні на стороні LDAP/AD сервера',
    'module_open_ldap_ConflictTime' => 'Дата',
    'module_open_ldap_ConflictUserData' => 'Дані, що зберігаються',
    'module_open_ldap_ConflictSide' => 'Хто відмовив',
    'module_open_ldap_ConflictErrorMessages' => 'Причина відмови',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'PBX',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'LDAP/AD',
    'module_open_ldap_CONFLICT' => 'конфлікт',
    'module_open_ldap_SyncTabHeader' => 'Синхронізація та конфлікти',
    'module_open_ldap_TabAttributes' => 'Поля синхронізації',
    'module_open_ldap_DeleteAllConflicts' => 'Очистити всі конфлікти',
    'module_open_ldap_UpdateAttributesMessage' => 'При зміні даних у MikoPBX в домені оновлюватимуться: внутрішній номер, мобільний номер, email, аватар, пароль SIP',
    'module_open_ldap_UserPasswordAttribute' => 'Пароль SIP',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UserName' => 'Ім\'я користувача',
    'module_open_ldap_UserNumber' => 'Внутрішній номер',
    'module_open_ldap_findExtension' => 'Знайти у списку користувачів',
    'module_open_ldap_DeletedUsersHeader' => 'Відключені в LDAP/AD співробітники',
    'module_open_ldap_DeletedUsersEmpty' => 'Немає відключених співробітників',
    'module_open_ldap_UserEmail' => 'Email',
];
