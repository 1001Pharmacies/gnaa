<?php

namespace Meup\DataStructure\Message\Tests;

use \PHPUnit_Framework_TestCase as BaseTestCase;
use Meup\DataStructure\Message\AMPQMessageFactory;

/**
 *
 */
class AMPQMessageFactoryTest extends BaseTestCase
{
    /**
     * Test creating a new AMPQMessage instance with the factory
     *
     * @return void
     */
    public function testCreate()
    {
        $factory = new AMPQMessageFactory();

        $this->assertInstanceof(
            AMPQMessageFactory::DEFAULT_CLASS,
            $factory->create()
        );
    }

    /**
     * Test using the factory with a wrong AMPQMessage class
     * 
     * @return void
     */
    public function testCreateWithWrongClass()
    {
        $this->setExpectedException('InvalidArgumentException');

        $factory = new AMPQMessageFactory('stdClass');
    }
}
