<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Single spam score
 */
class SpamRule
{
    /**
     * Spam score
     */
    public /*string*/ $Score;

    /**
     * Name of rule
     */
    public /*string*/ $Key;

    /**
     * Description of rule.
     */
    public /*string*/ $Description;

}