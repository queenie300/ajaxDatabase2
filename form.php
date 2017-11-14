<?php 
    $formdata = explode('&', $_POST['data']);
     parse_str( $_POST['data'], $values);

     // connecting to database

     $server =  'localhost' ;
     $username = 'queenellconliffe';
     $password = 'cutequeenie123';
     $dbname = 'signup';

     $c    else 
     {
         echo "connected successfully, ";
     }onnection = mysqli_connect($server,$username,$password,$dbname);

     if (!$connection)
     {
         echo "problem connecting";
     } 
 

    $encryptedPassword = password_hash($values['password'],PASSWORD_DEFAULT); 

    $sql = "Insert into userinfo (firstname,lastname,email,password,gender,phonenumber)
            VALUES('" 
            .$values['firstname'] . "', '" 
            .$values['lastname']  . "', '" 
            .$values['email']     . "', '" 
            .$encryptedPassword  . "', '"
            .$values['gender']  . "', '" 
            .$values['phonenumber']    . "') ;";

    $query = mysqli_query($connection, $sql);
    if ($query)
    {
        echo "1 row inserted";
    } else 
    {
        echo "mysql_query error - cound't insert to the signup table";
    }
?>