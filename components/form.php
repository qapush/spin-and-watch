
<?php 
    $name = 'Imię';
    $message = 'Wiadomość';
    $consent = 'Wyrażam zgodę na przetwarszanie danych osobowych';
    $send = 'Wyślij';
    $messageSuccess = 'Wiadomość została wysłana ✔';
    $messageFailure = 'Coś poszło nie tak...';

    if($lang['lang'] === 'PL'){
        $name = 'Name';
        $message = 'Message';
        $consent = 'I agree to the processing of personal data';
        $send = 'Send';
        $messageSuccess = 'Message sent successfully ✔';
        $messageFailure = 'Something went wrong...';
    }
?>

<form action="/telegram.php" method="post">
    <input class="form-fields" type="text" name="user_name" placeholder="<?= $name ?>" minlength="2" maxlength="20"
        required>
    <input class="form-fields" type="email" name="user_email" placeholder="Email" required>
    <input class="form-fields mask-phone" type="text" name="user_phone" placeholder="+48 ___ ___ ___" required>
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
    <div class="form__status-message">
        <span class="form__status-message--success"><?= $messageSuccess ?></span>
        <span class="form__status-message--failure"><?= $messageFailure ?></span>
    </div>
</form>