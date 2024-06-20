<?php
// Class Description: to present the checking of Palindrome
// Author: Rana Albedaiwi
// Date : 6/20/2024

require_once 'Palindrome.php'; 

// Create an instance of the Palindrome class and specifying the word
$word="Dad !";
$palindrome= new Palindrome($word);

//Present and checks if the word is Palindrome
$palindrome->show();

//Set to new word 
$palindrome->setWord("Rana");
//Present and checks if the word is Palindrome
$palindrome->show();







?>