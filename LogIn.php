<?php include "Includes\Header.php" ?>.
<?php include "Includes\Navbar.php" ?>

<div class="page">
    <img src="Resources\css\Pics\ROLLS.jpg" alt="Lets Go">
    <div class="Details">
        <h1>LogIn to Infinity</h1>
        <h3 style='font-size:10px'>ENTER YOUR DETAILS BELOW</h3>
        <form>
        <label>Email/PhoneNo.</label><br>
        <input type="email/number" name="email/PhoneNo" placeholder="Email Or PhoneNo"/>
        <br>
        <br>
        <label>Password</label><br>
        <input type="password" name="Password" placeholder="Password"/>
    </form>
    <br>
    <button onclick="LogIn()" style='font-size:20px'>LogIn</button>
    <a href="#" style='color:blue'>     Forgot Password?</a>
    </div>
</div>
<script>
function LogIn() {
    const inputboxes = document.querySelectorAll("input");
    for (let inputbox of inputboxes) {
        if (inputbox.value === '') {
            alert("You must Fill out all the fields!");
            return;
        }
    }
}
</script>

<?php include "Includes\Footer.php" ?>