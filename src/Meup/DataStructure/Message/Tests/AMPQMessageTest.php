<?php

namespace Meup\DataStructure\Message\Tests;

use \PHPUnit_Framework_TestCase as BaseTestCase;
use Meup\DataStructure\Message\AMPQMessage;

/**
 *
 */
class AMPQMessageTest extends BaseTestCase
{
    /**
     * Test the $type attribute's accessors
     *
     * @return void
     */
    public function testType()
    {
        $type    = uniqid();
        $message = (new AMPQMessage())->setType($type);

        $this->assertEquals($type, $message->getType());
    }

    /**
     * Test the $data attribute's accessors
     *
     * @return void
     */
    public function testData()
    {
        $data    = uniqid();
        $message = (new AMPQMessage())->setData($data);

        $this->assertEquals($data, $message->getData());
    }
}
