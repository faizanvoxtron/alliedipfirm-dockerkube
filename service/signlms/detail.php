<?php
     // Initialize the session
    session_start();
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header('Location: index.php');
        exit;
    }
    require_once('system/config.php');
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="description" content="We’re dedicated to design custom and affordable websites for your business. Reach us today to discuss your project!">
   <title>Custom Logo Design Services | Business Logo Design</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">



   <style>
       * {
       font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;

       }
      .data {
          width: 100%;
          display: inline-flex;
      }
      .title {
          min-width: 150px;
          max-width: 150px;
          font-weight: 700;
      }
      .value {
          min-width: 500px;
          font-weight: 600;

      }
      .title, .value {
          padding: 10px 10px;
          border: 1px solid rgba(0,0,0,0.2);
      }
   </style>

   




</head>

<body>
    <div class="main-container">
    <?php
    
    if (isset($_GET['userid'])) {

       // Query
        $selectQuery = $mysqli->prepare("SELECT * FROM leads WHERE id =".$_GET['userid']);
        $selectQuery->execute();
        $selectQueryResult = $selectQuery->get_result();
        $result = $selectQueryResult->fetch_array();

        
        foreach (array_keys($result) as $item) {
            if (gettype($item) == "integer") {
                // do nothing
            } else {
        ?>
                <div class="data">
                    <div class="title">
                        <?=$item?> :
                    </div>
                    <div class="value">
                        <?=$result[$item]?>
                    </div>    
                </div>
        <?php
            }
        }
       
    }
    ?>
</div>
</body>
</html>