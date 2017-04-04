<?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION['username']!= '' ){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $con=mysql_connect("127.0.0.1","root","");
            mysql_select_db("phptest");
            $sql="delete from userinfo where id='".$id."';";
            mysql_query($sql);
            mysql_close($con);
            echo "<html>
                    <head>
                        <title>删除</title>
                        <meta http-equiv='content-type' content='text/html;cha
                        rset=utf-8'>     
                    </head>    
                    <body>
                        <a href='list.php'>已删除，点击此处返回</a>
                    </body>
                </html>";
        }
    }else {
        echo "please login first !";
    }
?>