<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
    <body>
        <h1>halaman login</h1>

            <?php if ( isset($_POST['submit'])){
                echo $_POST ['password'];
            }?>
        <form action="hafalan.php" method="get">
            <label for="nama">Nama  :	</label>
            <Input type="text" name="nama" id="nama">
            <br>
            <label for="password">Password  :</label>
            <Input type="password" name="password" id="password">
            <br>
            <button type="submit" name="submit">submit</button>
        </form>
    </body>
</html>
<?php 


?>