<?php
include "php/config.php";
$new_url = "";
if (isset($_GET)) {
    foreach ($_GET as $key => $val) {
        $u = mysqli_real_escape_string($conn, $key);
        $new_url = str_replace('/', '', $u);
    }
    $sql = mysqli_query($conn, "SELECT full_url FROM url WHERE shorten_url = '{$new_url}'");
    if (mysqli_num_rows($sql) > 0) {
        $sql2 = mysqli_query($conn, "UPDATE url SET clicks = clicks + 1 WHERE shorten_url = '{$new_url}'");
        if ($sql2) {
            $full_url = mysqli_fetch_assoc($sql);
            header("Location:" . $full_url['full_url']);
        }
    }
}
?>
<?php include "support/header.php" ?>
<!-------------Carasoul section-------------->
<section id="top-products" class="top-products">
<div class="container">
    <h1 class="section-heading">Trending Blogs</h1>
    <div class="slider">
        <button class="slider-btn prev-btn"><img src="./icons/pre.svg" alt=""></button>
        <button class="slider-btn next-btn"><img src="./icons/next.svg" alt=""></button>
        <div class="food-slider">
            <div class="food-card magic-shadow-sm">
                <div class="product-image flex item-center justify-center">
                    <img src="./images/FB_IMG_1619383887464.jpg" alt="">
                </div>
                <hr>
                <div>
                    <h2 class="text-center"><a href="javascript:void[0]">Why should all boys have fun!!! some more text to test the Box <span>...</span></a></h2>
                </div>
            </div>
            <div class="food-card magic-shadow-sm">
                <div class="product-image flex item-center justify-center">
                    <img src="./images/FB_IMG_1612992952273.jpg" alt="">
                </div>
                <hr>
                <div>
                    <h2 class="text-center"><a href="javascript:void[0]">Why should all boys have fun!!! some more text to test the Box <span>...</span></a></h2>
                </div>
            </div>
            <div class="food-card magic-shadow-sm">
                <div class="product-image flex item-center justify-center">
                    <img src="./images/FB_IMG_1612520557865.jpg" alt="">
                </div>
                <hr>
                <div>
                    <h2 class="text-center"><a href="javascript:void[0]">Why should all boys have fun!!! some more text to test the Box <span>...</span></a></h2>
                </div>
            </div>
            <div class="food-card magic-shadow-sm">
                <div class="product-image flex item-center justify-center">
                    <img src="./images/FB_IMG_1619394938398.jpg" alt="">
                </div>
                <hr>
                <div>
                    <h2 class="text-center"><a href="javascript:void[0]">Why should all boys have fun!!! some more text to test the Box <span>...</span></a></h2>
                </div>
            </div>
            <div class="food-card magic-shadow-sm">
                <div class="product-image flex item-center justify-center">
                    <img src="./images/FB_IMG_1619962402663.jpg" alt="">
                </div>
                <hr>
                <div>
                    <h2 class="text-center"><a href="javascript:void[0]">Why should all boys have fun!!! some more text to test the Box <span>...</span></a></h2>
                </div>
            </div>

        </div>
    </div>
    <div class="text-center btn-wrapper">
        <button class="btn btn-secondary">View More</button>
    </div>
</div>
</section>
<!-------------Carasoul section-------------->


