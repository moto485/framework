<?php require_once View::root('views/master/header.php'); ?>

<form action="ajaxContact.php" id="contactForm" method="post">
    <input type="text" name="fullName">
    <input type="submit">
</form>

<?php
$jsFiles[] = 'tutorials/testing/public/js/AjaxContact.js';
?>

<?php require_once View::root('views/master/footer.php'); ?>
