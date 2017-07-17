<?php
//require_once(__DIR__.'/../vendor/autoload.php');

/**
 * @coversDefaultClass \Dracony\skeleton\Hello
 */
class HelloTest extends \PHPUnit_Framework_TestCase
//class HelloTest extends \PHPUnit\Framework\TestCase
{
    protected $hello;
    
    public function setUp()
    {
        //$this->hello = new \Dracony\Skeleton\Hello();
    }
    
    /**
     * @covers ::world
     */
    public function testWorld()
    {
        $this->hello = new \Dracony\Skeleton\Hello();
        $this->assertSame('world', $this->hello->world());
    }
}
