<?php
namespace Aura\Payload_Interface;

class PayloadTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $payload = new Payload();

        $payload->setInput('input')
            ->setOutput('output')
            ->setCode('code')
            ->setMessage('message')
            ->setExtras('extras');

        $this->assertSame('input', $payload->getInput());
        $this->assertSame('output', $payload->getOutput());
        $this->assertSame('code', $payload->getCode());
        $this->assertSame('message', $payload->getMessage());
        $this->assertSame('extras', $payload->getExtras());
    }
}
