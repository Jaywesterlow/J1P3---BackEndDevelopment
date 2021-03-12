<?php

print_r( $_GET );
// print( $_GET['energie']);
// print_r( $_GET['energie']);

$apparaat = [
    'pizza' => 'pizza oven',
    'water' => 'waterkoker',
    'magn' => 'magnetron',
    'air' => 'airfryer',
];

print $_GET['energie'];
print $apparaat[$key];

// foreach ($_POST['energie'] as $key) {
//    print ($key) . ': ' . $apparaat[$key] . '<br>';
// }

?>