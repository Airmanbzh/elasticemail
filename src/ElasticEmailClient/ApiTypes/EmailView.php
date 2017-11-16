<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Email details formatted in json
 */
class EmailView
{
    /**
     * Body (text) of your message.
     */
    public /*string*/ $Body;

    /**
     * Default subject of email.
     */
    public /*string*/ $Subject;

    /**
     * Starting date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*string*/ $From;

}