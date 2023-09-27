<?php
$possible_chars ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?#*@%$&£ç§';

$has_password = isset($_GET["number"]);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Alessandro Facci" />
  <meta name="description" content="exercise" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- font awesome -->
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->
  <!-- css -->
  <!-- <link rel="stylesheet" href="./style/style.css" /> -->
  <!-- title -->
  <title>Document</title>
</head>

<body>
  <div class="container mt-5">
    <div class="mb-3">
      <div class="card text-bg-dark mb-3" style="max-width: 26rem;">
        <div class="card-header">
          <h4>Generatore di password</h4>
        </div>
        <div class="card-body">
          <form action="./index.php" method="GET">
            <label for="password" class="form-label">Genera password</label>
            <input type="number" min="8" max="20" step="1" class="form-control" id="password"
              placeholder="Scrivi quanti caratteri deve avere la password" name="number" required>
            <input type="submit" class="btn btn-primary mt-3" value="Genera">


            <input type="reset" value="Reset" class="btn btn-warning mt-3">
          </form>
        </div>

      </div>
    </div>
  </div>
</body>

</html>