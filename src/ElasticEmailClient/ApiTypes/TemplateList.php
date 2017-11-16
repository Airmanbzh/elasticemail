<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * List of templates (including drafts)
 */
class TemplateList
{
    /**
     * List of templates
     */
    public /*Array<ApiTypes\Template>*/ $Templates;

    /**
     * List of draft templates
     */
    public /*Array<ApiTypes\Template>*/ $DraftTemplate;

}