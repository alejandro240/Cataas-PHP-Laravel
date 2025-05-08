<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galería de Gatos</title>
</head>
<body>
    <h1>Galería de Gatos</h1>
    @foreach($cats as $cat)
        <div>
            <img src="https://cataas.com/cat/{{ $cat->_id }}" width="300">
            <p>Mimetype: {{ $cat->mimetype }}</p>
            <p>Tags: {{ implode(', ', $cat->tags ?? []) }}</p>
        </div>
    @endforeach
</body>
</html>
