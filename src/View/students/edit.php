<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>UPDATE STUDENT</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <table>
                    <tr>
                        <td>Id:</td>
                        <td>
                            <input type="text" name="id" value="<?php echo $student->getId()?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" value="<?php echo $student->getName()?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Birth Day:</td>
                        <td>
                            <input type="text" name="birthday" value="<?php echo $student->getBirthday()?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="text" name="email" value="<?php echo $student->getEmail()?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>
                            <input type="text" name="phone" value="<?php echo $student->getPhone()?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Grade:</td>
                        <td>
                            <input type="text" name="grade" value="<?php echo $student->getGrade()?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Class:</td>
                        <td>
                            <input type="text" name="class" value="<?php echo $student->getClass()?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Id Class:</td>
                        <td>
                            <input type="text" name="idclass" value="<?php echo $student->getIdclass()?>">
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">UPDATE</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
