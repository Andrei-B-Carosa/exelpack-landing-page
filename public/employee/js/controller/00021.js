import {_httpRequest} from './../page_data.js';
import {gs_sessionStorage,gs_getItem} from './../global.js';
import {dt_all_requests_quotation} from './../datatable/serverside/0002.js';


export function controller(view,pg){

    let sess_req = gs_getItem('sess_req');
    if(sess_req){
        _httpRequest(false,['request-quotation-info','request-quotation-info',sess_req]);
    }

}

export function construct(res,type){
    console.log(res.specs)
    switch(type){

        case 'request-quotation-info':

            if(res !=false){

                let html = '';

                $('.product-name').text(res.product_name);
                $('.product-type').text(res.product_type);
                $('.requestor-name').text(res.requestor_name)
                $('.requestor-email').text(res.requestor_email)
                $('.requestor-company').text(res.requestor_company)
                $('.requestor-telephone').text(res.requestor_telephone)
                $('.company-accreditation').text(res.company_accreditation)

                if(res.processed_by == " "){
                    html = `<a href="javascript:;" class="btn btn-md btn-light-primary font-weight-bolder text-uppercase mr-2 btn-manage-request">MANAGE THIS REQUEST ?</a> `;
                }else{
                    html = `div class="font-weight-bolder text-muted mx-2 text-uppercase">Managed By : ${res.processed_by}</div>`;
                }

                $('.div-alert-manage').empty().append(html);
                html ='';

                // Object.keys(res.specs).forEach(key => {
                //     if(key == 'p_length' || key =='p_width' || key == 'p_height'){
                //         res.specs[key] = res.specs[key]+'mm';
                //     }else if(key == 'quantity'){
                //         res.specs[key] = res.specs[key]+'x';

                //     }
                //     if(key != 'product' && key !='type'){
                //         html +=`
                //             <tr class="font-weight-boldest">
                //                 <td class="border-0 pl-0 pt-7 d-flex align-items-center text-capitalize">
                //                 <span class="svg-icon svg-icon-muted mr-5">

				// 										</span>
                //                 ${key.replace(/^p_/, '').replace(/_/g, ' ')}
                //                 </td>
                //                 <td class="text-right pt-7 align-middle">${res.specs[key]}</td>
                //             </tr>
                //         `;
                //     }
                // });

                // $('.tbody-specs').empty().append(html);

            }

        break;

        default:
        break;

    }
}
