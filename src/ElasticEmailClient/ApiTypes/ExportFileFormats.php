<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Type of export
 * Enum class
 */
abstract class ExportFileFormats
{
    /**
     * Export in comma separated values format.
     */
    const Csv = 1;

    /**
     * Export in xml format
     */
    const Xml = 2;

    /**
     * Export in json format
     */
    const Json = 3;

}