export function page_array(vs){
    let str = {
           'dashboard':'0001',
           'request_quotation_list':'0002',
           'request_quotation_info':'00021',
           'product_info':'00031',
           'request_quotation':'00032',
           'services':'0004',
           'careers':'0005',
           'support_group':'0006',
           'contact_us':'0007',
   };

//    let vs = 'some_key';
//    let defaultValue = 'default_value';
   return str[vs];
}
