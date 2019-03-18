<?php

$vetor= array();

$vetor[0]=$_GET["v1"];
$vetor[1]=$_GET["v2"];
$vetor[2]=$_GET["v3"];
$vetor[3]=$_GET["v4"];
$vetor[4]=$_GET["v5"];

var_dump($vetor);

$maior=0;
$par= array();

$v3e5= array();


for ($i=0; $i<=4; $i++){
    if ($vetor[$i]>$maior){
        $maior=$vetor[$i];
    }
    if ($vetor[$i] % 2 ==0){
        $par[$i]=$vetor[$i];
    }
    if (($vetor[$i]%3==0)&&($vetor[$i]%5==0)){
        $v3e5[$i]=$vetor[$i];
    }
}
    echo "O maior valor é: " .$maior.'<br>';
    echo "Os valores pares são: " . implode($par, " , ").'<br>';
    echo "Os valores multiplos de 3 e 5 são: ". implode($v3e5, " , ").'<br>';
    
    

?>


