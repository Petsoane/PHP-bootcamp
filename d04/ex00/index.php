<?php
session_start();
if ($_GET["submit"] == "OK"){
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
?>

<html>
    <body>
        <form action= "." method="GET">
            login   :  <input type = "text" name="login" value="<?php if ($_SESSION["login"]) {echo $_SESSION["login"];}?>"/>
            <br />
            passwd : <input type="text" name="passwd" <?php echo 'value="'.$_SESSION["passwd"].'"'; ?>/>
            <br />
            <input type="submit" name="submit" value='OK'/>
        </form>
    </body>
</html>