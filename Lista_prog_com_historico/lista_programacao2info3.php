<?php
$historico= fopen("historico.txt", 'a+');
$dataHora=date("d/m/Y");
	$dataHora.=" as ";
	$dataHora.=date("G:i:s");
do {
	
//cabecalho
print("\n 	Lista de Exercicios\n");
print("Informe o exercicio a ser aberto: \n");
print("\n(1)==>De zero a dez\n
(2)=>Impares entre 1 e 150\n
(3)=>Fatorial Direto\n
(4)=>Fatorial Completo\n
(5)=>Lançar dados\n
(6)=>Array Invertido\n
(7)=>Numero de consoantes\n
(8)=>Vetores Intercalados\n
(9)Historico\n");
$dado=fgets(STDIN);
switch ($dado) {
	case 1:
//0 a 10
		$para=0;
	do {
		print("Informe um numero de zero a dez :\n");
		$nota=fgets(STDIN);
		if ($nota<=10 and $nota>=0) {
			print("Numero Aceito\n\n");
			$para=0;
		}else{
			print("Numero Invalido...Tente novamente\n");
			$para=1;
		}
	} while ( $para==1);
		$textoHistorico="\n".$dataHora." O usuario informou o numero ".$nota." para a função de '(1)=> De zero a dez'\n";
		break;
//fim
		case 2:
//Impares
			$i=1;
			while ($i <= 150) {
				print(" ".$i." ");
				$i=$i+2;
			}
			$textoHistorico="\n".$dataHora." O usuario ultilizou a função '(2)=> Impares entre 1 e 150'\n";
//fim
			break;
		case 3:
//Fatorial rapido		
			print("Informe numero para fatorar: \n");
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
			 print("Resultado : ".$conta."\n");
			$textoHistorico="\n".$dataHora." O usuario informou ".$num." para a função '(3)=> Fatorial Direto'\n";

			break;

		case 4:
//Fatorial completo
				print("Informe numero para fatorar..: \n");
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
			 	print($dentro[$k].".");
			 }
			 print($dentro[sizeof($dentro)-2]."\n");
			 print("Resultado : ".$conta."\n");
			$textoHistorico="\n".$dataHora." O usuario informou ".$num." para a função '(4)=> Fatorial Completo'\n";

			break;
//fim
			case 5:
//LANÇA DADOS
	
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
		$textoHistorico="\n".$dataHora." O usuario informou ".$vezes." para a função '(5)=> Array Invertido'\n";

				break;
/////6
		case 6:
			
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

			$textoHistorico="\n".$dataHora." O usuario ultilizou a função '(6)=>Array Invertido'\n";

			break;
///7
			case 7:
			
			$todasLetras=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
			$qualquer=rand(5,20);
			
			$caracteres=array();
			for ($i=0; $i <=$qualquer ; $i++) { 
				$num=rand(0,25);
				$caracteres[]=$todasLetras[$num];
			}
			$cont=0;
			$vogais=array('a','e','i','o','u');
			$vogal=0;
			for ($i=0; $i < sizeof($caracteres); $i++) { 
				for ($j=0; $j <5 ; $j++) { 
					if($vogais[$j]==$caracteres[$i]){
						$vogal++;
					}
				}
			}
			$consoantes=sizeof($caracteres)-$vogal;
			print("Array com caracteres : ");
			for ($k=0; $k <sizeof($caracteres) ; $k++) { 
				print($caracteres[$k]." ");
			}
			print("\n");
			print("O array tem ".sizeof($caracteres)." posições, e ".$consoantes." consoantes e ".$vogal);
			if($vogal==1){
				print(" vogal\n");
			}else{
				print(" vogais\n");
			}
			print("PARABÉNS!!\n");
			$textoHistorico="\n    O usuario ultilizou a função ' (7)=>Numero de consoantes'\n";

				break;
//8
				case 8:
					
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
				$textoHistorico="\n    O usuario ultilizou a função ' (8)=>Vetores Intercalados'\n";

				break;
			
//fim
}

fwrite($historico, $textoHistorico);
fclose($historico);
$sair=0;
print("\n\n\nQuer continuar na lista? (1)sim (2)não \n");
$sair=fgets(STDIN);
} while ($sair==1);