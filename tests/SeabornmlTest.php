<?php
/**
 * Tests for SeabornML
 */

use PHPUnit\Framework\TestCase;
use Seabornml\Seabornml;

class SeabornmlTest extends TestCase {
    private Seabornml $instance;

    protected function setUp(): void {
        $this->instance = new Seabornml(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Seabornml::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
