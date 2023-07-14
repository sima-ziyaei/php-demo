<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-4">
                <h1>Create a word</h1>

                <form method="POST">
                    <div>
                        <label for="word">word:</p>

                            <input id="word" class=" border border-solid border-black" name="word" type="text" value="<?= $_POST['word'] ?? '' ?>" />
                    </div>
                    <p class="text-red-500"><?= $errors['word'] ?></p>
                    <!-- <div>

                        <lable for="translation">translation:</p>
                            <textarea required id="translation" class="border border-solid border-black"
                                name="translation"></textarea>
                    </div> -->
                    <div>

                        <button type="submit">create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require("partials/footer.php"); ?>