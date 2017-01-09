function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/*burger button starts here*/
function toggleSidebar() {
  $(".button").toggleClass("active");
  $("main").toggleClass("move-to-left");
  $(".sidebar-item").toggleClass("active");
}


$(".button").on("click tap", function() {
  toggleSidebar();
});

$(document).keyup(function(e) {
  if (e.keyCode === 27) {
    toggleSidebar();
  }
});
/*burger button ends here*/

//Countdown starts here!
(function start_LIA_timer()
{
   v = setInterval(newTimer1, 1000);
})();

(function start_examen_timer()
{
   v = setInterval(newTimer2, 1000);
})();
function stop(){
  clearInterval(v);
  clerInterval(x);
}
function newTimer1() //first countdown for the graduation starts here
{
    var countername = "examen";
    var obj = getTime('2018-05-31');
console.log(obj);
if(obj.days <= 0 && obj.hours <= 0){

  document.getElementById("clockdiv").innerHTML = "Jag har tagit examen!";
}
  else{  /*var kvar = "days:" + obj.days + " hours:" + obj.hours + " minutes;" + obj.minutes + " seconds:" + obj.seconds;*/
    document.getElementById(countername+'_days').innerHTML=obj.days;
    document.getElementById(countername+'_hours').innerHTML=obj.hours;
    document.getElementById(countername+'_minutes').innerHTML=obj.minutes;
    document.getElementById(countername+'_seconds').innerHTML=obj.seconds;
}
}
function newTimer2() //second countdown for the LIA starts here
{
    var countername = "LIA";
    var obj = getTime('2018-01-15');
    if(obj.days <= 0 && obj.hours <= 0){

      document.getElementById("clockdiv2").innerHTML = "Jag har LIA!";
    }
    var kvar = "Dagar:" + obj.days + " Timmar:" + obj.hours + " Minuter;" + obj.minutes + " Sekunder:" + obj.seconds;
    document.getElementById(countername+'_days').innerHTML=obj.days;
    document.getElementById(countername+'_hours').innerHTML=obj.hours;
    document.getElementById(countername+'_minutes').innerHTML=obj.minutes;
    document.getElementById(countername+'_seconds').innerHTML=obj.seconds;
}

function getTime(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}
//Countdown ends here!
