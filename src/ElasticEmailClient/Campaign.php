<?php
namespace ElasticEmailClient;

/**
 * Sending and monitoring progress of your Campaigns
 */
class Campaign
{
    /**
     * Adds a campaign to the queue for processing based on the configuration
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ApiTypes\Campaign $campaign Json representation of a campaign
     * @return int
     */
    public function Add($campaign) {
        return ApiClient::Request('campaign/add', array(
            'campaign' => $campaign
        ));
    }

    /**
     * Copy selected campaign
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $channelID ID number of selected Channel.
     * @return int
     */
    public function EECopy($channelID) {
        return ApiClient::Request('campaign/copy', array(
            'channelID' => $channelID
        ));
    }

    /**
     * Delete selected campaign
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $channelID ID number of selected Channel.
     */
    public function EEDelete($channelID) {
        return ApiClient::Request('campaign/delete', array(
            'channelID' => $channelID
        ));
    }

    /**
     * Export selected campaigns to chosen file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<int> $channelIDs List of campaign IDs used for processing
     * @param ApiTypes\ExportFileFormats $fileFormat Format of the exported file
     * @param ApiTypes\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return ApiTypes\ExportLink
     */
    public function Export(array $channelIDs = array(), $fileFormat = ApiTypes\ExportFileFormats::Csv, $compressionFormat = ApiTypes\CompressionFormat::None, $fileName = null) {
        return ApiClient::Request('campaign/export', array(
            'channelIDs' => (count($channelIDs) === 0) ? null : join(';', $channelIDs),
            'fileFormat' => $fileFormat,
            'compressionFormat' => $compressionFormat,
            'fileName' => $fileName
        ));
    }

    /**
     * List all of your campaigns
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $search Text fragment used for searching.
     * @param int $offset How many items should be loaded ahead.
     * @param int $limit Maximum of loaded items.
     * @return Array<ApiTypes\CampaignChannel>
     */
    public function EEList($search = null, $offset = 0, $limit = 0) {
        return ApiClient::Request('campaign/list', array(
            'search' => $search,
            'offset' => $offset,
            'limit' => $limit
        ));
    }

    /**
     * Updates a previously added campaign.  Only Active and Paused campaigns can be updated.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ApiTypes\Campaign $campaign Json representation of a campaign
     * @return int
     */
    public function Update($campaign) {
        return ApiClient::Request('campaign/update', array(
            'campaign' => $campaign
        ));
    }

}