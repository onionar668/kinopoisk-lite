<?php

/**
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>
<main>
    <div class="w-[80%] mx-auto">
        <h3 class="text-white text-3xl p-5 font-bold">New movies</h3>
        <hr>
        <div class="mt-10">
            <div class="w-[300px] border-2 border-transparent rounded-lg hover:border-amber-500">
                <a href="/movie">
                    <img class="w-[300px] h-[200px] rounded-t-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaPXFk9SXfXlQR5h-an35yduCVa228krJySrL_KIqc4pwiAdTiNUVCC9K5&s=10" alt="">
                    <div class="bg-gray-900 w-[296px] rounded-b-md p-4 flex flex-col gap-4 ">
                        <h5 class="text-white text-xl">Avengers</h5>
                        <p class="text-white">Rating <span class="text-black bg-yellow-500 rounded-lg px-2">7.9</span></p>
                        <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, placeat!</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<?php $view->component('end') ?>