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
     * Sets the error or status code produced by the domain layer.
     *
     * @param mixed $code The error or status code produced by the domain layer.
     *
     */
    public function setCode($code);

    /**
     *
     * Gets the error or status code produced by the domain layer.
     *
     * @return mixed
     *
     */
    public function getCode();

    /**
     *
     * Sets the error or status message produced by the domain layer.
     *
     * @param mixed $message The error or status message produced by the domain layer.
     *
     */
    public function setMessage($message);

    /**
     *
     * Gets the error or status message produced by the domain layer.
     *
     * @return mixed
     *
     */
    public function getMessage();

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
