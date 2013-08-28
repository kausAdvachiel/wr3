/**
  * @author Antonio Ricárdez Hernández
  * @author Anuar López Morgan
  * @date 27/08/2013
  * Define los parametros de conexión 
*/
class Conexion {
	private  $servidor;
	private  $usuario;
	private  $password;
	private  $basedatos;
	private  $type;
	
	public function getServidor(){ return $this->servidor; }
	public function getUsuario(){ return $this->usuario; }
	public function getPassword(){ return $this->password; }
	public function getBaseDatos(){ return $this->basedatos; }
	public function getType(){ return $this->type; }
	
	public function setServidor($val) { $this->servidor= $val; }	
	public function setUsuario($val) { $this->usuario= $val; }	
	public function setPassword($val) { $this->password= $val; }	
	public function setBaseDatos($val) { $this->basedatos= $val; }	
	public function setType($val) { $this->type= $val; }	
	
}
