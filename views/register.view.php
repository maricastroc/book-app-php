<?php
  $validations = flash()->get('validations') ?? [];
?>


<form method="POST" class="w-72 gap-3 flex flex-col space-x-2 mt-6 mx-auto justify-center text-center">
<?php if (!empty($validations) && is_array($validations)): ?> 
  <div class="text-red-600 font-mono mb-4">
    <ul>
      <?php foreach ($validations as $validation): ?>
        <li><?= htmlspecialchars($validation) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
<p class="text-neutral-300 font-mono mb-2">join us!</p>
  <input required type="text" name="name" class="text-neutral-300 font-mono border-emerald-700 border-2 rounded-md bg-neutral-900 text-sm focus:outline-none px-2 py-1" placeholder="your name">
  <input required type="email" name="email" class="text-neutral-300 font-mono border-emerald-700 border-2 rounded-md bg-neutral-900 text-sm focus:outline-none px-2 py-1" placeholder="your email">
  <input required type="email" name="confirm_email" class="text-neutral-300 font-mono border-emerald-700 border-2 rounded-md bg-neutral-900 text-sm focus:outline-none px-2 py-1" placeholder="confirm your email">
  <input required type="password" name="password" class="text-neutral-300 font-mono border-emerald-700 border-2 rounded-md bg-neutral-900 text-sm focus:outline-none px-2 py-1" placeholder="your password">
  <div class="flex items-center justify-center mx-auto">
    <button href="/" class="mt-6 p-1 w-24 mx-auto rounded bg-emerald-700 text-neutral-300 font-mono transition duration-200 hover:bg-emerald-600">
      <p class="text-sm">register</p>
    </button>
  </div>
</form>