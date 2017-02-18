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
 * Payload aware domain interface.
 *
 * @package Aura.Payload_Interface
 *
 */
trait PayloadFactoryAwareTrait
{
    protected $payloadFactory;

    /**
     *
     * Sets the payload factory.
     *
     * @param PayloadFactoryInterface $payload The payload factory.
     *
     */
    public function setPayloadFactory(PayloadFactoryInterface $payloadFactory)
    {
        $this->payloadFactory = $payloadFactory;
        return $this;
    }
}
