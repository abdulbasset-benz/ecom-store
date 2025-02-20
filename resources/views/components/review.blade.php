<hr class="border-gray-300 my-5">
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center pb-5">
        <h2 class="text-xl font-semibold text-gray-800 mb-4 capitalize">all Reviews</h2>
        <div class="flex items-center space-x-2">
            <button class="bg-gray-300 rounded-full p-2 cursor-pointer hover:bg-gray-400" id="filter-section">
                <x-letsicon-filter class="w-7" />
            </button>
            <button
                class="bg-gray-900 text-slate-50 rounded-full px-3 py-3 cursor-pointer hover:text-indigo-600 hover:bg-indigo-200">
                write a review
            </button>
        </div>
    </div>
    <div class="bg-gray-100 border-2 border-gray-300 rounded-lg p-6">
        <div class="flex justify-between">
            <div class="flex justify-start items-center gap-2">
                <h2 class="text-lg font-semibold text-gray-800">Samantha D.</h2>
                <img class="w-5 h-auto" src="{{ asset('images/icons/tick.svg') }}" alt="">
            </div>
            <span class="cursor-pointer hidden">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12C3 10.8954 3.89543 10 5 10Z"
                        fill="#000000" />
                    <path
                        d="M12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10Z"
                        fill="#000000" />
                    <path
                        d="M21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14C20.1046 14 21 13.1046 21 12Z"
                        fill="#000000" />
                </svg>
            </span>
        </div>

        <div class="flex flex-col gap-2">
            <p class="text-gray-500 mt-2">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quidem.
                Necessitatibus, quia. quibusdam. velit lorem ipsum dolor sit amet consectetur adipisicing elit.
                Doloribus,
                quidem. Necessitatibus, quia. quibusdam. velit lorem ipsum dolor sit amet consectetur adipisicing elit.
                Doloribus"
            </p>
            <h3 class="text-gray-800">
                posted on 20 oct 2022
            </h3>
        </div>


    </div>

</div>
