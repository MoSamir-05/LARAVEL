<div>
    <h1>Add New User</h1>
        <form action="adduser" method="POST">
            @csrf
            <div class="input-wrapper">
                <input type="text" placeholder="Enter name" name="username">
                <input type="text" placeholder="Enter Email" name="email">
                <input type="text" placeholder="Enter city" name="city">
                <button>Add user</button>
            </div>
        </form>
</div>
<style>
    .input-wrapper {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.input-wrapper input {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.input-wrapper input:focus {
    border-color: #007bff;
    outline: none;
}

.input-wrapper button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 15px;
    cursor: pointer;
}

.input-wrapper button:hover {
    background-color: #0056b3;
}
</style>