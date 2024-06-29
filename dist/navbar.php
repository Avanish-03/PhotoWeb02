<?php include("header.php");

$path = $_SERVER['REQUEST_URI'];
$path = explode('/', $path);
$path = end($path);

?>

<section class="md:block hidden">
  <header class="text-gray-600 body-font ">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-16">
        <a href="home.php" class="mr-5 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'home.php') {
                                                                                                              echo "border-b-2 border-black text-black";
                                                                                                            } ?>">Home</a>

        <a href="blog.php" class="mr-5 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'blog.php') {
                                                                                                              echo "border-b-2 border-black text-black";
                                                                                                            } ?>">Blogs</a>

        <a href="service.php" class="mr-5 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'service.php') {
                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                              } ?>">Services</a>

        <a href="price.php" class="mr-5 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'price.php') {
                                                                                                              echo "border-b-2 border-black text-black";
                                                                                                            } ?>">Price</a>

        <a href="about.php" class="mr-5 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black  <?php if ($path == 'about.php') {
                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                              } ?>">About</a>

        <a href="feedback.php" class="mr-5 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'feedback.php') {
                                                                                                                  echo "border-b-2 border-black text-black";
                                                                                                                } ?>">Feedback</a>

      </nav>

      <a href="home.php" class="cursor-pointer flex justify-center items-center">
        <img src="../img/camera-logo.png" alt="" class="h-10">
        <span class="ml-3 text-2xl">PhotoWeb</span>
      </a>
      <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">

        <button id="dropdbtn" data-dropdown-triggeer="hover" data-dropdown-toggle="drophover" class="inline-flex items-center bg-gray-900 border-2 border-black py-1 px-3 focus:outline-none hover:bg-white hover:text-black font-bold rounded text-white mt-4 md:mt-0">Be A Partner &nbsp;▼
        </button>
        <div id="drophover" class="hidden z-30">
          <ul class="bg-gray-900 rounded" aria-labelledby="dropdbtn">
            <li class="hover:bg-white hover:text-black text-white w-full px-5 py-1 rounded font-bold"><a href="reg.php">Registration</a></li>
            <li class="hover:bg-white hover:text-black text-white w-full px-5 py-1 rounded font-bold"><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
</section>