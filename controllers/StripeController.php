<?php
require_once 'models/pedido.php';

class stripeController{
	
	public function index(){
		
		require_once 'views/stripe/index.php';
	}

    public function charge(){

		require_once 'views/stripe/createCharge.php';
	}
}