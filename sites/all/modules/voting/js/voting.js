$(function(){
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
});