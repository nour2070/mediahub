<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Nom" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br><br>
    <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required><br><br>
    <button type="submit">S'inscrire</button>
</form>