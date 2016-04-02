<html>
    <head>
        <title>Social Home Page</title>
    </head>
    <body>
<?php
    include ('connection.php');
 session_start(); 
  echo "<center><h1>Welcome::".$_SESSION["fan"]." ".$_SESSION["van"]."</h1></center>";
 function statusBar()
{
    echo "<form name='mystatus' method=\"post\" action=\"{$_SERVER['PHP_SELF']}\"  style='background-color:grey;border:3px solid black;'>"
    . "<select name='types'><option value='photos'>Photos</option>"
            ."<option value='emotion'>Emotional</option>"
            ."<option value='love'>Love</option>"
            ."<option value='excited'>Excited</option>"
            ."<option value='sad'>Sad</option>"
            ."<option value='depress'>Depress</option>"
            . "</select><br>"
            ."<textarea rows='5' cols='25' name='status' placeholder='Enter any thing you want'></textarea><br>"
            ."<input type='submit' value='Upload' name='upload'/>"
            ."<input type='reset' value='Reset'/>"
            . "</form>";
}

function uploadStatus()
{
$types=$_POST['types'];
$status=$_POST['status'];
$bys=$_SESSION["fan"]."".$_SESSION["van"];
$comments=0;
$likes=0;
$dates=date("Y-m-d");
$times=date("h:i:s");

//echo "type:".$types."Status:".$status."By:".$by."Comments:".$comments."likes:".$likes,"Date:".$dates."Times:".$times;
echo "<br>";
echo "<br>";
$sql="insert into social_home (statuses,typees,datees,times,likees,commentes,byes) values ('".$status."','".$types."','".$dates."',CURTIME(),'".$likes."','".$comments."','".$bys."')";
if (mysql_query($sql)) {
  //  echo "Record inserted successfully";
} else {
    echo "Could not insert record: " . mysql_error();
}    

}

function showStatus()
{
    $query="select * from social_home";
        $q_records=  mysql_query($query) or die(mysql_error());
        if(mysql_num_rows($q_records)<=0)
        {
            echo "There is no status to show";
        }
        else
        {
          while($row= mysql_fetch_assoc($q_records))
          {
    echo "<center><div style='background-color:yellow;border:1px solid black;border-radius:5px;font-size:22px;'><p name=\"by\" ><b>By:</b>".$row['byes']."</p>
    <p name=\"type\" style='font-size:22px;'><b>Type:</b>".$row['typees']."</p></div>
            <div style='background-color:grey;border:1px solid black;font-size:22px;'><p name=\"date\"><b>Date:</b>".$row['datees']."</p>
            <p name=\"time\" style='font-size:22px;'><b>Time:</b>".$row['times']."</p></div>
    <div style='background-color:orange;border:1px solid black;font-size:22px;'><p name=\"status\"><b>Status:</b>".$row['statuses']."</p></div>"
          /*  Likes:<p name=\"likes\">".$row['likees']."</p>
            Comment:<p name=\"comments\">".$row['commentes']."</p></div></center><br>*/
                ."<br>
            <br></div></center>";
}
        }
}

statusBar();
if(isset($_POST['upload']))
{
    uploadStatus();
} 
showStatus();    
?>

</body>
</html>