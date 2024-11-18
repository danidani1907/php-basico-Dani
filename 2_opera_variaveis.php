<!-- usando a função get-->
 <!-- GET: metodo HTML padrão, a requisiçaõ 
  é enviada como uma string anexada a URL  -->

  <!-- esse progama recebe dois valores pela URL
   usando o metodo GET -->
   <?php 
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];


    if(isset($numero1) && isset($numero2)){
        $numero1 = (int)$numero1;
        $numero1 = (int)$numero1;
            
        
        $soma = $numero1 + $numero2;

        $subtracao= $numero1 - $numero2;

        $multiplicacao= $numero1 * $numero2;

        $divisao= $numero1 / $numero2;

        echo "A soma é: $soma <br>";
        echo "A subtração é: $subtracao <br>";
        echo "A multiplicação é: $multiplicacao <br>";
        echo "A divisão é: $divisao <br>";
    }

    else{
        echo"ATENÇÃO!por favor, forneça os valores de numero1 e numero2 
        pela url.";
    }
   ?>

   