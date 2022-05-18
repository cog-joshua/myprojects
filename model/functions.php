<?php
    //return the sum of two numbers
    function add($num1, $num2) {
        return $num1 + $num2;
    }

    Class Calculation{
        public function add($num1, $num2) {
            return $num1 + $num2;
        }

        public function subtract($num1, $num2) {
            return $num1 - $num2;
        }
    }

    Class Names{
        public function getNames($firstName, $lastName) {
            return $firstName . " " . $lastName;
        }
    }
    Class ExistChecker{
        //check if a value exists in an array not case sensitive
        public function checkExistCase($value, $array) {
            if(in_array(strtolower($value), array_map('strtolower', $array))) {
                return "Array contains the value";
            } else {
                return "Array does not contain the value";
            }
        }


    }
    