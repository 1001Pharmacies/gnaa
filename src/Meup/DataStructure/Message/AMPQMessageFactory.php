<?php

namespace Meup\DataStruture\Message;

class AMPQMessageFactory implements AMPQMessageFactoryInterface
{
    const DEFAULT_CLASS = '\Meup\DataStruture\Message\AMPQMessage';

    /**
     * @var ReflectionClass
     */
    protected $class;

    /**
     * @param string $class
     */
    public function __construct($class = self::DEFAULT_CLASS)
    {
        $this->class = new \ReflectionClass($class);
        if (!$this->class->implementsInterface('\Meup\DataStruture\Message\AMPQMessageInterface')) {
            throw new InvalidArgumentException();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {
        return $this->class->newInstance();
    }
}