<!-- Site content -->
<section class="blog-section">
<div class="site-content container">
    <div class="posts">
        <h1 class="section-heading">Blog Posts</h1>
        <div class="post-content">
            <div class="post-image">
                <div>
                    <img src="./images/FB_IMG_1619383877840.jpg" class="img" alt="Blog1">
                </div>
                <div class="post-info flex">
                    <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                    <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>
                    <span><img src="./icons/026-comment.svg" alt=""><span> 2 Comments</span></span>
                </div>
            </div>
            <div class="post-title">
                <a href="#">Why should boys have all the Fun!!!!!!!!</a>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci natus illum dolorum odit officiis consectetur quas porro ducimus incidunt, perferendis rerum veritatis nemo voluptates distinctio, beatae quaerat laudantium
                    expedita illo.
                </p>
                <button class="btn btn-primary post-btn">Read More</button>
            </div>
        </div>
        <hr>
        <div class="post-content">
            <div class="post-image">
                <div>
                    <img src="./images/FB_IMG_1614235886197.jpg" class="img" alt="Blog1">
                </div>
                <div class="post-info flex">
                    <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                    <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>
                    <span><img src="./icons/026-comment.svg" alt=""><span> 2 Comments</span></span>
                </div>
            </div>
            <div class="post-title">
                <a href="#">Why should boys have all the Fun!!!!!!!!</a>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci natus illum dolorum odit officiis consectetur quas porro ducimus incidunt, perferendis rerum veritatis nemo voluptates distinctio, beatae quaerat laudantium
                    expedita illo.
                </p>
                <button class="btn btn-primary post-btn">Read More</button>
            </div>
        </div>
        <hr>
        <div class="post-content">
            <div class="post-image">
                <div>
                    <img src="./images/FB_IMG_1619383887464.jpg" class="img" alt="Blog1">
                </div>
                <div class="post-info flex">
                    <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                    <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>
                    <span><img src="./icons/026-comment.svg" alt=""><span> 2 Comments</span></span>
                </div>
            </div>
            <div class="post-title">
                <a href="#">Why should boys have all the Fun!!!!!!!!</a>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci natus illum dolorum odit officiis consectetur quas porro ducimus incidunt, perferendis rerum veritatis nemo voluptates distinctio, beatae quaerat laudantium
                    expedita illo.
                </p>
                <button class="btn btn-primary post-btn">Read More</button>
            </div>
        </div>
        <hr>
        <div class="post-content">
            <div class="post-image">
                <div>
                    <img src="./images/FB_IMG_1619383938460.jpg" class="img" alt="Blog1">
                </div>
                <div class="post-info flex">
                    <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                    <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>
                    <span><img src="./icons/026-comment.svg" alt=""><span> 2 Comments</span></span>
                </div>
            </div>
            <div class="post-title">
                <a href="#">Why should boys have all the Fun!!!!!!!!</a>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci natus illum dolorum odit officiis consectetur quas porro ducimus incidunt, perferendis rerum veritatis nemo voluptates distinctio, beatae quaerat laudantium
                    expedita illo.
                </p>
                <button class="btn btn-primary post-btn">Read More</button>
            </div>
        </div>
        <div class="pagination">
            <a href="#"><img src="./icons//034-previous_blue.svg" alt=""></a>
            <a href="#" class="pages">1</a>
            <a href="#" class="pages">2</a>
            <a href="#" class="pages">3</a>
            <a href="#"><img src="./icons/035-next_blue.svg" alt=""></a>
        </div>
    </div>
    <aside class="sidebar">
        <h1 class="section-heading">Sidebar</h1>
        <div class="category">
            <h2>Categories</h2>
            <ul class="category-list">
                <li class="list-items">
                    <a href="#">Softwares</a>
                    <span class="count">(02)</span>
                </li>

                <li class="list-items">
                    <a href="#">Cooking</a>
                    <span class="count">(02)</span>
                </li>

                <li class="list-items">
                    <a href="#">Technical</a>
                    <span class="count">(03)</span>
                </li>

                <li class="list-items">
                    <a href="#">Automations</a>
                    <span class="count">(05)</span>
                </li>

                <li class="list-items">
                    <a href="#">Tools</a>
                    <span class="count">(05)</span>
                </li>

                <li class="list-items">
                    <a href="#">What Next</a>
                    <span class="count">(05)</span>
                </li>
            </ul>
        </div>
        <div class="popular-post">
            <h2>Random Posts</h2>
            <div class="post-content">
                <div class="post-image">
                    <div>
                        <img src="./images/FB_IMG_1619383877840.jpg" class="img" alt="Blog1">
                    </div>
                    <div class="post-info flex">
                        <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                        <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>

                    </div>
                </div>
                <div class="post-title">
                    <a href="#">Why should boys have all the Fun!!!!!!!!</a>
                </div>
            </div>

            <div class="post-content">
                <div class="post-image">
                    <div>
                        <img src="./images/FB_IMG_1619383877840.jpg" class="img" alt="Blog1">
                    </div>
                    <div class="post-info flex">
                        <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                        <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>

                    </div>
                </div>
                <div class="post-title">
                    <a href="#">Why should boys have all the Fun!!!!!!!!</a>
                </div>
            </div>

            <div class="post-content">
                <div class="post-image">
                    <div>
                        <img src="./images/FB_IMG_1619383877840.jpg" class="img" alt="Blog1">
                    </div>
                    <div class="post-info flex">
                        <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                        <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>

                    </div>
                </div>
                <div class="post-title">
                    <a href="#">Why should boys have all the Fun!!!!!!!!</a>
                </div>
            </div>

            <div class="post-content">
                <div class="post-image">
                    <div>
                        <img src="./images/FB_IMG_1619383877840.jpg" class="img" alt="Blog1">
                    </div>
                    <div class="post-info flex">
                        <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                        <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>

                    </div>
                </div>
                <div class="post-title">
                    <a href="#">Why should boys have all the Fun!!!!!!!!</a>
                </div>
            </div>

            <div class="post-content">
                <div class="post-image">
                    <div>
                        <img src="./images/FB_IMG_1619383877840.jpg" class="img" alt="Blog1">
                    </div>
                    <div class="post-info flex">
                        <span><img src="./icons/021-user-2.svg" alt=""><span>Akash Trivedi</span></span>
                        <span><img src="./icons/051-schedule.svg" alt=""><span>January 14, 2020</span></span>

                    </div>
                </div>
                <div class="post-title">
                    <a href="#">Why should boys have all the Fun!!!!!!!!</a>
                </div>
            </div>
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
<!-- Site Content -->


