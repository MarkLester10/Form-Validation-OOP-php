<?php


class Validator{
    private $data = array();
    private $errors=[];
    private static $fields = ['username', 'email']; 


    public function __constructor($post_data){
        $this->data = $post_data;
    }

    public function validateForm(){
        foreach(self::$fields as $field){
            if(array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->validateUsername();
        $this->validateEmail();
        return $this->$errors;

    }

    private function validateUsername(){
        $val = trim($this->data['username']);
        if(empty($val)){
            $this->addError('username', '*username cannot be empty');
        }else{
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
            $this->addError('username', '*username must be 6-12 chars & alphanumeric');
            }
        }
    }

    private function validateEmail(){
        $val = trim($this->data['email']);
        if(empty($val)){
            $this->addError('email', 'The email cannot be empty');
        }else{
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
            $this->addError('email', 'Please enter a valid email');
            }
        }
    }

    private function addError($key, $message){
        $this->errors[$key]= $message;
    }
}


?>