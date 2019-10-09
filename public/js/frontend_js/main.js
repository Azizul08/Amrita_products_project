/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});


});
//Change Price with size
$(document).ready(function(){

//console.log('asd');
   // console.log(baseUrl);
    $("#selSize").change(function () {
        var idSize=$(this).val();
        if(idSize==""){
            return false;
        }
        $.ajax({
            type:'get',
            url: baseUrl + '/get-product-price',
            data:{idSize:idSize},
            success:function (resp) {
                //console.log(resp);
                //alert(resp); return false;
                var arr=resp.split('#');
                $("#getPrice").html("TK "+arr[0]);
                $("#price").val(arr[0]);
                if(arr[1]==0){
                    $("#cartButton").hide();
                    $("#Availability").text("Out of Stock");
                }else{
                    $("#cartButton").show();
                    $("#Availability").text("In Stock");

                }

            },error:function (error) {
                //console.log(error);

                alert("Error");
            }
        });
    });



});

//Replace Main Image with Alternate Image
$(document).ready(function(){
$(".changeImage").click(function () {
	var image=$(this).attr('src');
    $(".mainImage").attr("src",image);
});

});

// Instantiate EasyZoom instances
var $easyzoom = $('.easyzoom').easyZoom();

// Setup thumbnails example
var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

$('.thumbnails').on('click', 'a', function(e) {
    var $this = $(this);

    e.preventDefault();

    // Use EasyZoom's `swap` method
    api1.swap($this.data('standard'), $this.attr('href'));
});

// Setup toggles example
var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

$('.toggle').on('click', function() {
    var $this = $(this);

    if ($this.data("active") === true) {
        $this.text("Switch on").data("active", false);
        api2.teardown();
    } else {
        $this.text("Switch off").data("active", true);
        api2._init();
    }
});

$(document).ready(function() {

    //validate Register form keyup and submit
    $("#registerForm").validate({

        rules: {
            name: {
                required: true,
                minlength: 2,
                accept: "[a-zA-Z]+"
            },
            password:{
                required: true,
                minlength: 6
            },
            email:{
                required: true,
                email:true,
                remote:"check-email"
                //dataType: "json",
                // remote: {
                //     url: "check-email",
                //     type: "post",
                //     data: {_token: $("input[name=_token]").val(), email: function() { return $("#email").val(); }},
                // }

            }
        },
        messages:{
            name:{
                required:"Please Enter your Name",
                minlength:"Your Name must be atleast 2 Characters long",
                accept: "Your Name contain letters only"
            },
            password:{
                required:"Please Enter your Password",
                minlength: "Your password must be atleast 6 Characters long"
            },
            email:{
                required:"Please Enter your Email",
                email:"Please Enter valid Email",
                remote: "Email already Exists!"
            }
        }
    });
    //validate Register form keyup and submit
    $("#accountForm").validate({

        rules: {
            name: {
                required: true,
                minlength: 2,
                accept: "[a-zA-Z]+"
            },
            address:{
                required: true,
                minlength: 6
            },
            city:{
                required: true,
                minlength: 2
            },
            state:{
                required: true,
                minlength: 2
            },
            country:{
                required: true
            }
        },
        messages:{
            name:{
                required:"Please Enter your Name",
                minlength:"Your Name must be atleast 2 Characters long",
                accept: "Your Name contain letters only"
            },
            address:{
                required:"Please Provider your Address",
                minlength: "Your Address must be atleast 10 Characters long"
            },
            city:{
                required:"Please Provider your City",
                minlength: "Your password must be atleast 2 Characters long"
            },
            state:{
                required:"Please Provider your  state",
                minlength: "Your  state must be atleast 2 Characters long"
            },
            country:{
                required:"Please Select your Country Name"
            }
        }
    });

    //validate Login form keyup and submit
    $("#loginForm").validate({

        rules: {
            email:{
                required: true,
                email:true
            },
            password:{
                required: true
            }
        },
        messages:{
            email:{
                required:"Please Enter your Email",
                email:"Please Enter valid Email"
            },
            password:{
                required:"Please Enter your Password"
            }
        }
    });
    $("#passwordForm").validate({
        rules:{
            current_pwd:{
                required: true,
                minlength:6,
                maxlength:20
            },
            new_pwd:{
                required: true,
                minlength:6,
                maxlength:20
            },
            confirm_pwd:{
                required:true,
                minlength:6,
                maxlength:20,
                equalTo:"#new_pwd"
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //Check current User password
    $("#current_pwd").keyup(function () {
        var current_pwd=$(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url: baseUrl + '/check-user-pwd',
           // url : '/check-user-pwd/'+current_pwd,
            data:{current_pwd:current_pwd},
            success:function (resp) {
               // console.log(resp);
                //alert(resp);
                if(resp=="false"){
                    $("#chkPwd").html("<font color='red'>Current Password is Incorrect</font>");
                }else if(resp=="true"){
                    $("#chkPwd").html("<font color='green'>Current Password is Correct</font>");
                }
            },error:function () {
                //console.log(e.responseText);
                alert("Error");
            }
        });
    });

    //password strength script
    $('#myPassword').passtrength({
        minChars: 4,
        passwordToggle: true,
        tooltip: true,
        eyeImg : "images/frontend_images/eye.svg"
    });

});














