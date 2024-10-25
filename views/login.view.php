<?php
$validations = flash()->get('validations') ?? [];

$message = flash()->get('successfully_registered');
?>

<form method="POST" class="w-72 gap-3 flex flex-col space-x-2 mt-6 mx-auto justify-center text-center">
  <?php if (!empty($message)) : ?>
    <p class="text-emerald-600 font-mono mb-2">
      <?= htmlspecialchars($message) ?>
    </p>
  <?php endif; ?>

  <?php if (!empty($validations) && is_array($validations)) : ?>
    <div class="text-red-600 font-mono mb-4">
      <ul>
        <?php foreach ($validations as $validation) : ?>
          <li><?= htmlspecialchars($validation) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>
  <p class="text-neutral-300 font-mono mb-2">hello, user!</p>
  <input required type="email" name="email" class="text-neutral-300 font-mono border-emerald-700 border-2 rounded-md bg-neutral-900 text-sm focus:outline-none px-2 py-1" placeholder="your email">
  <input required type="password" name="password" class="text-neutral-300 font-mono border-emerald-700 border-2 rounded-md bg-neutral-900 text-sm focus:outline-none px-2 py-1" placeholder="your password">
  <div class="flex items-center justify-center mx-auto">
    <a href="/register" class="p-1 w-64 mx-auto bg-transparent text-neutral-300 font-mono transition duration-200 hover:text-emerald-600">
      <p class="text-xs hover:text-emerald-600">still don't have an account? click here to sign up!</p>
    </a>
  </div>
  <div class="flex items-center justify-center mx-auto">
    <button class="mt-4 p-1 w-24 mx-auto rounded bg-emerald-700 text-neutral-300 font-mono transition duration-200 hover:bg-emerald-600">
      <p class="text-sm">login</p>
    </button>
  </div>
</form>