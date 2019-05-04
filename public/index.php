<?php
include('../loader.php');
use Core\Arr;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello world</title>
</head>
<body>
    <h2>Tôi là DEV</h2>
    <pre>
    <?php
        $person = new Arr([
            'name' => 'Doãn',
            'age' => 27,
        ]);

        // echo $_GET['search']??'chưa gán giá trị';
        // $person->set('gender', 'female');
        // $person->ujtgfhtdhdt = "11";
        // echo $person->count() . '<br>';
        // echo count($person);
        echo $person->gender("male");
    ?>
    </pre>
</body>
</html>