$(document).ready(function () {
    console.log($('tr:nth-child(2) td input:radio'));
    $('tr:nth-child(2) td input:radio').attr('checked', true);
//        .each(function () {
//console.log($(this).first);
//       $(this).attr('checked', true);
//   });
});