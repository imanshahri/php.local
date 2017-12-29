<?php
abstract class onlineGateway{

    protected $options;

    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'merchant' => '12323486',
                'username' => 'sd894sdf',
                'password'  => '9s8d74cc'
            ),
            'saman'  =>  array(
                'api_key'  => 's984cvs98484c618a9s4f98e4a'
            ),
            'parsian' => array(
                'username'  => '654984984',
                'password'  => 'a6s4cda89sd4sa'
            )
        );
    }

    abstract public function sendRequest();
    abstract public function verifyRequest();

}

class Mellat extends onlineGateway{
    private $gatewayName;
    private $mellat_options;
    public function __construct()
    {
        $this->gatewayName='mellat';
        parent::__construct();
        $this->mellat_options = $this->options[$this->gatewayName];

    }
    public function sendRequest()
    {
        var_dump($this->mellat_options);
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}

$gateway = Factory::make('mellat');
$gateway->sendRequest();

class Factory {

    public static function make($class)
    {
        $className = ucfirst($class);
        if(!class_exists($className)){
            return false;
        }
        return new $className;
    }

}