<footer>
                    <div class="container">
                        <div class="box">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate quis numquam corrupti? Cumque id dolore unde accusamus labore, optio, modi architecto, corporis necessitatibus dolorum quibusdam. Blanditiis cum voluptate
                                alias nihil!</p>
                            <button class="btn btn-secondary">Read More</button>
                        </div>
                        <div class="box">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Services</a></li>

                            </ul>
                        </div>
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/twitter.svg" alt="">
                                            <span>Whatsapp</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/google.svg" alt="">
                                            <span>Google</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box facebook-api">
                            <h3>Facebook Page</h3>
                            <div class="post-wrap">
                                <div>
                                    <img src="./images/FB_IMG_1620652666565.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./images/FB_IMG_1612530889509.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./images/FB_IMG_1614012387020.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./images/FB_IMG_1619383792775.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./images/FB_IMG_1619962402663.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./images/FB_IMG_1620652666565.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <footer class="copyright">
                    <div>
                        copyright &#169 2020 .All rights reserved by <a href="#" class="text-primary">The Gems Alcove</a>
                    </div>
                    <!-- <div class="move-up">
                        <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
                    </div> -->
                </footer>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/shorten.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        var videoPlayer = document.getElementById("videoPlayer");
        var myVideo = document.getElementById("myVideo");

        function stopVideo() {
            videoPlayer.style.display = "none";
        }

        function playVideo(file) {
            myVideo.src = file;
            videoPlayer.style.display = "block";

        }
    </script>

</body>

</html>