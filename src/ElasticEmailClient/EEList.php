<?php
namespace ElasticEmailClient;

/**
 * API methods for managing your Lists
 */
class EEList
{
    /**
     * Create new list, based on filtering rule or list of IDs
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @param bool $createEmptyList True to create an empty list, otherwise false. Ignores rule and emails parameters if provided.
     * @param bool $allowUnsubscribe True: Allow unsubscribing from this list. Otherwise, false
     * @param string $rule Query used for filtering.
     * @param array<string> $emails Comma delimited list of contact emails
     * @param bool $allContacts True: Include every Contact in your Account. Otherwise, false
     * @return int
     */
    public function Add($listName, $createEmptyList = false, $allowUnsubscribe = false, $rule = null, array $emails = array(), $allContacts = false) {
        return ApiClient::Request('list/add', array(
            'listName' => $listName,
            'createEmptyList' => $createEmptyList,
            'allowUnsubscribe' => $allowUnsubscribe,
            'rule' => $rule,
            'emails' => (count($emails) === 0) ? null : join(';', $emails),
            'allContacts' => $allContacts
        ));
    }

    /**
     * Add existing Contacts to chosen list
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @param string $rule Query used for filtering.
     * @param array<string> $emails Comma delimited list of contact emails
     * @param bool $allContacts True: Include every Contact in your Account. Otherwise, false
     */
    public function AddContacts($listName, $rule = null, array $emails = array(), $allContacts = false) {
        return ApiClient::Request('list/addcontacts', array(
            'listName' => $listName,
            'rule' => $rule,
            'emails' => (count($emails) === 0) ? null : join(';', $emails),
            'allContacts' => $allContacts
        ));
    }

    /**
     * Copy your existing List with the option to provide new settings to it. Some fields, when left empty, default to the source list's settings
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $sourceListName The name of the list you want to copy
     * @param string $newlistName Name of your list if you want to change it.
     * @param ?bool $createEmptyList True to create an empty list, otherwise false. Ignores rule and emails parameters if provided.
     * @param ?bool $allowUnsubscribe True: Allow unsubscribing from this list. Otherwise, false
     * @param string $rule Query used for filtering.
     * @return int
     */
    public function EECopy($sourceListName, $newlistName = null, $createEmptyList = null, $allowUnsubscribe = null, $rule = null) {
        return ApiClient::Request('list/copy', array(
            'sourceListName' => $sourceListName,
            'newlistName' => $newlistName,
            'createEmptyList' => $createEmptyList,
            'allowUnsubscribe' => $allowUnsubscribe,
            'rule' => $rule
        ));
    }

    /**
     * Create a new list from the recipients of the given campaign, using the given statuses of Messages
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $campaignID ID of the campaign which recipients you want to copy
     * @param string $listName Name of your list.
     * @param array<ApiTypes\LogJobStatus> $statuses Statuses of a campaign's emails you want to include in the new list (but NOT the contacts' statuses)
     * @return int
     */
    public function CreateFromCampaign($campaignID, $listName, array $statuses = array()) {
        return ApiClient::Request('list/createfromcampaign', array(
            'campaignID' => $campaignID,
            'listName' => $listName,
            'statuses' => (count($statuses) === 0) ? null : join(';', $statuses)
        ));
    }

    /**
     * Create a series of nth selection lists from an existing list or segment
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @param int $numberOfLists The number of evenly distributed lists to create.
     * @param bool $excludeBlocked True if you want to exclude contacts that are currently in a blocked status of either unsubscribe, complaint or bounce. Otherwise, false.
     * @param bool $allowUnsubscribe True: Allow unsubscribing from this list. Otherwise, false
     * @param string $rule Query used for filtering.
     * @param bool $allContacts True: Include every Contact in your Account. Otherwise, false
     */
    public function CreateNthSelectionLists($listName, $numberOfLists, $excludeBlocked = true, $allowUnsubscribe = false, $rule = null, $allContacts = false) {
        return ApiClient::Request('list/createnthselectionlists', array(
            'listName' => $listName,
            'numberOfLists' => $numberOfLists,
            'excludeBlocked' => $excludeBlocked,
            'allowUnsubscribe' => $allowUnsubscribe,
            'rule' => $rule,
            'allContacts' => $allContacts
        ));
    }

