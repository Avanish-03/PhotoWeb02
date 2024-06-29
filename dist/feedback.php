<?php include("navbar.php"); ?>

<section class="text-gray-600 body-font ">
    <div class="bg-fixed bg-cover" style="background-image: url('../img/bg-about-img.jpg');">
        <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0  z-10 shadow-md">
                <h2 class="text-gray-900 text-3xl mb-1 font-serif title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">If you have any qurey then you can message me !</p>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-black border-2 py-2 px-6 focus:outline-none hover:bg-green-600 hover:text-black rounded text-lg">Send</button>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>