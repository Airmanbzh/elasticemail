<?php
namespace ElasticEmailClient;

/**
 * SMTP and HTTP API channels for grouping email delivery.
 */
class Channel
{
    /**
     * Manually add a channel to your account to group email
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name Descriptive name of the channel
     * @return string
     */
    public function Add($name) {
        return ApiClient::Request('channel/add', array(
            'name' => $name
        ));
    }

    /**
     * Delete the channel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name The name of the channel to delete.
     */
    public function EEDelete($name) {
        return ApiClient::Request('channel/delete', array(
            'name' => $name
        ));
    }

    /**
     * Export channels in CSV file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $channelNames List of channel names used for processing
     * @param ApiTypes\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return File
     */
    public function ExportCsv($channelNames, $compressionFormat = ApiTypes\CompressionFormat::None, $fileName = null) {
        return ApiClient::getFile('channel/exportcsv', array(
            'channelNames' => (count($channelNames) === 0) ? null : join(';', $channelNames),
            'compressionFormat' => $compressionFormat,
            'fileName' => $fileName
        ));
    }

    /**
     * Export channels in JSON file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $channelNames List of channel names used for processing
     * @param ApiTypes\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return File
     */
    public function ExportJson($channelNames, $compressionFormat = ApiTypes\CompressionFormat::None, $fileName = null) {
        return ApiClient::getFile('channel/exportjson', array(
            'channelNames' => (count($channelNames) === 0) ? null : join(';', $channelNames),
            'compressionFormat' => $compressionFormat,
            'fileName' => $fileName
        ));
    }

    /**
     * Export channels in XML file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $channelNames List of channel names used for processing
     * @param ApiTypes\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return File
     */
    public function ExportXml($channelNames, $compressionFormat = ApiTypes\CompressionFormat::None, $fileName = null) {
        return ApiClient::getFile('channel/exportxml', array(
            'channelNames' => (count($channelNames) === 0) ? null : join(';', $channelNames),
            'compressionFormat' => $compressionFormat,
            'fileName' => $fileName
        ));
    }

    /**
     * List all of your channels
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<ApiTypes\Channel>
     */
    public function EEList() {
        return ApiClient::Request('channel/list');
    }

    /**
     * Rename an existing channel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name The name of the channel to update.
     * @param string $newName The new name for the channel.
     * @return string
     */
    public function Update($name, $newName) {
        return ApiClient::Request('channel/update', array(
            'name' => $name,
            'newName' => $newName
        ));
    }

}