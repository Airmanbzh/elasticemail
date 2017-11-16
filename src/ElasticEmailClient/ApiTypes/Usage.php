<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Account usage
 */
class Usage
{
    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * True, if this account is a sub-account. Otherwise, false
     */
    public /*bool*/ $IsSubAccount;

    /**
     *
     */
    public /*Array<ApiTypes\UsageData>*/ $List;

}