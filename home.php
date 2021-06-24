<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">   
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">   
    <link rel="stylesheet" href="./style.css">
</head>
<body id="intro">
<div id="loader-wrapper">
    <div class="loader-logo">
        <img src="./image/Logo.png" alt="HeadLogo">
    </div>
    <div id="loader"></div>     
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>     
</div>
<section id="Homepage">
        <div class="HomeRow1">
            <div class="Homecolumbox">
                <div class="RqSong">
                    <img class="ReSongImg" id="linkReqSong" type="button" data-toggle="modal" data-target="#Reqsong" src="getHomeImages.php?imagetagvalue=ReSongImg" alt=""/>
                </div>
                <div class="baner1">
                    <img src="./image/carousel/leftbar.gif">
                </div>
            </div>
            <div class="Homecolumbox">
                <div class="DJPro">
                    <h3 class="nameDJ">On board</h3>
                    <h4 class="name" id="DJid"><script type="text/javascript" src="//cdn.voscast.com/stats/display.js?key=1910c8418e00c399b6dffbca4135f99f&stats=servergenre"></script></h4>
                </div>       
                <img id="myImage" class="DJName" src="getimage.php?DJNameS=ROBOCAT" alt="">
                <div class="HomeInnerRow">
                    <div class="innerrowcolum">
                        <div id="Avisual">
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                            <span class="Abar"></span>
                        </div>            
                        <marquee id="mar" scrollamount="3">
                            <script type="text/javascript" src="//cdn.voscast.com/stats/display.js?key=1910c8418e00c399b6dffbca4135f99f&stats=songtitle"></script>
                        </marquee>        
                    </div>
                </div>                        
            </div>
            <div class="Homecolumbox">
                <div class="OnChat">
                    <img class="Chatimage" id="linkChat" type="button" data-toggle="modal" data-target="#Chats" src="getHomeImages.php?imagetagvalue=Chatimage" alt=""/>
                </div>   
                <div class="baner2">
                    <img src="./image/carousel/rightbar.gif">
                </div>
            </div>
        </div>
        <div class="HomeRow2">
            <div class="HomeColumn2">
                <img id="logo8id" class = "logo8id" src="getHomeImages.php?imagetagvalue=logo8id" alt="">                        
            </div>
            <div class="HomeColumn2">
                <marquee behavior="" direction="" class="SponMarque" scrollamount='3' onmouseover="this.stop();" onmouseout="this.start();">                    
                 <?php include 'sponser.php'; ?>
                </marquee>          
                <div class="sponserhead">POWERED BY</div>                  
                <marquee behavior="alternate" direction="" class="GovMarque" scrollamount='4' onmouseover="this.stop();" onmouseout="this.start();">
                    <?php include 'GovLinks.php'; ?>
                </marquee>  
            </div>
            <div class="HomeColumn2">
                <img id="logoApplink" data-toggle="modal" data-target="#ApplinksForm" class = "logoliveid" src="getHomeImages.php?imagetagvalue=logoliveid" alt=""/>
            </div>
        </div>
        <div class="HomeRow3">
            <div class="VistorCount">
                <h3 class="VistorTitile">Number of visitors <br>since March 25, 2013</h3>
               <!-- <img class="Vistorcounters" src="https://hitwebcounter.com/counter/counter.php?page=7815313&amp;style=0010&amp;nbdigits=7&amp;type=page&amp;initCount=624460" title=""></div>-->
        </div>                            
</section>
<!-- ==================================== AppLinks ==================================================== -->
<div id="ApplinksForm" class="modal fade" role="dialog"> 
    <div id = "Applinks" class="modal-dialog">  
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">All Application Links</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
    </div>
     <div class="modal-body">    
        <div class="Applinks">
            <div class="Googleplay">
                <h1 class="AppHead">Google Play Store</h1>
                <?php global $variable;
                    $variable = "Googleplay";                    
                    include ('applink.php');?>
            </div>
            <div class="HuweaiApp">
                <h1 class="AppHead">Huawei App Galery</h1>
                <?php global $variable;
                    $variable = "HuweaiApp";                    
                    include ('applink.php');?>
            </div>
            <div class="amazonApp">
                <h1 class="AppHead">Amazon Appstore</h1>
                <?php global $variable;
                    $variable = "amazonApp";                    
                    include ('applink.php');?>
            </div>            
            <div class="iosApp">
                <h1 class="AppHead">IOS Appstore</h1>
                <?php global $variable;
                    $variable = "iosApp";                    
                    include ('applink.php');?>
            </div>            
            <div class="WindowsApp">
                <h1 class="AppHead">Windows OS Phone and Tab</h1>
                <?php global $variable;
                    $variable = "WindowsApp";                    
                    include ('applink.php');?>
            </div>            
        </div>
    </div>
    </div>
   </div>
   </div>
