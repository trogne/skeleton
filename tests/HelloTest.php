<?php
namespace Dracony\Skeleton;
//require_once(__DIR__.'/../vendor/autoload.php');

/**
 * @coversDefaultClass \Dracony\Skeleton\Hello
 */
class HelloTest extends \PHPUnit_Framework_TestCase
//class HelloTest extends \PHPUnit\Framework\TestCase
{
    protected $hello;
    
    public function setUp()
    {
        $this->hello = new Hello();
    }
    
    /**
     * @covers ::world
     */
    public function testWorld()
    {
        $this->assertSame('world', $this->hello->world());
    }
}
