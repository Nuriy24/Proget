<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form method="POST" action="{{ route('register') }}">
        @vite ('resources/css/app.css')
        @csrf
        <input type="text" name="name" placeholder="Имя" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Пароль" required><br>
        <input type="password" name="password_confirmation" placeholder="Подтверждение пароля" required><br>
        <button type="submit">Зарегистрироваться</button>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
</html>
<label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
    
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" required><br>
    
    <button type="submit">Зарегистрироваться</button>
</form>
