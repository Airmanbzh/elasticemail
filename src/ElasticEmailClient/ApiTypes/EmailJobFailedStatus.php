<?php
namespace ElasticEmailClient\ApiTypes;

/**
 *
 */
class EmailJobFailedStatus
{
    /**
     *
     */
    public /*string*/ $Address;

    /**
     *
     */
    public /*string*/ $Error;

    /**
     * RFC Error code
     */
    public /*int*/ $ErrorCode;

    /**
     *
     */
    public /*string*/ $Category;

}