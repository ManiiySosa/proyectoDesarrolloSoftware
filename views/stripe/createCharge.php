<?php
  require 'vendor/autoload.php';
  require_once 'config/db.php';
  require_once 'models/pedido.php';
  
//if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'){
  //  if (isset($pedido)){
      $stripe = new \Stripe\StripeClient(
      'sk_test_51InXxwEegPBfDMckI9JgE8EwGORjSVgDDOvEnfHDSFKpajnnfmAO0TAdWWOdxRfKTne0gKwwTj0qdc4SdawJv8zN00FqZDCaAT');
 // \Stripe\Stripe::setApiKey("sk_test_51InXxwEegPBfDMckI9JgE8EwGORjSVgDDOvEnfHDSFKpajnnfmAO0TAdWWOdxRfKTne0gKwwTj0qdc4SdawJv8zN00FqZDCaAT");
   
     
        //$pedido_json = json_encode($pedido);
        //$pedido_json -> fetch_object();

        $token = $_POST["stripeToken"];
        try{
            $charge = $stripe->charges->create([
            //$charge = \Stripe\Charge::create([
              "amount" => 99*100, //$pedido_json -> coste,
              "currency" => "mxn",
            /* "billing_details" => array(
                "address" => array(
                  "city" => "xalapa",
                  "posta_code" => "91020"
                ),
                "phone" =>"999 999 999"
              ),*/
              "description" => "Pago en mi tienda de camisetas...",
              "source" => $token
            ]);
              
          if($charge->status=="succeeded"){
              echo "<script>alert('Pagado exitosamente!');</script>";
              header("refresh:3;".base_url.'pedido/confirmado');
            }else{
              echo "<script>alert('Error al pagar!');</script>";
              Core::alert("Error al procesar el pago!");	
            }
        }catch(Exception $e){
              echo "<script>alert('".$e->getMessage()."');</script>";
              header("refresh:3;".base_url.'stripe/index');
        }
       // echo "<pre>", print_r($charge), "</pre>"; 
        
  //}
//}else if(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'){
  //    header("refresh:3;".base_url.'stripe/index');
//}
 
?>