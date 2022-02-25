<?php
    

    // function is_valid_name($name)
    // {
    //  if (empty($name)) {
    //      echo "Name is required.";
    //      return false;
    //  } 
    //  return true;
    // }




    // function is_valid_passwords($passcode,$confirmpass) 
    // {
    //  // Your validation code.
    //  if (empty($passcode)) {
    //      echo "Password is required.";
    //      return false;
    //  } 
    //  else if ($passcode != $confirmpass) {
    //      // error matching passwords
    //      echo 'Your passwords do not match. Please type carefully.';
    //      return false;
    //  }
    //  // passwords match
    //  return true;
    // }



    
    include 'db.php';


    if(isset($_POST['submit']))
    {

        $name = $_POST['fname'];
        $user_id = $_POST['userid'];
        $Pnumber = $_POST['phone'];
        $passcode = $_POST['pass'];
        $confirmpass = $_POST['confpass'];
    }
        
      
  if($confirmpass == $passcode){
    $sql = "INSERT INTO user_table (first_name, userid, phone_number, passcode) VALUES ('$name', '$user_id', $Pnumber, '$passcode')";
            $rs = mysqli_query($con, $sql);

            

        
        if($rs)
        {
            echo "Successfully saved";
            
        }
        else{
            echo "failed to add the details into your database!";
        }
        }
        else{
            echo "password and confirm passowrd is not matched";
        }
      
        
    
?>