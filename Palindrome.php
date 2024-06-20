<?php
// Class Description: to check Palindrome
// Author: Rana Albedaiwi
// Date : 6/20/2024

class Palindrome
{
    private $word;
     //Constructor to initialize the word
    public function __construct($word)
    {
      $this->word=$word;
      
    }
    //Set the word 
    public function setWord($word)
    {
        $this->word=$word;
    }
    //Checks if the word is Palindrome
    public function isPalindrome()
    {
        $this->word= preg_replace("/[^A-Za-z0-9]/", '', strtolower($this->word));

        if(strrev($this->word) == $this->word)
            return true;
        else 
        return false;
    }

    //Present the checking of isPalindrome() function
    public function show()
    {
        echo "Is ($this->word) Palindrome? ";
        if($this->isPalindrome())
        echo "True";
        else
        echo "False";
        echo"\n";
    }


}

?>