<?php

namespace Meup\DataStructure\Message\Tests;

use \PHPUnit_Framework_TestCase as BaseTestCase;
use JMS\Serializer\SerializerBuilder;
use Meup\DataStructure\Message\AMPQMessage;

/**
 *
 */
class SerializerTest extends BaseTestCase
{
    public function testSerialize()
    {
        $serializer = SerializerBuilder::create()->build();
        $message    = new AMPQMessage();

        $json = $serializer->serialize($message, 'json');
        $message2 = $serializer->deserialize($json, 'Meup\DataStructure\Message\AMPQMessage', 'json');

        $this->assertEquals($message, $message2);
    }
}
