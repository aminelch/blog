<?php
require "core/database.php";
require "core/database_func.php";

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0):
    extract($_GET);
    $post=getPostById($db, $id);
    // var_dump($article);
    // die();

else:
    header('Location: 404.php?error=1');
endif;
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Title -->
<title>Amine Lch  - Blog : <?=$post->title; ?></title>
<!-- Favicons -->
<link rel="shortcut icon" href="../assets/img/favicon.png">
<link rel="apple-touch-icon" href="../assets/img/favicon_60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon_76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon_120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon_152x152.png">

<!-- Google Web Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i%7CPoppins:300,400,500,600" rel="stylesheet">

<!-- CSS Styles -->
<link rel="stylesheet" href="../assets/css/styles.css" />

<!-- CSS Theme -->
<link id="theme" rel="stylesheet" href="../assets/css/themes/theme-serif-blue.css" />

</head>

<body>

<!-- Loader -->
<div id="page-loader">
    <svg class="loader" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="5" stroke-linecap="round" cx="32" cy="32" r="32"></circle></svg>
</div>
<!-- Loader / End -->

<!-- Header -->
<header id="header" class="header-vertical dark">

    <!-- Photo -->
    <a href="index-2.html" class="photo">
        <img src="../assets/img/avatars/avatar01.jpg" alt="">
    </a> 

    <!-- Navigation -->
    <nav id="main-menu">
        <ul class="nav nav-vertical">
            <li><a href="index-2.html#start"><i class="pe-7s-home"></i><span>Start</span></a></li>
            <li><a href="index-2.html#resume"><i class="pe-7s-ribbon"></i><span>Resume</span></a></li>
            <li><a href="index-2.html#portfolio"><i class="pe-7s-monitor"></i><span>Portfolio</span></a></li>
            <li><a href="index-2.html#clients"><i class="pe-7s-comment"></i><span>Clients</span></a></li>
            <li><a href="index-2.html#latest-posts"><i class="pe-7s-copy-file"></i><span>Latest Posts</span></a></li>
            <li><a href="index-2.html#contact"><i class="pe-7s-mail"></i><span>Contact</span></a></li>
        </ul>
        <span class="selector"></span>
    </nav>

    <!-- Bottom -->
    <div class="bottom text-center">
        <ul class="nav-icons nav-sm">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>

</header>
<!-- Header / End -->

<!-- Content -->
<div id="content" class="bg-light">

    <!-- Post / Item -->
    <article class="post single">
        <nav class="post-nav">
            <ul class="nav-icons">
                <li><a href="#"><i class="ti-angle-left"></i></a></li>
                <li><a href="blog.html">Back to list</a></li>
                <li><a href="#"><i class="ti-angle-right"></i></a></li>
            </ul>
        </nav>
        <div class="post-image"><img src="../assets/img/posts/single-post01.jpg" alt=""></div>
        <div class="post-content">
            <ul class="post-meta">
                <li> <?=$post->date;?></li>
                <li>by <strong><?=$post->author;?></strong></li>
            </ul>
            <h1><?=$post->title; ?></h1>
            <p class="lead">
                <?=$post->content; ?>
            </p>
        </div>
        <div class="post-comments post-module">
            <div class="title">
                <h4>Comments <span class="badge bg-primary">3</span></h4>
            </div>
            <div class="content">
                <ul class="comments">
                    <li>
                        <div class="avatar"><img src="../assets/img/avatars/avatar01.jpg" alt=""></div>
                        <div class="content">
                            <span class="details">Jessica Biel on September 20, <a href="#" class="text-primary">Reply</a></span>
                            <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
                        </div>
                        <ul>
                            <li>
                                <div class="avatar"><img src="../assets/img/avatars/avatar02.jpg" alt=""></div>
                                <div class="content">
                            <span class="details">Jessica Biel on September 20, <a href="#" class="text-primary">Reply</a></span>
                                    <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus, nec dapibus felis tempus in. Quisque eget elementum sem, cursus tristique orci. Donec velit nisi, auctor ac pharetra in, maximus eu justo.</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="avatar"><img src="../assets/img/avatars/avatar03.jpg" alt=""></div>
                        <div class="content">
                            <span class="details">Jessica Biel on September 20, <a href="#" class="text-primary">Reply</a></span>
                            <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="post-write-comment post-module dark">
            <div class="title">
                <h4>Write a comment!</h4>
            </div>
            <div class="content">
                <form class="validate-form">
                    <div class="form-group">
                        <textarea name="comment" id="comment" rows="3" class="form-control" placeholder="Tap here your comment..." required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input id="nick" name="nick" type="text" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-white"><span>Send a comment! <i class="i-after ti-check"></i></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>

</div>
<!-- Content / End -->

<!-- Mobile Nav Toggle -->
<a href="#" id="vertical-nav-toggle" class="nav-toggle" data-toggle="mobile-nav"><span><span></span></span></a>

<!-- Contact Popup Controls -->
<div class="contact-popup-ctrl">
    <a href="#" class="contact-popup-toggle" data-toggle="contact-popup"><span class="typing" data-text='["Have a question?","Write to me!"]'>Write to me!</span></a>
    <a href="#" class="contact-popup-close" data-toggle="contact-popup"><i class="ti-close"></i></a>
</div>
<!-- Contact Popup -->
<div id="contact-popup" class="contact-popup dark">
    <div class="v-center row">
        <div class="col-lg-6 col-md-9">
            <form id="contact-form" class="validate-form">
                <div class="head">
                    <span class="form-status">1/2</span>
                    <h3>Write to me!</h3>
                </div>
                <div class="steps">
                    <!-- Form Step -->
                    <div class="step active" data-step="1">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input id="name" name="name" type="text" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="email" name="email" type="text" class="form-control" placeholder="Your e-mail" required>
                            </div>
                        </div>
                        <div class="bottom clearfix">
                            <nav class="controls">
                                <a href="#" class="btn btn-white" data-target="form-next-step">Next step<i class="i-after ti-arrow-right"></i></a>
                            </nav>
                        </div>
                    </div>
                    <!-- Form Step -->
                    <div class="step" data-step="2">
                        <textarea name="message" id="message" rows="3" class="form-control" placeholder="Tap here your message..." required></textarea>
                        <div class="bottom clearfix">
                            <div class="info"><span>from</span> <em id="sender"></em></div>
                            <nav class="controls">
                                <button class="btn btn-link" data-target="form-prev-step"><i class="i-after ti-angle-left"></i></button>
                                <button type="submit" class="btn btn-white btn-submit"><span>Send a message! <i class="i-after ti-check"></i></span></button>
                            </nav>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Ajax Modal -->
<div id="ajax-modal"></div>
<!-- Ajax Close -->
<a href="#" class="ajax-close" data-dismiss="ajax-modal"><i class="ti-close"></i></a>
<!-- Ajax Loader -->
<svg id="ajax-loader" class="loader" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="5" stroke-linecap="round" cx="32" cy="32" r="32"></circle></svg>

<!-- JS Libraries -->
<script src="../assets/js/jquery-1.12.4.min.js"></script>
<!-- JS Plugins -->
<script src="../assets/js/plugins.js"></script>
<!-- JS Core -->
<script src="../assets/js/core.js"></script>
</body>
</html>
