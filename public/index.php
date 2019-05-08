<?php
require '../vendor/autoload.php';
include 'Vue.php';

//postgres
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');
$connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");

$userRepository = new \User\UserRepository($connection);
$users = $userRepository->fetchAll();
enTete('Bienvenue sur le site intergalactique de gré à gré!');
?>

<div class="container">
    <table class="table table-bordered table-hover table-striped">
        <thead style="font-weight: bold">
            <td>CityId</td>
            <td>Pseudo</td>
            <td>Adress</td>
        </thead>
        <?php /** @var \User\User $user */
        foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user->getCityId() ?></td>
            <td><?php echo $user->getPseudo() ?></td>
            <td><?php echo $user->getAddress() ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<nav>
    <a href="Connexion.php">Connexion</a>
</nav>

<footer>
	<p>Informations complémentaires :</p>
</footer>
<?php
retour_menu();
pied();
?>
