<?php
// PHP - Random Quote Generator
$quotes = [];
// Create the Multidimensional array of quote elements and name it quotes
$quotes[] = [
     'quote' => 'Life is a wheel of fortune and its my turn to spin it.',
     'source' => 'Tupac Shakur',
     'citation' => '',
     'year' => '',

];
$quotes[] = [
     'quote' => "You see my tears, in the rain underneath it all, we’re just the same.",
     'source' => 'MGK',
     'citation' => '', 
     'year' => '',

];
$quotes[] = [
     'quote' => 'Life without dreaming is a life without meaning.',
     'source' => 'Wale',
     'citation' => '',
     'year' => '',

];
$quotes[] = [
      'quote' => 'Memories have to be our most painful blessing.',
      'source' => 'Kanye West',
      'citation' => '',
     'year' => '',

];
$quotes[] = [
     'quote' => 'No matter where life takes me. Find me with a smile.',
     'source' => 'Mac Miller',
     'citation' => '',
     'year' => '',

];
$quotes[] = [
      'quote' => 'You have to keep your vision clear, cause only a coward lives in fear.',
      'source' => 'Nas',
     'citation' => '',
     'year' => '',

];


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($quotes){


global $quotes;

return $quotes [array_rand($quotes)];
};





function printQuote($mainquotes) {
global $quotes;
$mainquotes = getRandomQuote($quotes);


$quotedisplay = '';
$quotedisplay =   '<p class="quote">' . $mainquotes ['quote'] . '</p>';
$quotedisplay .= '<p class="source">' . $mainquotes ['source'] .


'<span class="citation">' . $mainquotes ['citation'] . '</span>' .
'<span class="year">' . $mainquotes ['year'] .  '</span> </p>';

if ($mainquotes ['citation'] && ['year'] == Null) {
  $quotedisplay =   '<p class="quote">' . $mainquotes ['quote'] .
  $quotedisplay .=  '<p class="source">' . $mainquotes ['source'] . '</p>';

}

echo $quotedisplay;

}


?>
