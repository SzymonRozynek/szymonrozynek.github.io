<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"  />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Motywowanie oceny copyright Szymon Rozynek</title>
</head>
<center>
<body>
<h1> Motywowanie oceny </h1>
<form action="umiejetnosci.php" method="post">
		<table >z
		<tr><td align="left" width="200">Nazwa sprawdzianu : <td/> <td><input type="text" name="nazwa" /> </td> </tr>
		<tr><td align="left">Klasa : <td/> <td><input type="text" name="klasa" /> </td> </tr>
		<tr><td align="left">Nr ucznia w bazie <td/> <td><input type="int" name="nr" /> </td> </tr>
		<tr><td align="left">Wskazówki do dalszej pracy : <td/> <td> <input type="text" name="wskazowki" /> </td> </tr>
		<tr><td align="left">Ilość punktów <td/> <td><input type="int" name="pkt" /> </td> </tr>
		<tr><td align="left">Maksymalna ilość punktów. <td/> <td><input type="float" name="pktm" /> </td> </tr>
		<tr><td align="left">Ocena : <td/> <td> <input type="text" name="ocena" /> </td> </tr>
		<tr><td align="left">Liczba kopii na jednej stronie: <td/> <td><input type="int" name="kopie" /> </td> </tr>
	    </table>
		<tr><td align="center" coslpan="2" width="50">Wpisz numery zadań poprzedzone spacją! </td> </tr>
		<table >
		<tr><td align="left" width="200">Uczeń:<td/> <td> </td> </tr>
		<tr><td align="left">Robi dobrze!:<td/> <td>  <input type="int" name="dobrze" /> </td> </tr>
		<tr><td align="left">Jeszcze nie potrafi:  <td/> <td><input type="int" name="utrwal" /> </td> </tr>
		<tr><td align="left">Nie umie:   <td/> <td><input type="int" name="niepotrafisz" /> </td> </tr>
		<tr><td align="left">To już wszystko :)<td/> <td align="right"><input type="submit" value="Rysuj tabele" /></td> </tr>
		</table>
	
	</form>
</body>
</center>
</html>
