<div>
    <form action="adduser" method="POST">

        <h1>Add New User</h1>
        @csrf
        <div>
             <h5>
                 User Skill
             </h5>
             <input type="checkbox" name="skill[]" id="php" value="PHP">
             <label for="php">PHP</label>
             <input type="checkbox" name="skill[]" id="node" value="NODE">
             <label for="node">NODE</label>
             <input type="checkbox" name="skill[]" id="java" value="JAVA">
             <label for="java">JAVA</label>
        </div>
        <div>
             <h5>
                 Gender
             </h5>
             <input type="radio" name="gender" id="male" value="male">
             <label for="male">MALE</label>
             <input type="radio" name="gender" id="female" value="female">
             <label for="female">FEMALE</label>
         </div>
         <div>
             <h5>City</h5>
             <select name="city" id="">
                 <option value="Delhi">delhi</option>
                 <option value="anand">anand</option>
                 <option value="mumbai">mumbai</option>
             </select>
         </div>
         <div>
             <h5>Age</h5>
             <input type="range" name="age" id="age" min="18" max="100">
         </div>
         <button>Add new user</button>
     </div>
    </form>
