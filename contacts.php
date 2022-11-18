<?php
        #sample connection to database with name test
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hostelbooking"; #can be any name 
        $conn = new mysqli($server, $username, $password, $dbname);
       
        if($conn->connect_error){
            die("Connection failed.".$conn->connect_error);
        }else{
            if(isset($_REQUEST['submit'])){
               if($_REQUEST['Fullname']!=""&&$_REQUEST['Email']!=""&&$_REQUEST['pass']!=""&&$_REQUEST['Addss']!="" &&$_REQUEST['Topic']!="" &&$_REQUEST['Problem']!=""){
                    $input = $_REQUEST['Fullname'];    
                    $input1 = $_REQUEST['Email'];
                    $input2 = $_REQUEST['pass'];
                    $input3 = $_REQUEST['Addss'];
                    $input4 = $_REQUEST['Topic'];
                    $input5 = $_REQUEST['Problem'];
                    
                    echo '<script>alert("Data taken successfull")</script>';
                    echo '<script>windows: location="home.html"</script>';
                    $sql = "INSERT INTO contactus(Fullname,Email,pass,Addss,Topic,Problem) VALUES('$input','$input1','$input2','$input3','$input4','$input5')";
            
                    if($conn->query($sql)===TRUE){
                        echo "\n\nThe value is taken into table";
                    }
                    else{
                      echo "\n error in executing";
                    }
                }else{
                    echo "\nThe value is not provided.";
                }

            }
        }
?>