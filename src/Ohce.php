<?php

namespace Deg540\DockerPHPOhce;

use PHPUnit\Framework\Constraint\IsEqual;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\equalTo;
use function PHPUnit\Framework\isEmpty;

class Ohce
{

    public function __construct()
    {
    }

    /**
     * @param string $string
     * @param string $hour
     * @return string
     */
    public function greeting(string $string, string $hour): string
    {

        $name = $this->getName($string);

        if (empty($hour))
        {
            return "Hola {$name}";
        }

        if ($this->hourIsNight($hour))
        {
            return "¡Buenas noches {$name}!";
        }

        if ($this->hourIsMorning($hour))
        {
            return "¡Buenos días {$name}!";
        }

        return "¡Buenas tardes {$name}!";
    }

    /**
     * @param string $string
     * @return string
     */
    public function reversed(string $string): string
    {
        if (empty($string))
        {
            return "";
        }

        return strrev($string);
    }

    public function palindromeMessage(string $string): string
    {
        if ($this->isPalindrome($string))
        {
            return "¡Bonita palabra!";
        }
        return "";
    }

    /**
     * @param string $string
     * @return string
     */
    private function getName(string $string): string
    {
        if (!preg_match("/^ohce\s+(.+)$/", $string, $matches))
        {
            return "";
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

    /**
     * @param string $string
     * @return bool
     */
    public function isPalindrome(string $string): bool
    {
        return $string === $this->reversed($string);
    }

}