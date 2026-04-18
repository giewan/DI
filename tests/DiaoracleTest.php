<?php
/**
 * Tests for DIAOracle
 */

use PHPUnit\Framework\TestCase;
use Diaoracle\Diaoracle;

class DiaoracleTest extends TestCase {
    private Diaoracle $instance;

    protected function setUp(): void {
        $this->instance = new Diaoracle(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Diaoracle::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
