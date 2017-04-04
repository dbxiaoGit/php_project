<?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION['username'] != '') {
        $username=$_SESSION['username'];
        if(isset($_POST['title'])){
            $title=$_POST['title'];
            $con=mysql_connect("127.0.0.1","root","");
            mysql_select_db("phptest");
            $sql="select * from userinfo where title like '%".$title."%';";
            $query_result=mysql_query($sql);
            
            echo "<html><head><title>信息列表</title>
                <meta http-equiv='content-type' content='text/html;charset=utf-8'>
                </head><body>";
            echo "<table><tr><td>欢迎用户：</td>
            <td>".$username."</td>
            <form action='search.php' method='POST'><td><input type='text' name
            ='title' ><input type='submit' value='search'></td></form>
            <td><a href='add1.php'>添加</a></td><td><a href='logout.php'>退出
            </a></td></tr></table>";
            
            echo "
                <table border='1'>
                <tr><td>编号</td><td>标题</td><td>标题链接</td><td>正文</td>
                <td>操作</td></tr>    
                ";
            while ($re=mysql_fetch_object($query_result)) {
                echo "<tr>";
                echo "<td>".$re->id."</td>";
                echo "<td>".$re->title."</td>";
                echo "<td>".$re->thref."</td>";
                echo "<td>".$re->content."</td>";
                echo "<td><a href='edit1.php?id=".$re->id."'><button>Edit
                </button></a><a href='delete.php?id=".$re->id."'><button>Delete
                </button></a></td>";
                echo "</tr>";
            }
            
            echo "
                </table>
            ";
            
            
            echo "</body></html>";
            
            mysql_close($con);
        }
    } else {
        echo "please login first !";
    }
?>