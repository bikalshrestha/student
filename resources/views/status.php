<table class="table table-bordered table-striped">
    <thead>
    <td>Name</td>
    <td>Date of birth</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Status</td>
</thead>
<tbody>
    <?php
    foreach ($data['students'] as $s):
        //dd($s);
        ?>
        <tr>
            <td><?php echo $s->name; ?></td>
            <td><?php echo $s->date_of_birth; ?></td>
            <td><?php echo $s->email; ?></td>
            <td><?php echo $s->phone; ?></td>
            <td><?php echo $s->status; ?></td>
        </tr>
        <?php endforeach;?>
</tbody>
</table>
<div id="pagination">
<?php echo $data['students']->appends(request()->except('page'))->links(); ?>
</div>