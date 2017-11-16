<?php
namespace ElasticEmailClient\ApiTypes;

/**
 *
 * Enum class
 */
abstract class IntervalType
{
    /**
     * Daily overview
     */
    const Summary = 0;

    /**
     * Hourly, detailed information
     */
    const Hourly = 1;

}