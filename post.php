<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"]) || empty($_POST["e-mail"]) || empty($_POST["phone"]) || empty($_POST["message"])) {
    echo "<span class=\"form-data-header\">You must fill in all the fields!</span>";
  } else {
    validate();
  }
} else {
  echo "<span class=\"form-data-header\">No data to display!</span>";
}

function showFormData() {
  foreach($_POST as $key => $value) {
    $key = ucfirst($key);
    echo "<span class=\"form-data-element\">&bull;&emsp;<span class=\"form-data-element-bold\">$key</span>:&emsp;$value</span>";
  }
}

function validate() {
  $_POST = array_map("trim", $_POST);
  $_POST = array_map("stripslashes", $_POST);
  $_POST = array_map("htmlspecialchars", $_POST);

  $nameErr = $emailErr = $phoneErr = "";

  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
    $nameErr = "Name must contain only letters and white spaces!";
  }
  if (!filter_var($_POST["e-mail"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Please enter valid email format!";
  }
  if(!preg_match("/^[0-9*#+ ]+$/", $_POST["phone"])) {
    $phoneErr = "Please enter valid phone number!";
  }
  if ($nameErr != "" || $emailErr != "" || $phoneErr != "") {
    if ($nameErr != "") {
      echo "<span class=\"form-data-header\">$nameErr</span>";
    }
    if ($emailErr != "") {
      echo "<span class=\"form-data-header\">$emailErr</span>";
    }
    if ($phoneErr != "") {
      echo "<span class=\"form-data-header\">$phoneErr</span>";
    }
  } else {
    echo "<span class=\"form-data-header\">Thanks for filling out our form! Here's your information:</span>"."<br/>";
    showFormData();
  }
}

?>
