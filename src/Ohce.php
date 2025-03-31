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

        if (empty($hour)){

            return "Hola {$name}";
        }

        if ($this->hourIsNight($hour)) {
            return "¡Buenas noches {$name}!";
        }

        if ($this->hourIsMorning($hour)) {
            return "¡Buenos días {$name}!";
        }

        return "¡Buenas tardes {$name}!";
    }

    /**
     * @param string $string
     * @return string
     */
    public function reversed(string $string): string {

        if (empty($string)) {
            exit();
        }

        return strrev($string);
    }

    /**
     * @param string $string
     * @return string|void
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

    /**
     * @param string $hour
     * @return bool
     */
    public function hourIsMorning(string $hour): bool
    {
        return strtotime($hour) >= strtotime("06:00") && strtotime($hour) < strtotime("12:00");
    }

}