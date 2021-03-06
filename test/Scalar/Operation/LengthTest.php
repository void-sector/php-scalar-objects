<?php

use Scalar\Operation\Length;

class LengthTest extends PHPUnit_Framework_TestCase
{
    public function testLength()
    {
        $string = 'We Love Bar';

        $mock = $this->getMock('\Scalar\String', array('__construct'), array($string));

        $length = new Length;

        $this->assertSame(11, $length->direct($mock));
    }
}
