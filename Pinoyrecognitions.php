<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pinoy Heart Radio|Recognitions</title>
    <meta name="description" content="Pinoyrecognitions">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="./style.css">
</head>
<body id="ExHome">
    <h4 class="nameDJx" >ON Board</h4>
    <h4 class="namex" id="DJid"><script type="text/javascript" src="//cdn.voscast.com/stats/display.js?key=1910c8418e00c399b6dffbca4135f99f&stats=servergenre"></script></h4>
    <form class ="donate1" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="TAPXWXAFFAPWL">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>    
          <h4 class="CertHead">​C e r t i f i c a t e s</h4>  
          <div class="Reccontainer">
            <?php include ('ReconCertificate.php');?> 
          </div>
  <!--=================================Scripts=====================================================-->
  <script src="./js/jquery-3.6.0.js"></script>     
  <script>
    $('document').ready(function() {
        $(window).scrollTop(0,0);
    });
    $('body').on('dragstart drop', function(e){
        e.preventDefault();
        return false;
    });
    $(document).bind("contextmenu",function(e){
        return false;
    });
  </script>
  <!--=================================End Scripts================================================--> 
    
</body>
</html>