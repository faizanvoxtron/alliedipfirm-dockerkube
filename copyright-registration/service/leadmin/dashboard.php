<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: index.php");
    exit;
}
require_once "system/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 100%; padding: 20px; }
        
        table {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        table td, table th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        table tr:nth-child(even){background-color: #f2f2f2;}
        
        table tr:hover {background-color: #ddd;}
        
        table th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #193678;
          color: white;
        }
        
        select{
            padding: 10px 20px;
            border: none;
        }
        
    </style>
</head>
<body>
    <div class="wrapper">

<?php

$sql = "SELECT id, name, email, phone, ip, city, region, postal, status, date_created FROM leads ORDER BY id DESC";

$selectQuery = $mysqli->prepare($sql);
$selectQuery->execute();
$selectQueryResult = $selectQuery->get_result();
$result = $selectQueryResult->fetch_all(MYSQLI_ASSOC);

// var_dump($result);

$selectQuery -> close();
echo '<table style="width:100%; text-align:left;"><tr><th>Status</th><th>Name</th><th>Email</th><th>Phone</th><th>IP</th><th>City</th><th>State</th><th>Postal</th><th>Date</th><th>Detail</th><th>Brief</th></tr>';
foreach ($result as $item) {
    $selectBrief = $mysqli->prepare("SELECT id from copyright_brief WHERE UserId = ".$item['id']);
    $selectBrief->execute();
    $selectBriefResult = $selectBrief->get_result();
    $response = $selectBriefResult->fetch_array();
    // var_dump($response);

    if ($response != null) {
        $brief = '<a href="brief.php?userid='.$item['id'].'">View</a>';
    } else {
        $brief = "-";
    }
    
    
    $color = 'style="background:#eeeea1 !important;"';
    
    if($item['status'] == "Converted") {
        $color = 'style="background:#b5f1b7 !important;"';    
    }
    
    if($item['status'] == "Invalid") {
        $color = 'style="background:#ffa2a2 !important;"';    
    }
    
    if($item['status'] == "Not Responding") {
        $color = 'style="background:#f3c065 !important;"';    
    }
    
    if($item['status'] == "Followup") {
        $color = 'style="background:#0031cf !important; color: white;"';    
    }
    
    if($item['status'] == "Lost") {
        $color = 'style="background:#ff0000 !important; color: white;"';    
    }
    
    
    echo '<tr '.$color.'><td><input type="hidden" name="id" value="'.$item['id'].'"/><input type="hidden" name="status" value="'.$item['status'].'"/><select class="options"><option value="Pending" '.( $item['status'] == "Pending" ? 'selected="selected"' : '' ).'>Pending</option><option value="Followup" '.( $item['status'] == "Followup" ? 'selected="selected"' : '' ).'>Followup</option><option value="Not Responding" '.( $item['status'] == "Not Responding" ? 'selected="selected"' : '' ).'>Not Responding</option><option value="Not Interested" '.( $item['status'] == "Not Interested" ? 'selected="selected"' : '' ).'>Not Interested</option><option value="Invalid" '.( $item['status'] == "Invalid" ? 'selected="selected"' : '' ).'>Invalid</option><option value="Converted" '.( $item['status'] == "Converted" ? 'selected="selected"' : '' ).'>Converted</option><option value="Lost" '.( $item['status'] == "Lost" ? 'selected="selected"' : '' ).'>Lost</option></select></td>'.
    '<td>'.$item['name'].'</td><td>'.$item['email'].'</td><td>'.$item['phone'].'</td><td>'.$item['ip'].'</td><td>'.$item['city'].'</td><td>'.$item['region'].'</td><td>'.$item['postal'].'</td>'.
    '<td>'.$item['date_created'].'</td><td><a href="detail.php?userid='.$item['id'].'">View</a></td><td>'.$brief.'</td></tr>';
        
    $selectBrief -> close();
}
echo '</table>';
?>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
        $(document).ready(function(){
            $('.options').change(function(){
                if($(this).siblings('input[name="status"]').val() == "Converted") {
                    alert('Could not change Converted Lead status');
                } else {
                    // Ajax for calling php function
                    $.post('system/update-status.php', { status: $(this).val(), userid: $(this).siblings('input[name="id"]').val() }, function(data){
                        console.log(data);
                    });
                }
                
                //Ajax for calling php function
                // $.post('system/update-status.php', { status: $(this).val() }, function(data){
                //     //do after submission operation in DOM
                // });
            });
        });
</script>
</body>
</html>