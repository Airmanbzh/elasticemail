<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Information about Contact Segment, selected by RULE.
 */
class Segment
{
    /**
     * ID number of your segment.
     */
    public /*int*/ $SegmentID;

    /**
     * Filename
     */
    public /*string*/ $Name;

    /**
     * Query used for filtering.
     */
    public /*string*/ $Rule;

    /**
     * Number of items from last check.
     */
    public /*long*/ $LastCount;

    /**
     * History of segment information.
     */
    public /*Array<ApiTypes\SegmentHistory>*/ $History;

}