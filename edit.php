<html>
<head>
   <?php
        include('connection.php');
        ?>
</head>
<body>
<?php 
$id=$_GET['sno'];
$do=$_GET['do'];

switch($do)
{
	case "delete":
	{delete($id);}
	case "edit":
	{edit_form($id);}
	default:
	{echo "Unavailable options";}
}



if(isset($_POST['edt']))
{

updates();
}
show_recorder();

function delete($id)
{
	$sql="delete from adil where sno=$id";
	           if (mysql_query($sql)) {
    echo "Record deleted successfully";
} else {
    echo "Could not delete record: " . mysql_error();
}    
}


function edit_form($id)
{
$sql="select * from adil where sno='".$id."'";
        $row=  mysql_query($sql) or die(mysql_error());
            if (! $row){
   throw new My_Db_Exception('Database error: ' . mysql_error());
}
 while($rec= mysql_fetch_assoc($row))
          {
          	            echo "<form method=\"post\" action=\"{$_SERVER['PHP_SELF']}\">
            <input type=\"text\" name=\"sno\" value=".$rec['sno']."><br>
            <input type=\"text\" name=\"firstname\" value=".$rec['firstname']."><br>
            <input type=\"text\" name=\"lastname\" value=".$rec['lastname']."><br>
            <input type=\"text\" name=\"age\" value=".$rec['age']."><br>
            <input type=\"email\" name=\"email\" value=".$rec['email']."><br>
                
            Student:<input type=\"checkbox\" name=\"occupation\" value=\"Student\"/><br>
            Business:<input type=\"checkbox\" name=\"occupation\" value=\"Bussiness\"/><br>
            Job:<input type=\"checkbox\" name=\"occupation\" value=\"Job\"/><br>
            Professional:<input type=\"checkbox\" name=\"occupation\" value=\"Professional\"/><br>
            Male:<input type=\"radio\" name=\"gender\" value=\"male\"/>
            Female:<input type=\"radio\" name=\"gender\" value=\"female\"/>
            <br>
            <input type=\"text\" name=\"cnic\" value=".$rec['cnic']."><br>
            <input type=\"text\" name=\"country\" value=".$rec['country']."><br>
            <input type=\"text\" name=\"dob\" value=".$rec['dob']."/><br>
            <input type=\"submit\" name=\"edt\" value=\"submit\"/><br>
            <input type=\"reset\" name=\"reset\"/>
            </form>";
          }
}

function updates()
{
	$sno=$_POST['sno'];
	$name=$_POST['firstname'];
	$last=$_POST['lastname'];
	$age=$_POST['age'];
	$email=$_POST['email'];
        $email=$_POST['email'];
	$occupation=$_POST['occupation'];
	$gender=$_POST['gender'];
	$cnic=$_POST['cnic'];
	$country=$_POST['country'];
	$dob=$_POST['dob'];
$sql="update adil set firstname='".$name."',lastname='".$last."',age='".$age."',email='".$email."',occupation='".$occupation."',gender='".$gender.
        "',cnic='".$cnic."',country='".$country."',dob='".$dob."' where sno='".$sno."'";
	           if (mysql_query($sql)) {
    echo "Record updated successfully";
    
                   } else {
    echo "Could not delete record: " . mysql_error();
}    
}

        function table_header()
        {
        echo "<table border=1 cellpadding=1 cellspacing=1 id=\"table\">
        <tr><th>Sno</th><th>FirstName</th><th>LastName</th><th>Age</th><th>Email</th>
        <th>Occupation</th><th>Gender</th><th>CNIC</th><th>Country</th><th>DOB</th>
        <th>Edit</th><th>Delete</th></tr>";    
        }


function show_recorder()
    {
    table_header();
        $sql="select * from adil";
        $q_records=  mysql_query($sql) or die(mysql_error());
        if(mysql_num_rows($q_records)<=0)
        {
            die("No record found");
        }
        else
        {
          while($row= mysql_fetch_assoc($q_records))
          {
          echo "<tr onclick=\"Values(this)\"><td id=\"no\">".$row['sno']."</td>
              <td>".$row['firstname']."</td>
                  <td>".$row['lastname']."</td>
                      <td>".$row['age']."</td>
                  <td>".$row['email']."</td>
                      <td>".$row['occupation']."</td>
                  <td>".$row['gender']."</td>
                      <td>".$row['cnic']."</td>
                  <td>".$row['country']."</td>
                      <td>".$row['dob']."</td>
                  <td><a href=\"edit.php?sno=".$row['sno']."&do=edit\">edit</a></td>
                  <td><a href=\"edit.php?sno=".$row['sno']."&do=delete\">delete</a></td></tr>";
                } 
          echo "</table>";
        }
    }
?>
    <button type="button" onclick="history.go(-1)">Back</button>
</body>
</html>