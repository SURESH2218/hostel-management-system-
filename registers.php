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
               if($_REQUEST['fullname']!=""&&$_REQUEST['email']!=""&&$_REQUEST['pass']!=""&&$_REQUEST['Addss']!="" &&$_REQUEST['Gender']!=NULL &&$_REQUEST['Room']!=NULL&&$_REQUEST['Roomtype']!=NULL &&$_REQUEST['services']!=NULL){
                    $input = $_REQUEST['fullname'];    
                    $input1 = $_REQUEST['email'];
                    $input2 = $_REQUEST['pass'];
                    $input3 = $_REQUEST['Addss'];
                    $input4 = $_REQUEST['Gender'];
                    $input5 = $_REQUEST['Room'];
                    $input6 = $_REQUEST['Roomtype'];
                    $input7 = $_REQUEST['services'];
                    echo '<script>alert("Data taken successfull")</script>';
                    echo '<script>windows: location="home.html"</script>';
                    $sql = "INSERT INTO register(fullname,email,pass,Addss,Gender,Room,Roomtype,services) VALUES('$input','$input1','$input2','$input3','$input4','$input5','$input6','$input7')";
            
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