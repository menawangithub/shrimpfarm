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
    <h1>Data Rencana Panen</h1>
    <p><strong>Pembudidaya :</strong> {{ session('nama') }}</p>
    <p><strong>Tanggal Unduh:</strong> {{ \Carbon\Carbon::now()->toDateString() }}</p>
    <table>
      <thead>
        <tr>
          <th>ID Panen</th>
          <th>Jenis Panen</th>
          <th>Perkiraan Panen</th>
          <th>Ukuran Panen</th>
          <th>Tonase Panen</th>
          <th>Usia Panen</th>
          <th>Harapan Harga Jual</th>
          <th>Lokasi Panen</th>
        </tr>
      </thead>
      @foreach($panenData as $panenItem)
            <tr>
                <td>{{ $panenItem->custom_id }}</td>

                <td>{{ $panenItem->jenis_panen }}</td>

                <td>{{\Carbon\Carbon::parse( $panenItem->perkiraan_panen)->translatedFormat('l, d F H:i') }}</td>

                <td>{{ $panenItem->ukuran_panen }}</td>

                <td>{{ $panenItem->tonase_panen }}</td>

                <td>{{ $panenItem->usia_budidaya }}</td>

                <td>{{'Rp ' . number_format($panenItem->harga_harapan, 0, ',', '.') }}</td>

                <td>{{ $panenItem->lokasi_budidaya }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
