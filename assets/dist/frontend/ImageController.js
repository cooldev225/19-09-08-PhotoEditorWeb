function ImageController(control)
{
	this.control = control;
	this.sepiaEffect = false;
	this.grayEffect = false;
	this.rotation = 0;
	this.zoomLevel = 1;
	this.brightness = 0;
	this.contrast = 0;
	this.sharpness = 0;
	this.saturation = 0;
	this.hue = 0;

	this.iWidth = 0;
	this.iHeight = 0;

	this.cachedImage = null;
	this.actionHistory = [];
	this.lastAction = "";

	this.getImageControl = function() {
	    img = this.control.children('img');
	    img.crossOrigin = "anonymous";
	    //alert('in');
	    if (img.length == 0) img = this.control.children('canvas');
	    if (img.length > 0) {
	        ele = img[0];
	        if (this.iWidth == 0 || this.iHeight == 0) {
	            this.iWidth = $(ele).width();
	            this.iHeight = $(ele).height();
	        }
	        return ele;
	    }
	    else return null;
	}

	this.recordAction = function(action) {
	    switch (action) {
	        case "sepia":
	            this.actionHistory.push({ action: "sepia" });
	            break;
	        case "blackandwhite":
	            this.actionHistory.push({ action: "blackandwhite" });
	            break;
	        case "hue":
	            if (this.lastAction == "hue") this.actionHistory.pop();
	            this.actionHistory.push({ action: "hue", value: arguments[1] });
	            break;
	        case "contrast":
	            if (this.lastAction == "contrast") this.actionHistory.pop();
	            this.actionHistory.push({ action: "contrast", value: arguments[1] });
	            break;
	        case "brightness":
	            if (this.lastAction == "brightness") this.actionHistory.pop();
	            this.actionHistory.push({ action: "brightness", value: arguments[1] });
	            break;
	        case "sharpen":
	            if (this.lastAction == "sharpen") this.actionHistory.pop();
	            this.actionHistory.push({ action: "sharpen", value: arguments[1] });
	            break;
	        case "saturation":
	            if (this.lastAction == "saturation") this.actionHistory.pop();
	            this.actionHistory.push({ action: "saturation", value: arguments[1] });
	            break;
	        case "fliph":
	            if (this.lastAction == "fliph") this.actionHistory.pop();
	            else this.actionHistory.push({ action: "fliph"});
	            break;
	        case "flipv":
	            if (this.lastAction == "flipv") this.actionHistory.pop();
	            else this.actionHistory.push({ action: "flipv" });
	            break;
	        case "rotate":
	            if (this.lastAction == "rotate") this.actionHistory.pop();
	            this.actionHistory.push({ action: "rotate", value: arguments[1] });
	            break;
	    }
	    this.lastAction = action;
	}

	this.cacheCurrentImage = function() {
	    //create a new canvas
	    var image = this.getImageControl();
	    var newCanvas = document.createElement('canvas');
	    newCanvas.width = $(image).width();
	    newCanvas.height = $(image).height();
	    var context = newCanvas.getContext('2d');

	    //apply the old canvas to the new one
	    context.drawImage(image, 0, 0, $(image).width(), $(image).height());

	    //return the new canvas
	    this.cachedImage = newCanvas;
	}

    this.restoreCurrentImage = function() {
        if (this.cachedImage) {
            var image = this.getImageControl();
            if (image.tagName.toLowerCase() != "img") {
                var context = image.getContext('2d');
                context.drawImage(this.cachedImage, 0, 0);
            }
        }
    }

	//$(this.getImageControl()).draggable({ containment: this.control, scroll: false });	
}

ImageController.prototype.moveLeftBy = function(xBy) {
    img = $(this.getImageControl());
    left = parseInt(img.css('left'));
    if (isNaN(left)) left = 0;
    leftBorder = parseInt(this.control.css("border-left-width"));
    rightBorder = parseInt(this.control.css("border-right-width"));
    ctrlWidth = this.control.width() - (leftBorder + rightBorder);
    newLeft = ctrlWidth < img.width() + left - xBy ? left - xBy : -(img.width() - ctrlWidth);
    img.css("left", newLeft + 'px');
}

