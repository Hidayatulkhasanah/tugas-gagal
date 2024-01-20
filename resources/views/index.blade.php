<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>Nama</td>
                <td>Email</td></tr>

                @foreach ($magang as $d)
                    <tr>
                        <td>{{ $magang->name }}</td>
                        <td>{{ $magang->email }}</td>
                    </tr>
                @endforeach
        </table>
    </div>
</body>
</html>