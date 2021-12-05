<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Chat in Console</h1>
    <img src="file:///D:/OpenServer5.4/domains/yii2-photogallery-module/web/images/photogallery/96.jpg" alt="">
    <script type="text/javascript">
    var conn = new WebSocket('ws://test:8080');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        console.log(e.data);
    };

    </script>
  </body>
</html>
