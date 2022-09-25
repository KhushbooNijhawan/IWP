 <?php
 
    
        $conn = mysqli_connect("localhost", "root", "", "registerDB");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_POST['name'];
        $registrationNumber = $_POST['registrationNumber'];
        $email =  $_POST['email'];
        $mobile =  $_POST['mobile'];
        $password =  $_POST['password'];
        $Gender_Specify=$_POST['Gender_Specify']
        $Branch_name =  $_POST['Branch_name'];
        $date =  $_POST['date'];
        $time =  $_POST['time'];
        $myfile =  $_POST['myfile'];

       
         
        // Performing insert query execution
        // here our table name is registerDB
        $sql = "INSERT INTO registerDB  VALUES ('$name',
            '$registrationNumber','$email','$mobile','$password','$Gender_Specify','$Branch_name','$date','$time','$myfile')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $registrationNumber\n$email \n $mobile\n $password "
                . "$Gender_Specify\n $Branch_name\n $date\n $time'\n $myfile ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>