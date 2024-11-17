<!-- Tabel met de challengeomschrijving. -->
<div class="max-w-sm w-full lg:max-w-full lg:flex mb-8">
    <div
        class="border border-gray-200 h-auto w-1/2 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
        <img src="/images/pythonchallenge/python_challenge_6.png" alt="Achterliggend leerdoel Challenge 27">
    </div>
    <div
        class="w-full border border-gray-300 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center italic mt-2 mb-8">
                Challenge 6
            </p>
            <div class="text-gray-900 font-bold text-xl mb-2">Ik kan een REST API maken voor het beheren en autoriseren
                van
                gebruikers.
            </div>
            <p class="text-gray-700 text-base"></p>
        </div>
        <div class="flex items-center">
            <div class="text-sm">
                <p class="text-gray-900 leading-none">Vista College</p>
                <p class="text-gray-600">Software Developer (25904 en 25998)</p>
            </div>
        </div>
    </div>
</div>


<!-- Omschrijving van de challenge -->
<h1 class="m-2 text-2xl leading-none text-gray-900">
    Omschrijving
</h1>
<p class="text-gray-900 text-lg m-4 mb-8">
    Installeer de module flask met behulp van pip zodat je deze in python kunt gebruiken. Hoogstwaarschijnlijk moet je
    later nog veel meer modules toevoegen. Maak een REST API voor het beheren van gebruikers. De API moet gebruikers
    kunnen toevoegen (POST), lezen (GET), bewerken (PUT) en verwijderen (DELETE). Zoek eerst naar geschikt
    studiemateriaal om een REST API te kunnen maken in Python. Hieronder staat de tabel je kunt gebruiken in je REST
    API.
<pre class="bg-gray-100 rounded-b">

    CREATE TABLE users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        role VARCHAR(50) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    </pre>
</p>


<!-- Tabel met de scores van deze challenge -->
<h1 class="m-2 text-2xl leading-none text-gray-900 mt-8">
    Score van deze challenge
</h1>
<table class="table-auto w-full border-collapse border border-gray-400 mb-8">
    <thead>
        <tr>
            <th class="border bg-gray-300 border-gray-300 px-4 py-2 w-1/8">Nr</th>
            <th class="border bg-gray-300 border-gray-300 px-4 py-2 w-5/8">Omschrijving</th>
            <th class="border bg-gray-300 border-gray-300 px-4 py-2 w-5/8">Badge</th>
            <th class="border bg-gray-300 border-gray-300 px-4 py-2 w-1/8">Aantal sterren</th>
            <th class="border bg-gray-300 border-gray-300 px-4 py-2 w-1/8">Aantal punten</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">1.</td>
            <td class="border border-gray-300 px-4 py-2"><b>REST API</b><br />Ik kan een REST API maken voor het beheren
                en autoriseren van
                gebruikers.</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center"></td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">5</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">160</td>
        </tr>
        <tr>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">2.</td>
            <td class="border border-gray-300 px-4 py-2"><b>REST API met Authorisatie</b><br />Ik kan deze REST API
                aanpassen zodat deze gebruikt kan worden voor de authorisatie van gebruikers.</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center"><img width="100px"
                    src="/images/pythonchallenge/badges/master_of_authorization.jpg"
                    alt="BADGE: Master of Authorization"></td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">6</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">320</td>
        </tr>
        <tr>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">3.</td>
            <td class="border border-gray-300 px-4 py-2"><b>REST API met Authorisatie in MVC</b><br />Ik kan deze REST
                API zodanig aanpassen zodat de bestanden zijn geordend volgens het MVC-model (Model View Controller).
            </td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center"><img width="100px"
                    src="/images/pythonchallenge/badges/king_of_the_api.jpg" alt="BADGE: King of the API"></td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">7</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">640</td>
        </tr>
    </tbody>
</table>