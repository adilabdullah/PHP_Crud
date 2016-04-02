git config --<html>
    <head>
        <title>Login</title>
        <?php
        session_start();  
    include ('connection.php');
    ?>
        <link href="styles.css" rel="stylesheet"/>
    </head>
    
    <body>
        <?php
        
        function print_login()
        {
            echo "<form name=\"myForm\" method=\"post\"  action=\"{$_SERVER['PHP_SELF']}\">
                <input type=\"text\" name=\"username\" class=\"tex\" placeholder=\"Enter Email\" /><br>
                <input type=\"password\" name=\"password\" class=\"tex\" placeholder=\"Enter Password\" />
<input type=\"submit\" name=\"log\" value=\"Sign In\" />                
</form>";
            echo "<form method=\"post\" action=\"{$_SERVER['PHP_SELF']}\">"
            . "<input type=\"submit\" name=\"siup\" value=\"Sign Up\" /></form>";
        }
        
      function logon()
      {
          $username=$_POST['username'];
          $password=$_POST['password'];
          $sql="select * from student_list where email='".$username."' and password='".$password."' limit 1";
                 $row=  mysql_query($sql) or die(mysql_error());
                             if (! $row){
   throw new My_Db_Exception('Database error: ' . mysql_error());
}
while($rec= mysql_fetch_assoc($row))
{
    $_SESSION["fan"] = $rec['fname'];
$_SESSION["van"] = $rec['lname'];
}
if(mysql_num_rows($row) ==1) {
        // echo "success".$row['fname']." ".$row['lname'];
         header("Location: index.php");
}
else
{
    echo "Username and password is incorrect";
}
}



function create_account()
{
echo "<form method=\"post\" action=\"{$_SERVER['PHP_SELF']}\" >
<input type=\"text\" name=\"fname\" placeholder=\"enter first name\" /><br>
<input type=\"text\" name=\"lname\" placeholder=\"enter last name\" /><br>
<input type=\"number\" name=\"cell\" placeholder=\"enter cell number\" /><br>
Male:<input type=\"radio\" name=\"sex\" value=\"male\" />
Female:<input type=\"radio\" name=\"sex\" value=\"female\" /><br>
Bussiness:<input type=\"checkbox\" name=\"occupation\" value=\"Bussiness\" /><br>
Job:<input type=\"checkbox\" name=\"occupation\" value=\"Job\" /><br>
Student:<input type=\"checkbox\" name=\"occupation\" value=\"Student\" /><br>
Professional:<input type=\"checkbox\" name=\"occupation\" value=\"Professional\" /><br>
<select name=\"country\">
<option value=\"india\">India</option>
<option value=\"canada\">Canada</option>
<option value=\"china\">China</option>
<option value=\"usa\">USA</option>
<option value=\"uae\">UAE</option>
<option value=\"uk\">UK</option>
<option value=\"russia\">Russia</option>
</select><br>
<input type=\"email\" name=\"email\" placeholder=\"enter email\" /><br>
<input type=\"password\" name=\"pass\" placeholder=\"enter password\" /><br>
<input type=\"text\" name=\"dob\" placeholder=\"enter date of birth\" /><br>
<input type=\"submit\" name=\"sbm\" value=\"Submit\" />
<input type=\"reset\" name=\"res\" value=\"Reset\" />
</form>";
}
 
      function created()
      {
          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $cell=$_POST['cell'];
          $sex=$_POST['sex'];
          $occupation=$_POST['occupation'];
          $country=$_POST['country'];
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          $dob=$_POST['dob'];
          $sql="insert into student_list (fname,lname,cell,gender,occupation,country,email,password,dob) values('".$fname."','".$lname."','".$cell.
                  "','".$sex."','".$occupation."','".$country."','".$email."','".$pass."','".$dob."')";
          $query="CREATE TABLE ".$fname."_".$lname."(
                 sno INTEGER(5) AUTO_INCREMENT PRIMARY KEY,
                 NAME VARCHAR(50) NOT NULL,
                 post VARCHAR(300) NOT NULL,
                 comment VARCHAR(200) NOT NULL,
                 TYPES VARCHAR(35) NOT NULL, 
                 likes BOOLEAN,
                 dated DATE,
                 times TIME
             );";
 

                  
          if (mysql_query($sql) && mysql_query($query)) {
    echo "Account Created";
} else {
    echo "Account does not created" . mysql_error();
}   
      }
      
      print_login();
      if    (isset($_POST['log']))
      {
         //   if($_POST['log'])
          //  {
                logon();
           //  }
      }
      
if(isset($_POST['siup']))
     {
        create_account();     
     } 
        if(isset($_POST['sbm']))
      {
          created();
      }
       
        
        
           
 

?>
    </body>
</html>