ImageController.prototype.moveLeftUpBy = function(xBy, yBy) {
    this.moveLeftBy(xBy);
    this.moveUpBy(yBy);
}

ImageController.prototype.moveLeftDownBy = function(xBy, yBy) {
    this.moveLeftBy(xBy);
    this.moveDownBy(yBy);
}

ImageController.prototype.moveRightBy = function(xBy)
{
	img = $(this.getImageControl());
	left = parseInt(img.css('left'));
	if (isNaN(left)) left = 0;
	newLeft = left + xBy < 0 ? left + xBy : 0;
	img.css("left", newLeft + 'px');
}

ImageController.prototype.moveRightUpBy = function(xBy, yBy) {
    this.moveRightBy(xBy);
    this.moveUpBy(yBy);
}

ImageController.prototype.moveRightDownBy = function(xBy, yBy) {
    this.moveRightBy(xBy);
    this.moveDownBy(yBy);
}

ImageController.prototype.moveUpBy = function(yBy)
{
	img = $(this.getImageControl());
	topPos = parseInt(img.css('top'));
	if (isNaN(topPos)) topPos = 0;
	topBorder = parseInt(this.control.css("border-top-width"));
	bottomBorder = parseInt(this.control.css("border-bottom-width"));
	ctrlHeight = this.control.height() - (topBorder + bottomBorder);
	newTop = ctrlHeight < img.innerHeight() + topPos - yBy ? topPos - yBy : -(img.innerHeight() - ctrlHeight);
	img.css("top", newTop + 'px');
}

ImageController.prototype.moveDownBy = function(yBy)
{
	img = $(this.getImageControl());
	topPos = parseInt(img.css('top'));
	if (isNaN(topPos)) topPos = 0;
	newTop = topPos + yBy < 0 ? topPos + yBy : 0;
	img.css("top", newTop + 'px');
}

ImageController.prototype.zoomBy = function(zoomBy) {
    img = $(this.getImageControl());
    newZoom = zoom + zoomBy > 1 ? zoom + zoomBy : 1;
    img.width(this.iWidth * newZoom);
    img.height(this.iHeight * newZoom);
    this.zoomLevel = newZoom;
}

ImageController.prototype.zoomTo = function(zoom) {
    img = $(this.getImageControl());
    img.width(this.iWidth * zoom);
    img.height(this.iHeight * zoom);
    this.zoomLevel = zoom;
}

ImageController.prototype.getCurrentState = function() {
    response = {};
    img = $(this.getImageControl());
    response.x = parseInt(img.css('left'));
    response.y = parseInt(img.css('top'));
    response.sepiaEffect = this.sepiaEffect;
    response.grayEffect = this.grayEffect;
    response.rotation = this.rotation;
    response.zoomLevel = this.zoomLevel;
    response.brightness = this.brightness;
    response.contrast = this.contrast;
    response.sharpness = this.sharpness;
    response.saturation = this.saturation;
    response.hue = this.hue;
    response.actionHistory = this.actionHistory;
    return response;
}

ImageController.prototype.setSepia = function() {
    if (Pixastic.Actions.sepia.checkSupport()) {
        if (!this.sepiaEffect) {
            this.sepiaEffect = true;
            Pixastic.process(this.getImageControl(), "sepia");
            this.recordAction("sepia");
        }
        return true;
    }
    else return false;
}

ImageController.prototype.setGrayscale = function()
{
	if (Pixastic.Actions.desaturate.checkSupport())
	{
		if (!this.grayEffect)
		{
			this.grayEffect = true;
			Pixastic.process(this.getImageControl(), "desaturate", {average : false});
			this.recordAction("blackandwhite");
        }
		return true;
	}
	else return false;
}

