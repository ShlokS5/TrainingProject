<?php 
    include_once './helpers/session_helper.php';
?>

    <h1 class="header">Please Signup</h1>

    <?php flash('register') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="register">
        <input type="text" name="usersName" 
        placeholder="Full name..."> <br>
        <input type="text" name="usersEmail" 
        placeholder="Email..."><br>
        <input type="text" name="usersUid" 
        placeholder="Username..."><br>
        <input type="password" name="usersPwd" 
        placeholder="Password..."><br>
        <input type="password" name="pwdRepeat" 
        placeholder="Repeat password"><br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
