<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>ADD NEW STUDENT</h1>
        </div>
        <div class="col-12">
            <form method="post">
                Student ID:
                <input type="text" name="id"><br>
                Name:
                <input type="text" name="name"><br>
                Date:
                <input type="text" name="birthday"><br>
                Email:
                <input type="email" name="email"><br>
                Phone:
                <input type="number" name="phone"><br>
                Grade
                <input type="number" name="grade"><br>
                Class:
                <input type="text" name="class"><br>
                Class ID:
                <input type="number" name="idclass"><br>
                <br>
                <button type="submit" class="btn btn-primary">ADD</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>