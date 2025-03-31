<?php

namespace Deg540\DockerPHPOhce\Test;

use Deg540\DockerPHPOhce\Ohce;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase {
    private Ohce $ohce;

    protected function setUp(): void {
        parent::setUp();

        $this->ohce = new Ohce();
    }

    /**
     * @test
     */
    public function givenNameAndNoHourReturnsBasicGreeting(): void {
        $this->assertEquals("Hola Iñigo",$this->ohce->greeting("ohce Iñigo",""));
    }

    /**
     * @test
     */
    public function givenNameAndNightHourReturnsNightGreeting(): void {
        $this->assertEquals("¡Buenas noches Iñigo!",$this->ohce->greeting("ohce Iñigo","22:00"));
    }

    /**
     * @test
     */
    public function givenNameAndMorningHourReturnsMorningGreeting(): void {
        $this->assertEquals("¡Buenos días Iñigo!",$this->ohce->greeting("ohce Iñigo","08:00"));
    }

}