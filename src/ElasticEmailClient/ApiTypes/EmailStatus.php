<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Status information of the specified email
 */
class EmailStatus
{
    /**
     * Email address this email was sent from.
     */
    public /*string*/ $From;

    /**
     * Email address this email was sent to.
     */
    public /*string*/ $To;

    /**
     * Date the email was submitted.
     */
    public /*DateTime*/ $Date;

    /**
     * Value of email's status
     */
    public /*ApiTypes\LogJobStatus*/ $Status;

    /**
     * Name of email's status
     */
    public /*string*/ $StatusName;

    /**
     * Date of last status change.
     */
    public /*DateTime*/ $StatusChangeDate;

    /**
     * Detailed error or bounced message.
     */
    public /*string*/ $ErrorMessage;

    /**
     * ID number of transaction
     */
    public /*Guid*/ $TransactionID;

}