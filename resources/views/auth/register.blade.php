<x-guest title="Sign up">
    <section>
        <div id="signup-form" class="item-form">
            <h3>Sign up</h3>
            <form method="POST" action="{{route('register')}}" id="add-user-form">
                @csrf
                @method('POST')
                <label for="first_name">First name :</label>
                <input type="text" id="first_name" required>
                <label for="last_name">Last name :</label>
                <input type="text" id="last_name" required>
                <label for="email">Email :</label>
                <input type="email" id="email" required>
                <label for="phone">Phone number :</label>
                <input type="tel" id="phone" required>
                <label for="password">Password :</label>
                <input type="password" min="8" id="password" required>
                <label for="password_confirmation">Confirme password :</label>
                <input type="password" min="8" id="password_confirmation" required>
                <button type="submit">Sign up</button>
            </form>
        </div>
        <a href="{{route('login')}}"></a>
    </section>
</x-guest>