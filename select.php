<html>
    <body>
        <?php
        if($_GET["language"]=="en" ){
            setcookie("language","en",time()+3600*24);
        }
        else if(($_GET["language"]=="th")){
            setcookie("language","th",time()+3600*24);
        }
        else if(($_GET["language"]=="jp")){
            setcookie("language","jp",time()+3600*24);
        }
        ?>
    </body>
</html>