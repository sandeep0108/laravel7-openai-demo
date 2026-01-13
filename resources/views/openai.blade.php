<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 OpenAI Demo</title>
</head>
<body>

<h2>Laravel 7 + PHP 7.4 OpenAI Demo</h2>

<form method="POST" action="/openai">
    @csrf
    <textarea name="prompt" rows="6" cols="70" placeholder="Ask something..."></textarea>
    <br><br>
    <button type="submit">Ask OpenAI</button>
</form>

@if(session('result'))
    <hr>
    <h3>Response:</h3>
    <pre>{{ session('result') }}</pre>
@endif

</body>
</html>
