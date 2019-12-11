<html>
<head>
<title> Esport </title>
<style>
#players {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#players td, #players th {
  border: 1px solid #ddd;
  padding: 8px;
}

#players tr:nth-child(even){background-color: #f2f2f2;}

#players tr:hover {background-color: #ddd;}

#players th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<?php
$connection = mysqli_connect("localhost", "root", "") or die("nem sikerült kapcsolódni az adatbázishoz") ; 
mysqli_select_db($connection, "esport") or die("nem sikerült kiválasztani az adatbázist");
mysqli_query($connection, "SET NAMES 'utf8'");
$query = mysqli_query($connection, "SELECT * FROM esport") ; 

mysqli_close($connection); 
?>

<table id="players">
  <tr>
    <th>VersenyzesID</th>
    <th>Jatek</th>
    <th>Datum</th>
	<th>Verseny</th>
	<th>URL</th>
	<th>Csapatnev</th>
	<th>Tag</th>
	<th>IGN</th>
	<th>Kozvetites</th>
	<th>Eredmeny</th>
	<th>Bejegyzestette</th>
  </tr>
  
<?php
while($row = mysqli_fetch_array($query)){   
echo "<tr>";
echo "<td>" . $row['VersenyzesID'] . "</td>";
echo "<td>" . $row['Jatek'] . "</td>"; 
echo "<td>" . $row['Datum'] . "</td>"; 
echo "<td>" . $row['Verseny'] . "</td>";
echo "<td>" . "<a href='" . $row['URL'] . "'>" . $row['URL'] . "</a>" . "</td>";
echo "<td>" . $row['Csapatnev'] . "</td>"; 
echo "<td>" . $row['Tag'] . "</td>"; 
echo "<td>" . $row['IGN'] . "</td>";
echo "<td>" . "<a href='" . $row['Kozvetites'] . "'>" . $row['Kozvetites'] . "</a>" . "</td>";
echo "<td>" . $row['Eredmeny'] . "</td>"; 
echo "<td>" . $row['Bejegyzesttette'] . "</td>"; 
echo "</tr>";  

}
?>
</table>
</body>
</html>