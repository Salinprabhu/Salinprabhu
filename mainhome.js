function GetDJUpdateImage(){
    var Djsnames = document.getElementById("DJid").innerText;  
    var Storename = Djsnames.toUpperCase();
    localStorage.setItem("DjOnline", Storename);
    $.ajax({
        type: "GET",
        url: "getimage.php", // 
        data:'DJNameS='+ Djsnames,
        success: function(msg){
                document.getElementById("myImage").src = "data:image/jpg;charset=utf8;base64,"+msg;
                },
            error: function(){
                console.log("failure");
            }
    });         
}
$(window).on('load', function(){
    var Djsnames2 = document.getElementById("DJid").innerText;
    $.ajax({
        type: "GET",
        url: "getHomeImages.php", // :
        data:'imagetagvalue='+'StaticBackground',
        success: function(msg){
                var url = "data:image/png;base64,"+msg.replace(/(\r\n|\n|\r)/gm, "");
                $("#Homepage").css("background-image", "url('" + url.replace(/(\r\n|\n|\r)/gm, "") + "')");
            },
            error: function(){
                console.log("No Image Found myImage");
        }
    })    
    $.ajax({
        type: "GET",
        url: "getimage.php", // 
        data:'DJNameS='+Djsnames2,
        success: function(msg){
            document.getElementById("myImage").src = "data:image/jpg;charset=utf8;base64,"+msg;
            },
            error: function(){
                console.log("No Image Found myImage");
        }
    })
    
    $.ajax({
        
        type: "GET",
        url: "getHomeImages.php", // 
        data:'imagetagvalue='+'logoliveid',
        success: function(msg){
            document.getElementById("logoApplink").src = "data:image/jpg;charset=utf8;base64,"+msg;
            },
            error: function(){
                console.log("No Image Found logoApplink");
        }
    })
    $.ajax({
        type: "GET",
        url: "getHomeImages.php", // 
        data:'imagetagvalue='+'logo8id',
        success: function(msg){
            document.getElementById("logo8id").src = "data:image/jpg;charset=utf8;base64,"+msg;
            },
            error: function(){
                console.log("No Image Found logo8id");
        }
    })
    $.ajax({
        type: "GET",
        url: "getHomeImages.php", // 
        data:'imagetagvalue='+'Chatimage',
        success: function(msg){
            document.getElementById("linkChat").src = "data:image/jpg;charset=utf8;base64,"+msg;
            },
            error: function(){
                console.log("No Image Found linkChat");
        }
    })
    $.ajax({
        type: "GET",
        url: "getHomeImages.php", // 
        data:'imagetagvalue='+'ReSongImg',
        success: function(msg){
            document.getElementById("linkReqSong").src = "data:image/jpg;charset=utf8;base64,"+msg;
            },
            error: function(){
                console.log("No Image Found linkReqSong");
        }
    })
    $('body').addClass('loaded');
});
setInterval('GetDJUpdateImage()',10000);