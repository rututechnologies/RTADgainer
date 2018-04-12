var referrer = document.referrer;
var current = window.location.href;

if (referrer.search('://') > 0) {
    var referrerSplit = referrer.split('://');
    var referrerURLSplit = referrerSplit[1].split('/');
    referrer = referrerURLSplit[0];
}

if (current.search('://') > 0) {
    var currentSplit = current.split('://');
    var currentURLSplit = currentSplit[1].split('/');
    var currentDomain = currentURLSplit[0];
}

if (referrer == currentDomain) {
    referrer = currentDomain;
}

current = current.replace(/[$<>{}]/g, '');
referrer = referrer.replace(/[$<>{}]/g, '');

var vars = getURLvars();
vars = vars + '&currentURL=' + encodeURIComponent(current);

if (vars == '' || vars == undefined || vars == null) {
    var allVars = '';
    var currentURL = window.location.href;
    var varsArray = currentURL.split('?');

    if (varsArray[1]) {
        var allSplitVars = varsArray[1].split('&');

        for (x in allSplitVars) {
            var varValues = allSplitVars[x].split('=');
            allVars = varValues[0]
                + encodeURIComponent('=')
                + encodeURIComponent(varValues[1])
                + encodeURIComponent('&')
                + allVars;
        }
        allVars = allVars.replace(/[$<>{}]/g, '');
    } else {
        allVars = '';
    }
    vars = allVars;
}


function getURLvars() {

    var allVars = "";

    var currentURL = document.referrer;
    var varsArray = currentURL.split("?");
    if (varsArray[1] == undefined || varsArray[1] == '') {
        var currentURL = window.location.href;
        var varsArray = currentURL.split("?");
    }

    allVars = encodeURIComponent(varsArray[1]);
    allVars = allVars.replace(/[$<>{}]/g, '');

    return allVars;
}


function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? '' : '; expires=' + exdate.toUTCString());
    document.cookie = c_name + '=' + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(';');
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf('='));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf('=') + 1);
        x = x.replace(/^\s+|\s+$/g, '');
        if (x == c_name) {
            return unescape(y);
        }
    }
}

function checkCookie(referrer) {
    var track = getCookie('solutions_tracking');
    if (track == null || track == '') {
        return track;
    }
    //set referral
    setCookie('solutions_tracking', referrer, 10);
}
