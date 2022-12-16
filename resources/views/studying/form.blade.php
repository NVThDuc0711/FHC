
<form method ="post"action="/studying/home" enctype="multipart/form-data">
    <p>Input your Information</p>


    <div>

        <p>Name</p>

        <input type="text" name="Name" placeholder="Input your name ...">
        @error('Name')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>

    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div>
        <p>Address</p>
        <input type="text" name ="Address" placeholder="Input your Address ...">
        @error('Address')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <p>Email</p>
        <input type="text" name ="email" placeholder="Input your email">
        @error('email')
            <p style="color: red">{{ $message }}</p>
        @enderror

    </div>


    <br>


    <div>
        <b>Submit your CV</b>
        <br>
        <input type="file" name ="File" id =""/>
        @error('File')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>

    <hr>
    <div>
        <button type="submit">Add Admin</button>
    </div>
</form>
