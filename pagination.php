<?php
include('config.php');
 
$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM student_list ORDER BY id ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($link, $sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>First Name</th>  
<th>Uni Name</th>  
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><? echo $row["first_name"]; ?></td>  
            <td><? echo $row["university_name"]; ?></td>  
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  