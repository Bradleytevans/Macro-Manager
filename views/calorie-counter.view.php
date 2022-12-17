<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
                <?php foreach ($foodItems as $foodItem) : ?>
                    <li>
                        <a href="/food-item?id=<?= $foodItem['id'] ?>">
                           <?= $foodItem['food_item'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
</div>
<?php require('partials/footer.php') ?>