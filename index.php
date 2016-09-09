<?php include 'header.php' ?>
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active img-responsive" style="background-image: url(http://cdn1.editmysite.com/uploads/7/0/8/6/70866019/background-images/906054433.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <center>
                                    <h2 class="animation animated-item-1">Welcome</h2>
                                    <p class="animation animated-item-2"> This is my website designed to display my college unit.</p>
                                    <a href="contact-us.php"><button class="btn">Contact Me</button></a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/.item-->
            <div class="item" style="background-image: url(http://cdn1.editmysite.com/uploads/7/0/8/6/70866019/background-images/906054433.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <center>
                                    <h2 class="animation animated-item-1">Units</h2>
                                    <p class="animation animated-item-2">About my college units</p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="units.php">Learn More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(http://cdn1.editmysite.com/uploads/7/0/8/6/70866019/background-images/906054433.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <center>
                                    <h2 class="animation animated-item-1">About</h2>
                                    <p class="animation animated-item-2">About me</p>

                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="about.php">Learn More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>What this website is all about</h2>
            <p>This website is all about my college units and what i am studying at college</p>
        </div>
        <div class="col-md-4">
            <h2>About me</h2>
            <p>I am Nathan, hear me roar. My favourite game is Dark Souls.</p>
            <button onclick="myFunction()">Me</button>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="http://assets1.ignimgs.com/2016/01/19/darksouls1cover-bconcept-coverjpg-19c260_765w.jpg">
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
