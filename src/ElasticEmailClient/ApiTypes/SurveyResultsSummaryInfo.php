<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Data on the survey's result
 */
class SurveyResultsSummaryInfo
{
    /**
     * Number of items.
     */
    public /*int*/ $Count;

    /**
     * Summary statistics
     */
    public /*array<int, ApiTypes\List`1>*/ $Summary;

}