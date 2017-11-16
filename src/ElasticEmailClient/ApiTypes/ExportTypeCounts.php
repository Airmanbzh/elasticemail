<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Number of Exports, grouped by export type
 */
class ExportTypeCounts
{
    /**
     *
     */
    public /*long*/ $Log;

    /**
     *
     */
    public /*long*/ $Contact;

    /**
     * Json representation of a campaign
     */
    public /*long*/ $Campaign;

    /**
     * True, if you have enabled link tracking. Otherwise, false
     */
    public /*long*/ $LinkTracking;

    /**
     * Json representation of a survey
     */
    public /*long*/ $Survey;

}
