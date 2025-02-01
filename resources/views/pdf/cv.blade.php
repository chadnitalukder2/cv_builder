<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $cv->title }} - CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .content {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Chadni talukder Puja</h1>
    <div class="header">{{ $cv->title }}</div>
    <div class="content">
        {!! nl2br(e($cv->content)) !!}
    </div>
</body>
</html>
