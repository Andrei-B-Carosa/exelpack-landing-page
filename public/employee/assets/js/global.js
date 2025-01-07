export function gs_sessionStorage(session,val) {
    if (typeof(Storage) !== "undefined") {
        sessionStorage.setItem(session, val);
    } else {
        console.log("Sorry, your browser does not support Web Storage...");
    }
}

export function gs_getItem(session){
    return sessionStorage.getItem(session);
}

export function gs_swalToast(title,icon){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer),
            toast.addEventListener('mouseleave', Swal.resumeTimer) }
    });
    Toast.fire({
        icon: icon,
        title: title
    });
}

// export function _showSweetAlertInput(title, text, icon, formHtml, targetClass = 'validate-input', url, id1,id2,action,type) {
//     Swal.fire({
//       title: title,
//       text: text,
//       icon: icon,
//       html: formHtml,
//       showCancelButton: true,
//       confirmButtonColor: '#3085d6',
//       cancelButtonColor: '#d33',
//       confirmButtonText: 'Submit',
//       allowOutsideClick: false,
//       allowEscapeKey: false,
//       preConfirm: () => {
//         const inputs = Swal.getPopup().querySelectorAll(`.${targetClass}`);
//         let isValid = true;

//         inputs.forEach((input) => {
//           if (input.value === '') {
//             isValid = false;
//             Swal.showValidationMessage('Please complete the form');
//           } else {
//             input.classList.remove('is-invalid');
//           }
//         });

//         if (isValid) {
//           const formData = new FormData();
//           formData.append('action', window.btoa(action));
//           formData.append('type', type);
//           formData.append('param1', id1);

//           if(id2 !=false){ formData.append('id2', id2); }

//           inputs.forEach((input) => {
//             if (input.type === 'file') {
//               const file = input.files[0];
//               formData.append(input.name, file);
//             } else {
//               formData.append(input.name, input.value);
//             }
//           });

//           return fetch(url, {
//             method: 'POST',
//             headers: {
//               "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content')
//             },
//             body: formData
//           })
//           .then((response) => {
//             if (response.ok) {
//               return response.json();
//             } else {
//               throw new Error('Validation failed');
//             }
//           })
//           .then((validationResult) => {
//                 let res = JSON.parse(window.atob(validationResult.payload));

//                 if(res.status == 'success'){
//                     _showToast('success',res.message);
//                 }else if (res.status == 'error'){
//                     throw new Error(res.message);
//                 }

//           })
//           .catch((error) => {
//             Swal.showValidationMessage( error )
//           });
//         } else {
//           return false;
//         }
//       }
//     }).then((result) => {
//       // Handle the result if needed
//     });
// }

export function gs_swalOption(title,icon,options,placeholder,btn_txt,url,callback,id,id2){


    if(id == '' || id == null || id == undefined){
        gs_swalToast('Missing Parameter. Try again Later','error');
    }

    Swal.fire({
        title: title,
        icon: icon,
        input: 'select',
        inputPlaceholder: placeholder,
        inputOptions:options,
        showCancelButton: true,
        confirmButtonText: btn_txt,
        showLoaderOnConfirm: true,
        preConfirm: (data) => {

            if (!data) {
                Swal.showValidationMessage('Please select an option');
                return false;
            }

            return fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content')
                },
                body: JSON.stringify({data: data, id: id, id2:id2}),
            })
            .then((response) => {
                return response.json().then((res) => {
                    if(response.ok){
                        return res;
                    }else{
                        throw new Error(res.error);
                    }
                });
            })
            .catch(error => {
                Swal.showValidationMessage(error.message)
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        let res = result.value;
        if (result.isConfirmed && res.success) {
            gs_swalToast(res.success,'success');
            if (typeof callback === 'function') {
                callback();
            }
        }
    });

    $('.swal2-select').removeClass('swal2-select').addClass('form-control swal2-select');
}

export function gs_swalConfirmation(title,text,icon,btn_txt,url,callback,id1,id2){

    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: btn_txt,
        showLoaderOnConfirm: true,
        preConfirm: (data) => {

            if (!data) {
                Swal.showValidationMessage('Missing Parameter, Try Again Later. ');
                return false;
            }

            return fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content')
                },
                body: JSON.stringify({id1:id1,id2:id2}),
            })
            .then((response) => {
                return response.json().then((res) => {
                    if(response.ok){
                        return res;
                    }else{
                        throw new Error(res.error);
                    }
                });
            })
            .catch(error => {
                Swal.showValidationMessage(error.message)
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
        let res = result.value;
        if (result.isConfirmed && res.success) {
            gs_swalToast(res.success,'success');
            if (typeof callback === 'function') {
                callback();
            }
        }
      });
}

