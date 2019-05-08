<?php
include("Vue.php");
include("../src/User/ProductRepository.php")
$planet = $_POST['plt'];
$city = $_POST['cty'];

$productRepository = new \ProductRepository($connection);
$products = $productRepository->fetchAll();
enTete("Annonces dans la ville $city de la planète $planet");

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