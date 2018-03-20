<?php

class MY_Model extends CI_Model
{
    protected $_CI;
    protected $tableName;

    public function __construct()
    {
        parent::__construct();
        $this->_CI =& get_instance();

        if(!is_null($this->tableName)){
            $this->load('Entity/'.$this->tableName);
        }
    }

    protected function load(string $modelName){
        $this->_CI->load->mode.($modelName);

        $modelName = str_replace('Entity/', '', $modelName);
        $this->$_modelName = $this->_CI->$_modelName;
    }
}