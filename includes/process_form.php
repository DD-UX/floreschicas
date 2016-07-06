<?php
  $form = [
    'firstname' => $_POST["firstname"],
    'lastname' => $_POST["lastname"],
    'email' => $_POST["email"],
    'consult' => $_POST["consult"]
  ];

  $msg = array();

  function check_form ($form){
    foreach($form as $key => $val){
      if (empty($val)) {
        $msg["type"] = "error";
        $msg["msg"] = "Por favor complete todos los campos";
        echo json_encode($msg);
        return;
        
      } else if ($key == "email" and !preg_match("/[\w]+@+[\w]+\.[\w]/", $val)) {
        $msg["type"] = "error";
        $msg["msg"] = "Por favor ingrese un email válido";
        echo json_encode($msg);
        return;
      }
    }    
    process_form($form);
  }

  function process_form ($form){
    $msg["type"] = "success";
    $msg["msg"] = "Gracias por contactarte con nosotros, a la brevedad te responderemos, gracias!";
    echo json_encode($msg);
    
    $subject = "Formulario enviado desde la web";
    $message = $form['consult'];
    $headers = 'From: '. $form['firstname'] . " ". $form['lastname'] .'<'. $form['email']. ">\r\n"; // Sender's Email
    $headers .= 'Cc:'. $form['email'] . "\r\n"; // Carbon copy to Sender
    // Message lines should not exceed 70 characters (PHP rule), so wrap it
//    $message = wordwrap($message, 70);
    // Send Mail By PHP Mail Function
    mail("diego@diegodiazweb.com", $subject, $message, $headers);
  }

  check_form ($form);
  
  
?>