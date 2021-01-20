<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
your email address is: <?php echo $_POST["email"]; ?><br>
your major is: <?php echo $_POST["major"]; ?><br>
your comment is: <?php echo $_POST["comment"]; ?>

<?php 
    $continents = array('na' => 'North America', 'sa' => 'South America', 'eu' => 'Europe', 'as' => 'Asia', 'au' => 'Australia', 'af' => 'Africa', 'an' => 'Antarctica');
    $land = $_POST['landarea'];
    if(empty($land)) 
      {
        echo("No continents selected");
      } 
      else
      {
        $count = count($land);
        foreach($land as $key=>$value)
        {
          echo($continents[$value] . "<br>");
        }
      }
?>


<!--
your visited countries are: <?php if (isset($_POST["continent1"])) {
    echo $_POST["continent1"];
} ?> <br>
<?php if (isset($_POST["continent2"])) {
    echo $_POST["continent2"];
} ?> <br>
<?php if (isset($_POST["continent3"])) {
    echo $_POST["continent3"];
} ?> <br>
<?php if (isset($_POST["continent4"])) {
    echo $_POST["continent4"];
} ?> <br>
<?php if (isset($_POST["continent5"])) {
    echo $_POST["continent5"];
} ?> <br>
<?php if (isset($_POST["continent6"])) {
    echo $_POST["continent6"];
} ?> <br>
<?php if (isset($_POST["continent7"])) {
    echo $_POST["continent7"];
} ?> <br>
-->

</body>
</html>