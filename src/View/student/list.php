<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table >
    <thead >
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Grade</th>
        <th>Class</th>
        <th colspan="8"></th>
    </tr>
    </thead>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['name'] ?></td>
            <td><?php echo $student['birthday'] ?></td>
            <td><?php echo $student['email'] ?></td>
            <td><?php echo $student['phone'] ?></td>
            <td><?php echo $student['grade'] ?></td>
            <td><?php echo $student['class'] ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <th colspan="8"><?php if(empty($students)) echo "No Data"?></th>
    </tr>
</table>
</body>
</html>