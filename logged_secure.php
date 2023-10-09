<html>
<body>

<?php 

    require_once "db.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = mysqli_prepare($conn, "Select * from utente where username= ? and password= ? ");
    $query->bind_param("ss",$username,$password);
    $query->execute();
    $res = $query -> get_result();
    $rows = $res-> fetch_row();



    if($rows != null){?>
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