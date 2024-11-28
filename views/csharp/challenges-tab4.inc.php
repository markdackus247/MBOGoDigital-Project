<!-- Tabel met de challengeomschrijving. -->
<div class="max-w-sm w-full lg:max-w-full lg:flex mb-8">
    <div
        class="border border-gray-200 h-auto w-1/2 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
        <img src="/images/pythonchallenge/python_challenge_4.png" alt="Achterliggend leerdoel Challenge 27">
    </div>
    <div
        class="w-full border border-gray-300 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center italic mt-2 mb-8">
                Challenge 4
            </p>
            <div class="text-gray-900 font-bold text-xl mb-2">Ik kan een computer-applicatie maken om een logboek bij te
                houden tijdens een stage of een externe challenge.
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
    Maak gebruik van de module TKinter in python om een Windows-applicatie (of Mac) te maken voor het bijhouden van een
    logboek met stage-uren.
    Gebruik de mockup
    <a href="https://www.figma.com/design/B93QVvl7ajdoXrf2v3zgY0/Log-Application?node-id=0-1&t=4ZieUjQ80Cv4H8l9-1"
        class="underline">Log Message Formulier</a> voor het maken van het logformulier in de applicatie. Je moet
    natuurlijk eerst uitzoeken hoe TKinter werkt. Er is genoeg materiaal hiervoor op internet te vinden, bijvoorbeeld <a
        href="https://youtu.be/ibf5cx221hk?feature=shared" class="underline">"Tkinter Beginner Course - Python GUI
        Development".</a><br />
        Hieronder staat de tabel voor mysql die je kunt gebruiken.

<pre class="bg-gray-100 rounded-b">

    CREATE TABLE LogMessage (
        id INT AUTO_INCREMENT PRIMARY KEY,
        datum DATE NOT NULL,
        start_tijd TIME NOT NULL,
        eind_tijd TIME NOT NULL,
        logbericht TEXT,
        bedrijf VARCHAR(255),
        soort VARCHAR(255),
        werkplezier INT,
        veel_geleerd INT
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
            <td class="border border-gray-300 px-4 py-2"><b>Logformulier</b><br />Ik kan een computer-applicatie maken
                om een logboek bij te
                houden tijdens een stage of een externe challenge.</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center"></td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">6</td>
            <td class="border border-gray-300 px-4 py-2 font-bold text-center">320</td>
        </tr>
    </tbody>
</table>