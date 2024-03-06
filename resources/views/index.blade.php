<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expense Tracking</title>
</head>

<body>
    <h1>Daftar Expense</h1>
    <a href="{{ route('expense.create') }}">Buat Baru</a>
    <table>
      <tr>
        <td>No</td>
        <td>Jenis</td>
        <td>Nama Expense</td>
        <td>Jumlah</td>
        <td>Action</td>
      </tr>
      @foreach ($expenses as $expense )
        <tr>
          <td>{{ $expense[0] }}</td>
          <td>{{ $expense[1] }}</td>
          <td>{{ $expense[2] }}</td>
          <td>{{ $expense[3] }}</td>
          <td>
            <a href="{{ route('expense.show', 1) }}">View</a>
            <a href="{{ route('expense.edit', 1) }}">Edit</a>
            <a href="">Delete</a>
          </td>
        </tr>
      @endforeach
      <tr>
        <td colspan="3">Saldo</td>
        <td>{{ $saldo }}</td>
      </tr>
    </table>
</body>

</html>
