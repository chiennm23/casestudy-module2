<div class="" style="width: 980px">
    <table style="background: white" class="table mt-3 table-hover border border-warning" style="color: white">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>StudentID</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Class</th>
        </tr>
        </thead>
        <?php foreach ($students as $key => $student): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $student->getId() ?></td>
                <td><?php echo $student->getName() ?></td>
                <td><?php echo $student->getBirthday() ?></td>
                <td><?php echo $student->getEmail() ?></td>
                <td><?php echo $student->getPhone() ?></td>
                <td><?php echo $student->getClass() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
