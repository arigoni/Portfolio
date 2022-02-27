<!-- Fonction PHP -->
<?php 
    function auto_copyright($startYear = null) {
        $thisYear = date('Y');  
        if (!is_numeric($startYear)) {
            $year = $thisYear; 
        } else {
            $year = intval($startYear);
        }
        if ($year == $thisYear || $year > $thisYear) { 
            echo "© $thisYear"; 
        } else {
            echo "© $year–$thisYear"; 
        }   
    } 
?>
<footer class="pb-1">
    <!-- Menu footer -->
    <div class="d-flex justify-content-around py-3 NavFooter">
        <!-- Coordonnées -->
        <div class="col-3">
            <h3 class="text-uppercase text-primary">Coordonnées</h3>
            <!--<h3 class="py-1"><i class="fa-solid fa-location-dot"></i> <a href="#" title="Adresse">19 rue des Aiguisettes,<br />88420 Moyenmoutier</a></h3>-->
            <h3 class="pb-1"><i class="fa-solid fa-phone"></i> <a href="tel:+33782088698" title="Téléphone">+33 7 82 08 86 98</a></h3>
            <h3><i class="fa-solid fa-envelope"></i> <a href="mailto:contact@arigoni-kevin.fr" title="Mail">contact@arigoni-kevin.fr</a></h3>
            <h3><i class="fa-solid fa-link"></i> <a href="https://www.arigoni-kevin.fr/" title="Site web">https://www.arigoni-kevin.fr</a></h3>
        </div>
        <!-- Informations sur moi -->
        <div class="col-3">
            <h3 class="text-uppercase text-primary">Qui suis-je ?</h3>
            <p>Diplômé Bac+2 en développement web, j’évolue dans ce milieu depuis plusieurs années<!-- en indépendant -->.</p>
            <p>Passionné par les technologies, je mets mes compétences au service de vos besoins dans divers domaines.</p>
        </div>
        <!-- Passions -->
        <div class="col-3">
            <h3 class="text-uppercase text-primary">Mes passions</h3>
            <p>Les nouvelles technologies, les jeux vidéo, l'astronomie, la randonnée et les échecs.</p>
            <p>Les sports de combat dont le karaté dont je suis ceinture marron deuxième dan.</p>
        </div>
    </div>
    <!-- Copyright -->
    <p class="text-center pt-3">
        <?php auto_copyright();?> | Arigoni Kevin - Développeur web <!-- 
        - <a href="mentions.php" title="Mentions légales">Mentions légales</a> -->
    </p>
</footer>