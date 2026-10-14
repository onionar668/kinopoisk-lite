<?php

/** @var \App\Kernel\View\ViewInterface $view */
/** @var \App\Kernel\Session\SessionInterface $session */
?>

<?php $view->component('start') ?>
<main class="w-[80%] mx-auto ">
    <h3 class="text-white text-3xl p-5 font-bold">Login</h3>
    <hr>
    <div class="flex w-[30%] mx-auto flex-col min-h-[60vh] items-center justify-center gap-5">
        <form class="flex w-[100%] mx-auto flex-col min-h-[60vh] items-center justify-center gap-5" action="/login" method="post">
            <?php if ($session->has('error')) { ?>
                <p class="text-red-500 w-[100%]">
                    <?php echo $session->getFlash('error') ?>
                </p>
            <?php } ?>
            
            <div class="w-[100%]">
                <label class="text-white" for="name">Email</label>
                <input class="w-[100%] py-2 bg-gray-900 rounded-md text-white px-2" type="email" id="name" name="email">
            </div>
                <div class="w-[100%]">
                    <label class="text-white" for="name">Password</label>
                    <input class="w-[100%] py-2 bg-gray-900 rounded-md text-white px-2" type="text" id="name" name="password">
                </div>
               
            <button type="submit" class="bg-blue-700 p-4 text-white rounded-lg w-[100%]">
                Login
            </button>
        </form>
    </div>
</main>
<?php $view->component('end') ?>