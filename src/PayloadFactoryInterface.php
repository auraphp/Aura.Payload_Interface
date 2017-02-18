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
 * Domain payload factory interface.
 *
 * @package Aura.Payload_Interface
 *
 */
interface PayloadFactoryInterface
{
    /**
     *
     * Gets a new payload.
     *
     */
    public function newInstance();
}
