<div class="">
    <table class="table mt-3 table-hover">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Id</th>
            <th>Class</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        </thead>
        <?php foreach ($groups as $key => $group): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $group->getId() ?></td>
                <td><a href="#"><?php echo $group->getName() ?></a></td>
                <td><?php echo $group->getDescription() ?></td>
                <td><?php echo $group->getStatus() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
