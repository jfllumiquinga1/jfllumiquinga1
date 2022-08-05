<?php
	abstract class figura{
	
		
		public static function get_form(){
			$html = '
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

			<h1 align="center" style="margin: 10px;color:green" >UNIVERSIDAD DE LAS FUERZAS ARMADAS ESPE	</h1>
			<h2 align="center" style="margin: 10px;color:red" >GRUPO 08 PHP	</h2>

			<div class="card border-primary mb-3 ">
			<div class="card-header text-white bg-primary mb-3">
			  FIGURAS PHP
			</div>
			<div class="card-body ">
			  <h5 class="card-title">Ingrese Datos de la Figura</h5>
			  <div class="container-fluid">
			<div class="row justify-content-md-center">
			  
			  <div class="col-4 col-md-3">
			  <form class="row row-cols-lg-1 g-5 align-items-center">

			  <div class="col-12">
			  <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
			  <select class="form-select" id="select" onchange="myFunction()">
				<option selected>Escoja la figura...</option>
				<option value="1">Cuadrado</option>
				<option value="2">Rectangulo</option>
				<option value="3">Triangulo</option>
			  </select>


				
			  </div>
			
			  <div class="col-12">
			  <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
			  <div class="input-group">
				<div class="input-group-text">Lado 1</div>
				<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Ingrese el lado 1">
			  </div>
			  </div>
			
			  <div class="col-12">
			  <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
			  <div class="input-group">
				<div class="input-group-text">Lado 2</div>
				<input type="text" id="lado2" class="form-control" id="inlineFormInputGroupUsername" placeholder="Ingrese el lado 2">
			  </div>
			  </div>
			
			  <div class="col-12">
			  <div class="input-group w-80">
              <span class="input-group-text" id="basic-addon1">Lado 3  &nbsp
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-triangle" viewBox="0 0 16 16">
  				<path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"></path>
				</svg>
              </span>
              <input type="text" class="form-control" id="lado3" placeholder="Ingrese lado 3" aria-label=Ingrese el lado 3" aria-describedby="basic-addon1" >
            </div>
			  </div>

			  <div class="col-12">
			  <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  				<path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"></path>
				</svg>Calcular
              </button>
				
			  </div>
			</form>
			  </div>
			 
			</div>

			</div>
		  </div>
			
		  <script>
		  function myFunction() {
			var x = document.getElementById("select").value;
			var y= document.getElementById("lado3");
			var z= document.getElementById("lado2");
		
			if(x==1){
				z.disabled=true;
				y.disabled=true;
		}
		if(x==2){
			
			z.disabled=false;
			y.disabled=true;
		}
			if(x==3){
				z.disabled=false;
					y.disabled=false;

			}
		  }
		  </script>



		';
			return $html;
		}
		





		
		//\\ METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
