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
    'repModuleOpenLdapSync' => '[Open] Synkronointi LDAP/AD:n kanssa - %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] Synkronointi LDAP/AD:n kanssa',
    'BreadcrumbModuleOpenLdapSync' => '[Open] Synkronointi LDAP/AD:n kanssa',
    'SubHeaderModuleOpenLdapSync' => 'Moduulin avulla voit ladata käyttäjiä verkkotunnuksesta',
    'module_open_ldap_LdapServerConnectionHeader' => 'Yhteysasetukset toimialueen ohjaimeen',
    'module_open_ldap_EnableAutoSync' => 'Ota ajoitettu synkronointi käyttöön',
    'module_open_ldap_AddServer' => 'Lisää palvelin',
    'module_open_ldap_AddServerShort' => 'Lisätä',
    'module_open_ldap_NoAnyServers' => 'Palvelimia ei ole määritetty',
    'module_open_ldap_TableColumnAutoSync' => 'Automaattinen synkronointi',
    'module_open_ldap_TableColumnServerName' => 'Palvelimen osoite',
    'module_open_ldap_OrganizationalUnit' => 'Alajako',
    'module_open_ldap_BaseDN' => 'Verkkotunnuksen juuri',
    'module_open_ldap_ldapType' => 'Palvelimen tyyppi',
    'module_open_ldap_LdapServerName' => 'Verkkotunnuksen ohjaimen osoite',
    'module_open_ldap_LdapServerPort' => 'Portti',
    'module_open_ldap_LdapAdminLogin' => 'Käyttäjätunnus ja salasana luku- ja kirjoitusoikeuksilla verkkotunnuksessa',
    'module_open_ldap_LdapBaseDN' => 'Verkkotunnuksen juuri',
    'module_open_ldap_LdapPassword' => 'Salasana',
    'module_open_ldap_LdapAttributesHeader' => 'Verkkotunnuksen attribuutit MikoPBX:n tietojen täsmäyttämiseksi',
    'module_open_ldap_UserExtensionAttribute' => 'Käyttäjän sisäinen numero',
    'module_open_ldap_UserMobileAttribute' => 'Matkapuhelin',
    'module_open_ldap_UserEmailAttribute' => 'Sähköpostiosoite',
    'module_open_ldap_UserNameAttribute' => 'Käyttäjän etu- ja sukunimi',
    'module_open_ldap_UserAccountControl' => 'Attribuutti, johon käyttäjän estotila tallennetaan',
    'module_open_ldap_UserAvatarAttribute' => 'Ominaisuus valokuvalla',
    'module_open_ldap_UpdateAttributes' => 'Päivitä verkkotunnuksen tiedot, kun niitä muutetaan MikoPBX:ssä (kirjoitusoikeudet vaaditaan)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Alajako',
    'module_open_ldap_LdapUserFilter' => 'Lisäkäyttäjäsuodatin',
    'module_open_ldap_LdapCheckGetListHeader' => 'Testaa LDAP-käyttäjien luettelon saaminen',
    'module_open_ldap_LdapCheckGetUsersList' => 'Määritettyjen pääsyparametrien ja suodattimien avulla suoritamme pyynnön LDAP/AD:lle ja vastaanotamme 20 käyttäjän osan synkronoitavaksi',
    'module_open_ldap_LdapGetUsersButton' => 'Suorita pyyntö',
    'module_open_ldap_user_not_found' => 'Käyttäjällä ei ole pääsyä verkkotunnukseen tai parametrit ovat virheellisiä.',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'Verkkotunnuksen ohjaimen osoite on tyhjä',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'Toimialueen ohjaimen portti ei ole täynnä',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'Verkkotunnuksen käyttäjän kirjautumistunnusta ei ole täytetty',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'Verkkotunnuksen käyttäjän salasanaa ei ole täytetty',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'Verkkotunnuksen juurta ei ole täytetty',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'Attribuuttia verkkotunnuksen käyttäjänimellä ei ole täytetty',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Attribuuttia käyttäjän matkapuhelimella verkkotunnuksessa ei ole täytetty',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'Attribuuttia, jossa on käyttäjän sisäinen puhelinnumero verkkotunnuksessa, ei ole täytetty',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'Attribuuttia, jossa on käyttäjän sähköpostiosoite verkkotunnuksessa, ei ole täytetty',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'Attribuuttia, joka sisältää käyttäjän aktiviteettiattribuutin verkkotunnuksessa, ei ole täytetty',
    'module_open_ldap_LdapManualSyncHeader' => 'Manuaalinen synkronointi',
    'module_open_ldap_LdapManualSyncManual' => 'Kun napsautat painiketta, osa 20 käyttäjästä synkronoidaan määritetyn toimialueen ohjaimen ja MikoPBX:n välillä.',
    'module_open_ldap_LdapManualSyncButton' => 'Synkronoi tiedot',
    'module_open_ldap_usersSyncResult' => 'Status',
    'module_open_ldap_userHadChangesOnTheSide' => 'Päivitetty',
    'module_open_ldap_OnPBXSide' => 'MikoPBX:n sisällä',
    'module_open_ldap_OnDomainSide' => 'verkkotunnuksessa',
    'module_open_ldap_SKIPPED' => 'jäi väliin',
    'module_open_ldap_UPDATED' => 'käsitelty',
    'module_open_ldap_ConflictsTabHeader' => 'Synkronointiristiriidat',
    'module_open_ldap_NoAnyConflicts' => 'Ei ongelmia löytynyt',
    'module_open_ldap_ConflictErrorMessages' => 'Syy kieltäytymiseen',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'PBX',
    'module_open_ldap_deleteCurrentConflict' => 'Poista nykyinen merkintä, ei muuta tietoja PBX:ssä tai LDAP/AD-palvelimen puolella',
    'module_open_ldap_ConflictTime' => 'Päivämäärä',
    'module_open_ldap_ConflictUserData' => 'Tallennetut tiedot',
    'module_open_ldap_ConflictSide' => 'Kuka kieltäytyi',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'LDAP/AD',
    'module_open_ldap_CONFLICT' => 'konflikti',
    'module_open_ldap_SyncTabHeader' => 'Synkronointi ja ristiriidat',
    'module_open_ldap_TabAttributes' => 'Synkronointikentät',
    'module_open_ldap_DeleteAllConflicts' => 'Tyhjennä kaikki ristiriidat',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UpdateAttributesMessage' => 'Kun tiedot muuttuvat MikoPBX:ssä, verkkotunnuksessa päivitetään seuraavat tiedot: sisäinen numero, matkapuhelinnumero, sähköposti, avatar, SIP-salasana',
    'module_open_ldap_UserPasswordAttribute' => 'SIP-salasana',
    'module_open_ldap_UserName' => 'Käyttäjätunnus',
    'module_open_ldap_UserNumber' => 'Laajennusnumero',
    'module_open_ldap_findExtension' => 'Etsi käyttäjäluettelosta',
    'module_open_ldap_DeletedUsersHeader' => 'Työntekijät, joilla ei ole LDAP/AD-palvelua',
    'module_open_ldap_DeletedUsersEmpty' => 'Ei vammaisia työntekijöitä',
    'module_open_ldap_UserEmail' => 'Sähköposti',
];
