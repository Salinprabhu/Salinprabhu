const playtoggle = document.querySelector('.audio-action');
playtoggle.addEventListener('click',()=>{
    $('.action-control').toggleClass('active')    
})
$('body').on('dragstart drop', function(e){
    e.preventDefault();
    return false;
});
$(document).bind("contextmenu",function(e){
    return false;
});
$(window).on("scroll",function(){
    if($(window).scrollTop()){
        $('header').addClass('sticky');
    }
    else{
        $('header').removeClass('sticky');
    }
})
$(window).on('load', function(){
    //$('body').addClass('loaded');
    if(sessionStorage.getItem("OnloadPlay") == "Start"){ 
        if(localStorage.getItem("IsPlay") == "Play"){
                playonly();
           }                
    }
    else{
            sessionStorage.setItem("OnloadPlay", "Start")
            sessionStorage.setItem("IsPlay", "")
            playHomeonly();
        }
    $('body').addClass('loaded');
});
let PNHome = document.getElementById('mainHome');
let PNoutreach = document.getElementById('Outrea');
let PNActivity = document.getElementById('Activty');
let PNcontUS = document.getElementById('ctUs');
let PNDjp = document.getElementById('DJP');
let PNRecon = document.getElementById('recong');
let PNOrgchart = document.getElementById('OrgChatt');
let PNabtUS = document.getElementById('Abtus');
let PNprivacy = document.getElementById('priv');

PNHome.addEventListener('click', ()=>{
    PNoutreach.classList.remove('active');
    PNHome.classList.add('active');
    PNActivity.classList.remove('active');
    PNcontUS.classList.remove('active');
    PNDjp.classList.remove('active');
    PNRecon.classList.remove('active');
    PNOrgchart.classList.remove('active');
    PNabtUS.classList.remove('active');
    PNprivacy.classList.remove('active');
    $('nav').toggleClass('active');
})
PNoutreach.addEventListener('click', ()=>{
    PNoutreach.classList.add('active');
    PNHome.classList.remove('active');
    PNActivity.classList.remove('active');
    PNcontUS.classList.remove('active');
    PNDjp.classList.remove('active');
    PNRecon.classList.remove('active');
    PNOrgchart.classList.remove('active');
    PNabtUS.classList.remove('active');
    PNprivacy.classList.remove('active');
    $('nav').toggleClass('active');
})
PNActivity.addEventListener('click', ()=>{
    PNoutreach.classList.remove('active');
    PNHome.classList.remove('active');
    PNActivity.classList.add('active');
    PNcontUS.classList.remove('active');
    PNDjp.classList.remove('active');
    PNRecon.classList.remove('active');
    PNOrgchart.classList.remove('active');
    PNabtUS.classList.remove('active');
    PNprivacy.classList.remove('active');
    $('nav').toggleClass('active'); 
})
PNcontUS.addEventListener('click', ()=>{
    PNoutreach.classList.remove('active');
    PNHome.classList.remove('active');
    PNActivity.classList.remove('active');
    PNcontUS.classList.add('active');
    PNDjp.classList.remove('active');
    PNRecon.classList.remove('active');
    PNOrgchart.classList.remove('active');
    PNabtUS.classList.remove('active');
    PNprivacy.classList.remove('active');
    $('nav').toggleClass('active');   
})
PNDjp.addEventListener('click', ()=>{
    PNoutreach.classList.remove('active');
    PNHome.classList.remove('active');
    PNActivity.classList.remove('active');
    PNcontUS.classList.remove('active');
    PNDjp.classList.add('active');
    PNRecon.classList.remove('active');
    PNOrgchart.classList.remove('active');
    PNabtUS.classList.remove('active');
    PNprivacy.classList.remove('active');
    $('nav').toggleClass('active');  
})
PNRecon.addEventListener('click', ()=>{
    PNoutreach.classList.remove('active');
    PNHome.classList.remove('active');
    PNActivity.classList.remove('active');
    PNcontUS.classList.remove('active');
    PNDjp.classList.remove('active');
    PNRecon.classList.add('active');
    PNOrgchart.classList.remove('active');
    PNabtUS.classList.remove('active');
    PNprivacy.classList.remove('active');
})
PNOrgchart.addEventListener('click', ()=>{
    PNoutreach.classList.remove('active');
    PNHome.classList.remove('active');
    PNActivity.classList.remove('active');
    PNcontUS.classList.remove('active');
    PNDjp.classList.remove('active');
    PNRecon.classList.remove('active');
    PNOrgchart.classList.add('active');
    PNabtUS.classList.remove('active');
    PNprivacy.classList.remove('active');
})
PNabtUS.addEventListener('click', ()=>{
    PNoutreach.classList.remove('active');
    PNHome.classList.remove('active');
    PNActivity.classList.remove('active');
    PNcontUS.classList.remove('active');
    PNDjp.classList.remove('active');
    PNRecon.classList.remove('active');
    PNOrgchart.classList.remove('active');
    PNabtUS.classList.add('active');
    PNprivacy.classList.remove('active');
})
PNprivacy.addEventListener('click', ()=>{
    PNoutreach.classList.remove('active');
    PNHome.classList.remove('active');
    PNActivity.classList.remove('active');
    PNcontUS.classList.remove('active');
    PNDjp.classList.remove('active');
    PNRecon.classList.remove('active');
    PNOrgchart.classList.remove('active');
    PNabtUS.classList.remove('active');
    PNprivacy.classList.add('active');
})
$(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
    })
 })
