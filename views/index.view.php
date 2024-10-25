<?php
$name = flash()->persist('auth') ?? '';
?>

<div class="w-full flex flex-col">
<p class="text-neutral-300 font-mono">hello, <?= $name ?? 'stranger' ?>!</p>
  <form class="w-full flex space-x-2 mt-6 mx-auto justify-center lg:justify-start lg:mx-0">
    <input type="text" name="search" class="border-emerald-700 border-2 rounded-md bg-neutral-900 text-sm focus:outline-none px-2 py-1" value="<?= htmlspecialchars($data['search'] ?? '') ?>" placeholder="search...">
    <button type="submit">
      <i class="ph ph-magnifying-glass text-xl text-emerald-600"></i>
    </button>
  </form>
</div>

<section class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pb-12">
  <?php foreach ($data['books'] as $book): ?>

    <div class="w-full p-2 border border-neutral-700 rounded-md bg-neutral-900 p-4 text-neutral-300">
    <div class="flex flex-col gap-4 min-[400px]:flex-row max-[400px]:items-center">
        <img src="<?= $book->image_url ?>" alt="<?= $book->title ?>" class="rounded w-36 h-auto opacity-80">
        <div class="h-auto flex flex-col justify-between w-full max-[400px]:text-center">

          <div>
            <a href="/book?id=<?= $book->id ?>" class="line-clamp-3 font-mono hover:text-neutral-100 transition duration-200 font-semibold text-sm">
              <?= $book->title ?> (<?= $book->publication_date ?>)
            </a>
            <div class="text-xs italic my-2">
              <?= $book->author ?>
            </div>
            <div class="text-xs">
              <?php for ($i = 0; $i < $book->ratings; $i++): ?>
                <i class="ph ph-star text-lg"></i>
              <?php endfor; ?>
            </div>
          </div>

          <section class="text-xs font-mono max-[400px]:mt-6">
            <?= $book->description ?>
          </section>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>