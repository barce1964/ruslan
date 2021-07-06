<?php include 'header.php'; ?>

    <div class="container">
        <?php if ($result): ?>
            <p id="blink2">Вы зарегистрированы!</p>
        <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li id="blink1" class="error-register"> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="wrapper-form">
                <form action="mailer/send.php" method="post" class="form-back">
                    <table class="form-tab">
                        <tr><td><label for="name" class="form-label">Your name*</label></td><td><input type="text" id="name" name="name"></td></tr>
                        <tr><td><label for="email" class="form-label">Your email*</label></td><td><input type="email" id="name" name="email"></td></tr>
                        <tr><td class="a-top"><label for="mes" class="top-label">Your message*</label></td><td><textarea id="mes" row="8" col="40" name="msg"></textarea></td></tr>
                    </table>
                    <button type="submit" class="btn btn-primary form-btn">Send</button>
                </form>
            </div>
        <?php endif; ?>
    </div>

<?php include 'footer.php'; ?>
