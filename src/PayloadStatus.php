<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 */
namespace Aura\Payload_Interface;

/**
 *
 * Describes the various Payload statuses.
 *
 * @package Aura.Payload_Interface
 *
 */
class PayloadStatus
{
    /** A command/query was accepted for later processing. */
    const ACCEPTED = 'ACCEPTED';

    /** User is authenticated. */
    const AUTHENTICATED = 'AUTHENTICATED';

    /** User is authorized. */
    const AUTHORIZED = 'AUTHORIZED';

    /** A creation command succeeded. */
    const CREATED = 'CREATED';

    /** A deletion command succeeded. */
    const DELETED = 'DELETED';

    /** There was a major error of some sort. */
    const ERROR = 'ERROR';

    /** There was a failure of some sort. */
    const FAILURE = 'FAILURE';

    /** A query successfully returned results. */
    const FOUND = 'FOUND';

    /** A command/query was not accepted for processing. */
    const NOT_ACCEPTED = 'NOT_ACCEPTED';

    /** User is not authenticated. */
    const NOT_AUTHENTICATED = 'NOT_AUTHENTICATED';

    /** User is not authorized. */
    const NOT_AUTHORIZED = 'NOT_AUTHORIZED';

    /** A creation command failed. */
    const NOT_CREATED = 'NOT_CREATED';

    /** A deletion command failed. */
    const NOT_DELETED = 'NOT_DELETED';

    /** A query failed to return results. */
    const NOT_FOUND = 'NOT_FOUND';

    /** An update command failed. */
    const NOT_UPDATED = 'NOT_UPDATED';

    /** User input was not valid. */
    const NOT_VALID = 'NOT_VALID';

    /** A command/query is in-process but not finished. */
    const PROCESSING = 'PROCESSING';

    /** There was a success of some sort (generic). */
    const SUCCESS = 'SUCCESS';

    /** An update command succeeded. */
    const UPDATED = 'UPDATED';

    /** User input was valid. */
    const VALID = 'VALID';

    /** Instantiation not allowed. */
    final private function __construct()
    {
    }
}
