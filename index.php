<?php
include("dc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online db</title>
</head>
<body>
    <form action="#" method="post">
        <h3>Send details:</h3>
        <input type="text" name="un" placeholder="Username" id=""><br>
        <input type="text" name="up" placeholder="Password" id=""><br>
        <input type="submit" name="su" value="Send">
    </form>
    <?php
    if (isset($_POST['su'])) {
        $n=$_POST['un'];
        $p=$_POST['up'];
        $i=mysqli_query($conn,"INSERT into account values(null,'$n','$p')");
        if($i){
            ?>
            <script>
                alert("inserting succeded !");
            </script>
                        <?php
        }else{
            ?>
<script>
    alert("inserting failed !");
</script>
            <?php
        }

    }
    ?>
</body>
</html>