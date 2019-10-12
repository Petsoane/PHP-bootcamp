<html>
<head><title>ex02</title></head>
<body>
<?php
    foreach($_GET as $key=>$value){
        echo $key, ": ", " ".$value, "<br />";
    }
?>
</body>
</html>