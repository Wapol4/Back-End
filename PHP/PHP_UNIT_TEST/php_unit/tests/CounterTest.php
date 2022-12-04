<?php 

namespace Airist4\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase {

    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter". PHP_EOL;
    }

    public function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete("TODO do counter again");
        echo "TEST TEST" . PHP_EOL;
    }
    
    public function testCounter() {
        // echo $counter->getCounter() . PHP_EOL;
        
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        self::assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(3, $this->counter->getCounter());
    }

    // Fitur Annotation
    /**
     * @test
     */
    public function increment() {
        // echo $counter->getCounter() . PHP_EOL;
        // self::markTestSkipped("Masih ada error yang bingung");

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter 
    {
        // echo $counter->getCounter() . PHP_EOL;
        
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }  

    /**
     * @depends testFirst
     */
    public function testSecond(): Counter
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    protected function tearDown(): void
    {
        echo "Tear Down" . PHP_EOL;
    }

       /**
     * @requires OSFAMILY Linux
     */
    public function testOnlyWindows()
    {
        self::assertTrue(true, "Only in Linux");
    }

    /**
     * @requires PHP >= 8
     * @requires OSFAMILY Linux
     */
    public function testOnlyForMacAndPHP8()
    {
        self::assertTrue(true, "Only for Linux and PHP 8");
    }

}

// vendor/bin/phpunit test/CounterTest.php
// vendor/bin/phpunit --filter 'CounterTest::testOther' tests/CounterTest.php 


?>