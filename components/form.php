
<?php 
    $name = 'Imię';
    $message = 'Wiadomość';
    $phone = 'Telefon';
    $consent = 'Wyrażam zgodę na przetwarzanie danych osobowych';
    $send = 'Wyślij';
    $messageFailure = 'Coś poszło nie tak...<br>Zachęcamy do kontaktu mailowego lub telefonicznego:';
    $messageSuccess = 'Wiadomość została wysłana pomyślnie.<br>Dziękujemy za zgłoszenie. Skontaktujemy się z Państwem jak najszybciej.';

    if($lang['lang'] === 'PL'){
        $name = 'Name';
        $message = 'Message';
        $consent = 'I agree to the processing of personal data';
        $send = 'Send';
        $phone = 'Phone';
        $messageSuccess = 'Message sent successfully.<br>Thank you for submission. We\'ll get back you as soon as possible.';
        $messageFailure = 'Something went wrong...<br>We encourage you to contact us by e-mail or phone:';
    }
?>

<form action="/telegram.php" method="post">
    <div class="form--wrapper">
        <input class="form-fields" type="text" name="user_name" placeholder="<?= $name ?>" minlength="2" maxlength="20"
            required>
        <input class="form-fields" type="email" name="user_email" placeholder="Email" required>
        <input class="form-fields" type="tel" name="user_phone" placeholder="<?= $phone ?>" required>
        <textarea class="form-fields" name="user_message" placeholder="<?= $message ?>" required></textarea>
        <div class="consent">

            <label>
                <input type="checkbox" name="zgoda" required>
                <?= $consent ?>
            </label>
        </div>
        <div class="btn btn-form">
            <div class="btn-bg"></div>
            <button class="btn-text"><?= $send ?></button>
        </div>
    </div>
    <div class="form__status-message">
    <span class="form__status-message--success"><?= $messageSuccess ?></span>
    <span class="form__status-message--failure">
        <?= $messageFailure ?>
        <a href="mailto:hello@spinandwatch.pl">hello@spinandwatch.pl</a>
        <a href="tel:+48575794017">+48 575 794 017</a>
    </span>
</div>
</form>

