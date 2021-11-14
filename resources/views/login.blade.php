<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
</head>
<body>
<h1>Вход</h1>
<form action="{{ route('user.login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Ваш email</label>
        <input type="text" class="form-control" placeholder="Email" name="email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" class="form-control" placeholder="Пароль" name="password">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" value="1">Войти</button>
    </div>

</form>
</body>
</html>