ImageController.prototype.flipHorizontal = function()
{
	if (Pixastic.Actions.hflip.checkSupport())
	{
		Pixastic.process(this.getImageControl(), "hflip");
		this.recordAction("fliph");
		return true;
	}
	else return false;
}

ImageController.prototype.flipVertical = function()
{
	if (Pixastic.Actions.vflip.checkSupport())
	{
		Pixastic.process(this.getImageControl(), "vflip");
		this.recordAction("flipv");
		return true;
	}
	else return false;
}

ImageController.prototype.rotateBy = function(angle) 
{
    if (Pixastic.Actions.rotate.checkSupport()) 
    {
        this.rotation = this.rotation + angle;
        Pixastic.process(this.getImageControl(), "rotate", { angle: angle });
        this.recordAction("rotate", this.rotation);
        return true;
    }
    else return false;
}


ImageController.prototype.getRotation = function () {
    return this.rotation;
}


ImageController.prototype.rotateByCenter = function (angle) {
    //this.rotation = this.rotation + angle;
    this.rotation = angle;
    rt = this.rotation;
    img = $(this.getImageControl());

    img.rotate(this.rotation);
    this.recordAction("rotate", rt);
    //console.log(angle);

}

ImageController.prototype.rotateTo = function(angle, callback, callbackData)
{    
	if (Pixastic.Actions.rotate.checkSupport())
	{
		this.rotation = angle;
		Pixastic.process(this.getImageControl(), "rotate", {angle: angle}, callback, callbackData);
		//this.recordAction("rotate", angle);
		return true;
	}
	else return false;
}

ImageController.prototype.rotate = function(type, val)
{
    var angle = 0;
    img = $(this.getImageControl());
        
    if(val==0) {
        var angle = this.rotation;
        var deg = 0;                                       
        if(type=="C") { deg = 90; } else { deg = -90; }
        angle = parseInt(parseInt(angle) + deg);
    }
    else {
        angle = parseInt(val);
    }
    
    switch(angle)
    {
        case -90:
        {
            angle = parseInt(270);
            break;
        }
        case -180:
        {
            angle = parseInt(180);
            break;
        }
        case -270:
        {
            angle = parseInt(90);
            break;
        }        
    }
    
    this.rotation = angle;
    this.recordAction("rotate", angle);
    img.rotate(angle);
    //this.rotateTo(angle);
} 

ImageController.prototype.rotateBy90 = function(type, val)
{
    var angle = 0;
    img = $(this.getImageControl());
        
    if(val==-1) {
        var angle = this.rotation;
        var deg = 0;                                       
        if(type=="C") { deg = 90; } else { deg = -90; }
        angle = parseInt(parseInt(angle) + deg);
        if(angle == 360) { angle =0; }
    }
    else {
        angle = parseInt(val);
    }
    
    switch(angle)
    {
        case -90:
        {
            angle = parseInt(270);
            break;
        }
        case -180:
        {
            angle = parseInt(180);
            break;
        }
        case -270:
        {
            angle = parseInt(90);
            break;
        }        
    }
    
    this.rotation = angle;
    this.recordAction("rotate", angle);
    img.rotate(angle);
    //this.rotateTo(angle);
}

ImageController.prototype.setBrightness = function(value) {
    if (Pixastic.Actions.brightness.checkSupport()) {
        if (this.lastAction == "brightness") 
            this.restoreCurrentImage();
        else this.cacheCurrentImage();
        
        this.brightness = value;
        Pixastic.process(this.getImageControl(), "brightness", { brightness: value });
        this.recordAction("brightness", value);
        return true;
    }
    else return false;
}

ImageController.prototype.setContrast = function(value) {
    if (Pixastic.Actions.brightness.checkSupport()) {
        if (this.lastAction == "contrast")
            this.restoreCurrentImage();
        else this.cacheCurrentImage();

        this.contrast = value;
        Pixastic.process(this.getImageControl(), "brightness", {contrast: value});
        this.recordAction("contrast", value);
        return true;
    }
    else return false;
}

