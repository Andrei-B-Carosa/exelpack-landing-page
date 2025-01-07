import {_httpRequest} from './../page_data.js';
import {gs_sessionStorage,gs_getItem} from './../global.js';
import {dt_all_requests_quotation} from './../datatable/serverside/0002.js';


export function controller(view,pg){

    dt_all_requests_quotation('#dt-all-request-quotation');
}

export function construct(res,type){
}
