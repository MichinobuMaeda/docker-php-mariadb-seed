<?php
$host = getenv('PHP_DB_HOST', 'not setted');
$dbname = getenv('PHP_DB_NAME', 'not setted');
$user = getenv('PHP_DB_USER', 'not setted');
$pass = getenv('PHP_DB_PASSWORD', 'not setted');
?>
<p>PHP_DB_HOST: <?php echo $host; ?></p>
<p>PHP_DB_NAME: <?php echo $dbname; ?></p>
<p>PHP_DB_USER: <?php echo $user; ?></p>
<p>PHP_DB_PASSWORD: <?php echo $pass; ?></p>
<?php
try {
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
    $stmt = $dbh->query('SHOW TABLES');
    echo '<p>' . $dbname . ' has ' . $stmt->rowCount() . ' tables.</p>';
    $dbh = null;
} catch (PDOException $e) {
    print '<p>Error!: ' . $e->getMessage() . '</p>';
    die();
}
