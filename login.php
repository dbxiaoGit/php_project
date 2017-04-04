<?php
    session_start();
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $con=mysql_connect("127.0.0.1","root","");
        mysql_select_db("phptest");
        $sql="select count(*) as num from users where username='".$username."' 
        and password='".$password."' ;";
        $query_result=mysql_query($sql);
        
        echo "<html><head><title>验证中。。。</title>
            <meta http-equiv='content-type' content='text/html;charset=utf-8'>
            </head><body>";
            
           // echo $sql;
            
        while($re=mysql_fetch_object($query_result)){
            if($re->num ==1){
                echo "<script type='text/javascript'>alert('登录成功！');</script>";
                //setcookie("username",$username,0);
                $_SESSION['username'] = $username ;
                echo "<script type='text/javascript'>window.location.href='list.php';</script>";
            } else {
                echo "<script type='text/javascript'>alert('用户名或密码错误！');</script>";
                echo "<script type='text/javascript'>window.location.href='index.html';</script>";
                $_SESSION['username'] = '' ;
            }
        }
        
        echo "</body></html>";
        
        mysql_close($con);
    }else {
        echo "error request .miss parameter";
    }
?>