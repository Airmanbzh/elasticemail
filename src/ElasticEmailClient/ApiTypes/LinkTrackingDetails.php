<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Object containig tracking data.
 */
class LinkTrackingDetails
{
    /**
     * Number of items.
     */
    public /*int*/ $Count;

    /**
     * True, if there are more detailed data available. Otherwise, false
     */
    public /*bool*/ $MoreAvailable;

    /**
     *
     */
    public /*Array<ApiTypes\TrackedLink>*/ $TrackedLink;

}