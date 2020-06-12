<div class="" style="width: 980px">
    <table style="background: white" class="table mt-3 table-hover border border-warning">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>StudentID</th>
            <th>SubjectID</th>
            <th>Score</th>
        </tr>
        </thead>
        <?php foreach ($points as $key => $point): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $point->getStudentId() ?></td>
                <td><?php echo $point->getSubjectId() ?></td>
                <td><?php echo $point->getScore() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>