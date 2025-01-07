import {_httpRequest} from './../page_data.js';
import {gs_sessionStorage,gs_getItem} from './../global.js';


export function controller(view,pg){


    let select = $('#select-view-product');
    let sessionSelect = gs_getItem('select-view-product');

    $(select).change(function(e){
        e.preventDefault();

        gs_sessionStorage('select-view-product',$(this).val());
        _httpRequest(false,['filter-products','all-products',$(this).val()]);

    });

    if (!sessionSelect){ sessionSelect = select.val(); }
    select.val(sessionSelect).change();



}

export function construct(res,type){

    switch(type){

        case 'all-products':

            if(res){

                let html = '';
                res.forEach((product, index) => {

                    let maxDescriptionLength = 75;
                    let truncatedDescription = product.description.length > maxDescriptionLength ? product.description.slice(0, maxDescriptionLength) + '. . .' : product.description;
                    let productName = product.name.toLowerCase().replace(/\s+/g, '-');

                    maxDescriptionLength = 27;
                    product.name = product.name.length > maxDescriptionLength ? product.name.slice(0, maxDescriptionLength) + '. . .' : product.name;
                html += `
                    <div class="col-md-6 col-lg-4 mb-4">
                        <article>
                            <div class="card border-0 border-radius-0 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <a href="product-info/${product.type+'/'+productName}">
                                        <img class="card-img-top border-radius-0 mb-4" src="${assetUrl}customer/web_img/products/${product.img}" alt="${productName}">
                                    </a>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="product-info/${product.type+'/'+productName}">${product.name}</a></h4>
                                        <p class="card-text mb-0 truncate-text">${truncatedDescription}</p>
                                        <a href="product-info/${product.type+'/'+productName}" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                            VIEW PRODUCT
                                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>`;
                });
                $('#span-product-count').empty().append(res.length);
                $('#div-product').empty().append(html);
            }

        break;

        default:
        break;
    }

}
