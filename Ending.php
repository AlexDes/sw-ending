<?php

namespace swods\ending;

/**
 * "How to use" can be found in README.md file
 * I know that it can be shorter, but now it's more clear for understanding
 * @author SSU (SwoDs) <etc@swods.ru>
 */
class Ending
{
    public static function get($number, array $words = ['Друг', 'Друга', 'Друзей']) 
    {
        if ($number % 100 > 4 && $number % 100 < 20) {
            $key = 2;
        } else {
            $zero_to_five = [2,0,1,1,1,2];
            $key = $zero_to_five[min($number % 10, 5)];
        }
        return $words[$key];
    }
}