    /**
     * Create a new list with randomized contacts from an existing list or segment
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @param int $count Number of items.
     * @param bool $excludeBlocked True if you want to exclude contacts that are currently in a blocked status of either unsubscribe, complaint or bounce. Otherwise, false.
     * @param bool $allowUnsubscribe True: Allow unsubscribing from this list. Otherwise, false
     * @param string $rule Query used for filtering.
     * @param bool $allContacts True: Include every Contact in your Account. Otherwise, false
     * @return int
     */
    public function CreateRandomList($listName, $count, $excludeBlocked = true, $allowUnsubscribe = false, $rule = null, $allContacts = false) {
        return ApiClient::Request('list/createrandomlist', array(
            'listName' => $listName,
            'count' => $count,
            'excludeBlocked' => $excludeBlocked,
            'allowUnsubscribe' => $allowUnsubscribe,
            'rule' => $rule,
            'allContacts' => $allContacts
        ));
    }

    /**
     * Deletes List and removes all the Contacts from it (does not delete Contacts).
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     */
    public function EEDelete($listName) {
        return ApiClient::Request('list/delete', array(
            'listName' => $listName
        ));
    }

    /**
     * Exports all the contacts from the provided list
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @param ApiTypes\ExportFileFormats $fileFormat Format of the exported file
     * @param ApiTypes\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return ApiTypes\ExportLink
     */
    public function Export($listName, $fileFormat = ApiTypes\ExportFileFormats::Csv, $compressionFormat = ApiTypes\CompressionFormat::None, $fileName = null) {
        return ApiClient::Request('list/export', array(
            'listName' => $listName,
            'fileFormat' => $fileFormat,
            'compressionFormat' => $compressionFormat,
            'fileName' => $fileName
        ));
    }

    /**
     * Shows all your existing lists
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @return Array<ApiTypes\List>
     */
    public function EElist($from = null, $to = null) {
        return ApiClient::Request('list/list', array(
            'from' => $from,
            'to' => $to
        ));
    }

    /**
     * Returns detailed information about specific list.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @return ApiTypes\List
     */
    public function Load($listName) {
        return ApiClient::Request('list/load', array(
            'listName' => $listName
        ));
    }

    /**
     * Move selected contacts from one List to another
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $oldListName The name of the list from which the contacts will be copied from
     * @param string $newListName The name of the list to copy the contacts to
     * @param array<string> $emails Comma delimited list of contact emails
     * @param ?bool $moveAll TRUE - moves all contacts; FALSE - moves contacts provided in the 'emails' parameter. This is ignored if the 'statuses' parameter has been provided
     * @param array<ApiTypes\ContactStatus> $statuses List of contact statuses which are eligible to move. This ignores the 'moveAll' parameter
     */
    public function MoveContacts($oldListName, $newListName, array $emails = array(), $moveAll = null, array $statuses = array()) {
        return ApiClient::Request('list/movecontacts', array(
            'oldListName' => $oldListName,
            'newListName' => $newListName,
            'emails' => (count($emails) === 0) ? null : join(';', $emails),
            'moveAll' => $moveAll,
            'statuses' => (count($statuses) === 0) ? null : join(';', $statuses)
        ));
    }

    /**
     * Remove selected Contacts from your list
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @param string $rule Query used for filtering.
     * @param array<string> $emails Comma delimited list of contact emails
     */
    public function RemoveContacts($listName, $rule = null, array $emails = array()) {
        return ApiClient::Request('list/removecontacts', array(
            'listName' => $listName,
            'rule' => $rule,
            'emails' => (count($emails) === 0) ? null : join(';', $emails)
        ));
    }

    /**
     * Update existing list
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @param string $newListName Name of your list if you want to change it.
     * @param bool $allowUnsubscribe True: Allow unsubscribing from this list. Otherwise, false
     */
    public function Update($listName, $newListName = null, $allowUnsubscribe = false) {
        return ApiClient::Request('list/update', array(
            'listName' => $listName,
            'newListName' => $newListName,
            'allowUnsubscribe' => $allowUnsubscribe
        ));
    }

}