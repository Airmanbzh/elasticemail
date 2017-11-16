<?php
namespace ElasticEmailClient;

/**
 * Managing attachments uploaded to your account.
 */
class Attachment
{
    /**
     * Permanently deletes attachment file from your account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param long $attachmentID ID number of your attachment.
     */
    public function EEDelete($attachmentID) {
        return ApiClient::Request('attachment/delete', array(
            'attachmentID' => $attachmentID
        ));
    }

    /**
     * Gets address of chosen Attachment
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param long $attachmentID ID number of your attachment.
     * @return File
     */
    public function Get($attachmentID) {
        return ApiClient::getFile('attachment/get', array(
            'attachmentID' => $attachmentID
        ));
    }

    /**
     * Lists your available Attachments in the given email
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $msgID ID number of selected message.
     * @return Array<ApiTypes\Attachment>
     */
    public function EEList($msgID) {
        return ApiClient::Request('attachment/list', array(
            'msgID' => $msgID
        ));
    }

    /**
     * Lists all your available attachments
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<ApiTypes\Attachment>
     */
    public function ListAll() {
        return ApiClient::Request('attachment/listall');
    }

    /**
     * Permanently removes attachment file from your account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $fileName Name of your file.
     */
    public function Remove($fileName) {
        return ApiClient::Request('attachment/remove', array(
            'fileName' => $fileName
        ));
    }

    /**
     * Uploads selected file to the server using http form upload format (MIME multipart/form-data) or PUT method. The attachments expire after 30 days.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param File $attachmentFile Content of your attachment.
     * @return ApiTypes\Attachment
     */
    public function Upload($attachmentFile) {
        return ApiClient::Request('attachment/upload', array(), "POST", $attachmentFile);
    }

}