<!-- ==================================== AppLinks ==================================================== -->
<!-- ==================================== Chat ==================================================== -->
<div id="Chats" class="modal fade" role="dialog"> 
    <div id = "chatting" class="modal-dialog">  
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Chat With Us!!!</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
    </div>
     <div class="modal-body">
         <div class="refresh">
            <a target="chatframe" class="btn-refresh" href="https://pinoyheartradio2013.chatango.com/">Refresh</a>            
         </div>
        <div class="chaform">
            <iframe id="chatframe" name="chatframe" src="https://pinoyheartradio2013.chatango.com/"></iframe>
        </div>         
    </div>
    </div>
   </div>
   </div>
<!-- ===================================End Chat======================================================== -->
<!-- ===================================Req Chat========================================================= -->
<div id="Reqsong" class="modal fade" role="dialog"> 
    <div class="modal-dialog">  
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Request A Song</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
    </div>
     <div class="modal-body">
      <form id="SongReq-form" action="">          
          <textarea type="text" hidden= true class="form-control" id="fOnlineDJ" name="OnlineDJ" required maxlength="50" value=""></textarea>
          <label for="fname">Name :</label>
          <input type="text" class="form-control" id="fname" name="name" required maxlength="50" placeholder="Your name..">
          <label for="lname">Email :</label>
          <input type="email" class="form-control" id="lname" name="email" required maxlength="50" placeholder="Your Email..">
          <label for="reqsongs">Song Name :</label>
          <textarea type="textarea" class="form-control" id="reqsongs" name="requestsong" required maxlength="150" placeholder="Song name.." rows="2" ></textarea>       
          <label for="dedicate">Dedicated to :</label>
          <textarea class="form-control" type="textarea" id="dedicate" name="dedicated" required maxlength="150" placeholder="Dedicated to.." rows="2" required minlength="10"></textarea>
          <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs" onclick="RequestSongs()" value="Submit">Submit</button>
      </form>        
      <div id="success_message" style="width:100%; height:100%; display:none; ">
          <h3>Sent your message successfully!</h3>
      </div>
      <div id="error_message"
      style="width:100%; height:100%; display:none; ">
          <h3>Error</h3>
          Sorry there was an error sending your form.
      </div>
    </div>
    </div>
   </div>
   </div>
<!-- ===================================End Req Chat========================================================= -->
<!--=================================Scripts================================================-->
<script rel="preload" src="./js/jquery-3.6.0.js"></script>
<script rel="preload" src="./mainhome.js" type="text/javascript"></script>
<script rel="preload" src="./js/bootstrap.min.js"></script>
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
<script>
    function playerInterval(){
        $('#Avisual .Abar').each(function(){
            $(this).css('height', Math.floor((Math.random() * 35) + 5));
        });
    }
    setInterval(playerInterval, 400);
</script>
<script>
    document.getElementById("fOnlineDJ").innerHTML = localStorage.getItem("DjOnline");    
    $("#SongReq-form").submit((e)=>{
        e.preventDefault()
        document.getElementById("btnContactUs").innerText = "Sending"
        $.ajax({
            url:"https://script.google.com/macros/s/AKfycbz43l06MFGGDK6PO3f9m5R1TSGU3MiW4vQWZQ-KJ-AP6cEfVjTy3uh0gHUN6mP8L2jVHw/exec",
            data:$("#SongReq-form").serialize(),
            method:"post",          
            success:function (response){
                alert("Your request Succesfully sent..!");
                document.getElementById("fname").value = '';
                document.getElementById("lname").value = '';   
                document.getElementById("reqsongs").value = '';   
                document.getElementById("dedicate").value = '';
                document.getElementById("btnContactUs").innerText = "Submit"   
            },
            error:function (response){
                document.getElementById("btnContactUs").innerText = "Submit" 
                alert("Something Error")
            }
        })
    })
</script>
<!--=================================End Scripts================================================-->
</body>
</html>