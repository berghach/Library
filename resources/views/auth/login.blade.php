<x-guest title="Log in">
    <section>
        <div id="login-form" class="item-form">
            <h3>Log in</h3>
            <form method="POST" action="{{}}" id="add-user-form">
                @csrf
                @method('POST')
                <label for="email">Email :</label>
                <input type="email" id="email" required>
                <label for="password">Password :</label>
                <input type="password" min="8" id="password" required>
                <button type="submit">Sign up</button>
            </form>
        </div>
    </section>
</x-guest>