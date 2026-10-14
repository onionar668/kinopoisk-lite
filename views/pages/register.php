<?php

/** @var \App\Kernel\View\ViewInterface $view */
/** @var \App\Kernel\Session\SessionInterface $session */
?>

<?php $view->component('start') ?>
<main class="w-[80%] mx-auto ">
    <h3 class="text-white text-3xl p-5 font-bold">Register</h3>
    <hr>
    <div class="flex w-[30%] mx-auto flex-col min-h-[60vh] items-center justify-center gap-5">
        <form class="flex w-[100%] mx-auto flex-col min-h-[60vh] items-center justify-center gap-5" action="/register" method="post">
            <div class="w-[100%]">
                <label class="text-white" for="name">Name</label>
                <?php if ($session->has('name')) { ?>
                    <p class="text-red-500">
                        <?php echo $session->getFlash('name')[0] ?>
                    </p>
                <?php } ?>
                <input class="w-[100%] py-2 bg-gray-900 rounded-md text-white px-2" type="text" id="name" name="name">
            </div>
            <div class="w-[100%]">
                <label class="text-white" for="name">Email</label>
                <?php if ($session->has('email')) { ?>
                    <p class="text-red-500">
                        <?php echo $session->getFlash('email')[0] ?>
                    </p>
                <?php } ?>
                <input class="w-[100%] py-2 bg-gray-900 rounded-md text-white px-2" type="email" id="name" name="email">
            </div>
            <div class="flex gap-4">
                <div>
                    <label class="text-white" for="name">Password</label>
                    <?php if ($session->has('password')) { ?>
                        <p class="text-red-500">
                            <?php echo $session->getFlash('password')[0] ?>
                        </p>
                    <?php } ?>
                    <input class="w-[100%] py-2 bg-gray-900 rounded-md text-white px-2" type="text" id="name" name="password">
                </div>
                <div>
                    <label class="text-white" for="name">Confirm</label>
                    <input class="w-[100%] py-2 bg-gray-900 rounded-md text-white px-2" type="text" id="name" name="password_confirmation">
                </div>
            </div>
            <button type="submit" class="bg-blue-700 p-4 text-white rounded-lg w-[100%]">
                Create account
            </button>
        </form>
    </div>
</main>
<?php $view->component('end') ?>