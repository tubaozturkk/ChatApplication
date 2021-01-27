
<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

    <body style="background-color:black" >
        <input readonly class="chat-window-message" name="UserName" type="text" autocomplete="off" autofocus value="<?php echo $_SESSION["RoomName"]?>" />
        <div id="messagebody">
        <ul class="chat-thread" id="messagelist">
              <?php
                ini_set("allow_url_fopen", 1);
                $RoomName =  $_SESSION["RoomName"];
                $UserName =  $_SESSION["UserName"];
                $url = "http://ChatApp/messages/$RoomName/$UserName";
                $json = file_get_contents($url);
                $json_data = json_decode($json, true);
                $listItemL= '<li style="float:left;color:#f58634">';
                $listItemR = '<li style="float:right;color:#00af91">';
                foreach ($json_data AS $d){
                  if($d['UserId'] == $_SESSION['UserName'])
                  {
                    echo $listItemR;
                    echo '<label style="font-size:10px">' ;
                      echo $d['UserId'];
                    echo '</label>';
                    echo '<br>' ;
                      echo '<label>';
                      echo $d['Message'];
                    echo '</label>';
                    echo '<br>';
                    echo '<label style="font-size:10px">';
                      echo $d['Date'];
                    echo '<label>';
                    echo '</li>';
                  }
                  else
                  {
                    echo $listItemL;
                    echo '<label style="font-size:10px">';
                      echo $d['UserId'];
                    echo '</label>';
                    echo '<br>' ;
                    echo '<label>';
                      echo $d['Message'];
                    echo '</label>';
                    echo '<br>';
                    echo '<label style="font-size:10px">';
                      echo $d['Date'];
                    echo '<label>';
                    echo '</li>';
                  }
                }
              ?>
            </ul>
      </div>
      <form class="chat-window" action="/sendmessage" method="POST">
        <input type="hidden" name="RoomName" value="<?php echo $_SESSION["RoomName"]?>" />
        <input readonly class="chat-window-message" name="UserId" type="text" autocomplete="off" autofocus value="<?php echo $_SESSION["UserName"]?>" />
        <input class="chat-window-message" name="Message" type="text" autocomplete="off" autofocus />
        <button type="submit" name="submit" class="button button1">Send </button>
      </form>
    </body>
    <script type="text/javascript">
      var messagelist = document.querySelector('#messagelist');
      messagelist.scrollTop = messagelist.scrollHeight - messagelist.clientHeight;
      $(document).ready(function(){
      $("#messagebody").load("chat.php");
       setTimeout(function() {
           $("#messagebody").load("chat.php");
        }, 2);
      });
    </script>
</html>
