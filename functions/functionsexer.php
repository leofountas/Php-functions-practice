<?php 
$names = ["Maurice","Alice","Jésus","Judas"];

function say_hello($array){
    foreach($array as $name){
        echo "<p> Hello $name!</p>";
        echo "<hr>";
    }
}

say_hello($names);

echo'<br>';

$example_txt = "According to a researcher at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

function shuffle_text($text){

    $words_text = explode(" ",$text);
    foreach($words_text as $word){
        $shuffled_words= str_shuffle($word);
        echo $shuffled_words . " ";
    }
}

shuffle_text($example_txt);
?>

