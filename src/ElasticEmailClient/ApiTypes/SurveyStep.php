<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Survey's single step info with the answers
 */
class SurveyStep
{
    /**
     * Identifier of the step
     */
    public /*int*/ $SurveyStepID;

    /**
     * Type of the step
     */
    public /*ApiTypes\SurveyStepType*/ $SurveyStepType;

    /**
     * Type of the question
     */
    public /*ApiTypes\QuestionType*/ $QuestionType;

    /**
     * Answer's content
     */
    public /*string*/ $Content;

    /**
     * Is the answer required
     */
    public /*bool*/ $Required;

    /**
     * Sequence of the answers
     */
    public /*int*/ $Sequence;

    /**
     *
     */
    public /*Array<ApiTypes\SurveyStepAnswer>*/ $SurveyStepAnswers;

}