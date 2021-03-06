<?php include_once APPROOT . '/views/pages/inc/header.php'?>


    <body id="body">
    <main>
        <!-- Navigation Menu -->
        <nav>
            <div class="col-md-12">
                <div class="navbar-brand">
                    <img src="<?= URLROOT; ?>public/www/img/logo.png">
                </div>

                <button type="button" class="btn-menu pull-right"><span class="fa fa-bars"></span></button>


            </div>
            <!-- Menu -->
            <div id="menu" class="menu-overlay">
                <a href="javascript:void(0)" class="closebtn-menu">&times;</a>

                <div class="menu-content">
                    <a href="#home">home</a>
                    <a href="#about_us">about us</a>
                    <a href="#platform">our platforms</a>
                    <a href="#our_expertise">our expertise</a>
                    <a href="#client_comment">what our clients say</a>
                    <a href="#join_us">join our team</a>
                    <a href="#contact_us">contact us</a>
                    <div class="menu-divider"></div>
                    <!-- Social Network -->
                    <div class="margin-top-20 margin-bottom-10">
                        <button type="button" class="btn-social-facebook"><a target="_blank" href="https://www.facebook.com/Infra-Design-Sdn-Bhd-149699868500383/?fref=ts"><i class="fa fa-facebook"></i></a></button>
                        <button type="button" class="btn-social-youtube"><a target="_blank" href="https://www.youtube.com/channel/UC0YmggZMjakHbnhMKWLv_sA"><i class="fa fa-youtube"></i></a></button>
                    </div>
                    <!-- END Social Network -->
                </div>
            </div>
            <!-- END Menu -->
        </nav>
        <!-- Navigation Menu -->

        <!-- Promo Block -->
        <section class="bg-color-dark g-height-100x">
            <div id="home" style="background: url('<?= URLROOT; ?>public/www/img/banner/header-BG-1.jpg') no-repeat;background-size:cover;">
                <!-- Social Button -->
                <ul class="social-box">
                    <li><a class="promo-block__btn-social" href="#contact_us"><i class="fa fa-phone fa-flip-horizontal"></i></a></li>
                    <li><a class="promo-block__btn-social" target="_blank" href="https://www.facebook.com/Infra-Design-Sdn-Bhd-149699868500383/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                </ul>
                <!-- END Social Button -->
                <div class="fullscreen-static-image promo-block--cover g-height-100x">
                    <div class="container-fluid g-block-middle animated fadeIn wow" data-wow-duration="2s" data-wow-delay="1s">
                        <div class="row">
                            <div class="col-sm-12 text-center mt7p">
                                <h2 class="promo-block__item-text fadeIn"><span id="text1">Crafting</span> <span id="text2">Brilliance</span> <span id="text3">&</span> <span id="text4">Creativity</span></h2>
                                <p class="promo-block__item-text1 fadeIn">Be dazzled by sparkling solutions for your brand & business</p>

                                <!-- Backstretch prev and next button -->
                                <div id="prev-arrow" class="col-xs-6 text-left"
                                     style="float: left; z-index:904; position:absolute; top:45%;">
                                    <a id="prev" class="prev" href="#">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div id="next-arrow" class="col-xs-6 text-right"
                                     style="float: right; z-index:901; position:absolute; top:45%; right: 1.6%">
                                    <a id="next" class="next" href="#">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <ul class="promo-block__list">
                                    <li><a href="#our_expertise">Our Expertise</a></li>
                                    <li><a href="#contact_us">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="promo-block__btn-down" style="left:48%" href="#about_us"><i class="fa fa-angle-down"></i></a>
