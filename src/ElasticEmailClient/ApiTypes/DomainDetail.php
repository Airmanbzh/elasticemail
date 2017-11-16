<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Domain data, with information about domain records.
 */
class DomainDetail
{
    /**
     * Name of selected domain.
     */
    public /*string*/ $Domain;

    /**
     * True, if domain is used as default. Otherwise, false,
     */
    public /*bool*/ $DefaultDomain;

    /**
     * True, if SPF record is verified
     */
    public /*bool*/ $Spf;

    /**
     * True, if DKIM record is verified
     */
    public /*bool*/ $Dkim;

    /**
     * True, if MX record is verified
     */
    public /*bool*/ $MX;

    /**
     *
     */
    public /*bool*/ $DMARC;

    /**
     * True, if tracking CNAME record is verified
     */
    public /*bool*/ $IsRewriteDomainValid;

    /**
     * True, if verification is available
     */
    public /*bool*/ $Verify;

    /**
     *
     */
    public /*ApiTypes\TrackingType*/ $Type;

}