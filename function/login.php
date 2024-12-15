<?php 

// Divide Large Function To Smaller
// -- login Task 
// ----------------------------
// --loginUser(all Function Include)
// --valid user
// -- valid password
// -- valid  email
// -- matching user,password ,email
// -- login function
// Include all function in LoginUser() than LoginUser()


function loginUser($userName,$password,$email){
    if(!validUserName($userName)){
        echo "Username is required";
        
    }
    else if(!validPassword($password) ){
        echo "Password is required";
    }
    
    else if(!validEmail($email)){
        echo "Email is required";
    }
    
    else if(!Matching($userName,$password,$email)){
        echo "Please Check Your Input";
    }
    else {
        login();
    }

}


loginUser("abc","123","hafiz@gmail.com");




function validUserName($userName){
    
    if(!empty($userName)){
        return true;
    } else
        return false;
}


function validPassword($password)
{

    if (!empty($password)) {
        return true;
    } else
        return false;
}


function validEmail($email){
    if(!empty($email)){
        return true;
    } else
      return false;
    
}
function Matching($userName,$password,$email){
    if($userName=="abc" && $password=="123" && $email=="hafiz@gmail.com"){
        return true;
    } else
        return false;
}



function login(){
    echo "Login Successfully done";
}
   

 ?>