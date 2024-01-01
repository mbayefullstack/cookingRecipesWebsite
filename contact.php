<?php require_once './header.php'; ?>
<link rel="stylesheet" href="contact.css">

<form action="submit_contact.php" method="GET" class="form-contact">
    <div>
        <h1>Contact Us</h1>
    </div>
    <div class="test1">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Your E-mail">
    </div>
    <div class="test1">
        <label for="message">Your Message</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="button">
        <input type="button" value="Cancel">
        <input type="submit" value="Submit">
    </div>
</form>
