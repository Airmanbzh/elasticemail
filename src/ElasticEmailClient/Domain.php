<?php
namespace ElasticEmailClient;

/**
 * Managing sender domains. Creating new entries and validating domain records.
 */
class Domain
{
    /**
     * Add new domain to account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @param ApiTypes\TrackingType $trackingType
     */
    public function Add($domain, $trackingType = ApiTypes\TrackingType::Http) {
        return ApiClient::Request('domain/add', array(
            'domain' => $domain,
            'trackingType' => $trackingType
        ));
    }

    /**
     * Deletes configured domain from account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     */
    public function EEDelete($domain) {
        return ApiClient::Request('domain/delete', array(
            'domain' => $domain
        ));
    }

    /**
     * Lists all domains configured for this account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<ApiTypes\DomainDetail>
     */
    public function EEList() {
        return ApiClient::Request('domain/list');
    }

    /**
     * Verification of email addres set for domain.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Default email sender, example: mail@yourdomain.com
     */
    public function SetDefault($domain) {
        return ApiClient::Request('domain/setdefault', array(
            'domain' => $domain
        ));
    }

    /**
     * Verification of DKIM record for domain
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     */
    public function VerifyDkim($domain) {
        return ApiClient::Request('domain/verifydkim', array(
            'domain' => $domain
        ));
    }

    /**
     * Verification of MX record for domain
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     */
    public function VerifyMX($domain) {
        return ApiClient::Request('domain/verifymx', array(
            'domain' => $domain
        ));
    }

    /**
     * Verification of SPF record for domain
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     */
    public function VerifySpf($domain) {
        return ApiClient::Request('domain/verifyspf', array(
            'domain' => $domain
        ));
    }

    /**
     * Verification of tracking CNAME record for domain
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @param ApiTypes\TrackingType $trackingType
     */
    public function VerifyTracking($domain, $trackingType = ApiTypes\TrackingType::Http) {
        return ApiClient::Request('domain/verifytracking', array(
            'domain' => $domain,
            'trackingType' => $trackingType
        ));
    }

}