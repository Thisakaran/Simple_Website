<style>
    body{
        background-image: url("background.jpg")
    }
    .dbresult,.dbresult td,.dbresult th{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
    }
    .dbresult{
        width: 800px;
        margin: auto;
    }
    .dbresult tr:nth-child(odd){
        background-color: #b2d0d6;
    }
    .dbresult tr:nth-child(even){
        background-color: lightcyan;
    }
    .logout{
    margin-left: 1300px;
    padding: 6px;
    color: white;
    background-color: black;
}
</style>

<a class="logout" href="logout.php">Logout</a>

<?php

include "database.php";

$query="select EmpID,FirstName,LastName from employee";

$result=mysqli_query($con, $query);
$numrow=mysqli_num_rows($result);

if($numrow>0){
        echo '<table class="dbresult">';
        echo '<tr>';
        echo '<th>EmpID</th>';
        echo '<th>First Name</th>';
        echo '<th>Last Name</th>';
        echo '</tr>';
        while($row=mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>' . $row ['EmpID'] . '</td>';
            echo '<td>' . $row ['FirstName'] . '</td>';
            echo '<td>' . $row ['LastName'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
}else{
    echo "No Record Found...!";
}

?>