$(function(){
  
  ///////////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////// AUTHOR: JACK ELLIS ////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////
  ////////////////////// DO NOT EDIT BELOW UNLESS YOU'RE A PRO //////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////
  
  // Link handling.
  $('a[rel != "noAJAX"]').live('click', function(event){
  	
  	if ($(this).attr('name') != ""){
  		
  		var currentDiv = $(this).attr('name');
  		
  	}else{
  		
  		var currentDiv = divID;
  		
  	}
  	
  	$(currentDiv).html(loadingHTML);
  	  	
  	$(currentDiv).load($(this).attr('href'));
  	
  	event.preventDefault();
  	
  });
  
  $('form[rel != "noAJAX"]').live('submit', function(event){
  	
  	if ($(this).attr('name') != ""){
  		  		
  		var currentDiv = $(this).attr('name');
  		
  	}else{
  		
  		var currentDiv = divID;
  		
  	}
  	
  	$(currentDiv).html(loadingHTML);
  	
  	$.post($(this).attr('action'), $(this).serialize(), function(html){
  		
  		$(currentDiv).html(html);
  		
  	});
  	
  	return false;
  	
  });
  
});