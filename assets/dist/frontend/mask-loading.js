var activeElement = null;

function nmGetPageSizeWithScroll(mode) {
    if (window.innerHeight && window.scrollMaxY) {// Firefox
        yWithScroll = window.innerHeight + window.scrollMaxY;
        xWithScroll = window.innerWidth + window.scrollMaxX;
    } else if (document.body.scrollHeight > document.body.offsetHeight) { // all but Explorer Mac
        yWithScroll = document.body.scrollHeight;
        xWithScroll = document.body.scrollWidth;
    } else { // works in Explorer 6 Strict, Mozilla (not FF) and Safari
        yWithScroll = document.body.offsetHeight;
        xWithScroll = document.body.offsetWidth;
    }
    if (yWithScroll < getViewportHeight()) {
        yWithScroll = getViewportHeight();
    }
    arrayPageSizeWithScroll = new Array(xWithScroll, yWithScroll);
    if (mode == 'w')
        return xWithScroll;
    if (mode == 'h')
        return yWithScroll;
    else
        return arrayPageSizeWithScroll;
}

function getViewportHeight() {
    var height = self.innerHeight; // Safari, Opera
    var mode = document.compatMode;
    var isIE = /MSIE/.test(navigator.userAgent);
    var isOpera = /Opera/.test(navigator.userAgent);

    if ((mode || isIE) && !isOpera) { // IE, Gecko
        height = (mode == 'CSS1Compat') ?
                document.documentElement.clientHeight : // Standards
                document.body.clientHeight; // Quirks
    }

    return height;
}

function removeMask() {
    if (document.getElementById('loading_mask_dynamic')) {
        document.body.removeChild(document.getElementById('loading_mask_dynamic'));
    }

    if (activeElement != null) {
        if (activeElement.parentNode.style.display == "block") {
            activeElement.parentNode.style.display = "none";
        }
    }

}

function closeMask(divid) {
    document.getElementById(divid).style.display = 'none';
    if (document.getElementById('loading_mask_dynamic')) {        
        fade_Mask_Out('loading_mask_dynamic', 70, -10, 0, 25);
    }
    setTimeout("removeMask()", 700);
}

function showMask(fade, divid) {
    if (!document.getElementById('loading_mask_dynamic')) {
        document.getElementById(divid).style.display = 'block';
        var loading_mask_dynamic = document.createElement("div");
        loading_mask_dynamic.id = 'loading_mask_dynamic';
        loading_mask_dynamic.style.height = nmGetPageSizeWithScroll()[1] + 'px';
        document.body.appendChild(loading_mask_dynamic);
    }
    if (fade) fade_Mask_In('loading_mask_dynamic', 5, 5, 50, 25);
}

function fade_Mask_In(el, start, step, max, timeout) {
    if (start >= max) return;
    elm = document.getElementById(el);
    if (elm) {
        elm.style.opacity = (start + step) / 100;
        elm.style.filter = 'alpha(opacity=' + (start + step) + ')';
        window.setTimeout('fade_Mask_In(\'' + el + '\', ' + (start + step) + ', ' + step + ', ' + max + ', ' + timeout + ')', timeout);
    }

}

function fade_Mask_Out(el, start, step, max, timeout) {
    if (start <= max) return;
    elm = document.getElementById(el);
    if (elm) {
        elm.style.opacity = (start + step) / 100;
        elm.style.filter = 'alpha(opacity=' + (start + step) + ')';
        window.setTimeout('fade_Mask_Out(\'' + el + '\', ' + (start + step) + ', ' + step + ', ' + max + ', ' + timeout + ')', timeout);
    }
}