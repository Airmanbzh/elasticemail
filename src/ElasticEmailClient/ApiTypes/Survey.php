<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * A survey object
 */
class Survey
{
    /**
     * Survey identifier
     */
    public /*Guid*/ $PublicSurveyID;

    /**
     * Creation date.
     */
    public /*DateTime*/ $DateCreated;

    /**
     * Last change date
     */
    public /*?DateTime*/ $DateUpdated;

    /**
     *
     */
    public /*?DateTime*/ $ExpiryDate;

    /**
     * Filename
     */
    public /*string*/ $Name;

    /**
     * Activate, delete, or pause your survey
     */
    public /*ApiTypes\SurveyStatus*/ $Status;

    /**
     * Number of results count
     */
    public /*int*/ $ResultCount;

    /**
     *
     */
    public /*Array<ApiTypes\SurveyStep>*/ $SurveySteps;

    /**
     * URL of the survey
     */
    public /*string*/ $SurveyLink;

}