<div class="contact__page__wrapper">
    <h1>Bienvenue sur notre page de contact !</h1>

    <p>Nous croyons fermement en la préservation de notre ressource la plus précieuse : l'eau. Nous sommes là pour vous aider à comprendre et à réduire votre consommation d'eau annuelle grâce à notre application intuitive.</p>

    <p>Si vous avez des questions, des commentaires ou des suggestions sur l'application ou sur la manière d'économiser l'eau au quotidien, n'hésitez pas à nous contacter en utilisant le formulaire ci-dessous.</p>

    <p>Votre avis compte énormément pour nous, et nous nous engageons à vous répondre dans les meilleurs délais dès réception de votre message. Merci de votre soutien dans notre mission de préserver cette ressource vitale pour les générations futures.</p>

    <form action="" method="POST" novalidate>
        <div class="input__wrapper">
            <label for="email">Votre e-mail *</label>
            <input type="email" name="email" id="email" value = <?= $data['email']; ?>>

                <?php if(isset($_SESSION['email__error'])) : ?>
  
                <div class="info__bulle__contact__form">
                    <?= $_SESSION['email__error'] ?>
                    <?php unset($_SESSION['email__error']); ?>
                </div>

                <?php endif; ?>
      
        </div>
        <div class="input__wrapper">
            <label for="message">Votre message * <br>(1000 caractères maximum)</label>
            <textarea name="message" id="message" maxlength="1000"><?= $data['message'];?></textarea>
  
                <?php if(isset($_SESSION['message__error'])) : ?>
  
                <div class="info__bulle__contact__form">
                    <?= $_SESSION['message__error'] ?>
                    <?php unset($_SESSION['message__error']); ?>
                </div>

                <?php endif; ?>
         
        </div>
        <button type="submit" name="contact">Envoyer</button>
    </form>
</div>

<!-- javascript -->
<script src = "Public/script/contact.js" defer></script>