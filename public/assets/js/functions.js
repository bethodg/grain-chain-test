$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var drEvent = $('.dropify').dropify();

    $(document).on('click', '#btn-submit', function(e) {
        $(".rooms-lights-content").html("");
        $(".rooms-lights-content").addClass('d-none');
         var form       = $("#form-file");
         var formData   = new FormData();
         formData.append("_token", $('#token').val());
         formData.append("file", $('#file')[0].files[0]);

         $.ajax({
            type: form.attr('method'),
            url: "/get-matrix",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                if (data.status == 'ok') {
                    $(".rooms-content").html(data.data.room_html);
                    $(".rooms-lights-content").html(data.data.room_lights_html);
                } else {
                    swal('Error!', data.message, 'error');
                }
               

            },
            complete: function () {
               
            }
        });
    });

    $(document).on('click', '#btn-submit-lights', function(e) {
        $(".rooms-content").html("");
        $(".rooms-lights-content").removeClass('d-none');
        
    });

    drEvent.on('change', function(event, element){
        var ext = $('#file').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['txt']) != -1) {
            $(".btn-primary").removeClass('disabled');
        }else{
            $(".btn-primary").addClass('disabled');
        }
    });
    drEvent.on('dropify.beforeClear', function(event, element){
        $(".btn-primary").addClass('disabled');
    });
    
});
