<?php
namespace ElasticEmailClient\ApiTypes;

/**
 *
 * Enum class
 */
abstract class SplitOptimization
{
    /**
     * Number of opened messages
     */
    const Opened = 0;

    /**
     * Number of clicked messages
     */
    const Clicked = 1;

}