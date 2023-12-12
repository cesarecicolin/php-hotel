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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<!-- 'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4 -->
<body>
    

    <section>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">VOTE</th>
      <th scope="col">PARKING</th>
      <th scope="col">DISTANCE TO CENTER</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($hotels as $info_hotel) { ?>

    <tr>
      <th scope="row"><?php echo $info_hotel['name']; ?></th>
      <td><?php echo $info_hotel['description']; ?></td>
      <td><?php echo $info_hotel['vote']; ?></td>
      
      <td>
      <?php if ($info_hotel['parking'] === true) { ?>
                         si 
                        <?php } else { ?>
                            no

                       <?php } ?>
      </td>
      <td><?php echo $info_hotel['distance_to_center']; ?></td>
    </tr>
   
  </tbody>
  <?php } ?>
</table>
    </section>
</body>
</html>