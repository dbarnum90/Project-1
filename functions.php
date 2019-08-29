<?php
// PHP - Random Quote Generator
$quotes = [];
// Multidimensional Array built to hold quotes and source.
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


// getRandomQuote function to have quotes rotate in random order.
function getRandomQuote($quotes){


global $quotes;
// return function to return values of the array.
return $quotes [array_rand($quotes)];
};




// printQuote function to output strings of the array.
function printQuote($mainquotes) {
global $quotes;
$mainquotes = getRandomQuote($quotes);


$quotedisplay = '';
$quotedisplay .=   '<p class="quote">' . $mainquotes ['quote'] . '</p>';
$quotedisplay .= '<p class="source">' . $mainquotes ['source'] .


'<span class="citation">' . $mainquotes ['citation'] . '</span>' .
'<span class="year">' . $mainquotes ['year'] .  '</span> </p>';

if ($mainquotes ['citation'] && ['year'] == Null) {
  $quotedisplay .=   '<p class="quote">' . $mainquotes ['quote'] .
  $quotedisplay .=  '<p class="source">' . $mainquotes ['source'] . '</p>';

}
// echo used to call out and display quotes.
echo $quotedisplay;

}


?>
