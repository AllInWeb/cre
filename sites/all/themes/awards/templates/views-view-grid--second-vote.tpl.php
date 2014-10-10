<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<table class="<?php print $class; ?>"<?php print $attributes; ?>>
    <?php if (!empty($caption)) : ?>
        <caption><?php print $caption; ?></caption>
    <?php endif; ?>

    <tbody>
    <?php foreach ($rows as $row_number => $columns): ?>
        <tr <?php if ($row_classes[$row_number]) { print 'class="' . $row_classes[$row_number] .'"';  } ?>>
            <?php foreach ($columns as $column_number => $item): ?>
                <td <?php if ($column_classes[$row_number][$column_number]) { print 'class="' . $column_classes[$row_number][$column_number] .'"';  } ?>>
                    <?php print $item; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<input type="button" value="Голосовать" id="vote_btn" />

<button  id="tst_btn"> BTN</button>

<script>
    function myFunction() {
alert(11112)    }

     var $submit = $("#vote_btn");

    $(document).ready(function() {
        $('#edit-submit').click(function() {
//           $('#advpoll-form-122').submit();
        });

        $submit.click(function() {
//            console.log(typeof $('#advpoll-form-122').serializeArray());
            $.post('/second_vote',$('#advpoll-form-122').serializeArray(), function (data) {
                console.log(data);

                }, 'json');

           /* $.ajax({
                method: 'POST',
                url: '/system/ajax',
                data: $('#advpoll-form-122').serialize(),
                dataType: 'json',
                complete: function (data) {
                    console.log(data);
                }
            });*/
            /*$('#advpoll-form-122').ajaxForm(function() {
                alert("Thank you for your comment!");
            });*/
//            $('#edit-submit').click();
            return;
        });
    });

 /*   (function() {
        var
            table = $(".views-view-grid .cols-6"),
            submit = $("#vote_btn");
        // end of vars

        var
            submitForms = function() {
                var forms = $("form", table);
                console.log(forms);
                forms.each(function() {
                    var self = $(this);

                    // проверка заполненности формы

                    self.submit();
                });
            };
        // end of functions



        $(document).ready(function() {

            submit.click(function() {
                $('#tst_btn').click();
//                submitForms();
            });
//            submit.on("click", submitForms);
        });
    })();*/

</script>