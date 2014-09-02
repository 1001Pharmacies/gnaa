<?php

namespace Meup\DataStructure\Message;

/**
 *
 */
class AMPQMessageFactory implements AMPQMessageFactoryInterface
{
    /**
     * The default AMPQMessage class.
     */
    const DEFAULT_CLASS = 'Meup\DataStructure\Message\AMPQMessage';

    /**
     * @var ReflectionClass
     */
    protected $class;

    /**
     * @throws InvalidArgumentException
     * 
     * @param string $class
     */
    public function __construct($class = self::DEFAULT_CLASS)
    {
        $interface   = 'Meup\DataStructure\Message\AMPQMessageInterface';
        $this->class = new \ReflectionClass($class);

        if (!$this->class->implementsInterface($interface)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "'%s' should implements %s",
                    $this->class->getName(),
                    $interface
                )
            );
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
