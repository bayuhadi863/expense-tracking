<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Expense</title>
</head>
<body>
  <h1>Form Edit Expense Baru</h1>
  <form action="{{ route('expense.update', 1) }}" method="post">
    @csrf
    @method('PUT')
    <label for="jenis">Jenis</label>
    <select name="jenis" id="jenis">
      <option value="kredit" @if ($expense[1] == 'kredit') selected @endif>Kredit</option>
      <option value="debit" @if ($expense[1] == 'debit') selected @endif>Debit</option>
    </select>
    <br>
    <label for="name">Nama</label>
    <input type="text" name="nama" value="{{ $expense[2] }}">
    <br>
    <label for="jumlah">Jumlah</label>
    <input type="number" name="jumlah" value="{{ $expense[3] }}">
    <br>
    <button type="submit">Update</button>
  </form>
</body>
</html>