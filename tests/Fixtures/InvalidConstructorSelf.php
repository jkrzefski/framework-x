<?php

namespace FrameworkX\Tests\Fixtures;

class InvalidConstructorSelf
{
    public function __construct(InvalidConstructorSelf $value)
    {
    }
}
