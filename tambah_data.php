<html>
<head>
<Title>Form Input Data Pasien</title>
</head>
<body>
<center>
<form action="proses_simpan.php" method="POST">
<table border="0">
<tr>
<td colspan="2" width="400" align="center">
<h2>FORM INPUT DATA PASIEN</h2>
</td>
</tr>

<tr>
<td width="150">No Pasien</td>
<td width="250"><input type="text" name="no" value="">
</tr>



<tr>
<td width="150">Nama Pasien</td>
<td width="250"><input type="text" name="namamapasien" value="">
</tr>

<tr>
<td width="150">Jekel</td>
<td width="250">
<select class="form-control" name="jekel" id="jekel">
<option value="">===Jenis Kelamin===</option>
<option value="Pria">Pria</option>
<option value="Wanita">Wanita</option>
</select>
</td>
</tr>

<tr>
<td width="150">Keluhan</td>
<td width="250"><input type="text" name="keluhan" value="">
</tr>

<tr>
<td width="150">Diagnosa</td>
<td width="250"><input type="text" name="diagnosa" value="">
</tr>

<tr>
<td width="150">Resep Obat</td>
<td width="250"><input type="text" name="resepobat" value="">
</tr>

<tr>
<td colspan="2" width="400" align="center">
<input type="submit" value="Simpan">
</td>
</tr>

</table>
</center>
</body>
</html>