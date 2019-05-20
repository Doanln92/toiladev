<?php
include('../loader.php');
use Core\Arr;

checkLang();

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
    <?php
    $person = new Arr([
        'name' => 'Doãn',
        'age' => 27,
        'gender' => 'male'
    ]);
    ?>

    <p>
        <?php _text('name');
        echo ': ' . $person->name; ?>
    </p>
    <p>
        <?php _text('gender');
        echo ': ' . $person->gender; ?>
    </p>
    <p>
        <?php _text('age');
        echo ': ' . $person->age; ?>
    </p>

    <p>
        <?php
        $lang = getLocale();
        ?>
        <a href="?lang=<?php echo $lang == 'vi' ? 'en' : 'vi' ?>"><?php echo $lang == 'vi' ? 'watvh English Version' : 'Tiếng Việt' ?></a>
    </p>
</body>

</html>