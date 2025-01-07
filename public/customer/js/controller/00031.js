import {_httpRequest} from './../page_data.js';
import {gs_sessionStorage,gs_getItem,gs_productOwlCarousel} from './../global.js';


export function controller(view,pg){

    let product  = window.location.pathname.split('/')[3].toLowerCase().replace(/-/g, ' ');
    let type  = window.location.pathname.split('/')[2].toLowerCase().replace(/-/g, ' ');

    let take = 4;

    if(product){
        _httpRequest(false,['product-info','product-info',product,type]);
        _httpRequest(false,['related-product','related-product',type,take,product]);
    }

    $('.btn-request-quotation').click(function(e){
        e.preventDefault();
        _httpRequest(false,['product-info','modal-request-quotation',product,type]);
    })

    document.addEventListener("change", function(e) {
        e.preventDefault();
        var selectElement = e.target;
        if (selectElement.tagName === "SELECT") {
            if(selectElement.value !== ""){
                selectElement.classList.remove("is-invalid");
            }else{
                selectElement.classList.add("is-invalid");
            }
        }
    });

    document.addEventListener("keyup", function(e) {
        e.preventDefault();
        var selectElement = e.target;
        if (selectElement.type === "number" || selectElement.type === "text") {
            if(selectElement.value !== ""){
                selectElement.classList.remove("is-invalid");
            }else{
                selectElement.classList.add("is-invalid");
            }
        }
    });

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

            window.location.replace("/request-quotation");

        }
    });


}

