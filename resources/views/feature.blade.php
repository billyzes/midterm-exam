<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1>Laravel Example</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>FeatureName</th>
                <th>Descriptions</th>
            </tr>
        </thead>
        <tbody>

            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>