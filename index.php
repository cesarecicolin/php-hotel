<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4 -->
<body>
    <section>
    <?php foreach ($hotels as $info_hotel) { ?>
                <article>
                    <h2>
                        <?php echo $info_hotel['name']; ?>
                    </h2>
                    <p><?php echo $info_hotel['description']; ?></p>
                    
                    <p><?php echo $info_hotel['vote']; ?></p>
                    <?php if ($info_hotel['parking'] === true) { ?>
                        <p> si </p>
                        <?php } else { ?>
                            <p>no</p>

                       <?php } ?>
                     
                    <p><?php echo $info_hotel['distance_to_center']; ?></p>
                </article>
                <?php } ?>
    </section>
</body>
</html>