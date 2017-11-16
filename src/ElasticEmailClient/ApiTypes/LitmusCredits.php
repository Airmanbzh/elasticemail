<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Detailed information about litmus credits
 */
class LitmusCredits
{
    /**
     * Date in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $Date;

    /**
     * Amount of money in transaction
     */
    public /*decimal*/ $Amount;

}
