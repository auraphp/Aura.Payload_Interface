<?php
namespace Aura\Payload_Interface;

class Payload implements PayloadInterface
{
    protected $input;
    protected $output;
    protected $code;
    protected $message;
    protected $extras;

    public function setInput($input)
    {
        $this->input = $input;
        return $this;
    }

    public function getInput()
    {
        return $this->input;
    }

    public function setOutput($output)
    {
        $this->output = $output;
        return $this;
    }

    public function getOutput()
    {
        return $this->output;
    }

    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setExtras($extras)
    {
        $this->extras = $extras;
        return $this;
    }

    public function getExtras()
    {
        return $this->extras;
    }
}