<section class="shortner_link magic-shadow" id="shortner_link">

    <div class="container">
        <h1 class="section-heading">Link Shortner</h1>

        <div class="wrapper">
            <form action="#" autocomplete="off">
                <img class="url-icon" src="./icons/ShareIcon/004-link-3.svg" alt="">
                <input type="text" spellcheck="false" name="full_url" placeholder="Enter or paste a long url" required>
                <button>Shorten</button>
            </form>
            <?php
            $sql2 = mysqli_query($conn, "SELECT * FROM url ORDER BY id DESC");
            if (mysqli_num_rows($sql2) > 0) {;
                ?>
                <div class="count">
            <?php
            $sql3 = mysqli_query($conn, "SELECT COUNT(*) FROM url");
                $res = mysqli_fetch_assoc($sql3);

                $sql4 = mysqli_query($conn, "SELECT clicks FROM url");
                $total = 0;
                while ($count = mysqli_fetch_assoc($sql4)) {
                    $total = $count['clicks'] + $total;
                }
                ?>
            <span>Total Links: <span><?php echo end($res) ?></span> & Total Clicks: <span><?php echo $total ?></span></span>
            <a href="php/delete.php?delete=all">Clear All</a>
            </div>
            <div class="urls-area">
                <div class="title">
                    <li>Shorten URL</li>
                    <li>Orignal URL</li>
                    <li>Clicks</li>
                    <li>Actions</li>
                </div>
                <?php
                while ($row = mysqli_fetch_assoc($sql2)) {
                    ?>
                    <div class="url-data">
                    <li>
                    <a href="<?php echo $row['shorten_url'] ?>" target="_blank">
                    <?php
                    if ($domain . strlen($row['shorten_url']) > 50) {
                        echo $domain . substr($row['shorten_url'], 0, 50) . '...';
                    } else {
                        echo $domain . $row['shorten_url'];
                    }
                    ?>
                    </a>
                    </li>
                    <li>
                    <?php
                    if (strlen($row['full_url']) > 60) {
                        echo substr($row['full_url'], 0, 60) . '...';
                    } else {
                        echo $row['full_url'];
                    }
                    ?>
                    </li>
                </li>
                    <li><?php echo $row['clicks'] ?></li>
                    <li><a href="php/delete.php?id=<?php echo $row['shorten_url'] ?>">Delete</a></li>
                </div>
                <?php
    }
        ?>
                                </div>
                                <?php
    }
    ?>
                            </div>
                        </div>
    <div class="blur-effect"></div>
    <div class="popup-box">
        <div class="info-box">
            Your short link is ready. You can alsoedit your shortlink now but can't edit once you saved it.
        </div>
        <form action="#" autocomplete="off">
            <label>Edit your shorten URL</label>
            <input type="text" class="shorten-url" spellcheck="false" required>
            <img class="copy-icon" src="./icons/002-copy.svg" alt="">
            <button>Save</button>
        </form>
    </div>
</section>


<section class="contact-us flex">
    <div class="contact-info-wrapper flex-1">
        <h1 class="section-heading">Contact Us</h1>
        <div class="contact-info">
            <div>
                <div>
                    <img src="./icons/phone-2.svg" alt="">
                    <div>
                        <span>Call Us:</span>
                        <span>(+91) 964 409 9461</span>
                    </div>
                </div>

                <div>
                    <img src="./icons/bag-2.svg" alt="">
                    <div>
                        <span>Email Us:</span>
                        <span>support@thegemsalcove.com</span>
                    </div>
                </div>

                <div>
                    <img src="./icons/clock-2.svg" alt="">
                    <div>
                        <span>Working Hours:</span>
                        <span>Mon-Sat (8:00am to 12:00am)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map flex-1">
        <h1 class="section-heading">Get In Touch</h1>
        <form action="" class="form-container">
            <div class="input_box">
                <span class="icon"><i class="fa fa-user"></i> </span>
                <input type="text" name="" placeholder="Name" required="required">
            </div>
            <div class="input_box">
                <span class="icon"><i class="fa fa-envelope"></i> </span>
                <input type="email" name="" placeholder="Email Id" required="required">
            </div>
            <div class="input_box">
                <span class="icon"><i class="fa fa-edit"></i> </span>
                <textarea name="" id="" cols="30" rows="7" placeholder="Message"></textarea>
            </div>
            <div class="submit_btn">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>
</section>
<?php include "support/footer.php" ?>
 