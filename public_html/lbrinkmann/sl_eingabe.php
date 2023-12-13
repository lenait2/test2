<!DOCTYPE html>
<html>
<head>
    <title>Studienleistung Eingabe</title>
    <link rel="stylesheet" href="style_sl.css">
    <meta charset="UTF-8">
    <meta name="author" content="Lena Brinkmann">
    <meta name="description" content="Studienleistung Eingabefeld StudyStats">
</head>
<body>
<header>
	<a href="../index.php"><img src="../bilder/backroundundlogo.png" alt="Logo Icon" class="logostamp"></a>
    <nav>
        <ul>            
            <li>
                <a href="../hannah/finanzen_ausgabe.php">Finanzen</a>
                <ul class="dropdown">
                    <li><a href="../hannah/finanzen_eingabe.php">Eingabe</a></li>
                    <li><a href="../hannah/finanzen_ausgabe.php">Ausgabe</a></li>
                </ul>
            </li>
            <li>
                <a href="sl_ausgabe.php">Studienleistung</a>
                <ul class="dropdown">
                    <li><a href="sl_eingabe.php">Eingabe</a></li>
                    <li><a href="sl_ausgabe.php">Ausgabe</a></li>
                </ul>
            </li>
            <li>
                <a href="../cord/aw_ausgabe.php">Arbeitsweg</a>
                <ul class="dropdown">
                    <li><a href="../cord/aw_eingabe.php">Eingabe</a></li>
                    <li><a href="../cord/aw_ausgabe.php">Ausgabe</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<div class="content">
    <p><b><span class="umbau-text">Umbau!</span></b><br><br><br>
    Studienleistung eingeben </p>
    
     <form action="" method="post">
		<label for="kurs">Kurs:</label>
		<select id="kurs" name="kurs">
			<option value="1">Option 1</option>
			<option value="2">Option 2</option>
			<option value="3">Option 3</option>     
		</select><br><br>
		
		<label for="datum">Datum:</label>
		<input type="date" id="datum" name="datum"><br><br>

		<label for="art der leistung">Art der Leistung :</label>
		<input type="text" id="art der leistung" name="art der leistung"><br><br>
		
		<label for="selbsteinschätzung">Selbsteinschätzung :</label>
		<input type="text" id="selbsteinschätzung" name="selbsteinschätzung"><br><br>

		<label for="dauer">Dauer:</label>
		<input type="number" id="dauer" name="dauer"><br><br>

		<button type="submit">Absenden</button>
	</form>

</div>

<div class="green-box"></div>
<div class="streifenl"></div>
<div class="streifenr"></div>

</body>
</html>