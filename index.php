<?php
require_once './vendor/autoload.php';
$faker = Faker\Factory::create();

$company = $faker->company;
$product = $faker->word;
$material = 'steal';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="col-md-10 col-md-offset-1">
    <div class="col-md-9 left">
        <?php

        echo '<h2 id="title">'.$company.'</h2>';
        echo '<h3 id="slogan">'.$faker->catchPhrase.'</h3>';


        $loader = new Twig_Loader_Array(array(
        'about' => '<h3 id="about">At {{ companyName }}, we create {{productAdjective}} {{productName}} made of {{productMaterial}}</h3>',
        ));

        $twig = new Twig_Environment($loader);
        echo $twig->render(
            'about', array(
                'companyName'        => $company,
                'productAdjective'   => 'great',
                'productName'        => 'M'.$product,
                'productMaterial'    => $material,
            ));

        echo'<h3>Find out more on'.$faker->domainName.'</h3>';

        ?>
        <div class="card col-md-6 col-md-offset-2">
        <?php
        echo '<img id="imgcard" class="card-img-top" src="'.$faker->imageUrl.'" alt="Card image cap">';
        ?>
            <div class="card-block">

                    <?php

                    $loaderr = new Twig_Loader_Array(array(
                    'aboutt' => '<h3 id="">{{ productName }}</h3>
                    <p>Material: {{ productMaterial }}<br>
                    Color: {{ color }}
                    </p>
                    <h3>{{ price }}$ only!</h3>',
                    ));

                    $twigg = new Twig_Environment($loaderr);
                    echo $twigg->render(
                        'aboutt', array(
                            'companyName'        => $company,
                            'productAdjective'   => 'great',
                            'productName'        => 'M'.$product,
                            'productMaterial'    => $material,
                            'color'              => $faker->safeColorName,
                            'price'              => $faker->randomNumber(2),
                        ));

                    ?>

            </div>
            <div class="col-md-10 col-md-offset-1">
                <a href="#" class="btn btn-primary center-block">Take my money</a>
            </div>
        </div>
</div>

<div class="col-md-3 right">

    <?php
        echo '<img id="roundimg" src="'.$faker->imageUrl.'" alt="">';


            $loader = new Twig_Loader_Array(
                array(
            'user' => '<h3 id="">{{ userName }}</h3>
            <h3>{{ jobTitle }}</h3>',
            ));

            $twigg = new Twig_Environment($loader);
            echo $twigg->render(
                'user', array(
                    'userName'           => $faker->userName,
                    'jobTitle'           => $faker->jobTitle,
                ));

    ?>
    <h3>Contact info</h3>
    <p>
        email@email.com <br>
        06 06 06 06 06
    </p>
    <p>
        13 rue Vielle <br>
        92500 Ville-nouvelle
    </p>


</div>

</div>



</body>
</html>