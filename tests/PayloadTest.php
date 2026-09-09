<?php
namespace Aura\Payload_Interface;

use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class PayloadTest extends TestCase
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
