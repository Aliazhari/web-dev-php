<?php

 /**
 * Author: Abdelali Azhari
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

unset($error_message);

$login_title = "Customer Login";
$login = "user";
$action = "login.php";
if(isset($_GET['admin'])) {
    $login_title = "Admin Login";
    $login = 'admin';
    $action = $action . '?admin=admin';
}

if(!isset($_POST['email']) || !isset($_POST['password'])) {
    $error_message = "";
}
else {
    $unsanitized_email = $_POST['email'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email == null || $email == false) {
        $error_message = "* Invalid email";
       
    }
    else {
        $password =  filter_input(INPUT_POST, 'password');
        if ($password == null || $password == false) {
            $error_message = "* Invalid password";
            
        }
    }
}
if (!isset($error_message)) {

     $login_admin =  filter_input(INPUT_POST, 'admin_login');
     if ($login_admin == null || $login_admin == false) {
        include('model/customer_db.php');
        if (!(CustomerDB::isValidCustomerLogin($email, $password)))
            $error_message = "Invalid Login";
        else {
            $customer = CustomerDB::getCustomerByEmail($email);
            $_SESSION['customer'] = true;
            $_SESSION['customerName'] = $customer['firstName']; 
            $_SESSION['customerID'] = $customer['customerID'];
        }
    }

    else {
        include('model/admin_db.php');
        if (!(AdminDB::isValidAdminLogin($email, $password)))
            $error_message = "Invalid Login";

        else {
            $admin = AdminDB::getAdminByEmail($email);
            $_SESSION['admin'] = true;
            $_SESSION['adminName'] = $admin['firstName']; 
        }
    }
}

if (isset($error_message)) {
?>
<main>
    <div id="admin-login-view" class="form-view">
        <h1><?php echo $login_title; ?></h1>
        <span class="error_message">
            <?php echo htmlspecialchars($error_message); ?>
        </span><br>
        <form action="<?php echo $action;?>" method="POST" id="login_form" class="form-view">
            <?php if ($login == 'admin') { ?>
              <input type="hidden" name="admin_login" value="<?php echo $login; ?>">
           <?php  } ?>
            
            <label>E-Mail:</label>
            <input type="text" name="email"
            value="<?php echo htmlspecialchars($unsanitized_email); ?>" size="30">
            <br>
            <label>Password:</label>
            <input type="password" name="password" size="30">
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</main>
<?php 

include('footer.php');
}
else {
    if ($_SESSION['order'])
        include('order.php');
    else
        include 'index.php';
}
?>