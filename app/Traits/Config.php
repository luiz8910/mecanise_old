<?php
/**
 * Created by PhpStorm.
 * User: luizfernandosanches
 * Date: 2019-11-13
 * Time: 01:44
 */

namespace App\Traits;


trait Config
{
    public function get_user_workshop()
    {
        return session('workshop');
    }

    public function random_number($length = null)
    {
        $length = $length ? $length : 5;

        $alphabet = '1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    //Returns the first name
    public function first_name($name)
    {
        $array = explode(" ", $name);

        return $array[0];
    }

    //Returns the first character of a string
    public function initials($name)
    {
        $f_char = substr($name, 0, 1);

        return strtoupper($f_char);
    }
}
