<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-4">
                <h1>Edit word</h1>

                <form method="POST" action="/word">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="id" value="<?= $word[0]['id'] ?>" />
                    <div>
                        <label for="word">word:</p>
                        <input id="word" class=" border border-solid border-black" name="word" type="text" value="<?= $word[0]['word'] ?>" />
                    </div>
                    <p class="text-red-500"><?= $errors['word'] ?></p>
                  
                    <div class="flex gap-6">
                        <a href="/words">Cancel</a>
                        <button type="submit">Update</button>
                    </div>

                    <a href="/words" class="text-blue-500 hover:underline">back</a>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>