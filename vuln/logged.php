<html>
    <body>

    <?php 

        require_once "db.php";
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "Select * from utente where username='$username' and password='$password' ";
        $res = mysqli_query($conn, $query);

        $rows = mysqli_num_rows($res);

        if($rows>0){?>
        <p>
        Welcome <?php echo $username; ?><br>
        This is your private area!
        </p>
        <?php
        }
        else{
            echo "Wrong user or password";
            echo "<br><br>";
            echo $query;
        }
        ?>

    </body>
</html>