var $dr = jQuery.noConflict();
$dr(function(){
    $('#vote_submit_button').hide();
    var answered = new Array();
    $('input:radio').change(function(){
        var $this= $(this);
        if ($this.is(':checked')){
            answered.push($this.attr('name'));
        }
        if (answered.length == $('table tr:nth-child(2) td').length) {
            $('#vote_submit_button').show();
        }
    });

    $(document).on("keypress", 'form', function (e) {
        var code = e.keyCode || e.which;
        console.log(code);
        if (code == 13) {
            console.log('Inside');
            e.preventDefault();
            return false;
        }
    });

});