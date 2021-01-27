<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="../css/style.css" rel="stylesheet">
    <title></title>
  </head>
  <body style="background-color:black ">
    <div class="center">
    <form action="/loginroom" method="POST">
      <label style="width: 80%;margin: 0 auto;color:green">Welcome</label><br />
      <input readonly class="chat-window-message" name="UserName" type="text" autocomplete="off" autofocus value=<?php echo $_SESSION['UserName'] ?> /><br><br>
      <label style="width: 80%;margin: 0 auto;color:green">Room Name : </label><br />
      <input class="chat-window-message" name="RoomName" type="text" autocomplete="off" autofocus /><br><br>
      <button type="submit" name="submit" class="button button1">Let's Chat</button>
    </form>
  </div>
  </body>
</html>
