    <html>
    <head>
        <?php
        include('connection.php');
        ?>
    </head>
    <body>
        <?php
         session_start(); 
    print_form();
  search_input();
  echo "Welcome::".$_SESSION["fan"]." ".$_SESSION["van"];
          
   if(isset($_POST['sbm']))
    {
        insertData();
    }  
   if(isset($_POST['search']))
    {
        search();
    }
    if(empty($_POST['search']))
    {
        show_records();
    }
        function print_form()
        {
            echo "<form method=\"post\" action=\"{$_SERVER['PHP_SELF']}\">
            <input type=\"text\" name=\"firstname\" placeholder=\"Firstname\"/><br>
            <input type=\"text\" name=\"lastname\" placeholder=\"Lastname\"/><br>
            <input type=\"number\" name=\"age\" placeholder=\"Age\"/><br>
            <input type=\"email\" name=\"email\" placeholder=\"Email\"/><br>
            <input type=\"password\" name=\"password\" placeholder=\"Password\"/><br>
            Student:<input type=\"checkbox\" name=\"occupation\" value=\"Student\"/><br>
            Business:<input type=\"checkbox\" name=\"occupation\" value=\"Bussiness\"/><br>
            Job:<input type=\"checkbox\" name=\"occupation\" value=\"Job\"/><br>
            Professional:<input type=\"checkbox\" name=\"occupation\" value=\"Professional\"/><br>
            Male:<input type=\"radio\" name=\"gender\" value=\"male\"/>
            Female:<input type=\"radio\" name=\"gender\" value=\"female\"/>
            <br>
            <input type=\"number\" name=\"cnic\" placeholder=\"CNIC\"/><br>
            <input type=\"text\" name=\"country\" placeholder=\"Country\"/><br>
            <input type=\"date\" name=\"dob\"/><br>
            <input type=\"submit\" name=\"sbm\" value=\"submit\"/><br>
            <input type=\"reset\" name=\"reset\"/>
            </form>";
        }
        
        function search_input()
        {
            echo"<form method=\"post\" action=\"{$_SERVER['PHP_SELF']}\">;
            <input type='text' name='search' placeholder='advance search'/>
            <input type='submit' name='sea' value='search'/>
            </form>";
        }
        
        function search()
        {
            $sql="select * from adil where firstname='".$_POST['search']."' or lastname='".$_POST['search']."' or 
            age='".$_POST['search']."'";
            $row=  mysql_query($sql) or die(mysql_error());
            if (! $row){
   throw new My_Db_Exception('Database error: ' . mysql_error());
}
table_head();
        while($rec= mysql_fetch_assoc($row))
          {
          echo "<tr onclick=\"Values(this)\"><td id=\"no\">".$rec['sno']."</td>
              <td>".$rec['firstname']."</td>
                  <td>".$rec['lastname']."</td>
                      <td>".$rec['age']."</td>
                  <td>".$rec['email']."</td>
                      <td>".$rec['occupation']."</td>
                  <td>".$rec['gender']."</td>
                      <td>".$rec['cnic']."</td>
                  <td>".$rec['country']."</td>
                      <td>".$rec['dob']."</td>
                  <td><a href='#'>edit</a></td>
                  <td><a href='#'>delete</a></td></tr>";
          }
          echo "</table>";
        }
              
        function insertData()
        
        {
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $age=$_POST['age'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $occupation=$_POST['occupation'];
            $gender=$_POST['gender'];
            $cnic=$_POST['cnic'];
            $country=$_POST['country'];
            $dob=$_POST['dob'];
        $sql = "INSERT INTO adil(firstname,lastname,age,email,password,occupation,gender,cnic,country,dob) VALUES ('" . $firstname . "','" . $lastname . "','" . $age . "','" . $email . "','".$password."','". $occupation .
        "','" . $gender . "','" . $cnic . "','" . $country ."','".$dob. "')";
if (mysql_query($sql)) {
    echo "Record inserted successfully";
} else {
    echo "Could not insert record: " . mysql_error();
}    
        }
 
        
        function table_head()
        {
        echo "<table border=1 cellpadding=1 cellspacing=1 id=\"table\">
        <tr><th>Sno</th><th>FirstName</th><th>LastName</th><th>Age</th><th>Email</th>
        <th>Occupation</th><th>Gender</th><th>CNIC</th><th>Country</th><th>DOB</th>
        <th>Edit</th><th>Delete</th></tr>";    
        }
        
function show_records()
    {
    table_head();
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
        
    </body>
</html>