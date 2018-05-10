
/*
//
//  COUNTDOWN TIMER FUNCTIONS
//
*/

var availableDate = new Date();
//set eg "Aug 13 2018 10:30:00" CHANGE ACCORDINGLY
availableDate.setDate(4);
availableDate.setMonth(9); //January has index 0!!!
availableDate.setFullYear(2018);
availableDate.setHours(16);
availableDate.setMinutes(00); //January has index 0!!!
availableDate.setSeconds(0);


var t = setInterval(loop, 1000); //(handler,intervall in ms)
function loop() {
    //get current Date (now)
    var now = new Date();
    //get difference
    var diff = availableDate - now;
    //if the time has come ;-)
    if (diff <= 0) {
        clearInterval(t);
        timeHasCome();
        return false;
    }
    //if not
    parseMs(diff);
}

function parseMs(ms) {
    //ToDO for you: Years, months and days :-)
    var days = Math.floor(ms / (1000*60*60*24))
    ms = ms % (1000*60*60*24);
    var hours = Math.floor(ms / (3600000))
    ms = ms % 3600000;
    var minutes = Math.floor(ms / 60000);
    ms = ms % 60000;
    var seconds = Math.floor(ms / 1000);
    ms = ms % 1000;

    var daysStr = checkForZero(days);
    var hoursStr = checkForZero(hours);
    var minutesStr = checkForZero(minutes);
    var secondsStr = checkForZero(seconds);

    $("#cd-days").text(daysStr);
    $("#cd-hours").text(hoursStr);
    $("#cd-mins").text(minutesStr);
    $("#cd-secs").text(secondsStr);

}

function checkForZero(i) {
    //write "0" before ?
    str = i + "";
    if (parseInt(i, 10) < 10) str = "0" + str;
    return str;
}

function timeHasCome() {
    $("#cd-days").text('0');
    $("#cd-hours").text('0');
    $("#cd-mins").text('0');
    $("#cd-secs").text('0');
}
