<?php

require_once('../libraries/utils.php');
$css = "liste";

    startHtml($css);
    pageHeader();

    echo
    '<section>
        <h1>Vos messages</h1>

        <a href="utilisateurs.html" class="ajouter">
            <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124.58 119.68"><defs><style>.cls-1{fill:#1572ff;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-1" d="M124.58,55.49v9.25c0,9.79-6.53,16.32-16.32,16.32H83.78v22.3c0,9.79-6.53,16.32-16.32,16.32H56.58c-9.8,0-16.32-6.53-16.32-16.32V81.06l-23.94-.27C6.53,80.79,0,74.26,0,64.46V55.22C0,45.42,6.53,38.9,16.32,38.9H40.26V16.32C40.26,6.53,46.78,0,56.58,0H67.46c9.79,0,16.32,6.53,16.32,16.32V38.9l24.48.27C118.05,39.17,124.58,45.7,124.58,55.49Z"/></g></g></svg>
            <p>Nouvelle conversation</p>
        </a>

        <a href="message.html" class="groupe">
            <img src="../IMAGES/Portrait_Placeholder.png" alt="image-groupe">
            <div class="texte">
                <div class="titre">
                    <h3>Titre</h3>
                    <p>Heure</p>
                </div>
                <p>C\'est le contenu du message, maximum 100 caractères</p>
            </div>
        </a>

        <a href="message.html" class="groupe">
            <img src="../IMAGES/Portrait_Placeholder.png" alt="image-groupe">
            <div class="texte">
                <div class="titre">
                    <h3>Titre</h3>
                    <p>Heure</p>
                </div>
                <p>C\'est le contenu du message, maximum 100 caractères</p>
            </div>
        </a>

        <a href="message.html" class="groupe">
            <img src="../IMAGES/Portrait_Placeholder.png" alt="image-groupe">
            <div class="texte">
                <div class="titre">
                    <h3>Titre</h3>
                    <p>Heure</p>
                </div>
                <p>C\'est le contenu du message, maximum 100 caractères</p>
            </div>
        </a>

        <div class="rien">
            <p>Aucune conversation...</p>
        </div>

    </section>';

pageFooter();
endHtml();



?>