<!--                    <a class="infra-digital" target="_blank" href="http://www.infradigital.com.my/"><img src="--><?//= URLROOT; ?><!--public/www/img/icon/infra_digital_logo.png" class="img-responsive" style="width:48px;height:49px;"></a>-->
                </div>
            </div>
        </section>
        <!-- END Promo Block -->


        <!-- About Us -->
        <section id="about_us">
            <div class="splitlayout-container bg-color-default">
                <div id="splitlayout" class="splitlayout">
                    <div class="intro">
                        <div class="side side-left">
                            <div class="intro-content">
                                <h1><br>What <br> Define <br> Us</h1>
                                <a href="javascript:void(0);" class="back back-right" title="back to intro" style="left:0;">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                                <h2 class="arrow"><i class="fa fa-chevron-right"></i></h2>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="side side-right">
                            <div class="intro-content">
                                <a href="javascript:void(0);" class="back back-left" title="back to intro">
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                <h2 class="arrow"><i class="fa fa-chevron-left"></i></h2>
                                <h1><br>How We<br>Work</h1>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div><!-- /intro -->
                    <div class="page page-left">
                        <div class="page-inner">
                            <section>
                                <img src="<?= URLROOT; ?>public/www/img/about_us/what_define_us.png" class="img-responsive">
                            </section>
                        </div><!-- /page-inner -->
                    </div><!-- /page-right -->
                    <div class="page page-right">
                        <div class="page-inner">
                            <section>
                                <img src="<?= URLROOT; ?>public/www/img/about_us/how_we_work.png" class="img-responsive" >
                            </section>
                        </div><!-- /page-inner -->
                    </div><!-- /page-left -->
                </div><!-- /splitlayout -->
            </div>
        </section>
        <!-- END About Us -->


        <!-- Platform -->
        <section id="platform">
            <div class="equal-height bg-color-default">
                <!-- Branding & Advertising Modal -->
                <div id="ba-modal" class="modal bg_ba animated fadeIn wow" data-wow-iteration="1">
                    <!-- Modal content -->
                    <span id="ba-close" class="close">&times;</span>
                    <div class="modal-content bg_content_ba">
                        <h2>Branding & Advertising</h2>
                        <h5>a platform for identity</h5>
                        <hr style="width:30%;border-top:1px solid #847d72;">
                        <h4 class="a">Simple ideas that work</h4>
                        <p>	By harnessing the <strong>power of creativity</strong> to build exciting branding and advertising campaigns, Infra Design swears by its motto of <strong>"Making Ideas Happen"</strong>. Borne from an in depth understanding and insights into our clients' businesses, Infra Design has created some of the most memorable and impactful brand campaigns for its clients.</p>
                        <br>
                        <p>Combined with our creative know-how, we have also spearheaded several successful Advertising campaigns that have resulted in overwhelming business growth for our clients. While we approach each endeavor with effective simplicity to enforce the communications message, it is also our cumulative strengths as a team that means a vibrant dissemination of our clients Advertising message.</p>
                    </div>
                </div>
                <!-- END Branding & Advertising Modal -->

                <!-- Web Development Modal -->
                <div id="web-modal" class="modal bg_web animated fadeIn wow" data-wow-iteration="1">
                    <!-- Modal content -->
                    <span id="web-close" class="close">&times;</span>
                    <div class="modal-content bg_content_web ">
                        <h2>Web Development</h2>
