<?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $thref=$_POST['thref'];
        $content=$_POST['content'];
        $serverlist=$_POST['serverlist'];
        $imghref=$_POST['imghref'];
        $con=mysql_connect("127.0.0.1","root","");
        mysql_select_db("phptest");
        $sql="update userinfo set title='".$title."' , thref='".$thref."' , 
        content='".$content."' , serverlist='".$serverlist."' , imghref='".
        $imghref."' where id=".$id.";";
        mysql_query($sql);
        mysql_close($con);
    
?>
<html>
    <head>
        <title>修改</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">     
    </head> 
    <body>
    <?php //echo $sql;?>
        <a href='list.php'>已修改，点击此处返回</a>
    </body>
</html>
<?php
    } else {
        echo "please login first!";
    }
?>