<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capitals</title>
</head>

<body>
    <?php

    $capitals = [
        'Russian' => ['Moskow', 'Piter', 'Novosibirsk'],
        'France' => ['Paris', 'Marseilles', 'Lion', 'Nice'],
        'England' => ['London', 'Liverpool', 'Birmingham'],
    ];

    echo '<ul>';

    foreach ($capitals as $country => $towns) {
        echo '<li>';
        echo $country;

        echo '<ol>';

        foreach ($towns as $town) {
            echo "<li>$town</li>";
        }

        echo '</ol></li>';
    }

    echo '</ul>';
    ?>

    <!-- Сокращённое написание -->

    <ul>

        <? foreach ($capitals as $country => $towns) : ?>
            <li><?= $country ?>;
                <ol>

                    <? foreach ($towns as $town) : ?>
                        <li><?=$town?></li>
                    <? endforeach; ?>
                </ol>
            </li>
        <? endforeach; ?>

    </ul>
</body>

</html>