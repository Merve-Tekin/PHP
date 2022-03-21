<!DOCTYPE html>
<html>
<head>

<title>Hesap Makinesi</title>

</head>
<body>

<h1><b><u>PHP HESAP MAKİNESİ</u></b></h1>
<br>
<br/>

<P style="color:red;">181307044 Merve TEKİN</P>
<form method="GET" action="#">
	<table>
		<tr>
			<td>
				Birinci Sayı:
			</td>
			<td>
				<input type="text" name="sayi1">
			</td>
		</tr>
		<tr>
			<td>
				İkinci Sayı:
			</td>
			<td>
				<input type="text" name="sayi2">
			</td>
		</tr>
		<tr>
			<td>
				İşlem
			</td>
			<td>
				<select name="islem">
					<option value="topla">Toplama</option>
					<option value="cikar">Çıkartma</option>
					<option value="carp">Çarpma</option>
					<option value="bol">Bölme</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Gönder"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="reset" value="Sıfırla"></td>
		</tr>
	</table>
	
</form>

</body>
</html>
<?php

if ($_GET) {
	$sayi1=$_GET['sayi1'];
	$sayi2=$_GET['sayi2'];
	$islem=$_GET['islem'];


switch ($islem) {
		case 'topla':
			echo "Toplama İşleminin Sonucu : ".($sayi1 + $sayi2);
			break;
		case 'cikar':
			echo "Çıkarma İşleminin Sonucu : ".($sayi1 - $sayi2);
			break;
		case 'carp':
			echo "Çarpma İşleminin Sonucu : ".($sayi1 * $sayi2);
			break;
		case 'bol':
		if ($sayi2 == 0) {
			echo "Bölme İşleminin Sonucu : Tanımsız";
		}else{
			echo "Bölme İşleminin Sonucu : ".($sayi1 / $sayi2);
		}
			
			break;
		
	}

	
}
?>