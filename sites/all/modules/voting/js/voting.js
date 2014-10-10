$(document).ready(function () {
   $('tr:nth-child(2) td input:radio').each(function () {
       $(this).attr('checked', true);
   });
});