<?php

use Scalar\Operation\Replace;

class ReplaceTest extends PHPUnit_Framework_TestCase
{
    public function testReplace()
    {
        $string = 'We Love Foo';
        
        $find = 'Foo';
        $replace = 'Bar';
        
        $expect = 'We Love Bar';
        
        $this->assertSame(
            Replace::direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string)),
                $find,
                $replace
            ),
            $expect
        );
    }
}
