<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Object with the single answer's data
 */
class SurveyResultAnswerInfo
{
    /**
     * Answer's content
     */
    public /*string*/ $content;

    /**
     * Identifier of the step
     */
    public /*int*/ $surveystepid;

    /**
     * Identifier of the answer of the step
     */
    public /*string*/ $surveystepanswerid;

}