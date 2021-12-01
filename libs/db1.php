<?php
// Este archivo Fue creado para simplificar la Conexion a la Base de Datos
//
//  Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle frontpage.
 *
 * @package    Singleton Core
 * @copyright  2021 Asesor Profesional Mesa IT Bolivar Soldicom Ing Luis Jarava 
 * @license    Soldicom Copyrigth 2021
 */


class DB{
    
    private static $instance;
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    private $counter;
    
    private function __construct ()
    {
        $this->host     = constant('HOST');
        $this->db       = constant('DB');
        $this->user     = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset  = constant('CHARSET');
        
        
    }
    
    /* 
     * Función encargada de crear, si es necesario, el objeto. 
     * Esta es la función que debemos llamar desde fuera de la 
     * clase para instanciar el objeto, y así, poder utilizar sus
     * métodos
     */
    public static function getInstance(){
        if(!isset(self::$instance))
        {
            $object= __CLASS__;
            self::$instance=new $object;
        }
        return self::$instance;
    }
    
    /*Evitamos el clonaje del objeto. Patrón Singleton*/
    private function __clone(){ }
    
    public function connect()
    {
        try
        {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $this->db = new PDO($connection, $this->user, $this->password, $options);
            echo 'Contruyendo objeto DabaBase MySql ...';
            
            return $db;
            
        }
        catch(PDOException $e)
        {
            echo ''.$e->getMessage();
            print_r('Error de connection: ' . $e->getMessage());
        }
        
        ++$this->counter;
    }
    
    public function getCounter()
    {
        return $this->counter;
    }
    
    public static function closeConnect(){
        self::$instancia = null;
    }

    //DB_Singleton::getInstance()->connect();
    
    
}






?>