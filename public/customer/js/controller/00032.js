import {_httpRequest} from './../page_data.js';
import {gs_sessionStorage,gs_getItem,gs_productOwlCarousel,gs_SweetAlert,gs_swalToast} from './../global.js';
import {_request_quotation_form} from './../form_validation/00032.js';


export function controller(view,pg){

    var sessionSpec = gs_getItem('product-spec');
    if(sessionSpec){

        var parsedSession = window.atob(sessionSpec);
        parsedSession = JSON.parse(parsedSession);

        var product  = parsedSession.product;
        var type  = parsedSession.type;

        _httpRequest(false,['product-info','verify-product',product,type]);
        _request_quotation_form();

    }else{
        window.location.replace("/products");
    }

    $('.btn-request-quotation').click(function(e){
        e.preventDefault();
        _httpRequest(false,['product-info','modal-request-quotation',product,type]);
    })

    $('.btn-proceed-request').click(function(e){
        e.preventDefault();
        var inputsAndSelect = document.querySelectorAll(".modal-request-spec input, .modal-request-spec select");
        var inputValues = {};
        var isSelectValid = true;

        inputsAndSelect.forEach(function(element) {
            if (element.type == "text" || element.type == "number") {
                if(element.value == null || element.value == ''){
                    isSelectValid = false;
                    element.classList.add("is-invalid");
                }else{
                    inputValues[element.name] = element.value;
                }
            }else if (element.tagName === "SELECT") {
                if (element.value === "") {
                    isSelectValid = false;
                    element.classList.add("is-invalid");
                } else {
                    inputValues[element.name] = element.value;
                }
            }
        });

        if(isSelectValid){

            inputValues['type'] = type;
            inputValues['product'] = product;
            const jsonString = JSON.stringify(inputValues);
            const encodedString = window.btoa(jsonString);
            gs_sessionStorage('product-spec',encodedString);

            _httpRequest(false,['product-info','verify-product',product,type]);

            $('#modalSpecification').modal('hide');

        }

    })

}

