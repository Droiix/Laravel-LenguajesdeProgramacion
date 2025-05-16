<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <tbody>
        @foreach($proyectos as $project)
        <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->nombre }}</td>
            <td>{{ $project->apellido }}</td>
            <td>{{ $project->created_at }}</td>
        </tr>   
        @endforeach
    </tbody>
</body>
</html>