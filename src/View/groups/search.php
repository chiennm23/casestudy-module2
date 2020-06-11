<div class="" style="width: 980px">
    <table class="table mt-3 table-hover border border-warning">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Class</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        </thead>
        <?php foreach ($groups as $key => $group): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><a href="#"><?php echo $group->getName() ?></a></td>
                <td><?php echo $group->getDescription() ?></td>
                <td><?php echo $group->getStatus() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
