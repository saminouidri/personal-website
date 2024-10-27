<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Access for portfolio</title>
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h2>Enter Password to Access Portfolio</h2>

        @if ($errors->any())
            <div style="color: red;">
                <strong>{{ $errors->first('password') }}</strong>
            </div>
        @endif

        <form action="{{ route('portfolio.check') }}" method="POST">
            @csrf
            <input type="password" name="password" placeholder="Enter password" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
