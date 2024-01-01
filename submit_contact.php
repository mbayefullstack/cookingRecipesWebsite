<link rel="stylesheet" href="submit_contact.css">
<?php require_once './header.php'; ?>
<div class="card-box">
    <h1>Message received and understood</h1>
    <div class="card">
        <?php if (empty($_GET['email']) || !isset($_GET['email'])) : ?>
            <h1>The email must not be empty, the email must be exiter</h1>
            
            <?php else :?>
                <h3>Reminder of your information. </h3>
                <p>This is your E-mail <?php echo $_GET['email'];?></p>
                <p>This is your Message <?php echo $_GET['message'];?></p>
        <?php endif ?>
    </div>
</div>

<?php 