<?php include "Includes\Header.php" ?>.
<?php include "Includes\Navbar.php" ?>

<div class="page">
    <img src="Resources/css/Pics/ROLLS.jpg" alt="Lets Go">
    <div class="Details">
        <h1>Create an account</h1>
        <h3 style='font-size:10px'>ENTER YOUR DETAILS BELOW</h3>
        <form>
            <label>Name</label><br>
            <input type="text" name="txt" placeholder="Name" class="input-box"/>
            <br><br>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Email. eg. stareheboys@gmail.com" class="input-box"/>
            <br><br>
            <label>Phone Number</label><br>
            <input type="number" name="PhoneNo" placeholder="Tell. eg. +254 71234567" class="input-box"/>
        </form>
        <br>
        <button onclick="SignUp()"><a href="#">Create account</a></button>
        <button onclick="SignUp()"><a href="#"><b style='font-size:20px;color:blue'>G </b>Log in with Google</a></button>
        <br><br>
    <label>Already have an account?</label> <a href="LogIn.php" style='color:blue'>Log in</a>
    </div>
</div>
<script>


</script>
<?php include "Includes\Footer.php" ?>