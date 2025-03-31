<?php

namespace Deg540\DockerPHPOhce\Test;

use Deg540\DockerPHPOhce\Ohce;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{
    private Ohce $ohce;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ohce = new Ohce();
    }

    /**
     * @test
     */
    public function givenNameAndNoHourReturnsBasicGreeting(): void
    {
        $this->assertEquals("Hola Iñigo",$this->ohce->greeting("ohce Iñigo",""));
    }

    /**
     * @test
     */
    public function givenNameAndNightHourReturnsNightGreeting(): void
    {
        $this->assertEquals("¡Buenas noches Iñigo!",$this->ohce->greeting("ohce Iñigo","22:00"));
    }

    /**
     * @test
     */
    public function givenNameAndMorningHourReturnsMorningGreeting(): void
    {
        $this->assertEquals("¡Buenos días Iñigo!",$this->ohce->greeting("ohce Iñigo","08:00"));
    }

    /**
     * @test
     */
    public function givenNameAndEveningHourReturnsEveningGreeting(): void
    {
        $this->assertEquals("¡Buenas tardes Iñigo!",$this->ohce->greeting("ohce Iñigo","15:00"));
    }

    /**
     * @test
     */
    public function givenWordReturnsReversedWord(): void
    {
        $this->assertEquals("aloh",$this->ohce->reversed("hola"));
    }

    /**
     * @test
     */
    public function givenPalindromeWordReturnsMessage(): void
    {
        $this->assertEquals("¡Bonita palabra!",$this->ohce->palindromeMessage("kayak"));
    }


}