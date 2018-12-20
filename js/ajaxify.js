function ajaxify(uri,target){
   $('.ajaxify-loader').css("display","block");
        $('.loader-trans').css("display","block"); 


        $.ajax({url: uri, success: function(result){
            $("." + target).html(result);
            $('.ajaxify-loader').css("display","none");
            $('.loader-trans').css("display","none");
        }, error: function(xhr){
            $('.ajaxify-loader').html("Check your internet connection and please reload the page. Error code :  " + xhr.status + " ");
            //$("." + target).html("<p>Check your internet connection. Or , there could be an error, i.e. " + xhr.status + " </p>");
        }});

}

$(document).ready(function(){
    $(".ajaxify").click(function(event){
    	event.preventDefault();
    	$('.ajaxify-loader').css("display","block");
    	$('.loader-trans').css("display","block");
    	//alert('lol');
    	var uri = $(this).data('uri');
    	var target = $(this).data('target');
    	uri = "" + uri;

        ajaxify(uri,target);

    });
});


