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
function newTimer1()
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
function newTimer2()
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

/*Links to Utbildning information starts here */
document.getElementById("li1").addEventListener('click', func);
document.getElementById("li2").addEventListener('click', func);
function func(){
if(this.id == "li1"){
var i = document.getElementById("i1");
if(i.innerHTML == ""){
document.getElementById("i1").innerHTML = "Började: 2010 och Slutade: 2013";
}
else i.innerHTML = "";

}
else{
  var i = document.getElementById("i2");
  if(i.innerHTML == ""){
  document.getElementById("i2").innerHTML = "Började: 2016-08-29 och Slutade:2018-05-31";
  }
  else i.innerHTML = "";
  }
}
/*Links to Utbildning information ends here */
