<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Single step's answer object
 */
class SurveyStepAnswer
{
    /**
     * Identifier of the answer of the step
     */
    public /*string*/ $SurveyStepAnswerID;

    /**
     * Answer's content
     */
    public /*string*/ $Content;

    /**
     * Sequence of the answers
     */
    public /*int*/ $Sequence;

}