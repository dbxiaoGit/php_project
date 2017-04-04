<?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $con=mysql_connect("127.0.0.1","root","");
            mysql_select_db("phptest");
            $sql="select * from userinfo where id=".$id.";";
            $result=mysql_query($sql);
            $re=mysql_fetch_object($result);
    
?>
<html>
    <head>
        <title>编辑</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">     
    </head> 
    <body>
        <div style="
                position: absolute;   
                top: 30%;   
                left:50%;   
                margin: -150px 0 0 -150px;   
                width: 500px;   
                height: 300px; ">
            <form action='edit2.php' method='POST'>
                <div style="background-color:green;"><h1>修改信息：</h1><br>Ple
                ase fill all the texts in fields</div>
                <input type='hidden' name='id' <?php echo "value='".$id."'";?>>
                <div>标题：<br><input type='text' name='title' <?php echo "value
                ='".$re->title."'";?>></div>
                <div>标题链接：<br><input type='text' name='thref' <?php echo 
                "value='".$re->thref."'";?>></div>
                <div>正文：<br><textarea name='content' row='10' col='30' ><?php
                echo $re->content;?> </textarea></div>
                <div>服务列表：<br><input type='text' name='serverlist' <?php 
                echo "value='".$re->serverlist."'";?>></div>
                <div>图片地址：<br><input type='text' name='imghref' <?php echo
                "value='".$re->imghref."'";?>></div>
                <div style="background-color:green;"><input type='submit'>&nbsp
                <input type='button' value='返回' onClick='location.href="list
                .php"'/></div>
            </form>
        </div>
    </body>
</html>
<?php       mysql_close($con);
        }
    }else {
        echo " please login first !";
    }
 ?>