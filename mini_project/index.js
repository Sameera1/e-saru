$("#signupform").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    $.ajax({
        url:"signup.php",
        type:"POST",
        data:datatopost,
        success:function(data){if (data){$("#signupmessage").html(data);}},
        error:function(){
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error</div>");
        }
    });
});