export function construct(res,type){

    switch(type){

        case 'product-info':
            if(res !=false){

                let carousel_big ='';
                let carousel_small = '';



                res.forEach((product, index) => {
                    console.log(product)

                    $('.product-name').text(product.name)
                    $('.product-description').text(product.description)
                    $('.product-type').text(product.type.toUpperCase().replace(/-/g, ' '))
                    $('.product-status').text(product.status ? 'AVAILABLE':'NOT-AVAILABLE');

                    if(product.other_img){

                        product.other_img.forEach((other_img, index) => {
                            let imgUrl = assetUrl+'customer/web_img/product-carousel/'+other_img;
                            carousel_big +=` <div class="owl-item" style="width: 403.5px; margin-right: 10px;">
                                        <div>
                                            <img alt="" class="img-fluid main-carousel-1-image" src="${imgUrl}" >
                                        </div>
                                    </div>`;

                            carousel_small += `<div class="owl-item" style="width: 89.625px; margin-right: 15px;">
                                        <div class="cur-pointer">
                                            <img alt="" class="img-fluid sub-carousel-1-image" src="${imgUrl}">
                                        </div>
                                    </div>`;
                        });

                        $('.div-carousel-big').empty().append(carousel_big);
                        $('.div-carousel-small').empty().append(carousel_small);

                    }


                    let product_spec = '';
                    let spec_list = '';

                    switch (product.type){

                        case 'corrugated-carton':
                            if(product.specification.wall_type){
                                product.specification.wall_type.forEach((wall_type, x) => {
                                    if (x !== 0) { spec_list += ', '; }
                                    spec_list += wall_type;

                                });
                                product_spec = $('.div-product-specification').clone();
                                product_spec.find('.div-spec-title').text('Wall Type :');
                                product_spec.find('.div-spec-list').text(spec_list);
                                product_spec.removeClass('d-none');


                                $('.div-spec-info').append(product_spec);
                                spec_list = '';
                            }
                            if(product.specification.material_type){
                                product.specification.material_type.forEach((material_type, x) => {
                                    if (x !== 0) { spec_list += ', '; }
                                    spec_list += material_type;
                                });
                                product_spec = $('.div-product-specification:first').clone();
                                product_spec.find('.div-spec-title').text('Material Type :');
                                product_spec.find('.div-spec-list').text(spec_list);
                                product_spec.removeClass('d-none');

                                $('.div-spec-info').append(product_spec);
                                spec_list = '';

                            }

                            if(product.specification.flute_type){
                                product.specification.flute_type.forEach((flute_type, x) => {
                                    if (x !== 0) { spec_list += ', '; }
                                    spec_list += flute_type;
                                });
                                product_spec = $('.div-product-specification:first').clone();
                                product_spec.find('.div-spec-title').text('Flute Type :');
                                product_spec.find('.div-spec-list').text(spec_list);
                                product_spec.removeClass('d-none');

                                $('.div-spec-info').append(product_spec);
                                spec_list = '';

                            }

                            if(product.specification.color){
                                product.specification.color.forEach((color, x) => {
                                    if (x !== 0) { spec_list += ', '; }
                                    spec_list += color;
                                });
                                product_spec = $('.div-product-specification:first').clone();
                                product_spec.find('.div-spec-title').text('Color :');
                                product_spec.find('.div-spec-list').text(spec_list);
                                product_spec.removeClass('d-none');

                                $('.div-spec-info').append(product_spec);
                                spec_list = '';
                            }
                        break;

                        case 'foam':

                            if(product.specification.thickness){

                                product.specification.thickness.forEach((thickness, x) => {
                                    if (x !== 0) { spec_list += ', '; }
                                    spec_list += thickness;

                                });
                                product_spec = $('.div-product-specification').clone();
                                product_spec.find('.div-spec-title').text('Thickness :');
                                product_spec.find('.div-spec-list').text(spec_list);
                                product_spec.removeClass('d-none');


                                $('.div-spec-info').empty().append(product_spec);
                                spec_list = '';
                            }

                            if(product.specification.color){
                                product.specification.color.forEach((color, x) => {
                                    if (x !== 0) { spec_list += ', '; }
                                    spec_list += color;
                                });
                                product_spec = $('.div-product-specification:first').clone();
                                product_spec.find('.div-spec-title').text('Color :');
                                product_spec.find('.div-spec-list').text(spec_list);
                                product_spec.removeClass('d-none');

                                $('.div-spec-info').append(product_spec);
                                spec_list = '';
                            }

                        break;

                        case 'bubble-sheet':
                            if(product.specification.color){
                                product.specification.color.forEach((color, x) => {
                                    if (x !== 0) { spec_list += ', '; }
                                    spec_list += color;
                                });
                                product_spec = $('.div-product-specification:first').clone();
                                product_spec.find('.div-spec-title').text('Color :');
                                product_spec.find('.div-spec-list').text(spec_list);
                                product_spec.removeClass('d-none');

                                $('.div-spec-info').append(product_spec);
                                spec_list = '';
                            }
                        break;

                        case 'danpla':
                            if(product.specification.color){
                                product.specification.color.forEach((color, x) => {
                                    if (x !== 0) { spec_list += ', '; }
                                    spec_list += color;
                                });
                                product_spec = $('.div-product-specification:first').clone();
                                product_spec.find('.div-spec-title').text('Color :');
                                product_spec.find('.div-spec-list').text(spec_list);
                                product_spec.removeClass('d-none');

                                $('.div-spec-info').append(product_spec);
                                spec_list = '';
                            }
                        break;

                        case 'other_product':
                        // break;

                        default:
                        break;

                    }

                    product_spec = $('.div-product-specification:first').clone();
                    product_spec.find('.div-spec-title').text('Customization :');
                    product_spec.find('.div-spec-list').text(product.customize);
                    product_spec.removeClass('d-none');

                    $('.div-spec-info').append(product_spec);

                });

            }
        break;

        case 'related-product':
            if(res){
                let html = '';
                res.forEach((product, index) => {

                    const maxDescriptionLength = 75;
                    const truncatedDescription = product.description.length > maxDescriptionLength ? product.description.slice(0, maxDescriptionLength) + '. . .' : product.description;
                    let productName = product.name.toLowerCase().replace(/\s+/g, '-');

                    html += `
                    <div class="col-sm-4 col-md-3 mb-2 mb-md-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="/product-info/${product.type+'/'+productName}">
                                    <img src="${assetUrl+'customer/web_img/product-carousel/'+product.img}" class="img-fluid hover-effect-2 mb-1" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6 class="mb-2">
                                    <a href="/product-info/${product.type+'/'+productName}" class="text-3 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">
                                        ${product.name}
                                    </a>
                                </h6>
                                <p class="text-2">${truncatedDescription}</p>
                            </div>
                        </div>
                    </article>
                </div>`;
                });

                $('.div-related-products').empty().append(html);
                setTimeout(function() { gs_productOwlCarousel(); }, 100);
            }
        break;

        case 'modal-request-quotation':
            if(res !=false){
                let html = '';
                res.forEach((product, index) => {

                    let imgUrl = assetUrl+'customer/web_img/product-carousel/'+product.img;
                    $('.modal-product-img').attr('src',imgUrl)

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
                            }
                        break;

                        case 'foam':

                            if(product.specification.thickness){
                                html = `<div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-3">Thickness</label>
                                <select class="form-select form-select-sm text-3 py-2 wall_type" name="thickness">
                                <option value="">Select a Thickness</option>`;

                                product.specification.thickness.forEach((thickness, x) => {
                                    html += `<option value="${thickness}">${thickness}</option>`;
                                });
                                html += `</select></div>`;
                                $('.inputs-spec').empty().last().append(html);
                            }

                            if(product.specification.color){
                                html = `<div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-3">Color</label>
                                <select class="form-select form-select-sm text-3 py-2 wall_type" name="color">
                                <option value="">Select a Color</option>`;
                                product.specification.color.forEach((color, x) => {
                                    html += `<option value="${color}">${color}</option>`;
                                });
                                html += `</select></div>`;
                                $('.inputs-spec').last().append(html);
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
        break;
    }

}
