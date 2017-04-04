<?php
    $title=$_POST['title'];
    $thref=$_POST['thref'];
    $content=$_POST['content'];
    $serverlist=$_POST['serverlist'];
    $imghref=$_POST['imghref'];
    $con=mysql_connect("127.0.0.1","root","");
    mysql_select_db("phptest");
    $sql="insert into userinfo(title,thref,content,serverlist,imghref) values(
        '".$title."','".$thref."','".$content."','".$serverlist."','"
        .$imghref."');";
    mysql_query($sql);
    mysql_close($con);
    echo    "<html>
                <head>
                    <title>添加</title>
                    <meta http-equiv='content-type' content='text/html;charse
                    t=utf-8'>     
                </head>    
                <body>
                <?php //echo $sql;?>
                    <a href='list.php'>已添加，点击此处返回</a>
                </body>
            </html>";
    
?>
