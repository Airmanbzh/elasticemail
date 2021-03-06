<?php
namespace ElasticEmailClient\ApiTypes;

/**
 *
 * Enum class
 */
abstract class TemplateScope
{
    /**
     * Template is available for this account only.
     */
    const EEPrivate = 0;

    /**
     * Template is available for this account and it's sub-accounts.
     */
    const EEPublic = 1;

}