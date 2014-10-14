var dr = jQuery.noConflict();
dr(function(){
    $('#vote_submit_button').hide();
    jQuery('input:radio').change(function(){
        if (jQuery('.voting input:checked').length == 6) {
            $('#vote_submit_button').show();
        }
    });

//    jQuery(document).on("keypress", 'form', function (e) {
//        var code = e.keyCode || e.which;
//        console.log(code);
//        if (code == 13) {
//            console.log('Inside');
//            e.preventDefault();
//            return false;
//        }
//    });
});