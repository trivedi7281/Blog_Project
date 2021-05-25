<?php include "support/header.php" ?>
<!-- Site content -->
<section class="blog-section mt-1r">
<div class="site-content single_container">
<div class="posts">
    <h1 class="section-heading2"> <a href="#">Why should boys have all the Fun!!!!!!!!</a></h1>
    <div class="post-content">
        <div class="post-image">
            <div>
                <img src="./images/FB_IMG_1619383877840.jpg" class="img" alt="Blog1">
            </div>
            <div class="post-info2 flex">
                <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>
                <span><img src="./icons/026-comment.svg" alt=""><span> 2 Comments</span></span>

            </div>
        </div>
        <div class="post-title">
            <div class="popular-tags ">
                <h2>Related Tags</h2>
                <div class="tags">
                    <a href="#" class="tag">Software</a>
                    <a href="#" class="tag">Cooking</a>
                    <a href="#" class="tag">India</a>
                    <a href="#" class="tag">Limited</a>
                    <a href="#" class="tag">Tools</a>
                    <a href="#" class="tag">Technology</a>
                    <a href="#" class="tag">Automation</a>
                    <a href="#" class="tag">Maven</a>
                    <a href="#" class="tag">Cucumber</a>
                    <a href="#" class="tag">Framework</a>
                </div>
            </div>
            <br>
            <hr>
            <p class="single_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci natus illum dolorum odit officiis consectetur quas porro ducimus incidunt, perferendis rerum veritatis nemo voluptates distinctio, beatae quaerat laudantium
                expedita illo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati saepe cum quis voluptatum quam placeat aliquid dolores itaque odio, ab maxime quas debitis perferendis sapiente? Odit, blanditiis?
                Labore, accusamus animi ea qui quidem omnis quisquam minima. At accusantium sit perferendis iste a officia ea, minus repudiandae dolorum ipsum vero dolor quae autem odio voluptatum ut magni, recusandae voluptates
                nesciunt fuga. Voluptatum, provident eum itaque rem consequuntur sit sunt nam praesentium fuga! Explicabo consequatur a sapiente perferendis quod vel similique quasi. Eaque aut eum nemo esse quia omnis nam ipsam!
                Aspernatur labore libero nemo quod porro dolorum. Fuga, deleniti itaque explicabo, blanditiis delectus quasi provident nulla rerum obcaecati excepturi repudiandae? Quos eligendi nam iste officia aliquid ipsa aspernatur
                delectus quam provident quas debitis, vero fuga porro inventore. Iste, assumenda repellat? Cupiditate illum quam, voluptates reiciendis necessitatibus magnam accusamus, impedit quia tenetur perferendis consectetur,
                esse ab! Harum cumque numquam accusantium doloribus corporis veniam assumenda, minima incidunt ducimus placeat ea ratione natus, molestias praesentium expedita blanditiis dolorem hic voluptate beatae in. Odio iure
                laboriosam et totam consectetur. Facere in ipsam minima voluptates neque omnis maiores quasi minus, veniam quisquam nam quibusdam aperiam reprehenderit dolor provident eius quos modi, praesentium explicabo doloribus
                delectus voluptas? Illum ex dolorem natus vitae repudiandae! Beatae, saepe, obcaecati maxime voluptate excepturi aperiam, quibusdam doloribus aspernatur modi itaque in harum? Corrupti cum praesentium, odio omnis
                voluptate similique. Dolorum, hic. Nostrum reprehenderit commodi accusantium doloribus quaerat ex dolorum unde, ad minus quae labore eius facilis illum saepe reiciendis dolores recusandae officia. Quod nesciunt
                quae assumenda, aspernatur tempora facilis ipsa quis repellendus ipsam incidunt vero eaque, culpa doloribus natus modi animi, adipisci voluptatibus similique? Ducimus repudiandae quasi veniam, iusto numquam nobis
                corrupti deserunt explicabo et dolore tempore amet? Obcaecati labore hic earum, debitis quasi necessitatibus rem sit beatae dolorum dolorem, deserunt quis a dolores nemo, quaerat voluptates distinctio. Unde dolorem
                ipsum, adipisci minima animi earum sunt, omnis eligendi voluptate natus praesentium tempora facere voluptatem, eos odio optio dolore numquam? Molestias error atque dignissimos illo voluptate voluptas totam dolor
                eum ipsa quas ipsum ipsam quisquam quis quae facere delectus repellendus tenetur quibusdam fugiat, nemo, ducimus voluptatibus a consequatur? Laborum, repudiandae eveniet. Quisquam quibusdam dolores est laborum neque
                rerum molestiae expedita sint quaerat, vel doloremque minima ratione officiis perspiciatis earum reiciendis odit? Quae dolor modi earum quasi laudantium cumque, quisquam sed itaque aperiam sapiente alias repellat
                eum, quis fuga id tempore, voluptatibus molestias facilis.
            </p>
        </div>
    </div>
    <hr>
