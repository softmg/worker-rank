<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Worker rank</title>
</head>
<body>
    <h1>Worker rank</h1>
    <div class="workers">
        @foreach ($workers as $worker)
            <li>{{ $worker }}</li>
        @endforeach
    </div>
</body>
</html>
