<style>
    table {
        width: 800px;
    }

    tbody {
        border: 0;
    }

    table td.right {
        float: right;
    }

    table td {
        float: left;

    }

    hr {
        height: 10px;
    }

</style>
<table>
    <tr>
        <td><?php
            cache_clear_all();
            print render($title); ?></td>
        <td>
            <hr/>
        </td>
        <td class="right"
        <?php print render($content['field_votes']); ?></td>
    </tr>
</table>

