<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\NumeralRepository\IntToNumeral;


class IntToNumeralsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIntegerToNumeral()
    {
        $this->assertEquals("MMMMMDCLXVII", (new IntToNumeral())->generate(5667));
    }

    public function testNumeralToInt()
    {
        $this->assertEquals(5667, (new IntToNumeral())->parse("MMMMMDCLXVII"));
    }
}
