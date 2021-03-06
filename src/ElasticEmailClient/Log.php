<?php
namespace ElasticEmailClient;

/**
 * Methods to check logs of your campaigns
 */
class Log
{
    /**
     * Cancels emails that are waiting to be sent.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $channelName Name of selected channel.
     * @param string $transactionID ID number of transaction
     */
    public function CancelInProgress($channelName = null, $transactionID = null) {
        return ApiClient::Request('log/cancelinprogress', array(
            'channelName' => $channelName,
            'transactionID' => $transactionID
        ));
    }

    /**
     * Export email log information to the specified file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<ApiTypes\LogJobStatus> $statuses List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
     * @param ApiTypes\ExportFileFormats $fileFormat Format of the exported file
     * @param ?DateTime $from Start date.
     * @param ?DateTime $to End date.
     * @param int $channelID ID number of selected Channel.
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @param bool $includeEmail True: Search includes emails. Otherwise, false.
     * @param bool $includeSms True: Search includes SMS. Otherwise, false.
     * @param array<ApiTypes\MessageCategory> $messageCategory ID of message category
     * @param ApiTypes\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @param string $email Proper email address.
     * @return ApiTypes\ExportLink
     */
    public function Export($statuses, $fileFormat = ApiTypes\ExportFileFormats::Csv, $from = null, $to = null, $channelID = 0, $limit = 0, $offset = 0, $includeEmail = true, $includeSms = true, array $messageCategory = array(), $compressionFormat = ApiTypes\CompressionFormat::None, $fileName = null, $email = null) {
        return ApiClient::Request('log/export', array(
            'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
            'fileFormat' => $fileFormat,
            'from' => $from,
            'to' => $to,
            'channelID' => $channelID,
            'limit' => $limit,
            'offset' => $offset,
            'includeEmail' => $includeEmail,
            'includeSms' => $includeSms,
            'messageCategory' => (count($messageCategory) === 0) ? null : join(';', $messageCategory),
            'compressionFormat' => $compressionFormat,
            'fileName' => $fileName,
            'email' => $email
        ));
    }

    /**
     * Export detailed link tracking information to the specified file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $channelID ID number of selected Channel.
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ApiTypes\ExportFileFormats $fileFormat Format of the exported file
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @param ApiTypes\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return ApiTypes\ExportLink
     */
    public function ExportLinkTracking($channelID, $from, $to, $fileFormat = ApiTypes\ExportFileFormats::Csv, $limit = 0, $offset = 0, $compressionFormat = ApiTypes\CompressionFormat::None, $fileName = null) {
        return ApiClient::Request('log/exportlinktracking', array(
            'channelID' => $channelID,
            'from' => $from,
            'to' => $to,
            'fileFormat' => $fileFormat,
            'limit' => $limit,
            'offset' => $offset,
            'compressionFormat' => $compressionFormat,
            'fileName' => $fileName
        ));
    }

    /**
     * Track link clicks
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @param string $channelName Name of selected channel.
     * @return ApiTypes\LinkTrackingDetails
     */
    public function LinkTracking($from = null, $to = null, $limit = 0, $offset = 0, $channelName = null) {
        return ApiClient::Request('log/linktracking', array(
            'from' => $from,
            'to' => $to,
            'limit' => $limit,
            'offset' => $offset,
            'channelName' => $channelName
        ));
    }

    /**
     * Returns logs filtered by specified parameters.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<ApiTypes\LogJobStatus> $statuses List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param string $channelName Name of selected channel.
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @param bool $includeEmail True: Search includes emails. Otherwise, false.
     * @param bool $includeSms True: Search includes SMS. Otherwise, false.
     * @param array<ApiTypes\MessageCategory> $messageCategory ID of message category
     * @param string $email Proper email address.
     * @param bool $useStatusChangeDate True, if 'from' and 'to' parameters should resolve to the Status Change date. To resolve to the creation date - false
     * @return ApiTypes\Log
     */
    public function Load($statuses, $from = null, $to = null, $channelName = null, $limit = 0, $offset = 0, $includeEmail = true, $includeSms = true, array $messageCategory = array(), $email = null, $useStatusChangeDate = false) {
        return ApiClient::Request('log/load', array(
            'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
            'from' => $from,
            'to' => $to,
            'channelName' => $channelName,
            'limit' => $limit,
            'offset' => $offset,
            'includeEmail' => $includeEmail,
            'includeSms' => $includeSms,
            'messageCategory' => (count($messageCategory) === 0) ? null : join(';', $messageCategory),
            'email' => $email,
            'useStatusChangeDate' => $useStatusChangeDate
        ));
    }

    /**
     * Returns notification logs filtered by specified parameters.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<ApiTypes\LogJobStatus> $statuses List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @param array<ApiTypes\MessageCategory> $messageCategory ID of message category
     * @param bool $useStatusChangeDate True, if 'from' and 'to' parameters should resolve to the Status Change date. To resolve to the creation date - false
     * @param ApiTypes\NotificationType $notificationType
     * @return ApiTypes\Log
     */
    public function LoadNotifications($statuses, $from = null, $to = null, $limit = 0, $offset = 0, array $messageCategory = array(), $useStatusChangeDate = false, $notificationType = ApiTypes\NotificationType::All) {
        return ApiClient::Request('log/loadnotifications', array(
            'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
            'from' => $from,
            'to' => $to,
            'limit' => $limit,
            'offset' => $offset,
            'messageCategory' => (count($messageCategory) === 0) ? null : join(';', $messageCategory),
            'useStatusChangeDate' => $useStatusChangeDate,
            'notificationType' => $notificationType
        ));
    }

    /**
     * Retry sending of temporarily not delivered message.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $msgID ID number of selected message.
     */
    public function RetryNow($msgID) {
        return ApiClient::Request('log/retrynow', array(
            'msgID' => $msgID
        ));
    }

    /**
     * Loads summary information about activity in chosen date range.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param string $channelName Name of selected channel.
     * @param ApiTypes\IntervalType $interval 'Hourly' for detailed information, 'summary' for daily overview
     * @param string $transactionID ID number of transaction
     * @return ApiTypes\LogSummary
     */
    public function Summary($from, $to, $channelName = null, $interval = ApiTypes\IntervalType::Summary, $transactionID = null) {
        return ApiClient::Request('log/summary', array(
            'from' => $from,
            'to' => $to,
            'channelName' => $channelName,
            'interval' => $interval,
            'transactionID' => $transactionID
        ));
    }

}