export function construct(res,type){

    switch(type){

        case 'verify-product':

            if(res !=false || res.length > 0){
                res.forEach((product, index) => {

                    var sessionSpec = gs_getItem('product-spec');
                    var parsedSession = window.atob(sessionSpec);
                    parsedSession = JSON.parse(parsedSession);

                    let imgUrl = assetUrl+'customer/web_img/product-carousel/'+product.img;
                    let html = '';

                    html += ` <tr>
                        <td class="p-0 me-0" style="width:130px">
                            <img width="110" height="90" alt="" class="img-fluid div-product-img" src="${imgUrl}">
                        </td>
                        <td class="text-start mx-0 px-0">
                            <strong class="d-block text-color-dark line-height-1 font-weight-semibold div-product-name text-4">${parsedSession.product.toUpperCase()}</strong>
                            <span class="d-block text-color-grey positive-ls-3 font-weight-small text-3 text-uppercase div-product-type">${parsedSession.type}</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="">
                            <strong class="text-color-dark line-height-1">SPECIFICATION</strong>
                            <span></span>
                        </td>
                    </tr>`;


                    switch (parsedSession.type){
                        case 'corrugated carton':

                            for (var key in parsedSession) {
                                if (parsedSession.hasOwnProperty(key) && key !== 'type' && key !== 'product') {
                                    if(key == 'p_length' || key =='p_width' || key == 'p_height'){
                                        parsedSession[key] = parsedSession[key]+'mm';
                                    }else if(key == 'quantity'){
                                        parsedSession[key] = parsedSession[key]+'x';

                                    }
                                    html += `<tr>
                                        <td class=" py-1 border-0">
                                            <strong class="d-block text-color-dark font-weight-semibold text-capitalize">${key.replace(/^p_/, '').replace(/_/g, ' ')} : <span class="product-qty"></span></strong>
                                        </td>
                                        <td class="text-end py-1 align-top border-0">
                                            <span class="amount font-weight-medium text-color-grey div-product-material">${parsedSession[key]}</span>
                                        </td>
                                    </tr>`;
                                }
                            }
                        break;

                        case 'foam':

                            for (var key in parsedSession) {
                                if (parsedSession.hasOwnProperty(key) && key !== 'type' && key !== 'product') {
                                    if(key == 'quantity'){
                                        parsedSession[key] = parsedSession[key]+'x';
                                    }
                                    html += `<tr>
                                        <td class=" py-1 border-0">
                                            <strong class="d-block text-color-dark font-weight-semibold text-capitalize">${key.replace(/_/g, ' ')} : <span class="product-qty"></span></strong>
                                        </td>
                                        <td class="text-end py-1 align-top border-0">
                                            <span class="amount font-weight-medium text-color-grey div-product-material">${parsedSession[key]}</span>
                                        </td>
                                    </tr>`;
                                }
                            }

                        break;

                        case 'bubble sheet':
                            for (var key in parsedSession) {
                                if (parsedSession.hasOwnProperty(key) && key !== 'type' && key !== 'product') {
                                    if(key == 'quantity'){
                                        parsedSession[key] = parsedSession[key]+'x';
                                    }
                                    html += `<tr>
                                        <td class=" py-1 border-0">
                                            <strong class="d-block text-color-dark font-weight-semibold text-capitalize">${key.replace(/_/g, ' ')} : <span class="product-qty"></span></strong>
                                        </td>
                                        <td class="text-end py-1 align-top border-0">
                                            <span class="amount font-weight-medium text-color-grey div-product-material">${parsedSession[key]}</span>
                                        </td>
                                    </tr>`;
                                }
                            }
                        break;

                        case 'danpla':
                            for (var key in parsedSession) {
                                if (parsedSession.hasOwnProperty(key) && key !== 'type' && key !== 'product') {
                                    if(key == 'quantity'){
                                        parsedSession[key] = parsedSession[key]+'x';
                                    }
                                    html += `<tr>
                                        <td class=" py-1 border-0">
                                            <strong class="d-block text-color-dark font-weight-semibold text-capitalize">${key.replace(/_/g, ' ')} : <span class="product-qty"></span></strong>
                                        </td>
                                        <td class="text-end py-1 align-top border-0">
                                            <span class="amount font-weight-medium text-color-grey div-product-material">${parsedSession[key]}</span>
                                        </td>
                                    </tr>`;
                                }
                            }
                        break;

                        case 'other product':
                            for (var key in parsedSession) {
                                if (parsedSession.hasOwnProperty(key) && key !== 'type' && key !== 'product') {
                                    if(key == 'quantity'){
                                        parsedSession[key] = parsedSession[key]+'x';
                                    }
                                    html += `<tr>
                                        <td class=" py-1 border-0">
                                            <strong class="d-block text-color-dark font-weight-semibold text-capitalize">${key.replace(/_/g, ' ')} : <span class="product-qty"></span></strong>
                                        </td>
                                        <td class="text-end py-1 align-top border-0">
                                            <span class="amount font-weight-medium text-color-grey div-product-material">${parsedSession[key]}</span>
                                        </td>
                                    </tr>`;
                                }
                            }
                        break;
                        default:
                            window.location.replace("/products");
                        break;
                    }

                    html +=` <tr>
                        <td colspan="2">
                            <p class="text-muted fst-italic text-start">
                                We'll follow up with you via the provided email with the estimated price. Please be aware that the price may vary through negotiation
                            </p>
                        </td>
                    </tr>`;

                    $('.tbody-spec-list').empty().append(html);

                });

            }

        break;

        case 'modal-request-quotation':
            if(res !=false){
                let html = '';

                var sessionSpec = gs_getItem('product-spec');
                var parsedSession = window.atob(sessionSpec);
                parsedSession = JSON.parse(parsedSession);


                res.forEach((product, index) => {

                    $('.product-name').text(product.name);
                    let imgUrl = assetUrl+'customer/web_img/product-carousel/'+product.img;
                    $('.modal-product-img').attr('src',imgUrl)
                    $('.qty').val(parsedSession.quantity);
                    console.log(parsedSession)
                    switch (product.type){

                        case 'corrugated-carton':

                            html = `<div class="form-group col-lg-12 mb-0">
                                <div class="alert alert-warning alert-dismissible pt-2 pb-2" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong><i class="fa-solid fa-circle-info"></i></strong>For engineering help, call (02) 584-44-24 / (049) 502-02-95.
                                </div>
                            </div>`;

                        $('.inputs-spec').empty().append(html);

                            if(product.specification.wall_type){
                                html = `<div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-3">Wall Type</label>
                                    <select class="form-select form-select-sm text-3 py-2 wall_type" name="wall_type">
                                    <option value="">Select a Wall Type</option>`;

                                product.specification.wall_type.forEach((wall_type, x) => {
                                    html += `<option value="${wall_type}">${wall_type}</option>`;
                                });
                                html += `</select></div>`;
                                $('.inputs-spec').append(html);
                                $('.wall_type').val(parsedSession.wall_type);
                            }
                            if(product.specification.material_type){
                                html = `<div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-3">Material Type</label>
                                    <select class="form-select form-select-sm text-3 py-2 material_type" name="material_type">
                                    <option value="">Select a Material Type</option>`;
                                product.specification.material_type.forEach((material_type, x) => {
                                    html += `<option value="${material_type}">${material_type}</option>`;
                                });
                                html += `</select></div>`;
                                $('.inputs-spec').append(html);
                                $('.material_type').val(parsedSession.material_type);
                            }

                            if(product.specification.flute_type){
                                html = `<div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-3">Flute Type</label>
                                <select class="form-select form-select-sm text-3 py-2 flute_type" name="flute_type">
                                <option value="">Select a Flute Type</option>`;
                                product.specification.flute_type.forEach((flute_type, x) => {
                                    html += `<option value="${flute_type}">${flute_type}</option>`;
                                });
                                html += `</select></div>`;
                                $('.inputs-spec').append(html);
                                $('.flute_type').val(parsedSession.flute_type);

                            }

                            if(product.specification.color){
                                html = `<div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-3">Color</label>
                                <select class="form-select form-select-sm text-3 py-2 color" name="color">
                                <option value="">Select a Color</option>`;
                                product.specification.color.forEach((color, x) => {
                                    html += `<option value="${color}">${color}</option>`;
                                });
                                html += `</select></div>
                                <div class="form-group col-lg-4">
                                    <label class="form-label mb-1 text-3">Length</label>
                                    <input type="number" class="form-control form-control-sm text-3 py-2 length" placeholder="Millimeter" name="p_length" value="">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="form-label mb-1 text-3">Width</label>
                                    <input type="number" class="form-control form-control-sm text-3 py-2 width" placeholder="Millimeter" name="p_width" value="">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="form-label mb-1 text-3">Height</label>
                                    <input type="number" class="form-control form-control-sm text-3 py-2 height" placeholder="Millimeter" name="p_height" value="">
                                </div>`;

                                $('.inputs-spec').append(html);
                                $('.color').val(parsedSession.color);
                                $('.length').val(parsedSession.p_length);
                                $('.width').val(parsedSession.p_width);
                                $('.height').val(parsedSession.p_height);
                            }
                        break;

                        case 'foam':

                            if(product.specification.thickness){
                                html = `<div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-3">Thickness</label>
                                <select class="form-select form-select-sm text-3 py-2 thickness" name="thickness">
                                <option value="">Select a Thickness</option>`;

                                product.specification.thickness.forEach((thickness, x) => {
                                    html += `<option value="${thickness}">${thickness}</option>`;
                                });
                                html += `</select></div>`;
                                $('.inputs-spec').empty().last().append(html);
                                $('.thickness').val(parsedSession.thickness);

                            }

                            if(product.specification.color){
                                html = `<div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-3">Color</label>
                                <select class="form-select form-select-sm text-3 py-2 color" name="color">
                                <option value="">Select a Color</option>`;
                                product.specification.color.forEach((color, x) => {
                                    html += `<option value="${color}">${color}</option>`;
                                });
                                html += `</select></div>`;
                                $('.inputs-spec').last().append(html);
                                $('.color').val(parsedSession.color);
                            }

                        break;

                        case 'danpla':

                            html = `<div class="form-group col-lg-12 mb-0">
                                <div class="alert alert-warning alert-dismissible pt-2 pb-2" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong><i class="fa-solid fa-circle-info"></i></strong>For engineering help, call (02) 584-44-24 / (049) 502-02-95.
                                </div>
                            </div>`;

                            $('.inputs-spec').empty().append(html);
                                if(product.specification.color){
                                    html = `<div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-3">Color</label>
                                    <select class="form-select form-select-sm text-3 py-2 color" name="color">
                                    <option value="">Select a Color</option>`;
                                    product.specification.color.forEach((color, x) => {
                                        html += `<option value="${color}">${color}</option>`;
                                    });
                                    html += `</select></div>`;
                                    $('.inputs-spec').append(html);
                                $('.color').val(parsedSession.color);

                                }
                        break;

                        case 'bubble-sheet':

                            html = `<div class="form-group col-lg-12 mb-0">
                                    <div class="alert alert-warning alert-dismissible pt-2 pb-2" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <strong><i class="fa-solid fa-circle-info"></i></strong>For engineering help, call (02) 584-44-24 / (049) 502-02-95.
                                    </div>
                                </div>`;

                            $('.inputs-spec').empty().append(html);
                            if(product.specification.color){
                                html = `<div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-3">Color</label>
                                <select class="form-select form-select-sm text-3 py-2 color" name="color">
                                <option value="">Select a Color</option>`;
                                product.specification.color.forEach((color, x) => {
                                    html += `<option value="${color}">${color}</option>`;
                                });
                                html += `</select></div>`;
                                $('.inputs-spec').append(html);
                                $('.color').val(parsedSession.color);

                            }
                        break;

                    default:
                    break;


                    }

                });

                $('#modalSpecification').modal('show');
            }
        break;

        default:
            window.location.replace("/products");
        break;
    }



}
