<?php
$friends = [
  ['Name' => 'Felipe', 'Age' => 32,],
  ['José', 56],
  ['Pepe', 47]
];

echo 'First array element ' . $friends[0]['Name'] . ' ' . $friends[0]['Age'];
echo '<br>';
echo 'Third array element ' . $friends[2][0] . ' ' . $friends[2][1];
