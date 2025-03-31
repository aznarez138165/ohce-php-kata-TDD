<?php

namespace Deg540\DockerPHPOhce;

use function PHPUnit\Framework\isEmpty;

class Ohce {

    public function __construct() {
    }

    /**
     * @param string $string
     * @param string $hour
     * @return string
     */
    public function greeting(string $string, string $hour): string {

        $name = $this->getName($string);

        if(empty($hour)){

            return "Hola {$name}";
        }

        if ($this->hourIsNight($hour)) {
            return "¡Buenas noches {$name}!";
        }

        return "Son las {$hour}";
    }

    /**
     * @param string $string
     * @return mixed|void
     */
    private function getName(string $string)
    {
        if (!preg_match("/^ohce\s+(.+)$/", $string, $matches)) {
            exit();
        }
        return trim($matches[1]);
    }

    /**
     * @param string $hour
     * @return bool
     */
    public function hourIsNight(string $hour): bool
    {
        return strtotime($hour) >= strtotime("20:00") || strtotime($hour) < strtotime("06:00");
    }




}