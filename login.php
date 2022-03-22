<html>
    <head>
        <title>登入</title>
    </head>

    <body>
        <?php
            echo "<body bgcolor='#B9ACEA'>";
        ?>
        <font face="標楷體">
            <center><h1>登入</h1></center>
        </font>
        <br/>
        <center><form action=Kenting.php method="post" style="width:80%;">
            <font  face="標楷體" size='5'>
            帳號:&nbsp&nbsp<input type="text" name="uname" required><br/><br/>
            密碼:&nbsp&nbsp<input type="password" name="upass" required><br/><br/>
            <input type="submit" value="登入">
            </font>
        </form></center>
    </body>
</html>