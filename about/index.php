<?php
    require_once '../vendor/autoload.php';

    $helperLoader = new SplClassLoader('Helpers', '../vendor');
    $mailLoader   = new SplClassLoader('SimpleMail', '../vendor');

    $helperLoader->register();
    $mailLoader->register();

    use Helpers\Config;
    use SimpleMail\SimpleMail;

    $config = new Config;
    $config->load('../config/config.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name    = stripslashes(trim($_POST['form-name']));
        $email   = stripslashes(trim($_POST['form-email']));
        $subject = stripslashes(trim($_POST['form-subject']));
        $message = stripslashes(trim($_POST['form-message']));
        $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

        if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
            die("Header injection detected");
        }

        $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($name && $email && $emailIsValid && $subject && $message) {
            $mail = new SimpleMail();

            $mail->setTo($config->get('emails.to'));
            $mail->setFrom($config->get('emails.from'));
            $mail->setSender($name);
            $mail->setSenderEmail($email);
            $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);

            $body = "
            <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
            <html>
                <head>
                    <meta charset=\"utf-8\">
                </head>
                <body>
                    <h1>{$subject}</h1>
                    <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
                    <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>
                    <p><strong>{$config->get('fields.message')}:</strong> {$message}</p>
                </body>
            </html>";

            $mail->setHtml($body);
            $mail->send();

            $emailSent = true;
        } else {
            $hasError = true;
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <title>The Ghost Pacer</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="icon" href="../assets/logoCircle2.ico" type="image/x-icon"/>

        <link rel="stylesheet" href="https://use.typekit.net/zmo0egj.css">

        <!-- Bootstrap CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel = "stylesheet" type = "text/css" href = "../assets/newStyle.css?ts=<?=time()?>" />

        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

        <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/3d05e82bc332f4d602584cbfa/c0ff9e40f9fcf2fa8bf0fe050.js");</script>
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.11/ouibounce.min.js"></script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WZHZC5V');</script>
        <!-- End Google Tag Manager -->
        <!-- MailerLite Universal -->
        <script>
        (function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
        var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
        f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
        var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
        _.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');
        var ml_account = ml('accounts', '1694246', 'k9k3p9a3f0', 'load');
        </script>
        <!-- End MailerLite Universal -->
    </head>
    <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZHZC5V"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- The Modal -->
    <div id="myModal" class="modal">
    
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="signUpContentModal">
                        <h2 class="text-center">
                            Don't miss out
                        </h2><br>
                        <p class="medium text-center justifyMobile">
                            For a limitted time, the Ghost Pacer is available on Kickstarter at a <strong class="blue">
                                43% discount</strong> from it's MSRP. Don't miss out. Buy it now.
                        </p>
                        <!--
                        <h1 class="text-center spec" id="countdown">
                            20d 0h 0m 0s
                        </h1>
                        <p class="medium text-center justifyMobile">
                            Until this offer expires</p>-->
                            <br><br>
                        <a class="bannerButton blackBG backNow" href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner"> <strong class="blue italic"> Buy</strong> on Kickstarter</a>
                    </div>
                </div>
                <div class="col-lg-1"></div>

            </div>

    </div>
    <script>
        var triggered = false;
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
        document.addEventListener("mouseleave", function(e){
            if( e.clientY < 0 )
            {
                if (triggered == false){
                    modal.style.display = "block";
                    triggered = true;
                }
            }
        }, false);
    </script>
    
    <nav class="navbar navbar-default fixed">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../">GHOST PACER</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link  navbar" href="../">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link features navbar" href="../#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link specs navbar" href="../#specs">Specifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active about navbar" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact navbar scrolly" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact navbar" href="../blogs">Blog</a>
                </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <section id="about">
        <div class="center-block contentBlock">
            <br><br>
            <div class="center-block container">
                <h2 class="text-left">Our team and mission</h2>
                <br><br>
                <p class="text-left"><strong>The Ghost Pacer</strong> has been developed 
                by a group of students at Lakeside High School in the most beautiful city in the world: 
                    Seattle, Washington. When you put on one of our augmented reality-driven glasses, you will be wearing a product 
                    of our team’s many thousands of hours of research, design and testing. We are excited to 
                    get the Ghost Pacer in your hands as soon as possible - help us out by signing up for 
                    updates and be one of the first to join the augmented reality revolution and maximize your offseason!</p> 
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row wmargin">
                <div class="col-sm-4">
                    <img src="../assets/AbdurRahman.png" class="phone">
                    <h3 class="bold feature"><strong>AbdurRahman Bhatti</strong></h3>
                    <p class="med">CEO and Co-Founder</p>
                    <br>
                </div>
                <div class="col-sm-4">
                    <img src="../assets/Jensen.jpeg" class="phone">
                    <h3 class="bold feature"><strong>Jensen Turner</strong></h3>
                    <p class="med">CTO and Co-Founder</p>
                    <br>
                </div>
                <div class="col-sm-4">
                    <img src="../assets/Toshihiro_Nagase.png" class="phone">
                    <h3 class="bold feature"><strong>Toshihiro Nagase</strong></h3>
                    <p class="med">Chief Operating Officer</p>
                    <br>
                </div>
            </div>
            <br>
            <div class="row wmargin">
                <div class="col-sm-4">
                    <img src="../assets/Izak_Lewis.png" class="phone">
                    <h3 class="bold feature"><strong>Izak Lewis</strong></h3>
                    <p class="med">Lead App Developer</p>
                    <br>
                </div>
                <div class="col-sm-4">
                    <img src="../assets/sidSeniorPortrait.jpg" class="phone">
                    <h3 class="bold feature"><strong>Siddharth Hathi</strong></h3>
                    <p class="med">Chief Design Officer</p>
                    <br>
                </div>

                <div class="col-sm-4">
                    <img src="../assets/Georgia.jpg" class="phone">
                    <h3 class="bold feature"><strong>Georgia Joers</strong></h3>
                    <p class="med">Marketing Consultant</p>
                    <br>
                </div>
            </div>
            <br>
        </div>
    </section>

    <br><br>

    <section id="contact">
        <div class="center-block greybox wTop">
            <div class="container">
                <h2 class="headline">Contact Us</h2>

                <?php if(!empty($emailSent)): ?>
                    <div class="col-md-6 col-md-offset-3">
                        <div class="alert alert-success text-center"><?php echo $config->get('messages.success'); ?></div>
                    </div>
                <?php else: ?>
                    <?php if(!empty($hasError)): ?>
                    <div class="col-md-5 col-md-offset-4">
                        <div class="alert alert-danger text-center"><?php echo $config->get('messages.error'); ?></div>
                    </div>
                    <?php endif; ?>
                <!--
                <form id="contactUs" method="post" action="mailto:info@myghostrunner.com" enctype="text/plain">
                    <div class="col-xs-12 wow animated slideInLeft" data-wow-delay=".5s">
                    <p>Have any questions about the Ghost Pacer, or just want to reach out? Let us know, and we’ll get back to you as soon as possible!</p>
                        <span class="error name_error"></span>
                        <span class="success"></span>
                        <input type="text" name="name" id="name" class="fullScreen" placeholder="Name" />
                        <span class="error email_error"></span>
                        <input type="text" name="email" id="email" class="fullScreen" placeholder="Email" />
                        <span class="error subject_error"></span>
                        <input type="text" name="subject" id="subject" class="fullScreen" placeholder="Subject" />
                        <span class="error message_error"></span>
                        <textarea name="message" id="message" placeholder="Message" rows=6></textarea>
                    </div>
                    <div class="relative fullwidth col-xs-12">
                        <button type="submit" id="submit" name="submit" class="send-btn">Send Message</button>
                    </div>
                </form>
                -->

                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                        <div class="col-lg-10">
                            <input type="text" class="fullScreen" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                        <div class="col-lg-10">
                            <input type="email" class="fullScreen" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?></label>
                        <div class="col-lg-10">
                            <input type="text" class="fullScreen" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?></label>
                        <div class="col-lg-10">
                            <textarea rows="6" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class=""><?php echo $config->get('fields.btn-send'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
            
        <?php endif; ?>
        </div>
    </section>



    <script type="text/javascript" src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>

    <section id="footer">
        <div class="container-fluid black">
            <br><br><br><br>
            <p class="text-center white light">Copyright © 2020 Ghost Pacer. All Rights Reserved.</p>
            <br><br>
        </div>
    </section>

        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.scrolly.min.js"></script>
        <script src="../assets/js/jquery.scrollex.min.js"></script>
        <script src="../assets/js/skel.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <script src="../assets/js/main.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script> 
        $(document).ready(function() {
            // Transition effect for navbar 
            $(window).scroll(function() {
            // checks if window is scrolled more than 500px, adds/removes solid class
            if($(this).scrollTop() > 1000) { 
                $('.about').removeClass('active');
                $('.contact').addClass('active');
            } else {
                $('.contact').removeClass('active');
                $('.about').addClass('active');
            }
            });
        });
        </script>
        
  </body>
</html>