/**
 * Supported Javascript file for banner display
 */
/**
 * Try to update the browser status bar with click url. It will change the
 * cell's backgraound to alternative background color.
 *
 * @param {Object} id
 */
function showstatus(id){
    if (id >= window.links.length) {
        window.status = "Ads by clicksor";
    }
    else {
        window.status = window.links[id];
        var element = window.document.getElementById("ad" + id);
        element.style.backgroundColor = window.bg_color_alter;
    }
    return true;
}

/**
 * Clear browser status bar and reset cell background.
 *
 * @param {Object} id
 */
function hidestatus(id){
    if (id < window.links.length) {
        var element = window.document.getElementById("ad" + id);
        element.style.backgroundColor = window.bg_color;
    }
    window.status = "";
    return true;
}

/**
 * Handle click event on cell, open click url in new window.
 *
 * @param {Object} id
 */
function doClick(id){
    var url = "http://www.clicksor.com/";
    if (id < window.links.length) {
        url = window.links[id];
    }
    var o = window.open(url, "_blank");
    if (!o) {
        top.location.href = url;
    }
    return false;
}

// We can safely use clientX, clientY for mouse position, because
// we know that our document is exactly the same size of browser window.
function tip(e, o, msg){
		var event = e || window.event;
		window.tipObject = o;
    // record current mouse position
    window.tipX = event.clientX;
    window.tipY = event.clientY;
    // track mouse position
    window.tipObject.onmousemove=mouseMove;
    // wait a second
    window.tipTimer = setTimeout("showTip('" + msg + "')", 1000);
}

function mouseMove(e){
		var event = e || window.event;
    window.tipX = event.clientX;
    window.tipY = event.clientY;
}

function showTip(msg){
    clearTimeout(window.tipTimer);
    window.tipTimer = null;
    window.tipObject.onmousemove = null;
    
    var oTip = window.document.getElementById("tip");
    var txtE = oTip.childNodes[0];
    txtE.innerHTML = msg;
    
		// let it occupy space, but not visible
		oTip.style.visibility = "hidden";
		oTip.style.display = "block";
		
    positionTip(oTip);
    
		// show it.
    oTip.style.visibility = "visible";
}

function positionTip(o){
    var width = window.document.body.clientWidth;
    var height = window.document.body.clientHeight;
    // measure horizon postioning dimension
		o.style.top = 0;
		o.style.left = 0;
		o.style.maxWidth = width + "px";
		o.style.maxHeight = height + "px";
		var tipWidth = o.clientWidth;
		var tipHeight = o.clientHeight;
		if ( (height - window.tipY - 4) > tipHeight ) {
			// it can fit under current mouse postion
			var tmpX = width - tipWidth - 2;
			if ( tmpX > (window.tipX + 10) ) {
				tmpX = window.tipX + 10;
			}
			if ( tmpX < 0 ) tmpX = 0;
			o.style.top = (window.tipY + 2) + "px";
			o.style.left = tmpX + "px";
			return;
		}
		// otherwise try fix above current mouse position
		if ( (window.tipY - 4) > tipHeight ) {
			// good, it fits
			var tmpX = width - tipWidth - 2;
			if ( tmpX > (window.tipX - 5) ) {
				tmpX = window.tipX - 5;
			}
			if ( tmpX < 0 ) tmpX = 0;
			o.style.top = (window.tipY -tipHeight - 2) + "px";
			o.style.left = tmpX + "px";
			return;
		}
		// is that posible layout vertical
		if ( (window.tipX < (width/2)) && ((width-window.tipX) > 150) ) {
			o.style.top = "0px";
			o.style.left = (window.tipX + 10)+"px";
			if ( o.clientHeight < (height-2) ) {
				var tmpY = height - o.clientHeight - 2;
				if ( tmpY > window.tipY ) {
					tmpY = window.tipY - 2;
				}
				if ( tmpY < 0 ) tmpY = 0;
				o.style.top = tmpY + "px";
				return;
			}
		} else if ( (window.tipX >= (width/2)) && (window.tipX > 150) ) {
			o.style.top = "0px";
			o.style.left = "0px";
			o.style.maxWidth = (window.tipX-4)+"px";
			if ( o.clientHeight < (height-2) ) {
				var tmpX = window.tipX - o.clientWidth - 2;
				if ( tmpX < 0 ) tmpX = 0;
				o.style.left = tmpX + "px";
				var tmpY = height - o.clientHeight - 2;
				if ( tmpY > window.tipY ) {
					tmpY = window.tipY - 2;
				}
				if ( tmpY < 0 ) tmpY = 0;
				o.style.top = tmpY + "px";
				return;
			}
		}
		// oops. looks like we can't find best position
		o.style.maxWidth = width + "px";
		if ( window.tipY < height/2 - 5 ) {
			// put below
			o.style.top = (window.tipY+10) + "px";
			o.style.left = "0px"
		} else {
			// put above
			o.style.top = "0px";
			o.style.left = "0px";
			o.style.maxHeight = (window.tipY - 2) + "px";
		}
}

function unTip(e, o){
    if (window.tipTimer) {
        // the tip has not display yet, cancel display timer
        clearTimeout(window.tipTimer);
        window.tipTimer = null;
        window.tipObject.onmousemove = null;
        return;
    }
    var oTip = window.document.getElementById("tip");
    oTip.style.display = "none";
}
