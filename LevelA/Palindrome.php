<?php

namespace Hackathon\LevelA;

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function creates a palindrome with his $str attributes
     * If $str is abc then this function return abccba
     *
     * @TODO
     * @return string
     */
    public function generatePalindrome()
    {

        // 1ère version
       /* $s = $this->str;

        for($i=strlen($s)-1, $j=0; $j<$i; $i--, $j++) {
            list($s[$j], $s[$i]) = array($s[$i], $s[$j]);
        }
        return $this->str.$s;*/

        preg_match_all('/./us', $this->str, $ar);

        return $this->str.join('', array_reverse($ar[0]));

    }
}
