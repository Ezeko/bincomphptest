<?php
require_once('./config/connect.php');// call connection 
?>
<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

<link rel="icon" type="image/jpg" href='https%3A%2F%2Fwww.bincom.net%2Fassets%2Fimg%2Flogo.png&imgrefurl=https%3A%2F%2Fbincom.net%2F&docid=FKH60XvdTCnYhM&tbnid=PE0ltVa8jiHAZM%3A&vet=10ahUKEwiH79ecrPHmAhUQ2qQKHV6GDAwQMwhAKAAwAA..i&w=300&h=200&bih=608&biw=1366&q=bincom%20logo&ved=0ahUKEwiH79ecrPHmAhUQ2qQKHV6GDAwQMwhAKAAwAA&iact=mrc&uact=8'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<title>BINCOM TEST</title>
<style>
</style>
</head>
<body>
    <h2 class="w3-center w3-text-big w3-text-purple">DELTA STATE 2011 GENERAL ELECTION</h2>
<h3 class="w3-center w3-text-big w3-text-green">  SAPELE WARD 8 POLLING UNIT RESULTS </h3>
<div style="overflow-x:auto;">
<div style = "overflow-y:auto">

<table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-pink">
        <th></th>
      <th>PARTY</th>
        <th>RESULT</th>
        <th>ENTERED BY</th>
        <th>ENTERED AT</th>
        </tr>
    </thead>
    <?php $SQ="SELECT * FROM `announced_pu_results` WHERE polling_unit_uniqueid = 8";
        $query = mysqli_query($conn, $SQ) or die(mysqli_error($conn));
        $count = mysqli_num_rows($query);
        while ( $rows= mysqli_fetch_assoc($query)){
            echo "<tr class='w3-hover-blue'>
        <td></td>
        <td>".  ($rows['party_abbreviation']). "</td>
        <td>". ($rows['party_score']). "</td>
        <td>". ($rows['entered_by_user'])."</td>
    <td>". ($rows['date_entered'])."</td>
    </tr>";
    ;
        }
        ?>
    
</div>
</div>
</table>
</body>
</html>