<?php

namespace spec\Phpro\SoapClient\Exception;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PatchExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Phpro\SoapClient\Exception\PatchException');
    }

    function it_should_be_an_exception()
    {
        $this->shouldHaveType(\RuntimeException::class);
    }
}
