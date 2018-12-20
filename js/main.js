 $(".createaccount").click(function(event){
    event.preventDefault();
    var email = $("#signup-email").val();
    var password = $("#signup-password").val();
    var password2 = $("#signup-password2").val();

    if(password2!=password){
        $(".signup").append("<p class=\"text-danger\">Passwords do not match.</p>");
    }else if(password.length<8){
        $(".signup").append("<p class=\"text-danger\">Password must be of atleast 8 characters.</p>");

    }else{
        var uri = "signup-lite.php?email="+email+"&password="+password;
        modalify("Step 2",uri,"");
    }
    
 });


