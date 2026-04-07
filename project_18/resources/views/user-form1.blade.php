<div>
    <h2>Registeration page</h2>
    <form action="adduser" method="POST">
        @csrf
        Name <br>
        <input type="text" name="fname" placeholder="Enter your name">
        <br>
        Last Name <br>
        <input type="text" name="lname" placeholder="Enter your name">
        <br>
        email <br>
        <input type="email" name="email" placeholder="Enter your email">
        <br>
        password <br>
        <input type="password" name="password" placeholder="Enter your password">
        <br>
        Gender <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <br><br>

        <input type="submit" value="Register">
    </form>
</div>