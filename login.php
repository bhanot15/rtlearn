<?php require __DIR__.'/header.php'; ?>

<?php
    function login_user($email,$password)
    {
        $email = htmlentities($email);
        $password = htmlentities($password);
        
        $db_host = getenv('db_host');
        $db_username = getenv('db_username');
        $db_password = getenv('db_password');
        $db_database = getenv('db_database');

        $con = mysqli_connect($db_host,$db_username,$db_password,$db_database);
        $sql = 'SELECT * FROM user_data WHERE email='.mysqli_real_escape_string($con,$email).' AND password='.$password.' AND validity = 1';
        $result = $con -> query($sql);
        $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)==1){
            $_SESSION['username'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['validity'] = $row['validity'];
            $_SESSION['mailing'] = $row['mailing'];
            return True;
        }
        return False;
    }
    if (!empty($_POST))
    {
        if(!isset($_POST['email']))
        {
            echo 'Enter Email And Password To continue';
        }
        elseif(!isset($_POST['password']))
        {
            echo 'Enter Password';
        }
        else
        {
            
            if(login_user(htmlentities($_POST['email']),htmlentities($_POST['password']))){
                redirect('dashboard.php');
            }
            else
            {
                echo 'User Not Found';
            }
        }
    }
?>

<div class="countainer">
<h1 class="h1" >Log In</h1>
<form name="form1" action="login.php" onsubmit="required()" method="post">
    <div class="form">
        <input type="email" name="email" id="email" placeholder="Enter Email" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <button style='background-color: rgb(102, 102, 179)' type="submit">submit</button>
        <br>
        <a href="register.php">Register Instead</a>
    </div>
</form>
</div>

<?php require __DIR__.'/footer.php'; ?>