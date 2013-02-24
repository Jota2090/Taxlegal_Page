
function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

function areCookiesEnabled() {
    var r = false;
    createCookie("testing", "Hello", 1);
    if (readCookie("testing") != null) {
        r = true;
        eraseCookie("testing");
    }
    return r;
}

//for codearea select all
function fnSelect(objId) {
    var od = document.getElementById(objId);
    var pre = od.getElementsByTagName("pre");
    if (pre && pre.length > 0) {
        od = pre[0];
    }

    fnDeSelect();
    if (window.getSelection) {
        window.getSelection().removeAllRanges();
        var range = document.createRange();
        //range.selectNode(od);
        range.selectNodeContents(od);
        window.getSelection().addRange(range);
    }
    else if (document.selection) {
        var range = document.body.createTextRange();
        range.moveToElementText(od);
        range.select();
    }
}
function fnDeSelect() {
    if (window.getSelection) { window.getSelection().removeAllRanges(); }
    else if (document.selection) document.selection.empty();
}

