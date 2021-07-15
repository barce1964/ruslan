<?php include 'header.php'; ?>

    <div class="container">
        <?php if ($result): ?>
            <p id="blink2" class="msg-send">Your message has been sent</p>
            <?php $usrName = ''; $usrEmail = ''; $usrSbj = ''; $usrMsg = ''; ?>
        <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li id="blink1" class="msg-send"> - <?php echo $error; ?> </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
        
        <div class="wrapper-form">
            <form action="#" method="post" class="form-back">
                <table class="form-tab">
                    <tr><td><label for="name" class="form-label">Your name*</label></td><td><input type="text" id="name" name="u_name" value="<?php echo $usrName; ?>"></td></tr>
                    <tr><td><label for="email" class="form-label">Your email*</label></td><td><input type="email" id="email" name="u_email" value="<?php echo $usrEmail; ?>"></td></tr>
                    <tr><td><label for="sbj" class="form-label">Subject*</label></td><td><input type="text" id="sbj" name="u_sbj" value="<?php echo $usrSbj; ?>"></td></tr>
                    <tr><td class="a-top"><label for="mes" class="top-label">Your message*</label></td><td><textarea id="mes" row="8" col="40" name="u_msg" value="<?php echo $usrMsg; ?>"></textarea></td></tr>
                </table>
                <input type="submit" name="submit" class="btn btn-primary form-btn" value="Send message" />
            </form>
        </div>
    </div>

<?php include 'footer.php'; ?>
