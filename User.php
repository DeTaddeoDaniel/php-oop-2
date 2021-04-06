<?php

require('getSconto.php');

    class User{
        public $id;
        public $name;
        public $age;
        public $email;
        use GetSconto;

        public function __construct($_id , $_name, $_age, $_email){
            $this->id = $_id;
            $this->name = $_name;
            $this->age = $_age;
            $this->email = $_email;
        }

    }