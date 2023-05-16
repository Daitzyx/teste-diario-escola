<?php
// 1...
  $nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
  $cliente1 = new stdClass();
  $cliente1->nome = $nomes[0];
  $cliente2 = new stdClass();
  $cliente2->nome = $nomes[1];
  $cliente3 = new stdClass();
  $cliente3->nome = $nomes[2];
  $arrayDeClientes = [$cliente1, $cliente2, $cliente3];

  echo $arrayDeClientes[1]->nome;


  // 2...
  $arrayDeNascimento = [
    'Francisco Souza' => '10-12-1996',
    'Arthur Golveia' => '14-01-2000',
    'Guilherme Rosa' => '26-05-1985',
    'Marcelo Planalto' => '26-05-1985'
    ];

  
    foreach($arrayDeClientes as $cliente) {
      $nomeCliente = $cliente->nome;

      
      
      if(isset($arrayDeNascimento[$nomeCliente])) {
        $split = explode('-',$arrayDeNascimento[$nomeCliente]);
        $formatDate = $split[2]. '-'. $split[1].'-'. $split[0] ;

        $cliente->dataNasc = $formatDate;
      }
    }

    echo '<pre>';
    print_r($arrayDeClientes);
    echo '</pre>';


// 3...    
    usort($arrayDeClientes, function($client1, $client2) {
      return strtotime($client1->dataNasc) < strtotime($client2->dataNasc); 
    });  

    echo '<pre>';
    print_r($arrayDeClientes);
    echo '</pre>';
?>




