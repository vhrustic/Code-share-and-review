var allDateTimes;

window.onload = function (){
    allDateTimes = document.getElementsByClassName('news_datetime');
    Array.prototype.forEach.call(allDateTimes, function (item){
       item.innerText = dateTimeToString(item.innerText);
    });
}

function dateTimeToString(dateString) {
    var date = new Date(dateString.substring(6,10), parseInt(dateString.substring(3,5))-1, dateString.substring(0,2), dateString.substring(11,13), dateString.substring(14,16));
    var diff = (new Date() - date) / 1000;
    if(diff < 60) return "Novost objavljena prije par sekundi";
    if(diff/60 < 60) return "Novost je objavljena prije " + parseInt(diff/60) +" minut " + pluralForMinutes(parseInt(diff/60));
    if(diff/(60*60) < 24) return "Novost je objavljena prije " + parseInt(diff/(60*60)) + " sat" + pluralForHours(parseInt(diff/(60*60)));
    if(diff/(60*60*24) < 7) return "Novost je objavljena prije " + parseInt(diff/(60*60*24)) + " dan" + pluralForDays(parseInt(diff/(60*60*24)));
    if(diff/(60*60*24) < 30) return "Novost je objavljena prije " + parseInt(diff/(60*60*24*7)) + " tjed" + PluralForWeeks(parseInt(diff/(60*60*24*7)));
    else return dateString;
}

function pluralForMinutes(minutes) {
    switch(minutes){
        case 1:
        case 21:
        case 32:
        case 41:
        case 51:
            return "";
        case 2:
        case 22:
        case 32:
        case 42:
        case 52:
        case 3:
        case 23:
        case 33:
        case 43:
        case 53:
        case 4:
        case 24:
        case 34:
        case 44:
        case 54:
            return "e";
        default:
            return "a"
    }
}

function pluralForHours(hours){
    switch(hours){
        case 1:
        case 21:
            return "";
        case 2:
        case 22:
        case 3:
        case 23:
        case 4:
            return "a";
        default:
            return "i";
    }
}

function pluralForDays(days){
    if(days == 1) return "";
    return "a";
}

function PluralForWeeks(weeks){
    if(weeks == 1) return "an";
    return "na";
}