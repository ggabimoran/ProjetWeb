<?php
include("Vue.php");
include("../src/User/ProductRepository.php");
include("../src/User/Product.php");


$city = $_POST['city'];
$category = $_POST['category'];

$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');
$connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");

$productRepository = new \User\ProductRepository($connection);
$products = $productRepository->fetchAll();
<<<<<<< HEAD
enTete2("Annonces dans la ville $city");
=======
enTete2("Annonces dans la ville $planet");
>>>>>>> final

?>

<div class="container">
    <table class="table table-bordered table-hover table-striped">
        <thead style="font-weight: bold">
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
        </thead>
        <?php /** @var \User\User $user */
        foreach ($products as $product) : ?>
        <tr>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getDescription() ?></td>
            <td><?php echo $product->getPrice() ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>




<?php
retour_menu();
pied();
?>