//SIMPLE SWAL
export function gs_SweetAlert(title,text,icon,btn_txt='Ok, Got it',callback=false){
    Swal.fire({
        title:title,
        text: text,
        icon: icon,
        buttonsStyling: false,
        confirmButtonText: btn_txt,
        showCancelButton: true,
        customClass: {
            confirmButton: "btn font-weight-bold btn-light-primary",
            cancelButton: "btn font-weight-bold btn-light-danger",
        }
    }).then((result) => {
        if (result.isConfirmed){
            if (typeof callback === 'function') {
                callback();
            }
        }
    });

}

export function gs_swal(title,text,icon,btn_txt='Ok, Got it'){
    Swal.fire({
        title:title,
        text: text,
        icon: icon,
        buttonsStyling: false,
        confirmButtonText: btn_txt,
        customClass: {
            confirmButton: "btn font-weight-bold btn-light-primary"
        }
    })

}

export async function gs_getAcademicYr(div='select-ay')
{
    return new Promise((resolve, reject) => {
        $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/get-academic-year',
            type: 'POST',
            async: true,
            cache: false,
            beforeSend: function(){},
            complete: function(){},
            success: function(res){

                if (res.status == 'success') {

                    let appendSelect = div !='select-ay'?'gs-div-ay':'div-ay';
                    let selectElement = document.createElement('select');
                    selectElement.id = 'acad-yr';
                    selectElement.name = 'acad_yr';
                    selectElement.classList.add('form-control','select-filter',div);

                    let nulloptionElement = document.createElement('option');
                    nulloptionElement.value = '';
                    nulloptionElement.textContent = 'Select Academic Year';
                    selectElement.appendChild(nulloptionElement);

                    res.data.forEach(item => {
                        const optionElement = document.createElement('option');
                        optionElement.value = item.ay_id;
                        optionElement.textContent = item.ay_name;
                        selectElement.appendChild(optionElement);
                    });

                    $('.'+appendSelect).empty().append(selectElement);
                    $('#sem').val(res.sys_setting.sem_id);
                    $('#acad-yr').val(res.sys_setting.ay_id);
                    $('#term').val(res.term);

                    resolve();
                } else {
                    reject(new Error('Something went wrong, Please Try again later.'));
                }

            },
            error: function(xhr,status,error){
                console.log(xhr);
                console.log(status);
                console.log(error);

                reject(new Error('Something went wrong, Please Try again later.'));

            }
        });
    });

}

export function gs_getCollege()
{
    $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/get-college',
        type: 'POST',
        async: true,
        cache: false,
        beforeSend: function(){},
        complete: function(){},
        success: function(res){

            if (res.status == 'success') {

                let selectElement = document.createElement('select');
                selectElement.id = 'college';
                selectElement.classList.add('form-control','select-filter');

                const nullOptionElement = document.createElement('option');
                nullOptionElement.value = ''; // Set the value to an empty string or null
                nullOptionElement.textContent = 'Select College';
                selectElement.appendChild(nullOptionElement);

                res.data.forEach(item => {
                    const optionElement = document.createElement('option');
                    optionElement.value = item.college_id;
                    optionElement.textContent = item.college_code;
                    selectElement.appendChild(optionElement);
                });

                $('.div-college').empty().append(selectElement);

            }

        },
        error: function(xhr,status,error){
            console.log(xhr);
            console.log(status);
            console.log(error);
        }
    });
}

export function gs_getCourse()
{
    $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/get-course-list',
        type: 'POST',
        async: true,
        cache: false,
        beforeSend: function(){},
        complete: function(){},
        success: function(res){

            if (res.status == 'success') {

                let option = document.createElement('select');
                option.id = 'course-list';
                option.classList.add('form-control','select-filter');

                res.data.forEach(item => {
                    const optionElement = document.createElement('option');
                    optionElement.value = item.course_id;
                    optionElement.textContent = item.course_description;
                    selectElement.appendChild(optionElement);
                });

                return option;
            }

        },
        error: function(xhr,status,error){
            console.log(xhr);
            console.log(status);
            console.log(error);
        }
    });
}

