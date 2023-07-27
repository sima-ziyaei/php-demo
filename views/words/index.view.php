<?php require("views/partials/head.php"); ?>
<?php require("views/partials/nav.php"); ?>
<?php require("views/partials/banner.php"); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
      <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-4">
        
          <?php foreach ($words as $word): ?>
            <li>
              <a href="/word?id=<?= $word['id'] ?>" class="text-blue-500 hover:underline">
                <?= htmlspecialchars($word['word']) ?>
              </a>
            </li>
          <?php endforeach; ?>
       


        <a class="mt-8 text-blue-500 hover:underline " href="/words/create">create note</a>
      </div>
    </div>
  </div>
</main>

<?php require("views/partials/footer.php"); ?>