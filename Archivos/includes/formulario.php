 <?php
	
	require_once __DIR__.'/formularioLogin.php';


abstract class Formulario {

    private $formId;

    private $action;
	
	private $opciones;

    public function __construct($formId, $opciones = array() ) {
		$this->formId = $formId;

        $opcionesPorDefecto = array( 'action' => null, );
        $opciones = array_merge($opcionesPorDefecto, $opciones);

        $this->action = $opciones['action'];
        
        if ( !$this->action ) {
            $this->action = htmlentities($_SERVER['PHP_SELF']);
        }
    }
  
    public function gestiona() {  
		if($this->formId == "login"){
			$this->procesaFormulario();
			if($_SESSION["login"] == false){
				header('Location: login.php');
				exit();
			}
		}
		else if($this->formId == "anadirZapatillas"){
			$this->procesaFormulario();	
		}
		else if($this->formId == "borrarZapatillas"){
			$this->procesaFormulario();		
		}
		else if($this->formId == "registro"){
			$this->procesaFormulario();	
		}
		header('Location: inicio.php');
        exit();
    }
	
	public function generaFormulario(){
		$html ='';
		$html .= '<form method="POST" enctype="multipart/form-data">';
		if($this->formId == "login"){
			$html .= FormularioLogin::generaCamposFormulario();	
		}
		else if($this->formId == "anadirZapatillas"){
			$html .= FormularioAñadirZapatillas::generaCamposFormulario();	
		}
		else if($this->formId == "borrarZapatillas"){
			$html .= FormularioBorrarZapatillas::generaCamposFormulario();	
		}
		else if($this->formId == "registro"){
			$html .= FormularioRegistro::generaCamposFormulario();	
		}
		$html .= '</form>';
		return $html;
	}
	
	public function gestionaFormularioComentario($idZapatillas){  
		$this->procesaFormularioComentario($idZapatillas);
		header('Location: vistaZapatillas.php?variable=' .$idZapatillas);
        exit();		
    }
	
	
	
	public function generaFormularioComentario($idZapatillas){
		$html ='';
		$html .= '<form method="POST" enctype="multipart/form-data">';
		$html .= formularioAñadirComentario::generaCamposFormulario();
		$html .= '</form>';
		return $html;		
	}

    public function formularioEnviado() {
		if(isset($_POST['nombre']) && isset($_POST['contrasena']) && $this->formId == "login"){
			$this->gestiona();
		}
		else if(isset($_POST['nombre']) && $this->formId == "anadirZapatillas"){
			$this->gestiona();
		}
		else if(isset($_POST['nombre']) && $this->formId == "borrarZapatillas"){
			$this->gestiona();
		}
		else if(isset($_POST['nombre']) && $this->formId == "registro"){
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
	
	public function gestionaFormularioFavorito($idZapas, $apuntado){  
		if(!$apuntado){
			formularioAnadirFavorito::procesaFormulario($idZapas);
		}
		else{
			formularioEliminarFavorito::procesaFormulario($idZapas);
		}
		header('Location: vistaZapatillas.php?variable=' .$idZapas);
        exit();
    }
	
	public function formularioEnviadoFavorito($idZapas, $apuntado){
		$c = $_POST['condi'] ?? "";
		if($c == 'ok'){
			$this->gestionaFormularioFavorito($idZapas, $apuntado);
		}else{
			$this->generaFormularioFavorito($idZapas, $apuntado);
		}
	}
	
	public function generaFormularioFavorito($apuntado){
		$datosIniciales = array();
		$html ='';
		$html .= '<form method="POST" enctype="multipart/form-data">';
		if($apuntado==false){
			$html .= formularioAnadirFavorito::generaCamposFormulario($datosIniciales);
		}else {
			$html .= formularioEliminarFavorito::generaCamposFormulario($datosIniciales);
		}$html .= '</form>';
		return $html;		
	}
}
?>