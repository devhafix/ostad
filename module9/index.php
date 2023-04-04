<!DOCTYPE html>
<html>
    <head>
        <title>Home - Fix Blog</title>
        <?php include_once('include/common.php'); ?>
    </head>

    <body>
        <?php include_once('include/header.php'); ?>
        <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto position-relative">
                        <div class="site-heading">
                            <h1>Fix Blog</h1><span class="subheading">This is my personal blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <h1>Featured Blogs</h1>
            <div class="row" id="articles-list">
                
            </div>

            <div class="clearfix"><button class="btn btn-primary float-end" type="button">More Posts&nbsp;⇒</button></div>
        </div>
        <?php include_once('include/footer.php'); ?>
    </body>
</html>
