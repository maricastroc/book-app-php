<?php
  $book = $data['book'];
?>

<div class="w-full md:w-3/4 lg:w-2/4 mx-auto p-2 border border-neutral-700 rounded-md bg-neutral-900 p-4 text-neutral-300">
  <div class="flex flex-col gap-4 min-[400px]:flex-row max-[400px]:items-center">
    <img src="<?= $book->image_url ?>" alt="<?= $book->title ?>" class="rounded w-36 h-auto opacity-80">
    <div class="h-auto flex flex-col justify-between w-full max-[400px]:text-center">

      <div>
        <a href="/book?id=<?= $book->id ?>" class="line-clamp-2 font-mono hover:text-neutral-100 transition duration-200 font-semibold text-sm">
          <?= $book->title ?> (<?= $book->publication_date ?>)
        </a>
        <div class="text-xs italic my-2">
          <?= $book->author ?>
        </div>
        <div class="text-xs">
          <?php for ($i = 0; $i < $book->ratings; $i++) : ?>
            <i class="ph ph-star text-lg"></i>
          <?php endfor; ?>
        </div>
      </div>

      <section class="text-xs font-mono leading-5 max-[400px]:mt-6">
        <?= $book->description ?>
      </section>
    </div>
  </div>
</div>