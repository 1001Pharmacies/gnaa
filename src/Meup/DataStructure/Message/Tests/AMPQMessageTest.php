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
     * Test the $id attribute's accessors
     *
     * @return void
     */
    public function testId()
    {
        $id      = rand(1, 999);
        $message = new AMPQMessage();
        $message->setId($id);

        $this->assertEquals($id, $message->getId());
    }

    /**
     * Test the $index attribute's accessors
     *
     * @return void
     */
    public function testIndex()
    {
        $index    = uniqid();
        $message = new AMPQMessage();
        $message->setIndex($index);

        $this->assertEquals($index, $message->getIndex());
    }

    /**
     * Test the $type attribute's accessors
     *
     * @return void
     */
    public function testType()
    {
        $type    = uniqid();
        $message = new AMPQMessage();
        $message->setType($type);

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
        $message = new AMPQMessage();
        $message->setData($data);

        $this->assertEquals($data, $message->getData());
    }
}
