import {gs_sessionStorage,gs_getItem,gs_productOwlCarousel,gs_SweetAlert,isValidEmail,isValidPhone,gs_swalToast,gs_forgetItem} from './../global.js';

export async function _request_quotation_form(){

    var requestForm = function() {

        var _handleForm = function() {


            $("#form-contact-info").submit(function(e) {
                e.preventDefault();

                var isValid = true;

                $('.validate-form-input').each(function() {
                    var value = $(this).val().trim();
                    var label = $(this).attr("validation-msg");

                    if($(this).hasClass('form-check-input')){
                        let checked = $(this).prop('checked');
                        if(!checked){
                            Swal.fire( 'Oopps!', 'Please '+label+'. Thank you.', 'info')
                            isValid = false;
                            return false;
                        }
                    } else if (value === "") {
                        Swal.fire( 'Oopps!', 'Please '+label+'. Thank you.', 'info')
                        isValid = false;
                        return false;
                    }else if ($(this).hasClass("email") && !isValidEmail(value)) {
                        Swal.fire( 'Oopps!', 'Please enter a valid email address.', 'info')
                        isValid = false;
                        return false;
                    }else if ($(this).hasClass("phone") && !isValidPhone(value)) {
                        Swal.fire( 'Oopps!', 'Please enter a valid phone number.', 'info')
                        isValid = false;
                        return false;
                    }else{
                        isValid = true;
                    }
                });

                if (isValid) {

                    let url   = $('#form-contact-info').attr('data-url');
                    let type  = $('#form-contact-info').attr('action');
                    let form  = document.querySelector("#form-contact-info");
                    let specs = gs_getItem('product-spec');

                    if(specs){

                        gs_SweetAlert(
                            'Send a Request Quotation?',
                            "Double Check the form before sending",
                            'question',
                            'Yes, Send It',
                            () => { _handleSubmitForm(form,type,url,specs)  },
                        )
                    }

                }
            });
        }

        var _handleSubmitForm = function(form,type,url,specs){

            let formData = new FormData(form);
            formData.append("action", type);
            formData.append("specs", specs);

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
                                    gs_forgetItem('product-spec');
                                    window.location.replace("/products");
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
                                gs_forgetItem('product-spec');
                                setTimeout(function() {
                                    window.location.replace("/products");
                                }, 2000);
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

