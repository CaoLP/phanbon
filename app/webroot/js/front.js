$(function () {
    //jQuery('.tp-banner').show().revolution(
    //    {
    //        delay: 7000,
    //        startwidth: 1170,
    //        startheight: 550,
    //        onHoverStop: "on", // Stop Banner Timer at Hover on Slide on/off
    //        thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
    //        thumbHeight: 50,
    //        thumbAmount: 3,
    //        hideThumbs: 0,
    //        navigationType: "bullet", // bullet, thumb, none
    //        navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
    //        navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
    //        navigationHAlign: "center", // Vertical Align top,center,bottom
    //        navigationVAlign: "bottom", // Horizontal Align left,center,right
    //        navigationHOffset: 0,
    //        navigationVOffset: 20,
    //        soloArrowLeftHalign: "left",
    //        soloArrowLeftValign: "center",
    //        soloArrowLeftHOffset: 20,
    //        soloArrowLeftVOffset: 0,
    //        soloArrowRightHalign: "right",
    //        soloArrowRightValign: "center",
    //        soloArrowRightHOffset: 20,
    //        soloArrowRightVOffset: 0,
    //        touchenabled: "on", // Enable Swipe Function : on/off
    //        stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
    //        stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
    //        hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
    //        hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
    //        hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
    //        fullWidth: "on",
    //        shadow: 0
    //    });
    $(document).on('click', '.edit-block', function () {
        var is_edit = $(this).data('is_edit');
        if (is_edit == undefined || !is_edit) {
            is_edit = true;
            $(this).data('is_edit', true);
            $(this).find('i').removeClass('glyphicon-edit').addClass('glyphicon-save');
        } else {
            is_edit = false;
            $(this).data('is_edit', false);
            $(this).find('i').removeClass('glyphicon-save').addClass('glyphicon-edit');
        }
        var data = {};
        $(this).closest('section').find('*[data-type=can-edit]').each(function (i, v) {
            var _type = $(v).data('edit-type');
            var _key = $(v).data('key');
            if (typeof  _type != 'undefined') {
                if (is_edit) {
                    switch (_type) {
                        case 'text':
                            $(v).html('<input type="text" class="form-control" name="' + _key + '" value="' + $(v).text().trim() + '">');
                            break;
                        case 'textarea':
                            $(v).html('<textarea rows="10" class="form-control" name="' + _key + '">' + $(v).html().trim().replace(/(<br[\s*\/]?>)/gi, '') + '</textarea>');
                            break;
                        case 'media':
                            $.ajax({
                                url: link_gallery,
                                data: {id: $(v).data('id')},
                                type: 'post',
                                success: function (response) {
                                    $(v).parent().prepend(response);
                                }
                            });
                            break;
                    }
                } else {
                    if (_type != 'media') {
                        var value = $(v).find('input, textarea').val();
                        data[_key] = value;
                        $(v).html(value.replace(/\r?\n/g, '<br />'));
                    } else {
                        var gallery = $(v).parent().find('#gallery_id');
                        data[_key] = 'Gallery:gallery_block:{"id":' + gallery.val() + '}';
                        gallery.parent().remove();

                    }
                }
            }

        });
        if (!is_edit) {
            $.ajax(
                {
                    url: link_setting,
                    data : data,
                    type : 'post',
                    success : function(response){
                        if(response) window.location.reload();
                        else alert('Gặp sự cố khi lưu dữ liệu');
                    }
                }
            );
        }
    });
    $('*[data-event="hover-toggle"]').hover(function(){
        if(document.body.clientWidth > 768 && !$(this).hasClass('open')){
            $(this).addClass('open');
        }
    },function(){
        if(document.body.clientWidth > 768 && $(this).hasClass('open')) {
            $(this).removeClass('open');
        }
    })
});


