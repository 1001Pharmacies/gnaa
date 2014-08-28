<?php

namespace Meup\DataStructure\Message;

interface AMPQMessageInterface
{
    /**
     * @param string $type
     * 
     * @return self
     */
    public function setType($type);

    /**
     * @return string
     */
    public function getType();

    /**
     * @param mixed $data
     * 
     * @return self
     */
    public function setData($data);

    /**
     * @return mixed
     */
    public function getData();
}
