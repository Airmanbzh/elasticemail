<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Overall log summary information.
 */
class LogSummary
{
    /**
     * Summary of log status, based on specified date range.
     */
    public /*ApiTypes\LogStatusSummary*/ $LogStatusSummary;

    /**
     * Summary of bounced categories, based on specified date range.
     */
    public /*ApiTypes\BouncedCategorySummary*/ $BouncedCategorySummary;

    /**
     * Daily summary of log status, based on specified date range.
     */
    public /*Array<ApiTypes\DailyLogStatusSummary>*/ $DailyLogStatusSummary;

}