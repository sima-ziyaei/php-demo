<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
      <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-4">

        <li>

          <?=htmlspecialchars($word[0]['word']) ?>

        </li>
        <!-- <ol> -->
          <?php if($trnaslation): ?> 
            
            <p>translations:</p>
         <?php endif ?>
          <?php foreach ($trnaslation as $trans): ?>

            <li>
              <?= htmlspecialchars($trans["translation"]) ?>
            </li>
          <?php endforeach ?>
        <!-- </ol> -->

        <a href="/words" class="text-blue-500 hover:underline">back</a>

      </div>
    </div>
  </div>
</main>

<?php require("partials/footer.php"); ?>