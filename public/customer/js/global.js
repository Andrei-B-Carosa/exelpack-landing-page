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

export function gs_forgetItem(session){
    if (typeof(Storage) !== "undefined") {
        sessionStorage.removeItem(session);
    } else {
        console.log("Sorry, your browser does not support Web Storage...");
    }
}

export function gs_productOwlCarousel(){


    theme.fn.intObs('.thumb-gallery-wrapper', function () {
        var $thumbGalleryDetail = $(this).find('.thumb-gallery-detail'),
            $thumbGalleryThumbs = $(this).find('.thumb-gallery-thumbs'),
            flag = false,
            duration = 300;
        $thumbGalleryDetail.owlCarousel({
            items: 1,
            margin: 10,
            nav: true,
            dots: false,
            loop: false,
            autoHeight: true,
            navText: [],
            rtl: ($('html').attr('dir') == 'rtl') ? true : false
        }).on('changed.owl.carousel', function (e) {
            if (!flag) {
                flag = true;
                $thumbGalleryThumbs.trigger('to.owl.carousel', [e.item.index - 1, duration, true]);
                $thumbGalleryThumbs.find('.owl-item').removeClass('selected');
                $thumbGalleryThumbs.find('.owl-item').eq(e.item.index).addClass('selected'); flag = false;
            }
        });
        $thumbGalleryThumbs.owlCarousel({
            margin: 15,
            items: $(this).data('thumbs-items') ? $(this).data('thumbs-items') : 4,
            nav: false, center: $(this).data('thumbs-center') ? true : false,
            dots: false, rtl: ($('html').attr('dir') == 'rtl') ? true : false
        }).on('click', '.owl-item', function () {
            $thumbGalleryDetail.trigger('to.owl.carousel', [$(this).index(), duration, true]);
        }).on('changed.owl.carousel', function (e) {
            if (!flag) {
                flag = true;
                $thumbGalleryDetail.trigger('to.owl.carousel', [e.item.index, duration, true]); flag = false;
            }
        });

        $thumbGalleryThumbs.find('.owl-item').eq(0).addClass('selected');

    }, {});

}

export function gs_SweetAlert(title,text,icon,btn_txt='Ok, Got it',callback=false){
    Swal.fire({
        title:title,
        text: text,
        icon: icon,
        confirmButtonText: btn_txt,
        showCancelButton: true,
    }).then((result) => {
        if (result.isConfirmed){
            if (typeof callback === 'function') {
                callback();
            }
        }
    });
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

export function isValidEmail(email) {
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
}

export function isValidPhone(phone) {
    var pattern = /^\d{10}$/; // Change this pattern according to your phone number requirements
    return pattern.test(phone);
  }
