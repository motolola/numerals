<?php
/**
 * Created by PhpStorm.
 * User: motolola
 * Date: 21/02/2018
 * Time: 1:56 PM
 */

namespace App\Http\NumeralRepository;


use phpDocumentor\Reflection\Types\Integer;

class IntToNumeral implements RomanNumerals
{
    private $array = ['her' ];


private $correspondingNumerals =
    ['M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
     'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
     'X' => 10, 'IX' => 9, 'V' => 5,
     'IV' => 4, 'I' => 1];

private $intResult = "";


    public function generate($integer)
    {

        foreach($this->correspondingNumerals as $roman => $value){

            $matches = intval($integer/$value);
            $this->intResult .= str_repeat($roman,$matches);
            $integer = $integer % $value;
        }
        return $this->intResult;
    }


    public function parse($numeral)
    {
        $result = 0;

        foreach ($this->correspondingNumerals as $key => $value) {
            while (strpos($numeral, $key) === 0) {
                $result += $value;
                $numeral = substr($numeral, strlen($key));
            }
        }
        return $result;
    }


}