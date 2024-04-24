<?php

use function PHPSTORM_META\elementType;

    class data{
        public $oper;
        public $num1;
        public $num2;

        public function __construct($oper, $num1, $num2){
            $this-> oper = $oper;
            $this-> num1 = $num1;
            $this-> num2 = $num2;

                switch ($oper) {
                    case 'add':
                        $result = $this->num1 + $this->num2;
                        return $result;
                        break;
    
                    case 'sub':
                        $result = $this->num1 - $this->num2;
                        return $result;
                        break;
    
                    case 'div':
                        $result = $this->num1 / $this->num2;
                        return $result;
                        break;
    
                    case 'mul':
                        $result = $this->num1 * $this->num2;
                        return $result;
                        break;          
                    
                    default:
                        if(empty($this->num1 || $this->num2)) {
                            echo"could not return answer!";
                        }
                        break;
            }
        }
    }
?>