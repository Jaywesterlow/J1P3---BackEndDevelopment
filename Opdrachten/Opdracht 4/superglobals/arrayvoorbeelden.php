<html>
<head>
    <title>Arrays vervolg</title>
</head>
<body>
<?php

$student = [
    '32333' => 'Jaymar Westerlow',
    '30528' => 'Remy Duivesteijn',
    '24114' => 'Kaan Secen'
    ];

    foreach ($student as $key => $value) {
        print ($key) . ' ' . $value . '<br>';
    }


    $week = [
        'ma' => 'maandag',
        'di' => 'dinsdag',
        'wo' => 'woensdag',
        'do' => 'donderdag',
        'fri' => 'vrijdag',
        'zat' => 'zaterdag',
        'zon' => 'zondag'
    ];

    foreach ($week as $key => $value) {
        print ($key) . ' ' . $value . '<br>';
    }

    $units = [
        'fro' => 'Frontend',
        'bap' => 'Backend',
        'ux' => 'User Experience',
        'bo' => 'Beroeps opdracht'
    ];

    $docent = [
        'brah' => '',
        'gomb' => '',
        'hits' => ''
    ];

    $apparaat = [
      'PO' => 'pizza oven',
      'WK' => 'waterkoker',
      'M' => 'magnetron',
      'AF' => 'airfryer'
    ];

    foreach ($apparaat as $key => $value) {
        print ($key) . ' ' . $value . '<br>';

//    print_r($week);
//    var_dump($week);

    echo $week['zon'];
    echo $docent['gomb'];
    echo $student['32333'];

?>

</body>
</html>
