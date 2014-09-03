<?php

namespace Meup\DataStructure\Message;

use JMS\Serializer\Annotation\Type;

/**
 *
 */
class AMPQMessage implements AMPQMessageInterface
{
    /**
     * @var mixed
     * @Type("string")
     */
    private $id;

    /**
     * @var string
     * @Type("string")
     */
    private $type;

    /**
     * @var mixed
     * @Type("string")
     */
    private $data;

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getData()
    {
        return $this->data;
    }
}
