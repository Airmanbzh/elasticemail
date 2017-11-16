<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Logs for selected date range
 */
class Log
{
    /**
     * Starting date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*?DateTime*/ $From;

    /**
     * Ending date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*?DateTime*/ $To;

    /**
     * Number of recipients
     */
    public /*Array<ApiTypes\Recipient>*/ $Recipients;

}