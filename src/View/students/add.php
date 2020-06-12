<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>ADD NEW STUDENT</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <table class="table table-gray">
                    <tr>
                        <td>Student ID:</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td><input type="text" name="birthday"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type="number" name="phone"></td>
                    </tr>
                    <tr>
                        <td>Grade:</td>
                        <td><input type="number" name="grade"></td>
                    </tr>
                    <tr>
                        <td>Class:</td>
                        <td><input type="text" name="class"></td>
                    </tr>
                    <tr>
                        <td>Class ID:</td>
                        <td><input type="number" name="idclass"></td>
                    </tr>
                </table>

                <br>
                <button type="submit" class="btn btn-primary">ADD</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>