<?php 

    function validateLoginRequqest(LoginRequest $request)
    {
        if(!isset($request->username)){
            throw new ValidationError("Usernmae is Null");
        } else if(!isset($request->password)){
            throw new ValidationError("Password is null");
        } else if (trim($request->username) == ""){
            throw new Exception("Username is empty");
        } else if (trim($request->password) == ""){
            throw new Exception("Password is Empty");
        }
    }

?>