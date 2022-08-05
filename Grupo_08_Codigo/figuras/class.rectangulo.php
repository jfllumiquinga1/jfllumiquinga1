<?php
class rectangulo extends figura implements formulas{
	private $lado1;  
    private $lado2; 
    function __construct($lado1,$lado2) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2; 
      }
      function get_lado1() {
        return $this->lado1;
      }
      function get_lado2() {
        return $this->lado2;
      }


    public function Area(){
$area=$lado1*$lado2;

    }
    public function Perimetro(){
$perimetro=2*($lado1+$lado2);
    }

    public function GetArea(){

       

    }
    public function GetPerimetro(){

 
        
    }
    public function GetTipo(){


        
    }
    
}
?>
