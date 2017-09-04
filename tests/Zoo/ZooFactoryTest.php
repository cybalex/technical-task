<?php

namespace Zoo\ZooFactory\Test;

use PHPUnit\Framework\TestCase;
use Zoo\Animal\Species\Cat;

/**
 * Class ZooFactoryTest
 */
class ZooFactoryTest extends TestCase
{
    public function testGet()
    {
        $zooFactory = new \Zoo\ZooFactory();
        $cat = $zooFactory->get('cat', ['Entony']);
        $this->assertTrue($cat instanceof Cat);
        $this->assertEquals($cat->getName(), 'Cat Entony');

        $this->expectException(\Exception::class);
        $zooFactory->get('chupakabra', ['Chupakabra']);
    }
}
