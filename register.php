<html>
    <head>
        <title>註冊</title>
    </head>

    <body>
        <?php
            echo "<body bgcolor='#F5B4A1'>";
         ?>
        <font face="標楷體">
            <center><h1>註冊</h1></center>
        </font>
        <br/>
        <center><form action=registerInformation.php method="post" style="width:80%;" enctype="multipart/form-data">
            <font  face="標楷體" size='5'>
            帳號:&nbsp&nbsp<input type="text" name="uname" required><br/><br/>
            密碼:&nbsp&nbsp<input type="password" name="upass" required><br/><br/>
            電子信箱:&nbsp&nbsp<input type="email" name="uemail" required><br/><br/>
            連絡電話:&nbsp&nbsp<input type="tel" name="uphone" required><br/><br/>
            <input type="submit">
            </font>
        </form></center>
    </body>
</html>