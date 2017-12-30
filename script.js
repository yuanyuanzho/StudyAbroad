 
 
 $(document).ready(function(){
     var regExName = /^[a-zA-Z]+$/;
     var regExEmail = /([\w\.]+)@([\w\.]+)\.(\w+)/;
     var regExPhone = /\d{3}-?\d{3}-\d{4}$/;

    //sign up / log in form validate

    //first name validation
    $("#firstName").focusout(function(){
        var firstName = $("#firstName").val();
        if(!firstName.match(regExName)){
            $("#firstNameErrorMessage").html("Invalid first name, only text value permitted!");
            $("#firstName").css({"border" : "2px solid red"});
            $("#firstNameErrorMessage").show();
            $("#firstName").val("");
        }else{
            $("#firstNameErrorMessage").hide();
            $("#firstName").css({"border" : ""});
        }
    });

    //last name validation
    $("#lastName").focusout(function(){
        var lastName = $("#lastName").val();
        if(!lastName.match(regExName)){
            $("#lastNameErrorMessage").html("Invalid last name, only text value permitted!");
            $("#lastName").css({"border" : "2px solid red"});
            $("#lastNameErrorMessage").show();
            $("#lastName").val("");
        }else{
            $("#lastNameErrorMessage").hide();
            $("#lastName").css({"border" : ""});
        }
    });


    //email validation
    $("#email").focusout(function(){
        var email = $("#email").val();
        if(!email.match(regExEmail)){
            $("#emailErrorMessage").html("Invalid email address!");
            $("#email").css({"border" : "2px solid red"});
            $("#emailErrorMessage").show();
            $("#email").val("");
        }else{
            $("#emailErrorMessage").hide();
            $("#email").css({"border" : ""});
        }
    });

    // comfirm email
    $("#comfirmEmail").focusout(function(){
        var comfirmEmail = $("#comfirmEmail").val();
        var email = $("#email").val();
        if( comfirmEmail != email ){
            $("#comfirmEmailErrorMessage").html("Email address did not match!");
            $("#comfirmEmail").css({"border" : "2px solid red"});
            $("#comfirmEmailErrorMessage").show();
            $("#comfirmEmail").val("");
        }else{
            $("#comfirmEmailErrorMessage").hide();
            $("#comfirmEmail").css({"border" : ""});
        }
    });

    // comfirm password
    $("#comfirmPwd").focusout(function(){
        var password = $("#password").val();
        var comfirmPwd = $("#comfirmPwd").val();
        if( password != comfirmPwd){
            $("#comfirmPasswordErrorMessage").html("Password did not match!");
            $("#comfirmPwd").css({"border" : "2px solid red"});
            $("#comfirmPasswordErrorMessage").show();
            $("#comfirmPwd").val("");
        }else{
            $("#comfirmPasswordErrorMessage").hide();
            $("#comfirmPwd").css({"border" : ""});
        } 
    });

    //phone number validation
    $("#phoneNo").focusout(function(){
        var phoneNo = $("#phoneNo").val();
        if( ! phoneNo.match(regExPhone)){
            $("#phoneNoErrorMessage").html("Invalid phone number. Only numerical values permitted and in the requested format xxx-xxx-xxxx. ")
            $("#phoneNo").css({"border" : "2px solid red"});
            $("#phoneNoErrorMessage").show();
            $("#phoneNo").val("");
        }else{
            $("#phoneNoErrorMessage").hide();
            $("#phoneNo").css({"border" : ""})
        }
    });


    //social medias footer
    var socialMedias = {
    facebook : 'http://facebook.com',
    twitter: 'http://twitter.com',
    ins: 'https://www.instagram.com/?hl=en',
    flickr: 'http://flickr.com',
    youtube: 'http://youtube.com'
    };

    function social(){
    var output ="<ul id='icons'>";
    for(var i in socialMedias){
        output += "<li> <a href='" + socialMedias[i] + "'>  <img src='images/" + i +".png' /></a></li>";
    }
    output += "</ul>";
    document.getElementById("icons").innerHTML = output;
    }
    social();

    //move to comment page
    document.getElementById("commentBtn").onclick = function(){
        location.href = "comment.html"
    }

 })



