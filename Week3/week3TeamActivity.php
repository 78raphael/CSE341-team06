<!doctype html>
<html>
    <head>
        <title>
            Week 3 Team Activity
        </title>
    </head>
    <body>
        <form action="week3TeamActivity2.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            
            <?php
            $majors = array("CS"=>"Computer Science", "WBT"=>"Web Design And Technology",
            "CIT"=>"Computer Information Technology", "CE"=>"Computer Engineering");
            foreach ($majors as $key=>$value) {
                echo '<input type="radio" name="major" value="'.$value.'">'.$value.'';
            } 
            
        ?>
            <!--
            Major: <input type="radio" name="major" value="Computer Science">Computer Science
            <input type="radio" name="major" value="Web Design And Technology">Web Design and Technology
            <input type="radio" name="major" value="Computer Information Technology">Computer Information Technology
            <input type="radio" name="major" value="Computer Engineering">Computer Engineering
            -->
            Comments <textarea name="comment" rows="5" cols="50"></textarea><br>
            Continents: <input type="checkbox" id="continent1" name="landarea[]" value="na">
            <label for="continent1">North America</label><br>
            Continents: <input type="checkbox" id="continent2" name="landarea[]" value="sa">
            <label for="continent2">South America</label><br>
            Continents: <input type="checkbox" id="continent3" name="landarea[]" value="eu">
            <label for="continent3">Europe</label><br>
            Continents: <input type="checkbox" id="continent4" name="landarea[]" value="as">
            <label for="continent4">Asia</label><br>
            Continents: <input type="checkbox" id="continent5" name="landarea[]" value="au">
            <label for="continent5">Australia</label><br>
            Continents: <input type="checkbox" id="continent6" name="landarea[]" value="af">
            <label for="continent6">Africa</label><br>
            Continents: <input type="checkbox" id="continent7" name="landarea[]" value="an">
            <label for="continent7">Antarctica</label><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>