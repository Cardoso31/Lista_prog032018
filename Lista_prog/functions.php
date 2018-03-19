<?php

/*
//Numero de 0 a 10

	$para=0;
	do {
		print("Informe um numero de zero a dez :\n");
		$nota=fgets(STDIN);
		if ($nota<=10 and $nota>=0) {
			print("Numero Aceito\n");
			$para=0;
		}else{
			print("Numero Invalido...Tente novamente\n");
			$para=1;
		}
	} while ( $para==1);



//Fatorial

print("Informe numero : \n");
$num=fgets(STDIN);

$dentro=array();

for ($i=0; $i<=$num  ; $i++) { 
	$dentro[]=$i;
}
$dentro=array_reverse($dentro);
$conta=$dentro[0];

for ($j=1; $j <sizeof($dentro) ; $j++) { 
	
	if ($dentro[$j]==0) {
		
	}else{
		$conta=$conta*$dentro[$j];
	}
}

 print("Fatorial do numero ".$num."é : \n");
 for ($k=0; $k <sizeof($dentro)-2 ; $k++) { 
 	print($dentro[$k]."*");
 }
 print($dentro[sizeof($dentro)-2]."\n");

 print("Resultado : ".$conta."\n");




$i=1;
while ($i <= 150) {
	print(" ".$i." ");
	$i=$i+2;
}


print("\nQuantas vezes o dado sera jogado?\n");
$vezes=fgets(STDIN);
print("\nClick ENTER para jogar o dado...\n");
$nulo=fgets(STDIN);
$guarda=array();


for ($m=0; $m <$vezes ; $m++) { 
	$guarda[]=rand(1,6);
}


for ($p=0; $p <6 ; $p++) { 
	$conta[$p]=0;
}


for ($n=0; $n <sizeof($guarda) ; $n++) { 
	if ($guarda[$n]==1) {
		$conta[0]++;
	}elseif ($guarda[$n]==2) {
		$conta[1]++;
	}elseif ($guarda[$n]==3) {
		$conta[2]++;
	}elseif ($guarda[$n]==4) {
		$conta[3]++;
	}elseif ($guarda[$n]==5) {
		$conta[4]++;
	}elseif ($guarda[$n]==6) {
		$conta[5]++;
	}
}
// print_r($conta);

for ($o=0; $o <6 ; $o++) { 
	$o1=$o+1;
	$pcent=($conta[$o]*100)/$vezes;
	print("N° ".$o1." caiu: ".$conta[$o]." vezes, equivalente a:".$pcent."%\n");
}

// 6

$normal=array(5,3,7,9,2);

Print("array estava assim: ( ");
for ($i=0; $i <5 ; $i++) { 
	print($normal[$i]." ");
}
print(") \n");

Print("agora esta assim: ( ");

for ($j=4; $j >=0 ; $j--) { 
	print($normal[$j]." ");
}
print(") \n");




$caracteres=array('a','b','x','y','u');
$cont=0;
$vogais=array('a','e','i','o','u');
$vogal=0;
for ($i=0; $i < 5; $i++) { 

	for ($j=0; $j <5 ; $j++) { 

		if($vogais[$j]==$caracteres[$i]){
			$vogal++;
		}
	}
}

$consoantes=5-$vogal;

print(" o array tem ".$consoantes." consoantes\n");
*/
 
 $vetor1=array(1,2,5,13,34);
 $vetor2=array(1,3,8,21,55);
 $intercala=array();

for ($i=0; $i <5 ; $i++) { 
	$intercala[]=$vetor1[$i];
	$intercala[]=$vetor2[$i];
}

print("Vetor1: ");
for ($j=0; $j<5 ; $j++) { 
	print($vetor1[$j]." ");
}
print("\n");

print("Vetor2: ");
for ($j=0; $j<5 ; $j++) { 
	print($vetor2[$j]." ");
}
print("\n");

print("Array intercalado: ");
for ($j=0; $j<10 ; $j++) { 
	print($intercala[$j]." ");
}
print("\n");