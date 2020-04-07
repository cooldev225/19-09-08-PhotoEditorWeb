function removeEmojiChars(Target) {
    var re = /[^a-z0-9|^\~|^\`|^\!|^\@|^\è|^\é|^\ê|^\ë|^\#|^\$|^\£|^\%|^\^|^\&|^\*|^\(|^\)|^\-|^\_|^\+|^\=|^\{|^\}|^\[|^\]|^\:|^\;|^\,|^\.|^\<|^\>|^\?|^\"|^\'|^\u2018|^\u2019|^\\|^\/|^\ |^\r?\n|^\r]/gmi;
    Target = Target.replace(re, '');
    Target = Target.replace(/\\#/g, "");
    return Target;
}
function isAdmin() {
    return getQueryStringValue("isAdmin");
}
function getQueryStringValue(param) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');  
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == param) {
            return sParameterName[1];
        }
    }
    return false;
}
