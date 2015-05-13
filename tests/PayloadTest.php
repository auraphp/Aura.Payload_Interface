<?php
namespace Aura\Payload_Interface;

class PayloadTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $payload = new Payload();

        $payload
            ->setStatus('status')
            ->setInput('input')
            ->setOutput('output')
            ->setMessages('messages')
            ->setExtras('extras');

        $this->assertSame('status', $payload->getStatus());
        $this->assertSame('input', $payload->getInput());
        $this->assertSame('output', $payload->getOutput());
        $this->assertSame('messages', $payload->getMessages());
        $this->assertSame('extras', $payload->getExtras());
    }
}
