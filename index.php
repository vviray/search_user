<?php
if (isset($_SESSION['message'])) { ?>
<h1 style="color:green; text-align: center;
background-color: ghostwhite; border-style: solid;">
    <?php echo $_SESSION['message']; ?>
</h1>

<?php } unset($_SESSION['message']); ?>

<form action="<?php echo htmlspecialchars
($_SERVER['PHP_SELF']); ?>" method="GET">
    <input type="text" name="searchInput" placeholder="Search...">
    <input type="submit" name="searchBtn">
</form>