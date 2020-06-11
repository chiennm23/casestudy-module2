<div class="">
    <table class="table mt-3 table-hover">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Id</th>
            <th>Class</th>
            <th>Description</th>
        </tr>
        </thead>
        <?php foreach ($subjects as $key => $subject): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $subject->getId() ?></td>
                <td><a><?php echo $subject->getName() ?></a></td>
                <td><?php echo $subject->getDescription() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div><?php
