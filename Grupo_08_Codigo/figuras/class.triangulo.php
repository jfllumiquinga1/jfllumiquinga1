<?php
class triangulo extends figura implements formulas{
	
    private $lado1;  
		private $lado2;      
		private $lado3;
	
	    
		//CONSTRUCTOR
		function __construct($lado1, $lado2, $lado3){
		$this->lado1= $lado1;
		$this->lado2=$lado2 ;
		$this->lado3= $lado3;
	    }
// METODOS
		public function Getlad1(){
		return $this->lado1;
		}


		public function Getalad2(){
		return $this->lado2;
		}
		public function Getalad3(){
		return $this->lado3;	
	  }	


    public function Area(){
$area=($lado1*$lado2)/2;

    }
    public function Perimetro(){
$perimetro=$lado1+$lado2+$lado3;
    }

    public function GetArea(){

      

    }
    public function GetPerimetro(){

 
        
    }
    public function GetTipo(){


        
    }
    
}
?>

