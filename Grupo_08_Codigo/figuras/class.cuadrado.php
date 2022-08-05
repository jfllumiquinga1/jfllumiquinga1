<?php
class cuadrado extends figura implements formulas{

    private $lado1;  

    function __construct($lado1) {
        $this->lado1 = $lado1; 
      }
      function get_lado1() {
        return $this->lado1;
      }


    public function Area(){
$area=$lado1*$lado1;

    }
    public function Perimetro(){
$perimetro=4*lado1;
    }

    public function GetArea(){

       

    }
    public function GetPerimetro(){

 
        
    }
    public function GetTipo(){


        
    }
}
?>
