<?php
/**
 * Tests for DeFiHorizon
 */

use PHPUnit\Framework\TestCase;
use Defihorizon\Defihorizon;

class DefihorizonTest extends TestCase {
    private Defihorizon $instance;

    protected function setUp(): void {
        $this->instance = new Defihorizon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defihorizon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
