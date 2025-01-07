export function page_array(vs){
    let str = {
           'home':'0001',
           'about_us':'0002',
           'products':'0003',
           'product_info':'00031',
           'request_quotation':'00032',
           'services':'0004',
           'careers':'0005',
           'activities':'0006',
           'contact_us':'0007',
   };

//    let vs = 'some_key';
//    let defaultValue = 'default_value';
   return str[vs];
}
