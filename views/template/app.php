<?php
  $session = flash()->persist('auth');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <title>Book Wise</title>
</head>

<body class="bg-neutral-900 text-neutral-100 mx-4 sm:mx-16 max-w-screen-xl">
  <header>
    <nav class="border-b-neutral-600 border-b mx-auto my-2 sm:max-w-screen-xl bg-neutral-900 flex flex-col sm:flex-row justify-center sm:justify-between items-center gap-2 py-6">
      <div class="md:w-32 font-bold text-emerald-500 text-xl tracking-wide font-mono">
        book wise
      </div>
      <ul class="text-emerald-500 flex space-x-4">
        <li class="hover:text-emerald-300 transition duration-200 font-mono"><a href="/">explore</a></li>
        <li> | </li>
        <li class="hover:text-emerald-300 transition duration-200 ease-in-out font-mono"><a href="/my-books">my books</a></li>
      </ul>
      <ul class="md:w-32 text-emerald-500 flex items-end justify-end gap-2">
        <?php if (strlen(($session)) != 0): ?>
          <li class="font-mono">
            <a href="/logout" class="flex items-center gap-2 hover:text-emerald-300 transition duration-200">
              <i class="ph ph-sign-in text-xl"></i>
              logout
            </a>
          </li>
        <?php else: ?>
          <li class="font-mono">
            <a href="/login" class="flex items-center gap-2 hover:text-emerald-300 transition duration-200">
              <i class="ph ph-sign-in text-xl"></i>
              login
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <main class=" space-y-6 py-4">
    <?php require "views/{$view}.view.php"; ?>
  </main>
</body>

</html>