 <?php
	
	require_once __DIR__.'/formularioLogin.php';


abstract class Formulario {

    private $formId;

    private $action;
	
	private $opciones;

    public function __construct($opcion) {
		$this->opciones = $opcion;
    }
  
    public function gestiona() {  
		if($this->opciones == "login"){
			FormularioLogin::procesaFormulario();	
		}
		else if($this->opciones == "anadirZapatillas"){
			FormularioAñadirZapatillas::procesaFormulario();	
		}
		else if($this->opciones == "borrarZapatillas"){
			FormularioBorrarZapatillas::procesaFormulario();		
		}
		else if($this->opciones == "registro"){
			FormularioRegistro::procesaFormulario();	
		}
    }
	
	public function gestionaFormularioComentario($idZapatillas){  
		formularioAñadirComentario::procesaFormulario($idPelicula, $idSerie);	
    }
	
	public function generaFormulario(){
		$html ='';
		$html .= '<form method="POST" enctype="multipart/form-data">';
		if($this->opciones == "login"){
			$html .= FormularioLogin::generaCamposFormulario();	
		}
		else if($this->opciones == "anadirZapatillas"){
			$html .= FormularioAñadirZapatillas::generaCamposFormulario();	
		}
		else if($this->opciones == "borrarZapatillas"){
			$html .= FormularioBorrarZapatillasZapatillas::generaCamposFormulario();	
		}
		else if($this->opciones == "registro"){
			$html .= FormularioRegistro::generaCamposFormulario();	
		}
		$html .= '</form>';
		return $html;
	}
	
	public function generaFormularioComentario($idZapatillas){
		$html ='';
		$html .= '<form method="POST" enctype="multipart/form-data">';
		$html .= formularioAñadirComentario::generaCamposFormulario();
		$html .= '</form>';
		return $html;		
	}

    public function formularioEnviado() {
		if(isset($_POST['nombre']) && isset($_POST['contrasena']) && $this->opciones == "login"){
			$this->gestiona();
		}
		else if(isset($_POST['nombre']) && $this->opciones == "anadirZapatillas"){
			$this->gestiona();
		}
		else if(isset($_POST['nombre']) && $this->opciones == "borrarZapatillas"){
			$this->gestiona();
		}
		else if(isset($_POST['nombre']) && $this->opciones == "registro"){
			$this->gestiona();
		}
		else{
			$this->generaFormulario();
		}
    }
	
	public function formularioEnviadoComentario($idZapatillas){
		if(isset($_POST['comentario'])){
			$this->gestionaFormularioComentario($idZapatillas);
		}
		else{
			$this->generaFormularioComentario($idZapatillas);
		}
	}
}
?>