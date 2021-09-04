<html>
<head>
    <title>
        Linugux
    </title>
    <link rel="canonical" href="https://linugux.ddns.net" />
    <link rel="icon" type="image/png" href="linugux.jpg">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <link rel="stylesheet" type="text/css" href="/asciinema-player.css" />
    <meta name="description" content="Creation and Design For Linugux" />
    <meta name="viewport" content="width=460" />
    <meta charset="utf-8" />
    <meta name="theme-color" content="#3e98ba">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-W3WJMK9');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3WJMK9" height="0" width="0" style="display:none;visibility hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
        $(document).ready(function(){
          $("#code").click(function(){
            $(".about").hide(1618);
            $(".home").hide(1618);
            $(".contact").hide(1618);
            $(".code").show(1618);
          });
          $("#contact").click(function(){
            $(".about").hide(1618);
            $(".home").hide(1618);
            $(".contact").show(1618);
            $(".code").hide(1618);
          });
          $("#about").click(function(){
            $(".about").show(1618);
            $(".home").hide(1618);
            $(".code").hide(1618);
          });
          $("#home").click(function(){
            $(".home").show(1618);
            $(".about").hide(1618);
            $(".contact").hide(1618);
            $(".code").hide(1618);
          });
        });
    </script>
</head>
<body>
    <section id="header">
        <div id="headerCenter">
            <img id="avatar" src="linugux.jpg"/></a>
            <a href="#" id="title" style="font-size: 22px">Linugux</a>
            <ul class="navigation">
                <li><button id="home" style="background-color: black"><a>Home</a></button></li>
                <li><button id="code" style="background-color: black"><a>Code</a></button></li>
                <li><button id="about" style="background-color: black"><a>About</a></button></li>
                <li><button id="contact" style="background-color: black"><a>Contact</a></button></li>
                <!--
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="writings.html">Writings</a></li>-->
            </ul>
            <div class="social">
                <a href="http://twitter.com/linugux" target="_blank" title="twitter">
                    <svg class="icons" width="21" height="21" viewBox="0 0 21 21">
                        <path d="M18.502 4.435a6.892 6.892 0 0 1-2.18.872 3.45 3.45 0 0 0-2.552-1.12 3.488 3.488 0 0 0-3.488 3.486c0 .276.03.543.063.81a9.912 9.912 0 0 1-7.162-3.674c-.3.53-.47 1.13-.498 1.74.027 1.23.642 2.3 1.557 2.92a3.357 3.357 0 0 1-1.555-.44.15.15 0 0 0 0 .06c-.004 1.67 1.2 3.08 2.8 3.42-.3.06-.606.1-.934.12-.216-.02-.435-.04-.623-.06.42 1.37 1.707 2.37 3.24 2.43a7.335 7.335 0 0 1-4.36 1.49L2 16.44A9.96 9.96 0 0 0 7.355 18c6.407 0 9.915-5.32 9.9-9.9.015-.18.01-.33 0-.5A6.546 6.546 0 0 0 19 5.79a6.185 6.185 0 0 1-1.992.56 3.325 3.325 0 0 0 1.494-1.93"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
		<p><?php  include 'indexphp.php'?></p>
    <section id="content" class="home">
        <div class="fullitem">
            <p align="justify">
		<?php echo date('l, F jS, Y, h:m:s.');?>
                <a href="https://linux.org">Linux</a> engineer computer sciences on building projects that make people to share. My site web of <a href="https://www.google.com/search?client=ubuntu&channel=fs&q=linugux&ie=utf-8&oe=utf-8">http://linugux.ddns.net</a> have been highly ranked in the Google, and I have been greatyfull to see some of HomeServer on <a href="https://raspberrypi.org">Raspberry Pi</a> processor <a href="https://www.arm.com/">ARM</a> with System Operative <a href="https://www.raspbian.org/">Raspbian 8 Jessie</a> use General Public License <a href="https://www.gnu.org/licenses/gpl-3.0.html">(GNU)</a> in international advertising campaigns, magazines, and websites around the world.
            </p>
        </div>
        <div class="fullitem" align="center">
		<?php
		print uname;
		?>
            <hr>
            <b>Youtube Channel</b><br>
            <a href="https://youtube.com/user/linugux/videos" target="_blank"><img src="linuguxLogoGoogle.jpg"/></a>
            <div class="caption">
                <a class="title" href="https://youtube.com/user/linugux/videos" target="_blank">Creation And Design For Linugux</a>
                <p>
		    Differentiate between build variants lenguages of programmation.
		</p>
            </div>
            <div class="fullitem" align="center">
                <script src="/asciinema-player.js"></script>
                <asciinema-player src="433901.json" cols="80" rows="24"></asciinema-player>
                <hr>
		<asciinema-player src="433909.json" cols="80" rows="24"></asciinema-player>
		<hr>
                <script type="text/javascript" src="//rc.revolvermaps.com/0/0/6.js?i=2h93hvpxcgq&amp;m=17&amp;s=230&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=10&amp;bv=100&amp;lx=-400&amp;ly=400&amp;hi=70&amp;he=27&amp;hc=a8ddff&amp;rs=80" async="async"></script>
		<hr>
		<p>
			<a>WebCam Raspberry Pi processing captured image each 10 minutes [ $ <. ]</a>
		<br>
		<a href="pepe.jpg"><img width="50%" src="pepe.jpg"></a><hr>
		</p>
		</div>
        </div>
    </section>
    <section id="content" style="display: none;" class="about">
        <div class="fullitem">
            <p align="">
            <b>About Me</b>
            <tt>
                I´m Engineer Computer Sciences on "Linux/Gnu".<br>
                My Name is Nestor Garrido 
            </tt>
            </p>
            <p style="background-color: black" class="navigation" align="center">
                <a>Creation and Design<br>for<br>Linugux</a><br>
                <a>http://Linugux.ddns.net</a>
            </p>
        </div>
        <div class="fullitem" align="center">
            <div class="caption">
                <p>
                    <a href="linugux.jpg"><img src="linugux.jpg"></a>
                    <a href="Linugux.gif"><img src="Linugux.gif"></a>
                    <a href="linuguxLogoWhatsapp.jpg"><img src="linuguxLogoWhatsapp.jpg"></a>
                </p>
            </div>
        </div>
    </section>
    <section id="content" style="display: none;" class="contact">
        <div class="fullitem" style="background-color: black" align="center">
            <div class="navigation">
                <p>
                    <a>Cuautitlan Izcalli,<br>Edo. de Méx., México.</a><br>
                    <a>CopyLeft@Linugux.Inx ||| 2022</a><br>
                    <a href="mailto:linugux@gmail.com">Linugux@gmail.com</a>.<br>
                    <a href="https://wa.me/525624600477">+52 56 2460 0477</a>
                </p>
            </div>
        </div>
    </section>
    <section id="content" style="display: none;" class="code">
        <div class="fullitem" style="background-color: black" align="center">
            <div class="navigation" align="left">
                <ul>
                    <li><a href="http://4inkpress.ddns.net">Page Site Web "4inkpress" - Serigrafia</a></li>
                    <li><a href="http://carlosvillamote.ddns.net">Page Site Web´s Carlos Villamote</a></li>
                    <li><a href="pages/index2016-11-21.html">Page Site Web 2016 Linugux.ddns.net</a></li>
                    <li><a href="https://github.com/linugux/linuguxWebSiteAgo21">Repository this web Version 1.0 ...</a></li>
                </ul>
                <p>
                    <a>Hello Mundo ... code JavaScript</a><br>
                    <tt>
                        <a> document.   write("Hola Mundo"); </a><br>
                    </tt>
                        <script type="text/javascript">
                            document.write("<a>Hola Mundo</a>");
                        </script>
                </p>
            </div>
        </div>
    </section>
</body>
</html>