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
 * Writable domain payload interface for payload producers.
 *
 * @package Aura.Payload_Interface
 *
 */
interface WritablePayloadInterface
{
    /**
     *
     * Sets the status of this payload.
     *
     * @param mixed $status The status for this payload.
     *
     */
    public function setStatus($status);

    /**
     *
     * Sets the input received by the domain layer.
     *
     * @param mixed $input The input received by the domain layer.
     *
     */
    public function setInput($input);

    /**
     *
     * Sets the output produced from the domain layer.
     *
     * @param mixed $output The output produced from the domain layer.
     *
     */
    public function setOutput($output);

    /**
     *
     * Sets the messages produced by the domain layer.
     *
     * @param mixed $messages The messages produced by the domain layer.
     *
     */
    public function setMessages($messages);

    /**
     *
     * Sets arbitrary extra values produced by the domain layer.
     *
     * @param mixed $extras Arbitrary extra values produced by the domain layer.
     *
     */
    public function setExtras($extras);
}