<!--                        <h5>a platform for novel technologies</h5>-->
                        <hr class="b" style="width:30%;">
                        <h4>Explore the transformative powers of your website. Let's checkout the example.</h4>

                        <div class="img-center">
                            <a href="https://beauty.ymcstore.com" target="_blank">https://beauty.ymcstore.com<i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <img src="<?= URLROOT ?>public/www/img/website/Aqua.PNG" alt="">
                            <a href="https://pregnancymassage.com.my" target="_blank">https://pregnancymassage.com.my<i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <img src="<?= URLROOT ?>public/www/img/website/pregnancy.PNG" alt="">
                            <a href="https://property.ymcstore.com" target="_blank">https://property.ymcstore.com<i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <img src="<?= URLROOT ?>public/www/img/website/property.PNG" alt="">
                        </div>
                    </div>

                </div>
                <!-- END Web Development Modal -->

                <!-- Digital Communication Modal -->
                <div id="dg-modal" class="modal bg_dg animated fadeIn wow" data-wow-iteration="1">
                    <!-- Modal content -->
                    <span id="dg-close" class="close">&times;</span>
                    <div class="modal-content bg_content_dg">
                        <h2>Digital Communication</h2>
                        <h5>a platform for novel technologies</h5>
                        <hr style="width:30%;">
                        <h4>Synergizing visual, interactive, marketing & administrative technologies</h4>
                        <p>	The unlimited possibilities of digital technology as one of our platforms of communication services cannot be under-estimated. When synergistically integrated with conventional advertising campaigns such as press and print, digital communication further enhances your marketing objectives by bringing your brand and products right into the hands of your target audience. </p>
                        <br>
                        <p>Mobile Apps are one area of specialty that Infra Design offers that achieves this dynamic marketing goal. What's even more exciting is that Mobile Apps can be fully integrated into your day-to-day business operations including Online Bookings/Sales, Sales Team Management, as well as CRM/Loyalty Programs and visual communication needs including Augmented Reality and 3D Tour.</p>
                    </div>
                </div>
                <!-- END Digital Communication Modal -->

                <div id="platform-content" class="container">
                    <div class="margin-top-70 margin-bottom-30">
                        <h2 class="title-v2">Platform</h2>
                        <h5 class="sub-title-v2">the all-encompassing trio</h5>
                    </div>

                    <div class="row margin-top-90 margin-bottom-20">
                        <div id="ba-box" class="col-md-4 margin-bottom-20 fadeInLeft wow" data-wow-iteration="1" data-wow-delay="3s">
                            <div class="brd-box bg-color-grey">
                                <div class="brd-text-line"></div>
                                <h4 class="brd-text">KOL MANAGEMENT</h4>

                                <a id="ba" class="brd-info" href="#ba-modal">read more</a>
                            </div>
                        </div>
                        <div id="wd-box" class="col-md-4 margin-bottom-20 fadeInLeft wow" data-wow-iteration="1" data-wow-delay="2s">
                            <div class="brd-box bg-color-grey">
                                <div class="brd-text-line"></div>
                                <h4 class="brd-text">WEB DEVELOPMENT</h4>

                                <a id="web" class="brd-info" href="#web-modal">read more</a>
                            </div>
                        </div>
                        <div id="dc-box" class="col-md-4 margin-bottom-20 fadeInLeft wow" data-wow-iteration="1" data-wow-delay="1s">
                            <div class="brd-box bg-color-grey">
                                <div class="brd-text-line"></div>
                                <h4 class="brd-text">DIGITAL MARKETING</h4>

                                <a id="dg" class="brd-info" href="#dg-modal">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Platform -->


        <!-- Our Expertise -->
        <section id="our_expertise">
            <div class="equal-height">
                <!-- Our Expertise Modal -->
                <div id="EM-modal" class="modal bg-color-default animated fadeIn">
                    <span id="EM-close" class="close">&times;</span>
                    <div class="modal-content bg_content_web responsive-video">
                        <h2 class="title-v2">Event Management</h2>
                        <h5 class="sub-title-v2">create hype</h5>
                        <p class="text-justify padding-left-60 padding-right-60"><p style="text-align: justify;">From dazzling &nbsp;magic shows to thrilling stage performance, its truly a feast for the senses when we manage your event with our extensive experience working with a spectrum of clients ranging from government bodies to multinational corporation, you can expect a complete and memorable experience when engaging us to manage your event. From product launchings to grand exhibitions, we'll bring the magic and excitement to every occasion, no matter the size.</p><p><br></p></p>
                    </div>
                </div>
                <!-- END Our Expertise Modal -->

                <div id="expertise-content" class="container">
                    <div class="margin-top-80 margin-bottom-30">
                        <h2 class="title-v1">Our Expertise</h2>
                        <h5 class="sub-title-v1 text-justify">the full spectrum of strategically crafted creative work</h5>
                    </div>
                    <div class="row expertise-modal-content">

                        <a href="#AB-modal" id="AB"
                        >
                            <div class="col-md-4 col-xs-6 margin-bottom-20 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="grow">
                                    <img class="img-responsive" src="<?= URLROOT; ?>public/common/storage/category/263x263/83897f610cfa69bc2c5dc6478f654ae2.jpg">


                                    <h5>Advertising &amp; Branding</h5>
                                    <p class="caption">target your audience</p>
                                </div>
                            </div>
                        </a>


                        <a href="#PD-modal" id="PD"
                        >
                            <div class="col-md-4 col-xs-6 margin-bottom-20 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="grow">
                                    <img class="img-responsive" src="<?= URLROOT; ?>public/common/storage/category/263x263/b7ee5be0f88fb56164c1467eecd2f28e.jpg">


                                    <h5>Print Design</h5>
                                    <p class="caption">wow your readers</p>
                                </div>
                            </div>
                        </a>


                        <a href="#EM-modal" id="EM"
                           class="cursor-pointer" >
                            <div class="col-md-4 col-xs-6 margin-bottom-20 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="grow">
                                    <img class="img-responsive" src="<?= URLROOT; ?>public/common/storage/category/263x263/2dce8523233fbf691b49449930ec1ca8.jpg">

                                    <span>read more >></span>

                                    <h5>Event Management</h5>
                                    <p class="caption">create hype</p>
                                </div>
                            </div>
                        </a>


                        <a href="#MA-modal" id="MA"
                        >
                            <div class="col-md-4 col-xs-6 margin-bottom-20 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="grow">
                                    <img class="img-responsive" src="<?= URLROOT; ?>public/common/storage/category/263x263/514081bc405f6bf08d8f5e1823a8e7c1.jpg">


                                    <h5>Mobile Application</h5>
                                    <p class="caption">extend your reach</p>
                                </div>
                            </div>
                        </a>


                        <a href="#AR-modal" id="AR"
                        >
                            <div class="col-md-4 col-xs-6 margin-bottom-20 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="grow">
                                    <img class="img-responsive" src="<?= URLROOT; ?>public/common/storage/category/263x263/d093cdc6465935fbf5602241b1f73d43.jpg">


                                    <h5>Augmented Reality</h5>
                                    <p class="caption">add dimension to your mind</p>
                                </div>
                            </div>
                        </a>


                        <a href="#WD-modal" id="WD"
                        >
                            <div class="col-md-4 col-xs-6 margin-bottom-20 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="grow">
                                    <img class="img-responsive" src="<?= URLROOT; ?>public/common/storage/category/263x263/623d22f371ffdfb084b13725cbafd0ab.jpg">


                                    <h5>Web Development</h5>
                                    <p class="caption">talk to the world</p>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </section>
        <!-- END Our Expertise -->


        <!-- Client Comment -->
        <section id="client_comment">
            <div class="container equal-height">
                <div class="margin-top-60 margin-bottom-30">
                    <h2 class="title-v3">What Our Clients Say</h2>
                    <h5 class="sub-title-v3">tap our minds today</h5>
                </div>

                <div class="testimonials-v7 owl-lightweight-arrow owl-lightweight-arrow-black margin-bottom-30">
                    <!-- Testimonial Item -->
                    <div class="testimonials-v7-item">
                        <blockquote>
                            Professionalism is key to the success of our business and Infra Design is a truly professional set-up with every kind of service we require for advertising, communications, sales and marketing. Good work!
                        </blockquote>
                        <h4>Mr Leong</h4>
                        <h5>Mega Asia Capital Sdn Bhd</h5>
                    </div>
                    <!-- /Testimonial Item -->

                    <!-- Testimonial Item -->
                    <div class="testimonials-v7-item">
                        <blockquote>
                            Professionalism is key to the success of our business and Infra Design is a truly professional set-up with every kind of service we require for advertising, communications, sales and marketing. Good work!
                        </blockquote>
                        <h4>Mr Leong</h4>
                        <h5>Mega Asia Capital Sdn Bhd</h5>
                    </div>
                    <!-- /Testimonial Item -->
                </div>
            </div>
        </section>
        <!-- END Client Comment -->


        <!-- Contact Us -->
        <section id="contact_us">
            <div class="bg-color-white">
                <div class="container">
                    <div class="margin-top-80 margin-bottom-50">
                        <h2 class="title-v1">Contact Us</h2>
                        <h5 class="sub-title-v1 text-justify">Let's work together to create lasting impression of your brand</h5>
                    </div>

                    <div class="container margin-bottom-30">
                        <div class="col-md-3 col-xs-12">
                            <div class="margin-bottom-20 text-center"> <!--animated zoomIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s"-->
                                <i class="icon-lg fa fa-map-marker" aria-hidden="true"></i>
                                <p class="text-v3">
                                    enCorp Strand Garden Office<br>
                                    E-GF-3 No.12 Jalan PJU 5/1 <br>
                                    47810, Petaling Jaya, Malaysia
                                </p>
                            </div>
                            <div class="margin-bottom-30 text-center"> <!--animated zoomIn wow" data-wow-duration="1.5s" data-wow-delay="0.6s"-->
                                <i class="icon-lg fa fa-phone fa-flip-horizontal" aria-hidden="true"></i>
                                <p class="text-v3">
                                    Adrian: <a href="tel:0149303522">0149303522</a><br><br>
                                    Don: <a href="tel:0163539926">0163539926</a><br>
                                </p>
                            </div>

                            <div class="divider-solid-sm"></div>

                            <div class="margin-top-5 margin-bottom-20 text-center"> <!--animated zoomIn wow" data-wow-duration="1.5s" data-wow-delay="0.7s"-->
                                <a target="_blank" href=""><i class="icon-md fa fa-3x fa-facebook"></i></a>
