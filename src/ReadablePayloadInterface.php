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
 * Domain payload interface for payload consumers.
 *
 * @package Aura.Payload_Interface
 *
 */
interface ReadablePayloadInterface
{

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
     * Gets the input received by the domain layer.
     *
     * @return mixed
     *
     */
    public function getInput();

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
     * Gets the messages produced by the domain layer.
     *
     * @return mixed
     *
     */
    public function getMessages();

    /**
     *
     * Gets arbitrary extra values produced by the domain layer.
     *
     * @param mixed
     *
     */
    public function getExtras();
}
