<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1">
            <thead>
            <tr>
                <th>Customer Name</th>
                <th>Phone Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
