<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Random Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php


if(isset($_POST['generate']))
{
    $length = $_POST['number'];
    $string = "abcdefghijklmnopqrstuvwxyz0123456789@#$%^&*";
    $string = str_shuffle($string);
    $result = substr($string,0,$length);

}

?>

<div class="contanier">
    

<div class="box">   
<div class="Generate_container">
    
    <div class="title">Generate Random Password</div>
    <div class="gen-inputs">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="POST">
        <label>Password</label>
        <input type="text" id="generate_input" name="result" value="<?php echo $result; ?>" placeholder="Generate Random Password" />
        <label>Choose Character </label>
        <h2 id="char"> 8 Character  &nbsp;&nbsp; <input required type="radio" id="char" value="8" name="number"><br>  </h2>
        <h2 id="char"> 10 Character &nbsp;&nbsp;  <input required type="radio" id="char" value="10" name="number"><br> </h2>
        <h2 id="char"> 12 Character &nbsp;&nbsp; <input required type="radio" id="char" value="12" name="number">     </h2>

        <input type="submit" name="generate" value="Generate" id="generate_btn">
      </form>
    </div>
  </div>
  </div>

</div>
</body>
</html>