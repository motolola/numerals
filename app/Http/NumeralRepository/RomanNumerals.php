<?php
/**
 * Created by PhpStorm.
 * User: motolola
 * Date: 21/02/2018
 * Time: 1:53 PM
 */

namespace App\Http\NumeralRepository;


use phpDocumentor\Reflection\Types\Integer;

interface RomanNumerals
{

    public function generate($interger); // Converts from integer to numeral
    public function parse($numeral); // Converts from numeral to integer
}