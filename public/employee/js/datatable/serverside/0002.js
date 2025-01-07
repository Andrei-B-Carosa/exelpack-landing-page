import {gs_sessionStorage,gs_getItem} from '../../global.js';

export  function dt_all_requests_quotation(tbl){

    $.fn.dataTable.Api.register('column().title()', function() { return $(this.header()).text().trim(); });
    $.fn.dataTable.ext.errMode = 'throw';

    $(tbl).DataTable().clear().destroy();

    var table = $(tbl).DataTable({
        stateSave: true,
        responsive: true,
        searchDelay: 500,
        processing: true,
        serverSide: true,
        ordering:false,
        dom: "<'row'<'col-sm-12'tr>>" +
             "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'p>>",
        language: {
            emptyTable: "No Data Available"
        },
        ajax: {
            url: 'dt-all-requests-quotation',
            type: 'POST',
            data: function (d) {
                d.request_type = $('#request_type').val()
                d.product_type = $('#product_type').val()
                d.filter_by = $('#filter_by').val()
            },
            // success:function(d){
            //     console.log(d)
            // },
            // error:function(d){
            //     console.log(d)
            // },
        },
        createdRow: function(row, data, index) {
            $('td:eq(0)', row).html(index + 1);
        },
        columns: [
            { data: null, width: '30px', className: 'text-center align-middle', searchable: false },
            {data: 'request_no',width: '80px', name:'request_no',className: 'text-center align-middle', searchable: false },
            {data: 'rq_info.requestor_name', name:'rq_info.requestor_name',className: 'text-start align-middle', },
            {data: 'rq_info.requestor_company', name:'requestor_company',className: 'text-start align-middle', searchable: false},
            {data: 'rq_product.product_name',width: '140px', className:' align-middle',searchable:false},
            {data: 'quantity', width: '50px', className:'text-center align-middle',searchable:false},
            {data: 'rq_product.estimated_price', width: '80px', className:'text-center align-middle',searchable:false},
            {data: 'processed_by', className:'text-center align-middle',searchable:false},
            {data: 'rq_status.request_status', className:'text-center align-middle',searchable:false},
            {data: 'created_at', className:'text-center align-middle',searchable:false},
            {data: 'action', width:'130px' ,responsivePriority: -1, className:'p-0 text-center align-middle',searchable:false},
        ],
        columnDefs: [
            {
                targets: -1,
                orderable: false,
                render: function(data, type, full, meta) {
                    return '\
                    <a href="request-quotation-info" data-id="'+data+'" class="btn btn-icon btn-light btn-hover-primary btn-sm btn-view-request" title="View Request">\
                        <span class="svg-icon svg-icon-md svg-icon-primary">\
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                    <rect x="0" y="0" width="24" height="24"></rect>\
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>\
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>\
                                </g>\
                            </svg>\
                        </span>\
                    </a>\
                    <div class="dropdown dropdown-inline">\
                         <a href="javascript:;" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-2" data-toggle="dropdown" title="Forward Request">\
                            <span class="svg-icon svg-icon-md svg-icon-primary">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"></rect>\
                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>\
                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>\
                                    </g>\
                                </svg>\
                            </span>\
                        </a>\
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">\
                            <ul class="navi flex-column navi-hover py-2">\
                                <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">\
                                    Forward To:\
                                </li>\
                                <li class="navi-item">\
                                    <a href="javascript:void(0)" data-id="'+data+'" class="navi-link btn-forward-manager">\
                                        <span class="navi-icon"><i class="flaticon2-user"></i></span>\
                                        <span class="navi-text">Manager</span>\
                                    </a>\
                                </li>\
                                <li class="navi-item">\
                                    <a href="javascript:void(0)" data-id="'+data+'" class="navi-link btn-forward-affiliates">\
                                        <span class="navi-icon"><i class="flaticon2-new-email"></i></span>\
                                        <span class="navi-text">Affiliates</span>\
                                    </a>\
                                </li>\
                            </ul>\
                        </div>\
                    </div>\
                    <a href="javascript:;" data-id="'+data+'"  class="btn btn-icon btn-light btn-hover-danger btn-sm btn-delete-request" title="Delete Request">\
                        <span class="svg-icon svg-icon-md svg-icon-primary">\
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                    <rect x="0" y="0" width="24" height="24"></rect>\
                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>\
                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>\
                                </g>\
                            </svg>\
                        </span>\
                    </a>\
                ';
                },
            },
            {
                targets: -4,
                render: function(data, type, full, meta) {
                    if(data != '--'){
                        let html = `<span><div class="">
                                        <div class="">
                                            <div class="text-dark-75 font-weight-bold line-height-sm">${data}</div>
                                                <a href="javascript:;" class="font-size-sm font-weight-bold text-muted">${full.processed_by_role}</a>
                                            </div>
                                        </div>
                                    </span>`;

                        return html;
                    }else{
                        return data;
                    }
                }
            },
            {
                targets: -3,
                className:'text-center align-middle',
                render: function(data, type, full, meta) {

                    var status = {
                        0: {'title': 'Denied','color':'danger'},
                        1: {'title': 'Completed','color':'success'},
                        2: {'title': 'Pending','color':'primary'},
                        3: {'title': 'Processing','color':'info'},
                    };

                    if (typeof status[data] === 'undefined') {
                        return data;
                    }

                    return '\<span class="label label-lg font-weight-bold label-light-'+status[data].color+' label-inline" style="white-space: nowrap;">'+status[data].title+'</span>';
                }
            },
            {
                targets: -9,
                render: function(data, type, full, meta) {
                    let html = `<span style="width: 250px;"><div class="d-flex align-items-center">
                                <div class="symbol symbol-light-info symbol-40 flex-shrink-0">
                                    <div class="symbol-label font-size-h5">${data[0].toUpperCase()}</div></div>
                                <div class="ml-2">
                                    <div class="text-dark-75 font-weight-bold line-height-sm">${data}</div>
                                        <a href="javascript:;" class="font-size-sm font-weight-bold text-muted">${full.rq_info.requestor_email}</a>
                                    </div>
                                </div>
                            </span>`;

                    return html;
                }
            },
            {
                targets: -8,
                render: function(data, type, full, meta) {
                    let html = `<span style="width: 250px;"><div class="d-flex align-items-center">
                                    <div class="ml-2">
                                        <div class="text-dark-75 font-weight-bold line-height-sm">${data}</div>
                                            <a href="javascript:;" class="font-size-sm font-weight-bold text-success text-uppercase">${full.rq_info.company_accreditation}</a>
                                        </div>
                                    </div>
                                </span>`;
                    return html;
                }
            },
            {
                targets: -10,
                render: function(data, type, full, meta) {
                   return data.toUpperCase();
                }
            },
            {
                targets: -7,
                render: function(data, type, full, meta) {
                    let html = `<span style="width: 250px;"><div class="d-flex align-items-center">
                                <div class="ml-2">
                                    <div class="text-dark-75 font-weight-bold line-height-sm">${data}</div>
                                        <a href="#" class="font-size-sm text-dark-50 text-hover-primary text-uppercase">${full.rq_product.product_type}</a>
                                    </div>
                                </div>
                            </span>`;

                    return html;
                }
            },
            {
                targets: -5,
                render: function(data, type, full, meta) {
                    if(data){
                        return '₱ '+data;
                    }else{
                        return '--';
                    }
                }
            },
        ],
    });

    $('.btn-search-requestor').on('click', function (e) {
        e.preventDefault();
        let val = $('#input-search-requestor').val();
        table.search(val).draw();
    });

    $(document).on('change','.select-filter', function (e) {
        e.preventDefault();
        table.draw();
    });

    $(document).on('click','.btn-view-request',function(e){
        e.preventDefault();
        let url = $(this).attr('href');
        let id  = $(this).attr('data-id');

        gs_sessionStorage('sess_req',id);
        window.location.replace(url);

    })

    $(document).on('click','.btn-delete-request',function(e){
        e.preventDefault();
        let url = $(this).attr('href');
        let id  = $(this).attr('data-id');
        alert(url)
    })

    $(document).on('click','.btn-forward-manager',function(e){
        e.preventDefault();
        let id  = $(this).attr('data-id');
        alert(url)
    })

    $(document).on('click','.btn-forward-affiliates',function(e){
        e.preventDefault();
        let id  = $(this).attr('data-id');
        alert(url)
    })

}
