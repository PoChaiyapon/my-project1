<?php
Class DBConnection{
    //config setting
    protected $_config;

    //connection
    public $dbc;

    //function __construct
    public function __construct($config){
        $this->_config = $config;
        $this->getPDOConnection();
    }

    //function __destruct
    public function __destruct(){
        $this->dbc = null;
    }

    //function open getPDOConnection();
    private function getPDOConnection(){
        if($this->dbc == null){
            try{
                $dsn = "".$this->_config['driver'].
                    ":host=".$this->_config['hostname'].
                    ";dbname=".$this->_config['dbname'];
                $this->dbc = new PDO($dsn,$this->_config['user'],$this->_config['pass']);
            }
            catch(PDOException $e){
                echo __LINE__.$e->getMessage();
            }
        }
    }
}
?>