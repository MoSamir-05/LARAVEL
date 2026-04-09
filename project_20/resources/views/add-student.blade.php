<div>
    <h1>Add New student</h1>
    <form action="add" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter name"><br>
        <input type="email" name="email" placeholder="Enter email"><br>
        <input type="text" name="phone" placeholder="Enter phone"><br> <br>
        <input type="submit" value="Add student">
    </form>
</div>
