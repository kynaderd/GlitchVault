<?php
/**
 * Tests for GlitchVault
 */

use PHPUnit\Framework\TestCase;
use Glitchvault\Glitchvault;

class GlitchvaultTest extends TestCase {
    private Glitchvault $instance;

    protected function setUp(): void {
        $this->instance = new Glitchvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Glitchvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
