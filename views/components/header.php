<?php

/**
 * @var \App\Kernel\Auth\AuthInterface $auth */

?>

<header class="flex bg-gray-900 p-4 items-center justify-around">
    <h1 class="text-white font-bold text-3xl flex items-center gap-4"><a href="/">Kinopoisk </a><span class="text-black text-xl bg-yellow-400 py-1 px-4 rounded-sm">Lite</span></h1>
    <nav>
        <ul class="flex gap-3">
            <li><a class="text-white hover:text-gray-400 text-lg" href="/">Home</a></li>
            <li><a class="text-white hover:text-gray-400 text-lg" href="/best">Best</a></li>
            <li><a class="text-white hover:text-gray-400 text-lg" href="/categories">Genre</a></li>
        </ul>
    </nav>
    <?php if ($auth->check()): ?>
        <div class="flex gap-4 items-center">
            <p class="text-white">User: <?php echo $auth->user()->name() ?></p>
            <form action="/logout" method="post">
                <button class="bg-red-500 text-white rounded-md py-1 px-3">Logout</button>
            </form>
            <a href="/admin">Admin</a>
        </div>
    <?php  else : ?>
        <div class="flex gap-3">
            <a class="border-2 border-white rounded-lg cursor-pointer text-white py-1 px-5" href="/login">Login</a>
            <a class="bg-yellow-400 py-1 px-6 rounded-lg cursor-pointer" href="/register">Create account</a>
        </div>
    <?php endif ?>
</header>