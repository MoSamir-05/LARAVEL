<div>
    <h2>Registeration page</h2>
    <form action="adduser" method="POST">
        @csrf
        Name <br>
        <input type="text" name="fname" placeholder="Enter your name">
        <br>
        <span style="color:red">
            @error('fname'){{ $message }}@enderror <br>
        </span>
        Last Name <br>
        <input type="text" name="lname" placeholder="Enter your name">
        <br>
        <span style="color:red">
            @error('lname'){{ $message }}@enderror <br>
        </span>
        email <br>
        <input type="email" name="email" placeholder="Enter your email">
        <br>
        <span style="color:red">
            @error('email'){{ $message }}@enderror <br>
        </span>

        password <br>
        <input type="password" name="password" placeholder="Enter your password">
        <br>
        <span style="color:red">
            @error('password'){{ $message }}@enderror <br>
        </span>
        Gender <br>
        <input type="radio" id="male" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : ''   }}>
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : ''   }} >
        <label for="female">Female</label>
        <br>
        <span style="color:red">
            @error('gender'){{ $message }}@enderror <br>
        </span>
        <br>
        <input type="submit" value="Register">
    </form>
</div>