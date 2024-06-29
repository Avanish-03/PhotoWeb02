<?php include('navbar.php');

include ('config.php');

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];

    $result = mysqli_query($con,"SELECT * FROM `reg_pw_2` WHERE email= '$email' OR pwd = '$pwd' ");
    if(mysqli_num_rows($result)>0){
        echo "<script> alert('! already exist !'); </script>";
    }else{
        if($pwd == $cpwd ){
            $sql = "INSERT INTO `reg_pw_2` VALUES ('', '$name', '$email', '$pwd');";
            mysqli_query($con,$sql);
            ?>
                
            <?php
            header("location:login.php");
        }else{
            echo "<script>alert('Confirm Password Not Matched !')</script>";
        }
    }
}

?>

<section class="text-gray-600 body-font">
    <form action="" method="post">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center bg-fixed bg-cover" style="background-image: url('../img/bg-about-img.jpg');">
            <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:mx-auto w-full mt-10 md:mt-0">
                <h2 class="text-gray-100 text-3xl font-serif title-font mb-5">Register</h2>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-200">Name</label>
                    <input autocomplete="off" type="name" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-200">Email</label>
                    <input autocomplete="off" type="text" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="pwd" class="leading-7 text-sm text-gray-200">Password</label>
                    <input autocomplete="off" type="password" id="pwd" name="pwd" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="cpwd" class="leading-7 text-sm text-gray-200">Confirm Password</label>
                    <input autocomplete="off" type="password" id="cpwd" name="cpwd" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button name="register" class="text-black border-0 py-2 mx-32 focus:outline-none bg-white rounded text-lg font-bold font-serif">Register</button>
                <p class="text-sm text-gray-200 mt-3">If you already have an account ? <a href="login.php" class="text-sm italic underline text-blue-600">Login</a></p>
            </div>
        </div>
    </form>
</section>

<?php include('footer.php'); ?>