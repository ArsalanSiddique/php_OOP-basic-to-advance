<?php

    // class school {
    //     public $name;
    //     function __construct($name) {
    //         $this->name = $name;
    //         return $this->name;
    //     }
    // }

    class student {
        private $name;
        
        function __construct($name)
        {
            $this->name = $name;
            // return $this->name;
        }
        function get_name() {
            return $this->name;
        }

    }

    class enroll {
        private $student;
        private $schoolName;

        function __construct($school)
        {
            $this->student = Array();
            $this->schoolName = $school;
        }
        
        function enrollT0Class(student $student) {
            echo 'Student Name => '.$student->get_name().' --- School Name is => '.$this->schoolName;
        }
        
        function checkingArray(Array $arr) {
            print_r[$arr];  // not running
            echo '<br />';
            echo $arr[0];
        }

        function checkingString(String $str) {
            echo '<br />';
            echo $str;
        }

        function checkingInt(Int $integer) {
            echo '<br />';
            echo $integer;
        }
    }


    $objStudent = new student('Arsalan');
    
    // print_r($objStudent);
    // echo '<br />';
    // print_r($objStudent->get_name());
    // echo '<br />';

    $objEnroll = new enroll('Aman Grammer School');
    $objEnroll->enrollT0Class($objStudent);
    
    $arr = Array('Val1', 'Val2', 'Val3');
    $objEnroll->checkingArray($arr);
    $str = "String Data here..";
    $objEnroll->checkingString($str);
    $integer = 44;
    $objEnroll->checkingInt($integer);

?>