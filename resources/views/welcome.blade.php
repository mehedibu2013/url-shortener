<!DOCTYPE html>
<html>
<head><title>URL Shortener</title></head>
<body>
    <form method="POST" action="/shorten">
        @csrf
        <input type="url" name="url" required placeholder="Paste your URL here">
        <button type="submit">Shorten</button>
    </form>
    @if(session('short_url'))
        <p>Shortened URL: <a href="{{ session('short_url') }}">{{ session('short_url') }}</a></p>
    @endif
</body>
</html>
