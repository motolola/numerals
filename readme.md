
## About Numerals ...
Numerals is an application built and tested using Laravel and PHPUnit as testing framework.

Class /APP/Http/NumeralRepository/IntToNumeral implements the two methods in interface /APP/Http/NumeralRepository/RomanNumerals. <br/>

<h3>The first method: generate()</h3>
 public function generate($integer)
     {
 
         foreach($this->correspondingNumerals as $roman => $value){
 
             $matches = intval($integer/$value);
             $this->intResult .= str_repeat($roman,$matches);
             $integer = $integer % $value;
         }
         return $this->intResult;
     }
     
     
This matches digits in a given integer value with its corresponding Roman Numeral value in a predefined array. eg 10 correspondes to X, starting from the left.

On iteration, the initial integer is recreated using modulo eg 12 % 10 => 2, as the processis repeated until no value left to break.

<h3>The second method: parse()</h3>
It is the reverse of the generate() method in which the strings are replaced by corrensponding number in the same array declared in the class level.

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
    
<h3>Testing</h3>
    Both methods were unit tested and passed. 
    Scalar type hints and return types were removed for testing.