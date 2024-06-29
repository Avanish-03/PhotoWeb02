<?php include('navbar.php');

include('config.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    // echo "$email";
    // echo "$pwd";

    $result = mysqli_query($con, "SELECT * FROM `reg_pw_2` WHERE email = '$email' OR pwd = '$pwd' ");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($pwd == $row["pwd"]) {
            $_SESSION['login'] = true;
            $_SESSION["id"] = $row["id"];
            header("location:home.php");
        } else {
            echo "Wrong!";
        }
    } else {
        echo "Not Resgistered!";
    }
}

?>

<section class="text-gray-600 body-font">
    <form action="#" method="post">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center bg-fixed bg-cover" style="background-image: url('../img/bg-about-img.jpg');">
            <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:mx-auto w-full mt-10 md:mt-0">
                <h2 class="text-gray-100 text-3xl font-serif title-font mb-5">Login</h2>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-200">Email</label>
                    <input autocomplete="off" type="email" id="email" email="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                </div>
                <div class="relative mb-4">
                    <label for="pwd" class="leading-7 text-sm text-gray-200">Password</label>
                    <input autocomplete="off" type="pwd" id="pwd" name="pwd" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                </div>
                <button class="text-black border-0 py-2 mx-32 focus:outline-none bg-white rounded text-lg font-bold font-serif" name="login">Login</button>
                <p class="text-sm text-gray-200 mt-3">If you don't have an account ? <a href="reg.php" class="text-sm italic underline text-blue-600">Register</a></p>
            </div>
        </div>
    </form>
</section>

<?php include('footer.php'); ?>