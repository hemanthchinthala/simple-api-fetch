
//***** refrencehttps://codingstatus.com/change-url-without-reloading-page-jquery-ajax-php $(document).on('click','.ajaxhomelink', function(e){   Thanks to  https://stackoverflow.com/questions/15375929/how-to-load-external-page-using-ajax *******//
		
$('.ajaxhome').click(function(e){
   e.preventDefault();
   var pageURLHome=$(this).attr('href');
   var pageURLHomeNonPhp= pageURLHome.replace(/.php/g, "");
	 
    /**var pageURLHome= pageURLHome.replace(/.fhtml/g, ".php");**/
    history.pushState(null, '', pageURLHomeNonPhp);
     
    $.ajax({    
       type: "GET",
       url: pageURLHome, 
       data:{page:pageURLHome},            
       dataType: "html",                  
       success: function(data){ 
		  $('body').html(data);    
        //$('.homecontentpage').html(data);    
               
       }
   });
});
