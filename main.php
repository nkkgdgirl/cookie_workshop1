<html>
    <body>
        <?php
            $check = $_COOKIE["language"];
            if($check=='en'){
                echo "Welcome";
            }
            else if($check=='th'){
                echo "ยินดีต้อนรับ";
            }
            else if($check=='jp'){
                echo "ようこそ";
            }
        ?>
    </body>
</html>