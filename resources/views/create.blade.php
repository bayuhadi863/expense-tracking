<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Expense</title>
</head>
<body>
  <h1>Form Tambah Expense Baru</h1>
  <form action="{{ route('expense.store') }}" method="post">
    @csrf
    <label for="jenis">Jenis</label>
    <select name="jenis" id="jenis">
      <option value="kredit">Kredit</option>
      <option value="debit">Debit</option>
    </select>
    <br>
    <label for="name">Nama</label>
    <input type="text" name="nama">
    <br>
    <label for="jumlah">Jumlah</label>
    <input type="number" name="jumlah">
    <br>
    <button type="submit">Simpan</button>
  </form>
</body>
</html>