<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dasboard</title>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>Nama</td>
                <td>Email</td></tr>
            </table>

                @foreach ($magang as $d)
                    <table>
                    <tr>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                    </tr>
                    </table>
                @endforeach
    </div>
</body>
</html>