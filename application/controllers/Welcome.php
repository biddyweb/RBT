<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            //$client = new SoapClient('http://api.radioreference.com/soap2/?wsdl&v=latest');
            $client1 = new SoapClient("usermanage.wsdl", array('proxy_host'     => "10.71.62.14",
                                            'proxy_port'     => 28080,
                                            'proxy_login'    => "testact",
                                            'proxy_password' => "testact"));

            $clientresp1 = $client1->__getFunctions();
            print_r($clientresp1);
            $client2 = new SoapClient("toneprovide.wsdl", array('proxy_host'     => "10.71.62.14",
                                            'proxy_port'     => 28080,
                                            'proxy_login'    => "testact",
                                            'proxy_password' => "testact"));

            $clientresp2 = $client2->__getFunctions();
            print_r($clientresp2);
            
		$this->load->view('welcome_message');
	}
}
