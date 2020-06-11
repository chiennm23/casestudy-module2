<div class="" style="width: 980px">
    <table class="table mt-3 table-hover border border-warning">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Class</th>
            <th>Description</th>
        </tr>
        </thead>
        <?php foreach ($subjects as $key => $subject): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><a><?php echo $subject->getName() ?></a></td>
                <td><?php echo $subject->getDescription() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div><?php
