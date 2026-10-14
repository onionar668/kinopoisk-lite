<?php

/**
 * @var \App\Kernel\View\ViewInterface $view
 */
?>

<?php $view->component('start') ?>
    <main>
    <div class="w-[80%] mx-auto">
        <h3 class="text-white text-3xl p-5 font-bold">Admin panel</h3>
        <hr>
        <div class="mt-10 flex flex-col gap-10">
            <div class="flex justify-between">
                <h4 class="text-white text-2xl">Movies</h4>
                <button class="bg-blue-800 py-1 px-3 rounded-md text-white"><a href="/admin/movies/create">Add movie</a></button>
            </div>
            <div class="flex justify-between">
                <h4 class="text-white text-2xl">Genre</h4>
                <button class="bg-blue-800 py-1 px-3 rounded-md text-white"><a href="/admin/categories/create">Add genre</a></button>
            </div>
        </div>
    </div>
</main>
<?php $view->component('end') ?>