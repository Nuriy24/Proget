<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Имя">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Пароль">
    <input type="password" name="password_confirmation" placeholder="Подтверждение пароля">
    <button type="submit">Зарегистрироваться</button>
</form>
