<?php
namespace ElasticEmailClient\ApiTypes;

/**
 *
 */
class EmailJobStatus
{
    /**
     * ID number of your attachment
     */
    public /*string*/ $ID;

    /**
     * Name of status: submitted, complete, in_progress
     */
    public /*string*/ $Status;

    /**
     *
     */
    public /*int*/ $RecipientsCount;

    /**
     *
     */
    public /*Array<ApiTypes\EmailJobFailedStatus>*/ $Failed;

    /**
     * Total emails sent.
     */
    public /*int*/ $FailedCount;

    /**
     *
     */
    public /*Array<string>*/ $Sent;

    /**
     * Total emails sent.
     */
    public /*int*/ $SentCount;

    /**
     * Number of delivered messages
     */
    public /*Array<string>*/ $Delivered;

    /**
     *
     */
    public /*int*/ $DeliveredCount;

    /**
     *
     */
    public /*Array<string>*/ $Pending;

    /**
     *
     */
    public /*int*/ $PendingCount;

    /**
     * Number of opened messages
     */
    public /*Array<string>*/ $Opened;

    /**
     * Total emails opened.
     */
    public /*int*/ $OpenedCount;

    /**
     * Number of clicked messages
     */
    public /*Array<string>*/ $Clicked;

    /**
     * Total emails clicked
     */
    public /*int*/ $ClickedCount;

    /**
     * Number of unsubscribed messages
     */
    public /*Array<string>*/ $Unsubscribed;

    /**
     * Total emails clicked
     */
    public /*int*/ $UnsubscribedCount;

    /**
     *
     */
    public /*Array<string>*/ $AbuseReports;

    /**
     *
     */
    public /*int*/ $AbuseReportsCount;

    /**
     * List of all MessageIDs for this job.
     */
    public /*Array<string>*/ $MessageIDs;

}