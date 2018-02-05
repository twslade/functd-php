<?php

namespace Functd;


class MonadTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    function it_returns_the_value_passed()
    {
        $this->assertEquals(1, Monad::create(1)->value());
    }

    /** @test */
    function it_returns_the_correct_nested_monad_value()
    {

        $this->assertEquals(1, Monad::create(Monad::create(1))->value());
    }

}