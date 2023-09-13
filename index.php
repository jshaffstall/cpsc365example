<html>
  <head>
    <title>My Page</title>
  </head>
  <body>
    <h1>My Web Page</h1>
    <?php
    if (isset($_POST['userid']))
    {
    }
    else
    {
    ?>

    <form method="POST">
    User id: <input type="text" name="userid"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
    </form>
    <?php
    }
    ?>
  </body>
</html>
