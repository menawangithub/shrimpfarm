<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panen Data PDF</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #EB5D1E;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #EB5D1E;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Data Info Budidaya</h1>
    <p><strong>Pembudidaya :</strong> {{ session('nama') }}</p>
    <p><strong>Tanggal Unduh:</strong> {{ \Carbon\Carbon::now()->toDateString() }}</p>
    <table>
      <thead>
        <tr>
          <th>ID Budidaya</th>
          <th>Keterangan</th>
          <th>Luas Kolam</th>
          <th>Jumlah Ruas Kolam</th>
        </tr>
      </thead>
      @foreach($budidayaData as $budidayaItem)
            <tr>
                <td>{{ $budidayaItem->custom_id }}</td>

                <td>{{ $budidayaItem->keterangan }}</td>

                <td>{{ $budidayaItem->luas_kolam }}</td>

                <td>{{ $budidayaItem->jumlah_ruas_kolam }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
