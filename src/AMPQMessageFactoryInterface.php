<?php

namespace Meup\DataStructure\Message;

interface AMPQMessageFactoryInterface
{
    /**
     * @return AMPQMessageInterface
     */
    public function create();
}
