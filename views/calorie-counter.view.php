<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div>
                <ul>
                    <?php foreach ($foodItems as $foodItem) : ?>
                        <li>
                            <a href="/food-item?id=<?= $foodItem['id'] ?>">
                                <?= htmlspecialchars($foodItem['brand']) . ' ' . htmlspecialchars($foodItem['food_item']) . ' calories: ' . htmlspecialchars($foodItem['calories']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6 mt-6">
                        <div class="mt-5 md:col-span-2 md:mt-0">
                            <form method="POST">
                                <div class="shadow sm:overflow-hidden sm:rounded-md">
                                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                        <div>
                                            <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                                            <div class="mt-1">
                                                <textarea id="brand" name="brand" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="brand name" ><?= $_POST['brand'] ?? '' ?></textarea>
                                                <?php if (isset($errors['brand'])) : ?>
                                                    <p class="text-red-500 text-xs mt-2"><?= $errors['brand'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <label for="food-item" class="block text-sm font-medium text-gray-700">Product</label>
                                            <div class="mt-1">
                                                <textarea id="food_item" name="food_item" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="product" ></textarea>
                                                <?php if (isset($errors['food_item'])) : ?>
                                                    <p class="text-red-500 text-xs mt-2"><?= $errors['food_item'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <label for="calories" class="block text-sm font-medium text-gray-700">Calories</label>
                                            <div class="mt-1">
                                                <textarea id="calories" name="calories" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="calories" ></textarea>
                                                <?php if (isset($errors['calories'])) : ?>
                                                    <p class="text-red-500 text-xs mt-2"><?= $errors['calories'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require('partials/footer.php') ?>