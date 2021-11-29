<?php
///validataion
if (isset($_POST['create'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    /// check 
 $name=validate($_POST['name']);
 $email=validate($_POST['email']);
 $user_data='name='.$name.'&email='.$email;
  
//// if method
if(empty($name)){

    header("Location:../index.php?error=名前入力してください。&$user_data");
}else if(empty($email)){

    header("Location:../index.php?error=メール入力してください。&$user_data");
}else{
    echo "fine";
}

}
