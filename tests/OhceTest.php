<?php

namespace Deg540\DockerPHPOhce\Test;

use Deg540\DockerPHPOhce\Ohce;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{
    private Ohce $ohce;

    protected function setUp(): void{
        parent::setUp();

        $this->ohce = new Ohce();
    }

    /**
     * @test
     */
    public function givenNameReturnsGreeting(): void{
        $this->assertEquals("Hola Iñigo",$this->ohce->saludo("Iñigo"));
    }




}