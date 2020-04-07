// JavaScript Document

(function($) {

    $.fn.HintsAndTips  = function() {
    
        HintsAndTipsDefaultLink();
        
        $(".btn_hintsandtips").click(function() {
            HintsAndTipsSelection();
        });
        
        $("#ICE_help_link").click(function() {
            HintsAndTipsSelection();
        });
        
        function HintsAndTipsSelection() {
        //OPEN - HINTS AND TIPS POPUP//
			$('.fancierbox_hat').addClass('block');
			//alert('adfadf');
			var currentICEselection = $('body').attr('class');
            //alert(currentICEselection);

		    switch (currentICEselection) { 
				        // START CASE - standard
				        case 'standard': // Enter url here 
					        var GroupSelected = 'set2';
					        HintsSectionSelect (GroupSelected);
					        break;  
				        // END CASE - standard
				        // START CASE - standard non personalised
				        case 'standard_non_personalised': // Enter url here 
					        var GroupSelected = 'set1';
					        HintsSectionSelect (GroupSelected);
					        break;  
				        // END CASE - standard non personalised
				        case 'card_front': // Enter url here 
					        var GroupSelected = 'set2';
					        HintsSectionSelect (GroupSelected);
					        break;  
				        // END CASE - homepage
        				
				        // START CASE - upload image
				        case 'upload_image': // Enter url here 
				            var GroupSelected = 'set3';
					        HintsSectionSelect (GroupSelected);
					        break; 
				        // END CASE - upload image
				        
				        // START CASE - test page
				        case 'edit_image': // Enter url here 
				            var GroupSelected = 'set4';
					        HintsSectionSelect (GroupSelected);
					        break; 
				        // END CASE - homepage
				        
				        // START CASE - inside right
				        case 'inside_right': // Enter url here 
					        var GroupSelected = 'set5';
					        HintsSectionSelect (GroupSelected);
					        break; 
				        // END CASE - inside right
				        
				        // START CASE - card back
				        case 'text_formatting': // Enter url here 
					        var GroupSelected = 'set6';
					        HintsSectionSelect (GroupSelected);
					        break; 
				        // END CASE - card back
				        
				        // START CASE - card back
				        case 'card_back': // Enter url here 
					        var GroupSelected = 'set7';
					        HintsSectionSelect (GroupSelected);
					        break; 
				        // END CASE - card back

		        }
		    
		    function HintsSectionSelect (GroupSelected) {
		        var GroupToShow = GroupSelected;
		        $('.content_group').hide();
			    $('#content_'+ GroupToShow +'').show();
			    $('.hat_tab_content').hide();
			    $('#content_'+ GroupToShow +' #content_hat_tab1').show();
			    $('.hat_tab').removeClass('hat_active');
			    $('#content_'+ GroupToShow +' #hat_tab1').addClass('hat_active');
			    $('.hat_dd select').val(GroupToShow);
		    }
		    
		}
						
		//CLOSE - HINTS AND TIPS POPUP//
		$(".fancier_close_btn").click(function() {
			$('.fancierbox_hat').removeClass('block');
			//alert('afsdaf');
		});
		
		$('.hat_tab').click(function(){
			var activeTab = $(this).attr('id');
			$('.hat_tab_content').hide();
			$('.hat_tab_content#content_'+ activeTab +'').show();
			$('.hat_tab').removeClass('hat_active');
			$(this).addClass('hat_active');
		});
		
		function HintsAndTipsDefaultLink () {
		    $('.hat_link a').removeAttr('href');
		    $('.hat_link a').addClass('btn_hintsandtips');
		    //alert('HintsAndTipsDefaultLink');
		}
		
		$('.hat_dd').change(function(){
			var activeDD = $('.hat_dd option:selected').attr('id');
			$('.content_group').hide();
			$('#content_'+ activeDD +'').show();
			$('.hat_tab_content').hide();
			$('#content_'+ activeDD +' #content_hat_tab1').show();
			$('.hat_tab').removeClass('hat_active');
			$('#content_'+ activeDD +' #hat_tab1').addClass('hat_active');
			//alert(activeDD);
		});


    }
	
	
}(jQuery));