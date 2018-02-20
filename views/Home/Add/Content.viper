<form method="POST" enctype="multipart/form-data" action="/users" >
    <br><br><br>
    <label> @lang('add.fname');
        <input name="fname">
    </label><br><br>
    <label> @lang('add.lname');
        <input name="lname">
    </label><br><br>
    <label> @lang('add.email');
        <input type="email" name="email">
    </label><br><br>
    <label> @lang('add.age');
        <input type="number" name="age">
    </label><br><br>
    <label> @lang('add.img');
        <input type="file" name="img">
    </label>
    <label>
        <input type="submit" value="SUBMIT">
    </label>
</form>
