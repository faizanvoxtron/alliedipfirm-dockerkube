<?php
    // require_once "system/encryption.php";
    // $password = 'F()c|<|t#1*8$o*(&i1h23y9(&h*&';
    // $enc = new encryption();
    // $password = md5($enc->encrypt($password));
    // $password = password_hash($password, PASSWORD_DEFAULT);
    // echo $password;
    // exit;
    
    // server should keep session data for AT LEAST 15 days
    ini_set('session.gc_maxlifetime', 54000);
    
    // each client should remember their session id for EXACTLY 15 days
    session_set_cookie_params(54000); 
    
    // Initialize the session
    session_start();
    
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("Location: index.php");
        exit;
    }
    
    // database call
    require_once "system/config.php";
    
    // Prepare a select statement
    $sql = "SELECT admin, name FROM users WHERE id = '".$_SESSION["id"]."' AND username = '".$_SESSION["username"]."'";

    $selectQuery = $mysqli->prepare($sql);
    $selectQuery->execute();
    $selectQueryResult = $selectQuery->get_result();
    $result = $selectQueryResult->fetch_all(MYSQLI_ASSOC);

    if ($result[0]["admin"] == 0) {
        header("location: dashboard.php");
    }

    $selectQuery -> close();
    
    // Define variables and initialize with empty values
    $name = $username = $password = "";
    $name_err = $username_err = $password_err = $create_err = $error = "";
    $success = "";
    
    $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{12,}$/";
    $user_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/";

    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(empty(trim($_POST["name"]))){
            $name_err = "Please enter Full Name.";
            $error = "E";
        } else{
            $name = trim($_POST["name"]);
        }
        
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter User Name.";
            $error = "E";
        } elseif (preg_match($user_regex, trim($_POST["username"])) == 0) {
             $username_err = "6 characters, 1 uppercase letter, 1 lowercase letter, 1 number and 1 special character.";
             $error = "E";
        } else{
            $username = trim($_POST["username"]);
        }
        
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter Password.";
            $error = "E";
        } elseif (preg_match($password_regex, trim($_POST["password"])) == 0) {
             $password_err = "12 characters, 1 uppercase letter, 1 lowercase letter, 1 number and 1 special character.";
             $error = "E";
        } else {
            $password = trim($_POST["password"]);
        }
        
        
        // Validate credentials
        if(empty($name_err) && empty($error) && empty($username_err) && empty($password_err)){
            
            require_once "system/encryption.php";
            
            $enc = new encryption();
            $password = md5($enc->encrypt($password));
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            // Prepare a select statement
            $sql = "INSERT INTO users (name, username, password, admin, status) VALUES ('$name','$username','$password',0,1)";
            $mysqli->query($sql);
            
            if($mysqli -> insert_id > 0) {
                $success = "User created :)";
                $error = "";
            } else {
                $create_err = "Problem in Creating User :/";
                $error = "E";
            }
            
            
            // $mysqli -> close();
            
        } else {
            $create_err = 'Invalid Details';
            $error = "E";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{ font: 16px sans-serif; }
        .wrapper{max-width:520px; padding: 20px; margin: 80px auto; }
        .wrapper1{max-width:600px; padding: 20px; margin: 80px 0px 0px; }
        .invalid-feedback {display : block;}
        label {margin: 5px 0 10px;}
        table {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        table td, table th {
          padding: 8px;
          text-align: left;
          border: none;
        }
        
        table tr:nth-child(even){background-color: #f2f2f2;}
        
        table tr:hover {background-color: #ddd;}
        
        table th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: white;
          color: black;
          text-align: left;
          border: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        
        <div class="col-md-6 wrapper1">
            <?php 
                // Prepare a select statement
                $sql = "SELECT id, username, name, status FROM users WHERE admin = 0";
                $selectQuery = $mysqli->prepare($sql);
                $selectQuery->execute();
                $selectQueryResult = $selectQuery->get_result();
                $result = $selectQueryResult->fetch_all(MYSQLI_ASSOC);
                $selectQuery -> close();
                
                echo '<h2>User List</h2><br>';
                echo '<table><tr><th>Full Name</th><th>User Id</th><th>Status</th></tr>';
                if (sizeof($result) > 0) {
                  
                    foreach ($result as $item) {
                        $statusUpdated = $item['status'] == 1 ? 'Active' : 'Blocked';
                        echo '<tr id="'.$item['id'].'"><td>'.$item['name'].'</td><td>'.$item['username'].'</td><td>'.$statusUpdated.'</td></tr>';
                    }
                    
                }
                echo '</table>';
                
            ?>
        </div>
        <div class="col-md-6 wrapper">
            <h2>Create User</h2>
            <br>
            <p>Please provide distinct user details.</p>
    
            <?php 
            if(!empty($login_err)){
                echo '<div class="alert alert-danger">' . $create_err . '</div>';
            }    
            if (!empty($success)){
                echo '<div class="alert alert-success">' . $success . '</div>';
            }
            ?>
    
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label><strong>Full Name</strong></label>
                    <input type="text" name="name" placeholder="Tom Cruise" class="form-control" value="<?php echo (empty($error)) ? '' : $name; ?>" required>
                    <span class="invalid-feedback"><?php echo $name_err; ?></span>
                </div> 
                <br>
                <div class="form-group">
                    <label><strong>User Id</strong><br>6 characters, 1 uppercase letter, 1 lowercase letter, 1 number and 1 special character.</label>
                    <input type="text" name="username"  placeholder="tOmC4&" minlength="6" class="form-control" value="<?php echo (empty($error)) ? '' : $username; ?>" required>
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div> 
                <br>
                <div class="form-group">
                    <label><strong>Password</strong><br>12 characters, 1 uppercase letter, 1 lowercase letter, 1 number and 1 special character.</label>
                    <input type="password" name="password" minlength="12" class="form-control" required>
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Create User">
                </div>
                <p style="color: red; margin-top: 10px;">Please use distinct User Names and Passwords.</p>
            </form>
        </div>
    
    </div>
</div>
</body>
</html>