import {_dc} from './import_script.js';

export function _httpRequest(blockPage, formData){
  let bP = false;
  if(blockPage == true){
   bP = 'blockPage';
  }
  _ajaxrequest('/page-data', "POST", _constructBlockUi(bP, false, 'Please wait...'), _constructForm(formData));
}
function _constructForm(args){
  let formData = new FormData();
  for (var i = 1; (args.length+1) > i; i++){
     formData.append('data'+ i, args[i-1]);
   }
  return formData;
};
function _constructBlockUi(type, element, message){
        let formData = new FormData();
         formData.append('type', type);
         formData.append('element', element);
         formData.append('message', message);
         if(formData){
           return formData;
         }
};
async function _ajaxrequest(url, type,blockui, formData){

  return new Promise((resolve, reject) => {
    var y = true;
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: url,
      type: type,
      data: formData,
      contentType: false,
      processData: false,
      dataType: "json",
      beforeSend: function(){
      },
      complete: function(){
      },
      success: function(res){
        if(res.status == 'success'){
          if(window.atob(res.payload) != false){
            let result=  _dc(JSON.parse(window.atob(res.payload)), formData.get("data2"));
            if(result){
              resolve(true);
            }else{
              resolve(false);
            }
          }else{
            _construct(res.message, formData.get("data2"));
          }
        }else if(res.status == 'not_found'){
           Swal.fire("Ops!", res.message, "info");
        }else{
           Swal.fire("Ops!", res.message, "info");
        }
      },
    });
  })
}
