<x-layout title="Homepage">
    <main>
        <section id="books">
            <h2>Liste des Livres</h2>
            <ul id="book-list" class="item-list">
                <!-- Liste des livres à afficher dynamiquement -->
                <!-- Exemple d'un livre -->
                <li>
                    <div class="book-info">
                        <h3>Livre 1</h3>
                        <p><strong>Auteur :</strong> Auteur 1</p>
                        <p><strong>Genre :</strong> Fiction</p>
                    </div>
                </li>
            </ul>
            <div id="book-form" class="item-form">
                <h3>Ajouter un Livre</h3>
                <form id="add-book-form">
                    <label for="title">Titre :</label>
                    <input type="text" id="title" required>
                    <label for="author">Auteur :</label>
                    <input type="text" id="author" required>
                    <label for="genre">Genre :</label>
                    <input type="text" id="genre" required>
                    <button type="submit">Ajouter</button>
                </form>
            </div>
        </section>
        <section id="users">
            <h2>Liste des Utilisateurs</h2>
            <ul id="user-list" class="item-list">
                <!-- Liste des utilisateurs à afficher dynamiquement -->
                <!-- Exemple d'un utilisateur -->
                <li>
                    <div class="user-info">
                        <h3>Prénom Nom</h3>
                        <p><strong>Email :</strong> exemple@email.com</p>
                        <p><strong>Téléphone :</strong> 123-456-7890</p>
                    </div>
                </li>
            </ul>
            <div id="user-form" class="item-form">
                <h3>Ajouter un Utilisateur</h3>
                <form id="add-user-form">
                    <label for="firstName">Prénom :</label>
                    <input type="text" id="firstName" required>
                    <label for="lastName">Nom :</label>
                    <input type="text" id="lastName" required>
                    <label for="email">Email :</label>
                    <input type="email" id="email" required>
                    <label for="phone">Téléphone :</label>
                    <input type="tel" id="phone" required>
                    <button type="submit">Ajouter</button>
                </form>
            </div>
        </section>
        <section id="loans">
            <h2>Liste des Emprunts</h2>
            <ul id="loan-list" class="item-list">
                <!-- Liste des emprunts à afficher dynamiquement -->
                <!-- Exemple d'un emprunt -->
                <li>
                    <div class="loan-info">
                        <h3>Livre Emprunté</h3>
                        <p><strong>Emprunteur :</strong> Prénom Nom</p>
                        <p><strong>Date d'emprunt :</strong> 2024-07-15</p>
                        <p><strong>Date de retour prévue :</strong>2024-07-30</p>
                    </div>
                </li>
            </ul>
            <div id="loan-form" class="item-form">
                <h3>Emprunter un Livre</h3>
                <form id="add-loan-form">
                    <label for="selectUser">Sélectionner Utilisateur :</label>
                    <select id="selectUser" required>
                        <!-- Options des utilisateurs à charger dynamiquement -->
                        <option value="1">Prénom Nom</option>
                        <option value="2">Autre Utilisateur</option>
                    </select>
                    <label for="selectBook">Sélectionner Livre :</label>
                    <select id="selectBook" required>
                        <!-- Options des livres à charger dynamiquement -->
                        <option value="1">Livre 1</option>
                        <option value="2">Autre Livre</option>
                    </select>
                    <button type="submit">Emprunter</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>