
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php
    $parking = $_GET["parking"];
    $vote = $_GET["vote"]; 
    ?>
    <!-- TABELLA -->
    <table class="table table-success table-striped-columns mt-4">
    <thead>
        <tr>
            <?php foreach ($hotels as $item) { ?>
            <th scope="col"><?php echo $item["name"] ?></th>
            <?php } ?>   
        </tr>
  </thead>
  <tbody>
      <?php foreach ($hotels as $item) { ?>
        <tr>
            <td><?php echo $item["description"] ?></td>
        </tr>
        <tr>
            <td><?php echo $item["vote"] ?></td>
        </tr>
        <tr>
            <td><?php echo $item["parking"] ?></td>
            <tr>
                <td><?php echo $item["distance_to_center"] ?></td>
            </tr>
        <?php } ?>
</tbody>
</table>
    <!-- /TABELLA -->



        <form action="index.php" method="GET">
            <div>
                <label for="parking">Parcheggio</label>
                <select name="parking" id="parking">
                    <option value="tutti">Tutti gli hotel</option>
                    <option value="parcheggio">Con parcheggio</option>
                    <option value="senza">Senza parcheggio</option>
                </select>
                <label for="vote">Stelle hotel</label>
                <input type="number" id="vote" name="vote">
            </div>
            <button type="submit">Cerca</button>
            <button type="reset">Annulla</button>
        </form>
    </div>

</body>
</html>