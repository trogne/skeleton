<?php

/**
 * @coversDefaultClass \Dracony\skeleton\Hello
 */
class HelloTest extends \PHPUnit_Framework_TestCase
{
    protected $hello;
    
    public function setUp()
    {
        $this->hello = new \Dracony\skeleton\Hello();
    }
    
    /**
     * @covers ::world
     */
    public function testWorld()
    {
        $this->assertSame('world', $this->hello->world());
    }
}