</div>
<aside class="sidebar">
    <h1 class="section-heading">Sidebar</h1>
    <div class="related-video">
        <h2>Related Videos</h2>
        <div class="col">
            <div class="small-img-row">
                <div class="small-img">
                    <img src="./media/pic1.png" alt="">
                    <img src="./media/play.png" alt="" class="play-btn" onclick="playVideo('./media/video.mp4')">
                </div>
                <p>How to add multiple video and make video Gallery.</p>
            </div>
            <div class="small-img-row">
                <div class="small-img">
                    <img src="./media/pic2.png" alt="">
                    <img src="./media/play.png" alt="" class="play-btn" onclick="playVideo('./media/video2.mp4')">
                </div>
                <p>How to add multiple video and make video Gallery.</p>
            </div>
        </div>
    </div>
    <div class="video-player" id="videoPlayer">
        <video width="100%" controls autoplay id="myVideo">
            <source src="./media/video.mp4" type="video/mp4">
        </video>
        <img src="./media/close.png" alt="" class="close-btn" onclick="stopVideo()">
    </div>
    <div class="dict-input">
        <h2>Helping Dictionary</h2>
        <div class="form_wrap">
            <div class="input-wrap">
                <input type="text" placeholder="Type your word..." id="inputDict">
                <button id="search" class="search">Search</button>
            </div>
        </div>
        <div class="data">
            <span class="loading">Loading...</span>
            <p class="def"></p>
            <div class="audio"></div>
            <div class="dispAlert"></div>
            <div class="not_Found"></div>
        </div>
    </div>
    <div class="category">
        <h2>Categories</h2>

        <ul class="category-list">
            <li class="list-items2">
                <a href="#">Softwares</a>
                <span class="count">(02)</span>
            </li>

            <li class="list-items2">
                <a href="#">Cooking</a>
                <span class="count">(02)</span>
            </li>

            <li class="list-items2">
                <a href="#">Technical</a>
                <span class="count">(03)</span>
            </li>

            <li class="list-items2">
                <a href="#">Automations</a>
                <span class="count">(05)</span>
            </li>

            <li class="list-items2">
                <a href="#">Tools</a>
                <span class="count">(05)</span>
            </li>

            <li class="list-items2">
                <a href="#">What Next</a>
                <span class="count">(05)</span>
            </li>
        </ul>
    </div>
    <div class="popular-tags">
        <h2>Popular Tags</h2>
        <div class="tags">
            <a href="#" class="tag">Software</a>
            <a href="#" class="tag">Cooking</a>
            <a href="#" class="tag">India</a>
            <a href="#" class="tag">Limited</a>
            <a href="#" class="tag">Tools</a>
            <a href="#" class="tag">Technology</a>
            <a href="#" class="tag">Automation</a>
            <a href="#" class="tag">Maven</a>
            <a href="#" class="tag">Cucumber</a>
            <a href="#" class="tag">Framework</a>
        </div>
    </div>
</aside>
</div>

</section>

<?php include "support/footer.php" ?>