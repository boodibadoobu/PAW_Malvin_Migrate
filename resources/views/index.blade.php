<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Malvin Showroom</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 20px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eaf2f8;
        }
    </style>
</head>
<body>

    <h1>Malvin Showroom</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobil as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->merk }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>Rp {{ number_format($m->harga, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
