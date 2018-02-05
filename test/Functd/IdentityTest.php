<?php

namespace Functd;


class IdentityTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    function it_allows_chaining_functions()
    {
        $plusOne = function($val) { return $val+1;};
        $this->assertEquals(5,
            Identity::create(1)
                ->bind($plusOne)
                ->bind($plusOne)
                ->bind($plusOne)
                ->bind($plusOne)
                ->value());
    }

    /** @test */
    function it_prevents_modifying_value_within_function()
    {
        $this->assertEquals(1, Identity::create(1)->bind(function(){
            $this->_value = 'test';
        })->value());
    }

}
