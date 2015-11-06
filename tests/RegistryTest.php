<?php namespace Test\Clean\Registry;

use Clean\Registry\Registry as Registry;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function testSetGetHas()
    {
        $registry = new Registry;
        $registry
            ->set('varNull', null)
            ->set('var1', 1)
            ->set('var2', 2)
            ->set('var3', 3)
        ;

        $this->assertEquals(null, $registry->get('varNull'));
        $this->assertEquals(1, $registry->get('var1'));
        $this->assertEquals(2, $registry->get('var2'));
        $this->assertEquals(3, $registry->get('var3'));
        $this->assertEquals(null, $registry->get('var4'));

        $this->assertFalse($registry->has('varNull'));
        $this->assertTrue($registry->has('var1'));
        $this->assertTrue($registry->has('var2'));
        $this->assertTrue($registry->has('var3'));
        $this->assertFalse($registry->has('var4'));
    }
}
