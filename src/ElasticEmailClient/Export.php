<?php
namespace ElasticEmailClient;

/**
 *
 */
class Export
{
    /**
     * Check the current status of the export.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicExportID
     * @return ApiTypes\ExportStatus
     */
    public function CheckStatus($publicExportID) {
        return ApiClient::Request('export/checkstatus', array(
            'publicExportID' => $publicExportID
        ));
    }

    /**
     * Summary of export type counts.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return ApiTypes\ExportTypeCounts
     */
    public function CountByType() {
        return ApiClient::Request('export/countbytype');
    }

    /**
     * Delete the specified export.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicExportID
     */
    public function EEDelete($publicExportID) {
        return ApiClient::Request('export/delete', array(
            'publicExportID' => $publicExportID
        ));
    }

    /**
     * Returns a list of all exported data.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @return Array<ApiTypes\Export>
     */
    public function EEList($limit = 0, $offset = 0) {
        return ApiClient::Request('export/list', array(
            'limit' => $limit,
            'offset' => $offset
        ));
    }

}