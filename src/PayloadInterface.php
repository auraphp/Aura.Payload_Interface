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
 * Domain payload interface.
 *
 * @package Aura.Payload_Interface
 *
 */
interface PayloadInterface
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
     * Gets the status of this payload.
     *
     * @return mixed
     *
     */
    public function getStatus();

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
     * Gets the input received by the domain layer.
     *
     * @return mixed
     *
     */
    public function getInput();

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
     * Gets the output produced from the domain layer.
     *
     * @return mixed
     *
     */
    public function getOutput();

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
     * Gets the messages produced by the domain layer.
     *
     * @return mixed
     *
     */
    public function getMessages();

    /**
     *
     * Sets arbitrary extra values produced by the domain layer.
     *
     * @param mixed $extras Arbitrary extra values produced by the domain layer.
     *
     */
    public function setExtras($extras);

    /**
     *
     * Gets arbitrary extra values produced by the domain layer.
     *
     * @param mixed
     *
     */
    public function getExtras();
}
