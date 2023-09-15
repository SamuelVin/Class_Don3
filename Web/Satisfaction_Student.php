<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="container-fluid">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="password" style="text-align:center; margin-top: 1%;"></input> 
    <input type="submit" style="text-align:center;" value=" Retour "></input>
    <a href="../index.php">index.php</a>
</form>

<h1 style="text-align:center; margin-top: 8%; margin-bottom: 10%">Comment était votre expérience?</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-4 justify-content center">
            <img src="../Image/happy.bmp" class="d-flex" style="margin: auto;"/>
            <input type="radio" name="choose" class="d-flex" style="margin: auto;"></input>
        </div>
        <div class="col-sm-4">
            <img src="../Image/mid.bmp" class="d-flex" style="margin: auto;"/>
            <input type="radio" name="choose" class="d-flex" style="margin: auto;"></input>
        </div>
        <div class="col-sm-4">
            <img src="../Image/angry.bmp" class="d-flex" style="margin: auto;"/>
            <input type="radio" name="choose" class="d-flex" style="margin: auto;"></input>
        </div>
    </div>
</div>

    

<!--
    <div class="d-flex align-items-center justify-content-center">
        <div class="justify-content-center">
            <img src="../Image/happy.bmp"/><br>
            <input type="radio" name="choose" style="padding-left: 60px"></input>
        </div>
        <div>
            <img src="../Image/mid.bmp"/><br>
            <input type="radio" name="choose"></input>
        </div>
        <div>
            <img src="../Image/angry.bmp"/><br>
            <input type="radio" name="choose"></input>
        </div>
    </div>
-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

