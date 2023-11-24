<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
      <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-4">

        <li>

          <?= htmlspecialchars($word[0]['word']) ?>

        </li>
        <!-- <ol> -->
        <?php if ($translation) : ?>

          <p>translations:</p>
        <?php endif ?>
        <?php foreach ($translation as $trans) : ?>

          <li>
            <?= htmlspecialchars($trans["translation"]) ?>
          </li>
        <?php endforeach ?>
        <!-- </ol> -->
        <form method="POST">
          <div>
            <lable for="translation">translation:</p>
              <textarea required id="translation" class="border border-solid border-black" name="translation"></textarea>
          </div>
          <button type="submit">create</button>
        </form>

        <footer class="mt-6">
          <a class="text-gray-500 border border-gray-500 border-solid px-3 py-2 rounded " href="/word/edit?id=<?= $word[0]['id'] ?>" >Edit</a>
        </footer>

        <form method="POST" class="mt-6">
          <input type="hidden" name="_method" value="DELETE" />
          <input type="hidden" name="id" value="<?= $word['id'] ?>" />
          <button class="text-sm text-red-500">Delete</button>
        </form>


        <a href="/words" class="text-blue-500 hover:underline">back</a>

      </div>
    </div>
  </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>