<?php
// Different ways to create an array
$land = array ('Belgium', 'France', 'Italie', 'The Netherlands', 'Mexico');
$family = ['Deborah','Rebecca','Emily'];
$dishes[0] = 'Pizza';
$dishes[1] = 'Spaghetti';
$dishes[2] = 'Beans';
//multi-dimensional array
$favorite = array(
    'movies' => array('300 rise of an empire', 'Cracks', 'Kingdom of Heaven'),
    'series' => array('Penny Dreadful', 'Camelot', 'Salem')
);
//push a new value in the movies array / short way to push
$favorite ['movies'][] = 'Beetlejuice';
//push a new array in the favorite array
$favorite ['hobbies'] = array();
//push a new value in the array hobbies / long way to push
array_push ($favorite ['hobbies'], 'football');
echo('<h2>standard arrays</h2>');
echo $land[0];
echo '<br><br>';
print_r($family);
echo '<br><br>';
print_r($dishes);
echo '<br><br>';
print_r($favorite);
echo '<br><br>';
echo '<h3>Favorite movie:</h3>';
echo $favorite['movies'][0];
echo '<br><br>';
echo '<h3>Favorite serie: </h3>' . $favorite['series'][0];
echo '<br><br><br>';
echo('<h4>Changing the value of an array</h4>');
//new variable $person, with a name (Georgio)
$person ['daddy']['firstname'] = 'Georgio';
echo $person ['daddy']['firstname'];
// easy way to change the value of this variable
$person ['daddy']['firstname'] = 'Sebastano';
echo '<br><br>';
echo $person ['daddy']['firstname'];
echo '<br><br><br><br>';
//Associative arrays (numerical index is changes with a value)
//Use the arrow (=>) to indicate an association. For example, we associate city with Brussels
echo ('<h2>Associative arrays</h2>');
$user = array (
    'first name' => 'Juan',
    'name' => 'Pablo',
    'address' => 'Koningstraat 3',
    'city' => 'Brussels'
);
echo $user ['city'];
echo '<br><br>';
//Create an associative array: $me. Use at least 2 values ​​of the text, boolean and integer type.
$me = array(
    'name' => 'Pizzichillo',
    'firstName' => 'Deborah',
    'age' => 26,
    'employee' => 0,
);
echo($me['name']);
echo '<br>';
echo($me['employee']);
echo '<br><br><br><br>';
echo ('<h2>Multi-dimensional arrays</h2>');
//push hobbies into $me
$me['hobbies'] = array('Art','football', 'Skating');
$me ['hobbies'][] = 'taxidermy';
print_r($me);
echo('<br>');
//create new array similar to $me of dad with hobbies
$dad = array(
    'name' => 'Pizzichillo',
    'firstName' => 'Rocco',
    'age' => 53,
    'employee' => 0,
    'hobbies' => array(
        'Tai chi', 'reading'
    ),
);
//push $dad into $me via push
$me ['papa'] = array();
$me ['papa'] = $dad;
print_r($dad);
echo('<h4>dad array is pushed into me array</h4>');
echo "<pre>",print_r($me, true),"</pre>";
echo '<br><br>';
echo ('<h2>Manipulating arrays</h2>');
$countHobbiesMe = count($me['hobbies']);
$countHobbiesDad = count($me['papa']['hobbies']);
$sum = $countHobbiesDad + $countHobbiesMe;
echo('<h4>sum of hobbies from me and dad</h4>');
echo($sum);
echo('<h4>Changing values, in this case change name to Peeters</h4>');
$me['name'] = 'Peeters';
print_r($me['name']);
echo('<br>');
$soulmate = array(
    'name' => 'Pizzichillo',
    'firstName' => 'Rebecca',
    'age' => 22,
    'hobbies' => array(
        'movies', 'hairdresser'
    ),
);
$child = array(
    'name' => 'Dhondt',
    'firstName' => 'Emily',
    'age' => '25',
    'hobbies' => array(
        'movies', 'hiking'
    ),
);
echo('<h4>Create an array based on other arrays (2 or more)</h4>');
echo('<h4>intersection of hobbies from soulmate and child</h4>');
print_r(array_intersect($soulmate['hobbies'], $child['hobbies']));
echo ('<br>');
print_r(array_merge($soulmate['hobbies'], $child['hobbies']));
?>