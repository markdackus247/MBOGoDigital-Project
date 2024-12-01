<!-- Tabel met de challengeomschrijving. -->
<div class="max-w-sm w-full lg:max-w-full lg:flex mb-8">
    <div class="border border-gray-200 h-auto w-1/2 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
        <img src="/images/pythonchallenge/python_challenge_8.png" alt="OOP in Python">
    </div>
    <div
        class="w-full border border-gray-300 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center italic mt-2 mb-8">
                Challenge 8
            </p>
            <div class="text-gray-900 font-bold text-xl mb-2">Ik kan object georiënteerd programmeren met behulp van python.
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
    Je gaat een authorisatie systeem maken met behulp van object georiënteerd programmeren. Je maakt hierbij gebruik van de users tabel zoals hieronder wordt omschreven. Je maakt een class User en een class Auth aan. Zorg er eerst voor dat je gebruikers kunt beheren voordat je begint met het authorisatie systeem. Je maakt gebruik van Json Web Tokens om de gebruikers te authoriseren. Zorg ervoor dat je de principes van OOP toepast.

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
<h1 class="m-2 text-2xl leading-none text-gray-900">
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
            <td class="border border-gray-300 px-4 py-2"><b>OOP Gebruikersbeheersysteem</b><br />Ik kan een gebruikersbeheersysteem maken met behulp van object georiënteerd programmeren.</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center"></td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">7</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">320</td>
        </tr>
        <tr>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">2.</td>
            <td class="border border-gray-300 px-4 py-2"><b>OOP Authorisatiesysteem</b><br />Ik kan het gebruikersbeheersysteem uitbreiden tot een authorisatie systeem dat gebruik maak van Json Web Tokens. Allemaal geprogrammeerd volgens de principes van OOP.</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center"></td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">8</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">640</td>
        </tr>
    </tbody>
</table>