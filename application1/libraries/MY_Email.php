<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Email extends CI_Email {

    public function __construct($config = array())
    {
        parent::__construct($config);
        // Your own constructor code
    }
    public function readmail()
    {
        echo 'tik@hotmail.com';
    }

}