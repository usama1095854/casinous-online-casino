<!-- Footer Section Starts Here -->
<footer class="footer-section bg_img" style="background: url(assets/images/footer/bg.jpg) center;">
    <div class="footer-top">
        <div class="container">
            <div class="footer-wrapper d-flex flex-wrap align-items-center justify-content-md-between justify-content-center">
                <div class="logo mb-3 mb-md-0"><a href="index.php"><img src="assets/images/logo.png" alt="logo"></a></div>
                <ul class="footer-links d-flex flex-wrap justify-content-center">
                    <li><a href="games.php">Games</a></li>
                    <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                    <li><a href="policy.php">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex flex-wrap justify-content-center align-items-center text-center">
                <p class="copyright text-white">Copyrights &copy; 2025 All Rights Reserved by <a href="#0" class=" text--base ms-2">Your Brand Name</a></p>
            </div>
        </div>
    </div>
    <div class="shapes">
        <img src="assets/images/footer/shape.png" alt="footer" class="shape1">
    </div>
</footer>
<!-- Footer Section Ends Here -->


<!-- jQuery library -->
<script src="assets/js/lib/jquery-3.6.0.min.js"></script>
<!-- bootstrap 5 js -->
<script src="assets/js/lib/bootstrap.min.js"></script>

<!-- Pluglin Link -->
<script src="assets/js/lib/slick.min.js"></script>

<!-- main js -->
<script src="assets/js/main.js"></script>


<script>
    const el = document.getElementById("typing-effect");

    if (el) {
        const text = el.textContent.trim();
        let index = 0;
        let isDeleting = false;
        const typingSpeed = 300; // Slowed down
        const backspaceSpeed = 150; // Slowed down
        const delayAfterFullText = 700;

        function type() {
            if (isDeleting) {
                index--;
                el.textContent = text.substring(0, index);
            } else {
                index++;
                el.textContent = text.substring(0, index);
            }

            let delay = isDeleting ? backspaceSpeed : typingSpeed;

            if (!isDeleting && index === text.length) {
                delay = delayAfterFullText;
                isDeleting = true;
            } else if (isDeleting && index === 0) {
                isDeleting = false;
                delay = 2000;
            }

            setTimeout(type, delay);
        }

        el.textContent = ""; // Clear original before typing
        type();
    }
</script>


</body>

</html>