ImageController.prototype.setSharpness = function(value) {
    if (Pixastic.Actions.sharpen.checkSupport()) {
        if (this.lastAction == "sharpen")
            this.restoreCurrentImage();
        else this.cacheCurrentImage();

        this.sharpness = value;
        Pixastic.process(this.getImageControl(), "sharpen", { amount: value });
        this.recordAction("sharpen", value);
        return true;
    }
    else return false;
}

ImageController.prototype.setHue = function(value) {
    if (Pixastic.Actions.hsl.checkSupport()) {
        if (this.lastAction == "hue")
            this.restoreCurrentImage();
        else this.cacheCurrentImage();

        this.hue = value;
        Pixastic.process(this.getImageControl(), "hsl", { hue: value });
        this.recordAction("hue", value);
        return true;
    }
    else return false;
}

ImageController.prototype.setSaturation = function(value) {
    if (Pixastic.Actions.hsl.checkSupport()) {
        if (this.lastAction == "saturation")
            this.restoreCurrentImage();
        else this.cacheCurrentImage();

        this.saturation = value;
        Pixastic.process(this.getImageControl(), "hsl", { saturation: value });
        this.recordAction("saturation", value);
        return true;
    }
    else return false;
}

ImageController.prototype.removeEffects = function()
{
	Pixastic.revert(this.getImageControl());
	this.sepiaEffect = false;
	this.grayEffect = false;
	this.rotation = 0;
	this.brightness = 0;
	this.contrast = 0;
	this.sharpness = 0;
	this.saturation = 0;
	this.hue = 0;
	this.actionHistory = [];
	this.lastAction = "";
}

ImageController.prototype.reset = function(imageUpdated) {
    this.removeEffects();
    this.zoomTo(1);
    this.zoomLevel = 1;
    this.rotateBy90("C", 0);
    //this.rotation = 0;
    this.cachedImage = null;
    img = $(this.getImageControl());
    img.css("top", '0px');
    img.css("left", '0px');
    imageUpdated = typeof imageUpdated !== 'undefined' ? imageUpdated : false;
    if (imageUpdated) {
        this.iWidth = 0;
        this.iHeight = 0;
    }
}

ImageController.prototype.getImageDarkness = function () {
    var colorSum = 0;
    var image = this.getImageControl();
    var canvas = document.createElement('canvas');
    canvas.width = $(image).width();
    canvas.height = $(image).height();
    var ctx = canvas.getContext('2d');
    ctx.drawImage(image, 0, 0, $(image).width(), $(image).height());
    var imageData = ctx.getImageData(0, 0, $(image).width(), $(image).height());
    var data = imageData.data;
    var r, g, b, avg;
    for (var x = 0, len = data.length; x < len; x += 4) {
        r = data[x];
        g = data[x + 1];
        b = data[x + 2];

        avg = Math.floor((r + g + b) / 3);
        colorSum += avg;
    }

    var bt = Math.floor(colorSum / ($(image).width() * $(image).height()));
    return bt;
}

ImageController.prototype.applyActionHistory = function(actionHistory) {
    if (actionHistory && actionHistory instanceof Array) {
        for (var i = 0; i < actionHistory.length; i++) {
            switch (actionHistory[i].action) {
                case "sepia":
                    this.setSepia();
                    break;
                case "blackandwhite":
                    this.setGrayscale();
                    break;
                case "hue":
                    this.setHue(actionHistory[i].value);
                    break;
                case "contrast":
                    this.setContrast(actionHistory[i].value);
                    break;
                case "brightness":
                    this.setBrightness(actionHistory[i].value);
                    break;
                case "sharpen":
                    this.setSharpness(actionHistory[i].value);
                    break;
                case "saturation":
                    this.setSaturation(actionHistory[i].value);
                    break;
                case "fliph":
                    this.flipHorizontal();
                    break;
                case "flipv":
                    this.flipVertical();
                    break;
                case "rotate":
                    //this.rotateTo(actionHistory[i].value);
                    this.rotateBy90("C", actionHistory[i].value);
                    break;
            }
        }
    }
}