<!--                                <a target="_blank" href="https://www.youtube.com/channel/UC0YmggZMjakHbnhMKWLv_sA"><i class="icon-md fa fa-youtube"></i></a>-->
                                <a href="https://www.waze.com/livemap/directions/malaysia/selangor/petaling-jaya/walao-memorito?place=ChIJMc72ASFPzDER_Q6A9wSx0LE" target="_blank"><img class="icon-waze" src="<?= URLROOT; ?>public/www/img/icon/waze.png" style="height:60px;width:50px;margin-top:-4%;"></a>
                            </div>
                        </div>

                        <div class="col-md-9 col-xs-12">
                            <form id="contactForm" method="POST" action="">
                                <section class="col-md-7 margin-bottom-10"> <!--animated slideInRight wow" data-wow-duration="1.5s" data-wow-delay="0.5s"-->
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </section>
                                <section class="col-md-5 margin-bottom-10"> <!--animated slideInRight wow" data-wow-duration="1.5s" data-wow-delay="0.6s"-->
                                    <div class="form-group">
                                        <input type="email" class="form-control input-default" id="email" name="email" placeholder="E-mail" required>
                                    </div>
                                </section>

                                <section class="col-md-7 margin-bottom-10"> <!--animated slideInRight wow" data-wow-duration="1.5s" data-wow-delay="0.7s"-->
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default" id="company" name="company" placeholder="Company" required>
                                    </div>
                                </section>
                                <section class="col-md-5 margin-bottom-10"> <!--animated slideInRight wow" data-wow-duration="1.5s" data-wow-delay="0.8s"-->
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default" id="phone" name="phone" placeholder="Contact Number" required>
                                    </div>
                                </section>

                                <section class="col-md-12 margin-bottom-10"> <!--animated slideInRight wow" data-wow-duration="1.5s" data-wow-delay="0.9s"-->
                                    <div class="form-group">
                                        <select class="form-control select-default" id="services" name="services" required>
                                            <option value="Advertising &amp; Branding">Advertising &amp; Branding</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                        </select>
                                        <span class="input-icon"><i class="fa fa-angle-down"></i></span>
                                    </div>
                                </section>

                                <?php /*
                                <section class="col-md-12 margin-bottom-10">
                                    <!-- <h5>Expected commencement & delivery date</h5> -->

                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <!-- <input class="form-control input-default datetime-input" type="date" id="commencement_date" name="commencement_date"> -->
                                                <div class="input-group date">
                                                    <input type="text" class="input-default" name="commencement_date" id="commencement_date" placeholder="Expected commencement date"/>
                                                    <span class="input-group-addon">
										                    <span class="glyphicon glyphicon-calendar"></span>
										                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <!-- <input class="form-control input-default datetime-input" type="date" id="delivery_date" name="delivery_date"> -->
                                                <div class="input-group date">
                                                    <input type="text" class="input-default" name="delivery_date" id="delivery_date" placeholder="Delivery date"/>
                                                    <span class="input-group-addon">
										                    <span class="glyphicon glyphicon-calendar"></span>
										                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                */?>

                                <section class="col-md-12 margin-bottom-10">
                                    <div class="form-group">
                                        <textarea id="description" name="description" class="form-control textarea-default" rows="5" placeholder="Tell us about your project..." required></textarea>
                                    </div>

