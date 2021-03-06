<?php
namespace ElasticEmailClient\ApiTypes;

/**
 *
 * Enum class
 */
abstract class SurveyStatus
{
    /**
     * The survey is deleted
     */
    const Deleted = -1;

    /**
     * The survey is not receiving result for now
     */
    const Expired = 0;

    /**
     * The survey is active and receiving answers
     */
    const Active = 1;

}