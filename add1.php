<?php
    session_start();
    if(isset($_SESSION['username']) and $_SESSION['username'] != "") {
        $username = $_SESSION['username'];
        echo $username."<hr/><br>";
        echo"<html>
                <head>
                    <title>添加</title>
                    <meta http-equiv='content-type' content='text/html;charset
                    =utf-8'>     
                </head>    
                <body>
                    <div style='
                            position: absolute;   
                            top: 30%;   
                            left:50%;   
                            margin: -150px 0 0 -150px;   
                            width: 500px;   
                            height: 300px; '>
                        <form action='add2.php' method='POST'>
                            <div style='background-color:green;'><h1>新增信息：
                            </h1><br>Please fill all the texts in fields</div>
                            <div>标题：<br><input type='text' name='title'></div>
                            <div>标题链接：<br><input type='text' name='thref'>
                            </div>
                            <div>正文：<br><textarea name='content' row='10'
                            col='30'></textarea></div>
                            <div>服务列表：<br><input type='text' name=
                            'serverlist'></div>
                            <div>图片地址：<br><input type='text' name='imghref'
                            ></div>
                            <div style='background-color:green;'><input type=
                            'submit'>&nbsp<input type='button' value='返回' 
                            onClick='location.href=\"list.php\"'/></div>
                        </form>
                    </div>
                    
                </body>
            </html>";
    } else {
        echo "please login first!" ;
    }
 