<!--                                    <p style="display:none;">Leave this empty: <input type="text" name="url"></p>-->
                                </section>

<!--                                <div class="col-md-7 margin-bottom-10 file_error">-->
<!--                                    <label class="btn-file">-->
<!--                                        ...-->
<!--                                        <input type="file" name="file" id="file">-->
<!--                                    </label>-->
<!--                                    <small id="name-of-file"></small>-->
<!---->
<!--                                    <span>Upload Extra Infos that might be helpful<br>-->
<!--											<small id="note" class="font10">* Only allow file size less than 1 MB</small>-->
<!--										</span>-->
<!--                                </div>-->

<!--                                <section class="col-md-5 margin-bottom-10">-->
<!--                                    <div class="form-group">-->
<!--                                        <input type="text" class="form-control input-default" id="fr_gdcode" name="fr_gdcode" size="4" maxlength="4" placeholder="Verification Code">-->
<!--                                        <img id="gdcode_img" src="--><?//= URLROOT; ?><!--public/common/plugins/captcha/draw_gd.jpg" style="vertical-align:middle;" class="img-responsive mt5">-->
<!--                                    </div>-->
<!--                                </section>-->

                                <?php if(isset($_GET['error'])){
                                    echo '<p style="color: red">'. $_GET['error'] .'</p>';
                                }
                                ?>
                                <div class="col-md-12 margin-bottom-10">
<!--                                    <h5 class="info-text-v1">By clicking SUBMIT button, you are agree to our <a href="--><?//= URLROOT; ?><!--public/www/pdf/legal_disclaimer.pdf" target="_blank">disclaimer and privacy policy</a></h5>-->

                                    <button id="submitButton" class="btn-default" type="submit">Submit</button>
                                    <button id="resetButton" class="btn-default" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<!--                <div class="google-box animated zoomIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s">-->
<!--                    <div id='gmap_canvas'></div>-->
<!--                </div>-->
            </div>
        </section>
        <!-- END Contact Us -->

        <!-- Footer -->
        <footer class="bg-color-default">
            <div class="container padding-top-5 padding-bottom-5">
                <span class="footer-text">Copyright © 2020 Infra Design All rights reserved. <a href="<?= URLROOT; ?>public/www/pdf/legal_disclaimer.pdf" target="_blank"><u>Disclaimer and privacy policy</u></a></span>
            </div>
        </footer>
        <!-- END Footer -->
    </main>


<?php include_once APPROOT . '/views/pages/inc/footer.php'?>