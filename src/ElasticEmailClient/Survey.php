<?php
namespace ElasticEmailClient;

/**
 * Methods to organize and get results of your surveys
 */
class Survey
{
    /**
     * Adds a new survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ApiTypes\Survey $survey Json representation of a survey
     * @return ApiTypes\Survey
     */
    public function Add($survey) {
        return ApiClient::Request('survey/add', array(
            'survey' => $survey
        ));
    }

    /**
     * Deletes the survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     */
    public function EEDelete($publicSurveyID) {
        return ApiClient::Request('survey/delete', array(
            'publicSurveyID' => $publicSurveyID
        ));
    }

    /**
     * Export given survey's data to provided format
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     * @param string $fileName Name of your file.
     * @param ApiTypes\ExportFileFormats $fileFormat Format of the exported file
     * @param ApiTypes\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @return ApiTypes\ExportLink
     */
    public function Export($publicSurveyID, $fileName, $fileFormat = ApiTypes\ExportFileFormats::Csv, $compressionFormat = ApiTypes\CompressionFormat::None) {
        return ApiClient::Request('survey/export', array(
            'publicSurveyID' => $publicSurveyID,
            'fileName' => $fileName,
            'fileFormat' => $fileFormat,
            'compressionFormat' => $compressionFormat
        ));
    }

    /**
     * Shows all your existing surveys
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<ApiTypes\Survey>
     */
    public function EEList() {
        return ApiClient::Request('survey/list');
    }

    /**
     * Get list of personal answers for the specific survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     * @return Array<ApiTypes\SurveyResultInfo>
     */
    public function LoadResponseList($publicSurveyID) {
        return ApiClient::Request('survey/loadresponselist', array(
            'publicSurveyID' => $publicSurveyID
        ));
    }

    /**
     * Get general results of the specific survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     * @return ApiTypes\SurveyResultsSummaryInfo
     */
    public function LoadResults($publicSurveyID) {
        return ApiClient::Request('survey/loadresults', array(
            'publicSurveyID' => $publicSurveyID
        ));
    }

    /**
     * Update the survey information
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ApiTypes\Survey $survey Json representation of a survey
     * @return ApiTypes\Survey
     */
    public function Update($survey) {
        return ApiClient::Request('survey/update', array(
            'survey' => $survey
        ));
    }

}