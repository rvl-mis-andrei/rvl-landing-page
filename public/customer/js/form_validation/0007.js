import {gs_sessionStorage,gs_getItem,gs_productOwlCarousel,gs_SweetAlert,isValidEmail,isValidPhone,gs_swalToast,gs_forgetItem} from './../global.js';

export async function _fnContactUs(){

    var requestForm = function() {

        var _handleForm = function() {


            $("#contact-form").submit(function(e) {
                e.preventDefault();

                var isValid = true;

                $("#contact-form input").each(function() {
                    var value = $(this).val().trim();
                    var $error_label = $(this).siblings('.validation-error');

                    if (value === "") {
                        if (!$error_label.length) {
                            $(this).after('<label class="error validation-error" for="fullname">This field is required.</label>');
                        }
                        isValid = false;
                    } else if ($(this).hasClass("email") && !isValidEmail(value)) {
                        $(this).next().empty();
                        $(this).after('<label class="error validation-error">Email is invalid.</label>')
                        isValid = false;
                    } else {
                        isValid = true;
                        $error_label.remove();
                    }
                });

                if (isValid) {

                    let url   = $('#contact-form').attr('data-url');
                    let type  = $('#contact-form').attr('action');
                    let form  = document.querySelector("#contact-form");
                    if(form){
                        gs_SweetAlert(
                            'Send the Email?',
                            "Double Check the form before sending",
                            'question',
                            'Yes, Send It',
                            () => { _handleSubmitForm(form,type,url)  },
                        )
                    }

                }
            });
        }

        var _handleSubmitForm = function(form,type,url){

            let formData = new FormData(form);
            formData.append("action", type);

            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: url,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType:"json",
                beforeSend: function(){
                },
                complete: function(){
                },
                success: function(response){
                    if(response.status=="success"){
                        let res=JSON.parse(window.atob(response.payload));

                        if(res!=false){
                            Swal.fire({
                                text:res.message,
                                icon:res.status,
                                title:"Thank You",
                                showCancelButton: false,
                                confirmButtonText: "Ok, Got it",
                                reverseButtons: true
                                }).then(function(result) {

                                });
                        }else{
                            Swal.fire({
                                text: "Oopps! Something went wrong, Please try again later",
                                icon: "error",
                                showCancelButton: false,
                                confirmButtonText: "Ok, Got it",
                                reverseButtons: true
                                }).then(function(result) {
                            });
                        }
                    }else if(response.status == "failed"){
                            Swal.fire("Oopps!", response.message, "info").then(function(result) {

                            });

                        }else{
                            Swal.fire("Oopps!", "Something went wrong, Please try again later(ERROR CODE:0002)", "info");
                            console.log(JSON.parse(window.atob(response.payload)));
                    }
                },
                error: function(xhr,status,error){
                    console.log(xhr);
                    console.log(status);
                    console.log(error);
                    console.log(xhr.responseText);
                    Swal.fire("Oopps!", "Something went wrong, Please try again later(ERROR CODE:0001)", "info");
                }
            })
        }

        return {
            init: function() {
                _handleForm();
            }
        };

    }();

    jQuery(document).ready(function() {
        requestForm.init();
    });
}

