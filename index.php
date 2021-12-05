



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container-fluid m-2  ">
  
  <form method="POST">
    <div class="row">
      <div class="col">
        <label for="inlineGridName" class="sr-only">First Name</label>
        <input type="text" class="form-control" name="first" id="inlineGridName" placeholder="Enter First Name">
      </div>
      <div class="col">
        <label for="inlineGridEmail" class="sr-only">Second Name</label>
        <input type="text" name="second" class="form-control" id="inlineGridEmail" placeholder="Enter Second Name">
      </div>
    
      <div class="col">
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
 <div class="container-fluid  d-flex justify-content-center  ">
 <p>
 <?php
 if(!empty($_POST['first']) && !empty($_POST['second'])){
    echo "<pre><button class='btn btn-outline-warning'>".$_POST['first'] . "</button>   and   <button class='btn btn-outline-danger'>".$_POST['second']."</button></pre>";
     
 $number = rand(0, 100);



?></p>
</div>
<div class=" justify-content-center row">
    <div class="col-md-6">
<div class="progress ">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $number ?>%">
    <span class="sr-only"><?php echo $number ?>% Love</span>
  </div>
</div>
</div>
</div>
<?php
 }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>