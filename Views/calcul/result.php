<div class="result__page__wrapper">
    <h1>Résultats de l'estimation de votre consommation d'eau annuelle</h1>
    <div>
        <img src="Public/medias/images/result.jpg" alt="compteur d'eau">
        <div>
            <p>Félicitations ! Vous avez maintenant accès aux résultats de l'estimation de votre consommation d'eau annuelle.</p>
            
            <div class ="result__wrapper">
                <p>D'après les données que vous avez saisies vous consommez <span><strong><?php if(isset($data['usersLitersYearResult'])): echo $data['usersLitersYearResult']; endif; ?></strong> Litres d'eau par an</span>.</p>
                <p>Soit environ <span><strong><?php if(isset($data['m3Result'])): echo $data['m3Result'] ; endif; ?></strong> mètres cubes par an</span>.</p>
                <p>Cela représente <span><strong><?php if(isset($data['userLitersDayResult'])): echo $data['userLitersDayResult']; endif; ?></strong> Litres par jour et par personne de votre foyer</span>.</p>
            </div>
        </div>
            
            
    </div>
    <div class = "bottom">
        <p>Merci d'avoir utilisé notre application pour calculer votre consommation d'eau annuelle et pour votre engagement envers la préservation de cette ressource précieuse.N'oubliez pas que chaque petite action compte pour préserver notre environnement et notre avenir. Ensemble, nous pouvons faire une différence significative !</p>
            
        <p>Si vous avez des questions ou des commentaires à faire, n'hésitez pas à nous contacter via le formulaire de contact sur notre site web.</p>
            
        <p>Merci pour votre contribution à une utilisation responsable de l'eau !</p>
    </div>
</div>