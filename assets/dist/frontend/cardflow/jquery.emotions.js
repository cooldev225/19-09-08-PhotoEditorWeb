(function($){	
	$.fn.emotions = function(options){
		$this = $(this);
		var opts = $.extend({}, $.fn.emotions.defaults, options);
		return $this.each(function(i,obj){
			var o = $.meta ? $.extend({}, opts, $this.data()) : opts;					   	
			var x = $(obj);

			// Entites Encode 
			var encoded = [];
			for(i=0; i<o.s.length; i++){
				encoded[i] = String(o.s[i]).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
			}
			for(j=0; j<o.s.length; j++){
				var repls = x.html();
				if(repls.indexOf(o.s[j]) || repls.indexOf(encoded[j])){
					var imgr = o.a+o.b[j]+"."+o.c;			
					var rstr = "&nbsp;<img border='0' src='"+imgr+"' width='25' height='25'/>&nbsp;";	
					
                    while (repls.indexOf(o.s[j]) !== -1) {
                        repls = repls.replace(o.s[j], rstr);
                    }

                    while (repls.indexOf(o.s[j]) !== -1) {
                        repls = repls.replace(encoded[j], rstr);
                    }
                    x.html(repls);                                    
				}
			}
			
		});
	}	
	// Defaults
	$.fn.emotions.defaults = {
	    a: "/assets/dist/images/",
        b: $("#" + $("#hidden_emotion_imagenames_controlname").val()).val().split(","), //new Array("a_0", "a_1", "a_2", "a_3", "a_4", "a_5", "a_6", "a_7", "a_8", "a_9", "b_0", "b_1", "b_2", "b_3", "b_4", "b_5", "b_6", "b_7", "b_8", "b_9", "c_0", "c_1", "c_2", "c_3", "c_4", "c_5", "c_6", "c_7", "c_8", "c_9", "d_0", "d_1", "d_2", "d_3", "d_4", "d_5", "d_6", "d_7", "d_8", "d_9", "e_0", "e_1", "e_2"), //$("#hidden_emotion_imagename").val().split(","), //
        s: $("#" + $("#hidden_emotion_notations_controlname").val()).val().split(","), //new Array("a~0", "a~1", "a~2", "a~3", "a~4", "a~5", "a~6", "a~7", "a~8", "a~9", "b~0", "b~1", "b~2", "b~3", "b~4", "b~5", "b~6", "b~7", "b~8", "b~9", "c~0", "c~1", "c~2", "c~3", "c~4", "c~5", "c~6", "c~7", "c~8", "c~9", "d~0", "d~1", "d~2", "d~3", "d~4", "d~5", "d~6", "d~7", "d~8", "d~9", "e~0", "e~1", "e~2"), //$("#hidden_emotion_notation").val().split(","), //
		c : "jpg"
	};
	
    $.fn.emotionselected = function(selected) {
        var o = $.fn.emotions.defaults;
        var selectedIndex = -1;
        for (i = 0; i <= o.b.length; i++) {
            if (o.b[i] == selected) { selectedIndex = i; }
        }
        return o.s[selectedIndex];
    }

//    $.fn.convertbackintotag = function(repls) {
//        //console.log(repls); // <img border="0" src="../../../Images/cardflowImages/emotions/a_0.jpg" width="25" height="25">
//        var o = $.fn.emotions.defaults;
//        if (repls.indexOf('<img ') > -1) {
//            for (j = 0; j < o.s.length; j++) {
//                var imgr = o.a + o.b[j] + "." + o.c;
//                var rstr = '<img border="0" src="' + imgr + '" width="25" height="25">';
//                if (repls.indexOf(rstr) > -1) {
//                    while (repls.indexOf(rstr) !== -1) {
//                        repls = repls.replace(rstr, o.s[j]);
//                    }                    
//                }
//                
//                var rstr = '<img src="' + imgr + '" border="0" width="25" height="25">';
//                if (repls.indexOf(rstr) > -1) {
//                    while (repls.indexOf(rstr) !== -1) {
//                        repls = repls.replace(rstr, o.s[j]);
//                    }                    
//                }                
//            }
//        }
//        return repls;
//    }

    $.fn.convertbackintotag = function(repls) {
        var o = $.fn.emotions.defaults;
        if (repls.indexOf('<img ') > -1) {        
            
            for (j = 0; j < o.s.length; j++) {                       
                var imgr = o.a + o.b[j] + "." + o.c;
                var matcher = new RegExp("<img[^>]*" + o.b[j].toLowerCase() + "\." + o.c.toLowerCase() + "[^>*]*>", "g");
                repls = repls.toLowerCase().replace(matcher, o.s[j]);                                          
            }
        }
        return repls;
    }
    
    $.fn.convertintoimage = function(repls) {
        var o = $.fn.emotions.defaults;
        for (j = 0; j < o.s.length; j++) {
            var imgr = o.a + o.b[j] + "." + o.c;
            var rstr = '<img border="0" src="' + imgr + '" width="25" height="25">';
            if (repls.indexOf(o.s[j]) > -1) {
                while (repls.indexOf(o.s[j]) !== -1) {
                    repls = repls.replace(o.s[j], rstr);
                }
            }
        }
        return repls;
    }    
})(jQuery);
// Notes
// a - icon folder
// b - emotions name array
// c - image format
// x - current selector
// d - type of selector
// o - options 