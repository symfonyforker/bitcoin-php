<?php

namespace Afk11\Bitcoin\Tests\Crypto\Random;

class RandomTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $bufferType = 'Afk11\Bitcoin\Buffer';

    public function setUp()
    {

    }

    public function testBytes()
    {
        $random = new \Afk11\Bitcoin\Crypto\Random\Random;
        $bytes  = $random->bytes(32);
        $this->assertInstanceOf($this->bufferType, $bytes);
        $this->assertEquals(32, $bytes->getSize());
    }
}