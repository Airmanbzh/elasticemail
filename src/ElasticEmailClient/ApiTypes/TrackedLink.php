<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Information about tracking link and its clicks.
 */
class TrackedLink
{
    /**
     * URL clicked
     */
    public /*string*/ $Link;

    /**
     * Number of clicks
     */
    public /*string*/ $Clicks;

    /**
     * Percent of clicks
     */
    public /*string*/ $Percent;

}