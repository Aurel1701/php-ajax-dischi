<!-- includo il file data.php che ho creato apposta a parte
 da integrare nell'index -->
<?php
include __DIR__ . "/data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- creo l'header col logo e lo sfondo di background -->
<header class="contain">
    <div class="logo">
      <img class="img-logo" src="./assets/logo.png" alt="" />
    </div>
</header>

<!-- creo nel main la struttara per visulizzare le card -->
<main class="container-fluid">
<div class=" d-flex justify-content-center flex-wrap pt-5">

<!-- ciclo per visulizzare le card nel data.php -->
<?php
foreach ($discs as $discs) { ?>
    <div class="card text-center mb-3" style="background-color:#2E3A46">
        <div class="img">
            <img class="img-fluid" src="<?php echo $discs['poster'] ?>">
        </div>
        <div class='text text-light'>
            <h4 class='text-uppercase fw-bold fs-6 mt-3'> <?php echo $discs['title'] ?></h4>
            <p class='text-secondary'> <?php echo $discs['author'] ?><br>
            <?php echo $discs['year'] ?></p>
        </div>
    </div>
<?php } ?>
</div>

</main>
</body>
</html>