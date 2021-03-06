<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Referral details for this account.
 */
class Referral
{
    /**
     * Current amount of dolars you have from referring.
     */
    public /*decimal*/ $CurrentReferralCredit;

    /**
     * Number of active referrals.
     */
    public /*long*/ $CurrentReferralCount;

}