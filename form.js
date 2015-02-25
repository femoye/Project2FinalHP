/**
 * Created by Joseph Owens and Femi Oyedepo on 1/23/15.
 */

$(document).ready(function() {
    $("#userForm").submit(function(e) {
        removeFeedback();
        var errors = validateForm();
        if (errors == "") {
            return true;
        } else {
            provideFeedback(errors)
            e.preventDefault();
            return false;
        }
    });

    function validateForm() {
        var errorFields = new Array();

        //Check required fields have something in them
        if ($('#fname').val() == "") {
            errorFields.push('fname');
        }
        if ($('#lname').val() == "") {
            errorFields.push('lname');
        }
        if ($('#email').val() == "") {
            errorFields.push('email');
        }

        if ($('#userid').val() == "") {
            errorFields.push('userid');
        }
        if ($('#password1').val() == "") {
            errorFields.push('password1');
        }
        //check that passwords match
        if ($('#password2').val() != $('#password1').val()) {
            errorFields.push('password2');
        }
        //very basic email check, just an @ symbol
        if (!($('#email').val().indexOf(".") > 2) &&
            ($('#email').val().indexOf("@"))) {
            errorFields.push('email');
        }
        return errorFields;
    } //end function validateForm

    //provide feedback to users
    function provideFeedback (incomingErrors) {
        for (var i = 0; i < incomingErrors.length; i++)
        {
            $("#" + incomingErrors[i]).addClass("errorClass");
            $("#" + incomingErrors[i] + "Error").removeClass("errorFeedback");
        }
        $("#errorDiv").html("Errors encountered");
    }

    function removeFeedback() {
        $("#errorDiv").html("");
        $('input').each(function() {
            $(this).removeClass("errorClass");
        });
        $('.errorSpan').each(function() {
            $(this).addClass("errorFeedback");
        });
    }

});

