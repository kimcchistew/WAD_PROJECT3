<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
</head>
<body>
    <h1>Latihan 2</h1>
    <form method="post" action="latihan3.php">
        <label for="angka"> Masukkan Angka:</label>
        <input type="number" class="form-control" name="angka" id="angka" required>
        <br><br><br>
        
        <label for="pilihan">Pilih Operasi:</label>
        <select name="pilihan" id="pilihan">
            <option value="pilihan1">Penambahan</option>
            <option value="pilihan2">Pengurangan</option>
            <option value="pilihan3">Perkalian</option>
            <option value="pilihan3">Pembagian</option>
        </select>
        <br><br><br>

        <button type="submit" class="btn btn-primary" name="Hitung">Hitung</button>
    </form>

</body>
</html>

