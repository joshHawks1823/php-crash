<?php
/* ----------- Arrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple Array
$numbers = [1, 33, 43, 22];
$fruits = array('apple', 'orange', 'pear');


// var_dump($numbers);
// echo $fruits[1];

// Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['blue'];

$person = [
  'first_name' => 'Josh',
  'last_name' => 'Hawkins',
  'email' => 'josh@email.com'
];

// echo $person['first_name'];


$people = [
  [
    'first_name' => 'Josh',
    'last_name' => 'Hawkins',
    'email' => 'josh@email.com'
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Hawkins',
    'email' => 'john@email.com'
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Hawkins',
    'email' => 'jane@email.com'
  ]
];

// echo $people[1]['email'];

var_dump(json_encode($people));
