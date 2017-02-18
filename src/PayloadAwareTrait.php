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
 * Payload aware domain trait.
 *
 * @package Aura.Payload_Interface
 *
 */
trait PayloadAwareTrait
{
    protected $payload;

    /**
     *
     * Sets the payload.
     *
     * @param PayloadInterface $payload The payload.
     *
     */
    public function setPayload(PayloadInterface $payload)
    {
        $this->payload = $payload;
        return $this;
    }

}
