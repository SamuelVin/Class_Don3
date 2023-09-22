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

<?php
    $passwordErr = $selectionErr = "";
    $password = $selection = "";
    $erreur = false;
    $nip = "4390";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["password"])){
            //$passwordErr = "Aucun Pin";
        }else{
            $password = test_input($_POST["password"]);
            if($password==$nip){
                $passwordErr = "Pin Correct";
            }else{
                $passwordErr = "* Pin Incorrect";
                $erreur=true;
            } 
        }
        if(empty($_POST["selection"])){
            $selectionErr = ", Erreur: Non Sélectioné";
            $erreur=true;
        }else{
            $selection = test_input($_POST["selection"]);
        }
    }
?>


<form name="Form_A" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <a id="selectionValue" style="display:none" value="<?php echo $selection;?>"></a>
    <input type="password" name="password" style="text-align:center; margin-top: 1%;" value="<?php echo $password;?>"></input> 
    <input type="submit" style="text-align:center;" value=" Retour "></input>
    <span class="error"><?php echo $passwordErr;?></span>
</form>
    <h1 style="text-align:center; margin-top: 4%; margin-bottom: 3%">Comment était votre expérience?</h1>
    <div class="container" style="border: solid 2px grey; background-color: #f2f2f2;  border-radius: 100px">
        <form name="Form_B" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="row">
                <div class="col-sm-4 justify-content center" style="height: 375px">
                    <img id="Reaction_1" src="../Image/happy2.png" class="d-flex" style="margin: auto; margin-top: 40px; height: 75%; border-radius: 50px; border: solid #595959 5px"/>
                </div>
                <div class="col-sm-4 justify-content center" style="height: 375px">
                    <img id="Reaction_2" src="../Image/mid2.png" class="d-flex" style="margin: auto; margin-top: 40px; height: 75%; border-radius: 50px; border: solid #595959 5px"/>
                </div>
                <div class="col-sm-4 justify-content center" style="height: 375px">
                    <img id="Reaction_3" src="../Image/angry2.png" class="d-flex" style="margin: auto; margin-top: 40px; height: 75%; border-radius: 50px; border: solid #595959 5px"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 justify-content center">
                    <p class="d-flex" style="text-align: center; padding-left: 30px; width: 320px">Id="Id" <?php echo $selectionErr?> </p>
                </div>
                <div class="col-sm-10 justify-content center d-flex">
                    <input type="submit" style="margin: auto; width: 35%; height: 130%; background-color: #f2f2f2; font-weight: bolder; text-align: center"></input>
                </div>
            </div>
        </form>
    </div>

    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

<script src="../JS/Sat_Student.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

