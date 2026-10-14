<?php

/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start') ?>
<main>
    <div class="w-[80%] mx-auto">
        <h3 class="text-white text-3xl p-5 font-bold">Add new category</h3>
        <hr>
        <div class="w-[30%] mt-10">
            <form action="/admin/categories/create" method="post" class="flex flex-col gap-4">
                <div>
                    <label for="name" class="text-white">Name</label>
                    <?php if($session->has('error')){ ?>
                        <p class="text-red-500"><?php echo $session->getFlash('error') ?></p>
                    <?php } ?>
                    <input class="w-[100%] py-2 bg-gray-900 rounded-md text-white px-2" name="name" type="text">
                </div>
                <button type="submit" class="bg-blue-700 p-3 text-white rounded-lg w-[100%] text-xl">Add</button>
            </form>
        </div>
    </div>
</main>
<?php $view->component('end') ?>