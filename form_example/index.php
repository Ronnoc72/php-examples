<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
</head>
<body>
  
  <form method="post">
    <label for="terms">Terms</label>
    <input id="terms" type="checkbox" name="terms">

    <fieldset>
      <label for="blue">Blue</label><input id="blue" type="radio" name="color">
      <label for="green">Green</label><input id="green" type="radio" name="color">
      <label for="red">Red</label><input id="red" type="radio" name="color">
    </fieldset>

    <button>Send</button>
  </form>

</body>
</html>