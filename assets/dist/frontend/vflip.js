/*
 * Pixastic Lib - Vertical flip - v0.1.0
 * Copyright (c) 2008 Jacob Seidelin, jseidelin@nihilogic.dk, http://blog.nihilogic.dk/
 * License: [http://www.pixastic.com/lib/license.txt]
 */

Pixastic.Actions.vflip = {
	process : function(params) {
		if (Pixastic.Client.hasCanvas()) {
			var canvas = params.canvas;

			var width = params.width;
			var height = params.height;

			var copyCanvas = document.createElement("canvas");
			copyCanvas.width = width;
			copyCanvas.height = height;
			copyCanvas.getContext("2d").drawImage(canvas, 0, 0, width, height);

			var ctx = params.canvas.getContext("2d");
			ctx.clearRect(0, 0, width, height);
			ctx.scale(1,-1);
			ctx.drawImage(copyCanvas, 0, -height, width, height)
			params.useData = false;

			return true;		

		} else if (Pixastic.Client.isIE()) {
			params.image.style.filter += " flipv";
			return true;
		}
	},
	checkSupport : function() {
		return (Pixastic.Client.hasCanvas() || Pixastic.Client.isIE());
	}
}

