<?php
Class DBConnection{
    //config setting
    protected $_config;

    //connection
    public $dbc;

    //function __construct
    public function __construct($config){
        $this->_config = $config;
    }

    //function __destruct
    public function __destruct(){
        $this->dbc = null;
    }

    //function open getPDOConnection();
    private function getPDOConnection(){
        if($this->dbc != null){
            try{

            }
            catch(PDOException $e){
                echo __LINE__.$e->getMessage();
            }
        }
    }
}
?>