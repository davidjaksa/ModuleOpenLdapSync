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
    'repModuleOpenLdapSync' => '[Open] Συγχρονισμός με LDAP/AD - %repesent%',
    'mo_ModuleModuleOpenLdapSync' => '[Open] Συγχρονισμός με LDAP/AD',
    'BreadcrumbModuleOpenLdapSync' => '[Open] Συγχρονισμός με LDAP/AD',
    'SubHeaderModuleOpenLdapSync' => 'Η ενότητα σάς επιτρέπει να φορτώνετε χρήστες από έναν τομέα',
    'module_open_ldap_LdapServerConnectionHeader' => 'Ρυθμίσεις σύνδεσης ελεγκτή τομέα',
    'module_open_ldap_AddServer' => 'Προσθήκη διακομιστή',
    'module_open_ldap_AddServerShort' => 'Προσθήκη',
    'module_open_ldap_NoAnyServers' => 'Δεν έχουν διαμορφωθεί διακομιστές',
    'module_open_ldap_TableColumnServerName' => 'Διεύθυνση διακομιστή',
    'module_open_ldap_OrganizationalUnit' => 'Υποδιαίρεση',
    'module_open_ldap_BaseDN' => 'Ρίζα τομέα',
    'module_open_ldap_ldapType' => 'Τύπος διακομιστή',
    'module_open_ldap_LdapServerName' => 'Διεύθυνση ελεγκτή τομέα',
    'module_open_ldap_LdapServerPort' => 'Λιμάνι',
    'module_open_ldap_LdapAdminLogin' => 'Όνομα χρήστη και κωδικός πρόσβασης με πρόσβαση ανάγνωσης/εγγραφής στον τομέα',
    'module_open_ldap_LdapBaseDN' => 'Ρίζα τομέα',
    'module_open_ldap_LdapPassword' => 'Κωδικός πρόσβασης',
    'module_open_ldap_LdapAttributesHeader' => 'Χαρακτηριστικά στον τομέα για αντιστοίχιση με δεδομένα στο MikoPBX',
    'module_open_ldap_UserExtensionAttribute' => 'Εσωτερικός αριθμός χρήστη',
    'module_open_ldap_UserMobileAttribute' => 'Κινητό τηλέφωνο',
    'module_open_ldap_UserEmailAttribute' => 'Διεύθυνση ηλεκτρονικού ταχυδρομείου',
    'module_open_ldap_UserNameAttribute' => 'Όνομα και επώνυμο χρήστη',
    'module_open_ldap_UserAccountControl' => 'Χαρακτηριστικό όπου αποθηκεύεται η κατάσταση αποκλεισμού του χρήστη',
    'module_open_ldap_UserAvatarAttribute' => 'Χαρακτηριστικό με φωτογραφία',
    'module_open_ldap_UpdateAttributes' => 'Ενημέρωση δεδομένων στον τομέα κατά την αλλαγή τους στο MikoPBX (απαιτούνται δικαιώματα εγγραφής)',
    'module_open_ldap_LdapOrganizationalUnit' => 'Υποδιαίρεση',
    'module_open_ldap_LdapUserFilter' => 'Πρόσθετο φίλτρο χρήστη',
    'module_open_ldap_LdapCheckGetListHeader' => 'Δοκιμή για λήψη λίστας χρηστών LDAP',
    'module_open_ldap_LdapCheckGetUsersList' => 'Χρησιμοποιώντας τις καθορισμένες παραμέτρους πρόσβασης και τα φίλτρα, θα εκτελέσουμε ένα αίτημα στο LDAP/AD και θα λάβουμε ένα τμήμα 20 χρηστών για συγχρονισμό',
    'module_open_ldap_LdapGetUsersButton' => 'Εκτέλεση αιτήματος',
    'module_open_ldap_user_not_found' => 'Ο χρήστης δεν έχει πρόσβαση στον τομέα ή οι καθορισμένες παράμετροι είναι εσφαλμένες',
    'module_open_ldap_ValidateServerNameIsEmpty' => 'Η διεύθυνση ελεγκτή τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_ValidateServerPortIsEmpty' => 'Η θύρα ελεγκτή τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_ValidateAdministrativeLoginIsEmpty' => 'Η σύνδεση για χρήστη τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_ValidateAdministrativePasswordIsEmpty' => 'Ο κωδικός πρόσβασης δεν έχει συμπληρωθεί για τον χρήστη τομέα',
    'module_open_ldap_ValidateBaseDNIsEmpty' => 'Η ρίζα τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_LdapManualSyncHeader' => 'Χειροκίνητος συγχρονισμός',
    'module_open_ldap_LdapManualSyncManual' => 'Όταν κάνετε κλικ στο κουμπί, ένα τμήμα 20 χρηστών θα συγχρονιστεί μεταξύ του καθορισμένου ελεγκτή τομέα και του MikoPBX',
    'module_open_ldap_LdapManualSyncButton' => 'Συγχρονισμός δεδομένων',
    'module_open_ldap_usersSyncResult' => 'Κατάσταση',
    'module_open_ldap_userHadChangesOnTheSide' => 'ΕΠΙΚΑΙΡΟΠΟΙΗΜΕΝΟ',
    'module_open_ldap_OnPBXSide' => 'μέσα στο MikoPBX',
    'module_open_ldap_OnDomainSide' => 'στον τομέα',
    'module_open_ldap_SKIPPED' => 'παρακάμπτεται',
    'module_open_ldap_UPDATED' => 'επεξεργασμένα',
    'module_open_ldap_EnableAutoSync' => 'Ενεργοποίηση προγραμματισμένου συγχρονισμού',
    'module_open_ldap_ValidateUserNameAttributeIsEmpty' => 'Το χαρακτηριστικό με το όνομα χρήστη στον τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_ValidateUserMobileAttributeIsEmpty' => 'Το χαρακτηριστικό με το κινητό τηλέφωνο του χρήστη στον τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_ValidateUserExtensionAttributeIsEmpty' => 'Το χαρακτηριστικό με τον εσωτερικό αριθμό τηλεφώνου του χρήστη στον τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_ValidateUserEmailAttributeIsEmpty' => 'Το χαρακτηριστικό με το e-mail του χρήστη στον τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_ValidateUserAccountControlIsEmpty' => 'Το χαρακτηριστικό με το χαρακτηριστικό της δραστηριότητας χρήστη στον τομέα δεν έχει συμπληρωθεί',
    'module_open_ldap_TableColumnAutoSync' => 'Αυτόματος συγχρονισμός',
    'module_open_ldap_ConflictsTabHeader' => 'Συγκρούσεις συγχρονισμού',
    'module_open_ldap_NoAnyConflicts' => 'Δεν βρέθηκαν προβλήματα',
    'module_open_ldap_deleteCurrentConflict' => 'Διαγράψτε την τρέχουσα καταχώρηση, δεν αλλάζει τα δεδομένα ούτε στο PBX ούτε στην πλευρά του διακομιστή LDAP/AD',
    'module_open_ldap_ConflictTime' => 'Ημερομηνία',
    'module_open_ldap_ConflictUserData' => 'Αποθηκευμένα δεδομένα',
    'module_open_ldap_ConflictSide' => 'Ο οποίος αρνήθηκε',
    'module_open_ldap_ConflictErrorMessages' => 'Λόγος άρνησης',
    'module_open_ldap_PBX_UPDATE_CONFLICT' => 'PBX',
    'module_open_ldap_LDAP_UPDATE_CONFLICT' => 'ΛΔΑΠ/ΑΔ',
    'module_open_ldap_CONFLICT' => 'σύγκρουση',
    'module_open_ldap_SyncTabHeader' => 'Συγχρονισμός και συγκρούσεις',
    'module_open_ldap_TabAttributes' => 'Πεδία συγχρονισμού',
    'module_open_ldap_DeleteAllConflicts' => 'Εκκαθάριση όλων των διενέξεων',
    'module_open_ldap_UserPasswordAttribute' => 'Κωδικός πρόσβασης SIP',
    'module_open_ldap_UseTLS' => 'TLS/SSL',
    'module_open_ldap_UpdateAttributesMessage' => 'Όταν αλλάξουν τα δεδομένα στο MikoPBX, τα ακόλουθα θα ενημερωθούν στον τομέα: εσωτερικός αριθμός, αριθμός κινητού τηλεφώνου, email, avatar, κωδικός πρόσβασης SIP',
    'module_open_ldap_UserName' => 'Όνομα χρήστη',
    'module_open_ldap_UserNumber' => 'Αριθμός επέκτασης',
    'module_open_ldap_findExtension' => 'Βρείτε στη λίστα των χρηστών',
    'module_open_ldap_DeletedUsersHeader' => 'Εργαζόμενοι με αναπηρία στο LDAP/AD',
    'module_open_ldap_DeletedUsersEmpty' => 'Δεν επιτρέπονται εργαζόμενοι με αναπηρία',
    'module_open_ldap_UserEmail' => 'E-mail',
];
