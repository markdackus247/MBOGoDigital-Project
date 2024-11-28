<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require '../views/templates/head.php' ?>
</head>

<body>
    <?php require '../views/templates/menu.php' ?>

    <div class="mt-6 mb-16 w-11/12 p-6 space-y-8 sm:p-8 bg-white mx-auto">

        <h2 class="text-2xl font-bold dark:text-white">Python</h2>
        <p class="my-4 font-bold text-gray-700">Hieronder staat een overzicht van alle keuzedelen waaruit je kunt kiezen.</p>

        <div class="w-full">
            <div class="flex border-b border-gray-300 mb-8">
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-3xl focus:outline-none active:bg-gray-200 shadow"
                    onclick="openTab(event, 'tab1')">1. Small challenges</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-3xl focus:outline-none active:bg-gray-200  shadow"
                    onclick="openTab(event, 'tab2')">2. Enquete</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-3xl focus:outline-none active:bg-gray-200  shadow"
                    onclick="openTab(event, 'tab3')">3. Groepen maken</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-3xl focus:outline-none active:bg-gray-200  shadow"
                    onclick="openTab(event, 'tab4')">4. Logformulier</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-3xl focus:outline-none active:bg-gray-200  shadow"
                    onclick="openTab(event, 'tab5')">5. Snake</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-3xl focus:outline-none active:bg-gray-200  shadow"
                    onclick="openTab(event, 'tab6')">6. API met CRUD</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-3xl focus:outline-none active:bg-gray-200  shadow"
                    onclick="openTab(event, 'tab7')">7. Pixalart</button>
            </div>
            <div id="tab1" class="tabcontent p-4">
                <?php require 'challenges-tab1.inc.php' ?>
            </div>
            <div id="tab2" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab2.inc.php' ?>
            </div>
            <div id="tab3" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab3.inc.php' ?>
            </div>
            <div id="tab4" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab4.inc.php' ?>
            </div>
            <div id="tab5" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab5.inc.php' ?>
            </div>
            <div id="tab6" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab6.inc.php' ?>
            </div>
            <div id="tab7" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab7.inc.php' ?>
            </div>
        </div>

        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].classList.add("hidden");
                }
                tablinks = document.getElementsByTagName("button");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].classList.remove("active:bg-gray-200");
                }
                document.getElementById(tabName).classList.remove("hidden");
                evt.currentTarget.classList.add("active:bg-gray-200");
            }
        </script>



        <?php require '../views/templates/footer.php' ?>

    </div>


</body>

</html>