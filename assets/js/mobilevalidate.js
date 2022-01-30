jQuery(function ($) {

    jQuery.validator.addMethod("country", function (value, element) {
        return this.optional(element) || /^[^+]/.test(value);
    }, "Enter Number Without Country Code");
    jQuery.validator.addMethod("number", function (value, element) {
        return this.optional(element) || value.match(/^[1-9][0-9]*$/);
    }, "Please enter the number without beginning with '0'");

    jQuery.validator.addMethod("mobile", function (value, element) {
        return this.optional(element) || $(element).intlTelInput("isValidNumber");
    }, "Please enter a valid mobile number");

    jQuery.validator.addMethod("alphabets", function (value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    }, "Please enter Alphabets only");

    jQuery.validator.addMethod("email", function (value, element) {
        return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
    }, "Please enter a valid email address.");


    jQuery.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Value must not equal arg.");

$("#enquire-now").validate({
        rules:{
           fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
        },
        messages:{
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    },
                    email: {
                        required: "Enter Your Email"
                    }
        },
        submitHandler: function(form) { 
              $.ajax({
                  url:'api.php',
                type:'POST',
                dataType: 'html',
                success: function(data) {
                    $("#block").html(data);
                    $("#enquire-now")[0].reset();
                     $("#answer4").show();
                    $("#answer4").html('Thanks for contacting us we will reach you shortly');
                }
             });
             return false; // required to block normal submit since you used ajax
         }
     });
    /*if ($('#enquire-now').length > 0) {
        $('#enquire-now').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages:
                {
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    },
                    email: {
                        required: "Enter Your Email"
                    }
                }
        });
    }*/
    
$("#contact-form").validate({
        rules:{
           fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
        },
        messages:{
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    },
                    email: {
                        required: "Enter Your Email"
                    }
        },
        submitHandler: function(form) { 
              $.ajax({
                  url:'api.php',
                type:'POST',
                dataType: 'html',
                success: function(data) {
                    $("#block").html(data);
                    $("#contact-form")[0].reset();
                     $("#answer1").show();
                    $("#answer1").html('Thanks for contacting us we will reach you shortly');
                }
             });
             return false; // required to block normal submit since you used ajax
         }
     });

    /*if ($('#contact-form').length > 0) {
        $('#contact-form').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages:
                {
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    },
                    email: {
                        required: "Enter Your Email"
                    }
                }
        });
    }*/
    

   /* if ($('#download-now').length > 0) {
        $('#download-now').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages:
                {
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    },
                    email: {
                        required: "Enter Your Email"
                    }
                },
submitHandler: function(form) { // for demo
        $('#download-now').ajaxSubmit({
            url: 'api.php',
            type: 'POST',
            data: $(form).serialize(),
            success: function(response) {
                //$('#answers').html(response);
                alert('saved');
            }            
        });
}
        });
    }*/
$("#download-now").validate({
        rules:{
           fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
        },
        messages:{
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    },
                    email: {
                        required: "Enter Your Email"
                    }
        },
        submitHandler: function(form) { 
              $.ajax({
                  url:'api.php',
                type:'POST',
                dataType: 'html',
                success: function(data) {
                    $("#block").html(data);
                    $("#download-now")[0].reset();
                     $("#answer5").show();
                    $("#answer5").html('Thanks for downloading the Ebrochure.');
                }
             });
             return false; // required to block normal submit since you used ajax
         }
     });

   /* if ($('#price-popup').length > 0) {
        $('#price-popup').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages:
                {
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    },
                    email: {
                        required: "Enter Your Email"
                    }
                }
        });
    }*/
    $("#price-popup").validate({
        rules:{
           fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
        },
        messages:{
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    },
                    email: {
                        required: "Enter Your Email"
                    }
        },
        submitHandler: function(form) { 
              $.ajax({
                  url:'api.php',
                type:'POST',
                dataType: 'html',
                success: function(data) {
                    $("#block").html(data);
                    $("#price-popup")[0].reset();
                     $("#answer3").show();
                    $("#answer3").html('Thanks for contacting us we will reach you shortly');
                }
             });
             return false; // required to block normal submit since you used ajax
         }
     });

    /*if ($('#main-popup').length > 0) {
        $('#main-popup').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                }
            },
            messages:
                {
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    }
                }
        });
    }*/
    $("#main-popup").validate({
        rules:{
           fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                }
        },
        messages:{
                    fname: {
                        required: "Enter Your Name"
                    },
                    mobile: {
                        required: "Enter Your Number"
                    }
                  
        },
        submitHandler: function(form) { 
              $.ajax({
                  url:'api.php',
                type:'POST',
                dataType: 'html',
                success: function(data) {
                    $("#block").html(data);
                    $("#main-popup")[0].reset();
                     $("#answer2").show();
                    $("#answer2").html('Thanks for contacting us we will reach you shortly');
                }
             });
             return false; // required to block normal submit since you used ajax
         }
     });
});