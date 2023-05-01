<?php

header("Content-type: text/css");


?>



/*------------------------------------------------------------------
    IMPORT FONTS
-------------------------------------------------------------------*/

@import url('https://fonts.googleapis.com/css?family=Arbutus+Slab');
@import url('https://fonts.googleapis.com/css?family=Athiti:400,500,600');

/*------------------------------------------------------------------
    IMPORT FILES
-------------------------------------------------------------------*/

@import url(animate.css);
@import url(font-awesome.min.css);
@import url(superslides.css);
@import url(baguetteBox.min.css);

/*------------------------------------------------------------------
    SKELETON
-------------------------------------------------------------------*/

body {
    color: #666666;
    font-size: 15px;
    font-family: 'Athiti', sans-serif;
    line-height: 1.80857;
}


a {
    color: #1f1f1f;
    text-decoration: none !important;
    outline: none !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    letter-spacing: 0;
    font-weight: normal;
    position: relative;
    padding: 0 0 10px 0;
    font-weight: normal;
    line-height: 120% !important;
    color: #1f1f1f;
    margin: 0
}

h1 {
    font-size: 24px
}

h2 {
    font-size: 22px
}

h3 {
    font-size: 18px
}

h4 {
    font-size: 16px
}

h5 {
    font-size: 14px
}

h6 {
    font-size: 13px
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: #212121;
    text-decoration: none!important;
    opacity: 1
}

h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
h6 a:hover {
    opacity: .8
}

a {
    color: #1f1f1f;
    text-decoration: none;
    outline: none;
}

a,
.btn {
    text-decoration: none !important;
    outline: none !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.btn-custom {
    margin-top: 20px;
    background-color: transparent !important;
    border: 2px solid #ddd;
    padding: 12px 40px;
    font-size: 16px;
}

.lead {
    font-size: 18px;
    line-height: 30px;
    color: #767676;
    margin: 0;
    padding: 0;
}

blockquote {
    margin: 20px 0 20px;
    padding: 30px;
}

ul, li, ol{
	list-style: none;
	margin: 0px;
	padding: 0px;
}
button:focus{
	outline: none;
}

.form-control::-moz-placeholder {
    color: #2a2a2a;
    opacity: 1;
}

/*------------------------------------------------------------------
    LOADER 
-------------------------------------------------------------------*/


/*------------------------------------------------------------------
    HEADER
-------------------------------------------------------------------*/
.top-navbar{
	position: relative;
	z-index: 10;
}

.top-navbar .navbar{
	padding: 15px 0px;
	position: fixed;
	width: 100%;
	transition: height .3s ease-out, background .3s ease-out, box-shadow .3s ease-out;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	z-index: 100;
}

.top-navbar .navbar-light .navbar-nav .nav-link{
	color: #010101;
	font-size: 18px;
	padding: 0px 20px;
	border-radius: 4px;
}

.top-navbar .navbar-light .navbar-nav .nav-item .nav-link:hover{
	background: #d0a772;
	color: #ffffff;
}
.top-navbar .navbar-light .navbar-nav .nav-item.active .nav-link{
	background: #d0a772;
	color: #ffffff;
	border-radius: 4px;
}

.navbar-expand-lg .navbar-nav .dropdown-menu{
	border: none;
	 box-shadow: 2px 5px 6px rgba(0,0,0,0.5);
}

.navbar-expand-lg .navbar-nav .dropdown-menu a.dropdown-item:hover{
	background: #d0a772;
	color: #ffffff;
}
.navbar-light .navbar-toggler:hover{
	background: #cfa671;
}

/*------------------------------------------------------------------
    Slider
-------------------------------------------------------------------*/

.cover-slides{
	height: 100vh;
}
.slides-navigation a {
	background: #cfa671;
    position: absolute;
    height: 70px;
    width: 70px;
    top: 50%;
    font-size: 20px;
    display: block;
    color: #fff;
	line-height: 80px;
	text-align: center;
    transition: all .3s ease-in-out;
}
.slides-navigation a i{
	font-size: 40px;
}
.slides-navigation a:hover {
	background: #010101;
}
.cover-slides .container{
	height: 100%;
	position: relative;
	z-index: 2;
}
.cover-slides .container > .row {
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
}
.cover-slides .container > .row {
    height: 100%;
}

.btn{
	text-transform: uppercase;
	padding: 19px 36px;
}
.btn{
	display: inline-block;
	font-weight: 600;
	text-align: center;
	white-space: nowrap;
	vertical-align: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	border: 2px solid transparent;
	padding: 12px 30px;
	font-size: 16px;
	line-height: 1.5;
	border-radius: .1875rem;
	transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.btn-outline-new-white {
    color: #fff;
    background-color: transparent;
    background-image: none;
    border-color: #cfa671;
}
.btn-outline-new-white:hover {
    color: #ffffff;
    background-color: #cfa671;
    border-color: #cfa671;
}

.overlay-background {
    background: #333;
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
	opacity: 0.5;
}

.cover-slides h1{
	font-family: 'Arbutus Slab', serif;
	font-weight: 500;
	font-size: 64px;
	color: #fff;
}
.cover-slides p{
	font-size: 18px;
	color: #fff;
}
.slides-pagination a{
	border: 2px solid #ffffff;
}
.slides-pagination a.current{
	background: #cfa671;
	border: 2px solid #cfa671;
}

/*------------------------------------------------------------------
    About
-------------------------------------------------------------------*/

.about-section-box{
	padding: 70px 0px;
}
.about-section-box .img-fluid{
	box-shadow: -10px -10px 0px #d0a772;
}
.inner-column{}
.inner-column h1{
	font-family: 'Arbutus Slab', serif;
	font-size: 30px;
	color: #010101;
}
.inner-column h1 span{
	color: #d0a772;
}
.inner-column h4{
	font-size: 16px;
	font-weight: 500;
}
.inner-column p{
	font-size: 18px;
}
.inner-column .btn-outline-new-white{
	color: #d0a772;
}
.inner-column .btn-outline-new-white:hover{
	color: #ffffff;
}

/*------------------------------------------------------------------
    QT
-------------------------------------------------------------------*/


.qt-background{
	background: url("images/sahara.jpg") no-repeat;
	background-size: cover;
	padding: 100px 0;
	background-attachment: fixed;
	background-position: center center;
	position: relative;
}
.qt-background p {
    font-size: 35px;
    font-weight: 300;
    line-height: 44px;
    color: #fff;
	font-family: 'Arbutus Slab', serif;
	margin-bottom: 20px;
}

.qt-background span {
    color: #fff;
    font-size: 20px;  
	font-weight: 500;	
}

/*------------------------------------------------------------------
    Menu
-------------------------------------------------------------------*/

.menu-box{
	padding: 70px 0px;
}

.heading-title{
	margin-bottom: 50px;
}
.heading-title h2{
	color: #010101;
	font-size: 28px;
	font-family: 'Arbutus Slab', serif;
}
.heading-title p{
	font-size: 18px;
	font-weight: 200;
	margin: 0px;
}

.filter-button-group {
    border: 1px solid #e4e4e4;
    border-radius: 4px;
    margin: 10px 15px;
    display: inline-block;
}

.filter-button-group button {
    color: #333;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    background: #fff;
    padding: 12px 40px;
    border: none;
    border-radius: 4px;
}

.filter-button-group button.active {
    background: #cfa671;
    color: #fff;
    box-shadow: 2px 20px 45px 5px rgba(0,0,0,.2);
}

.gallery-single{
	margin: 30px 0px;

}

.gallery-single {
    position: relative;
    overflow: hidden;
    -webkit-box-shadow: 0 0 10px #ccc;
    box-shadow: 0 0 10px #ccc;
}

.why-text {
    position: absolute;
    left: 0;
    bottom: -100%;
    right: 0;
    height: 100%;
    background: rgba(207, 166, 113, 0.9);
    padding: 12px 12px;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.ebooking-flights {
position: absolute;
left: 0;
bottom: 0px;
right: 0;
height: 100%;
background: rgba(207, 166, 113, 0.9);
padding: 12px 12px;
-webkit-transition: all .3s ease;
transition: all .3s ease;
}
.why-text h4{
	color: #ffffff;
	font-size: 24px;
	font-weight: 500;
	font-family: 'Arbutus Slab', serif;
}
.why-text p{
	color: #ffffff;
	font-size: 18px;
	border-bottom: 1px dashed #010101;
	margin: 0px;
	padding-bottom: 15px;
	margin-top: 15px;
	margin-bottom: 15px;
}
.why-text h5{
	font-size: 28px;
	font-weight: 600;
	color: #ffffff;
}

.gallery-single:hover .why-text{
	bottom: 0px;
}


/*------------------------------------------------------------------
    Gallery
-------------------------------------------------------------------*/

.gallery-box{
	padding: 70px 0px;
}
.tz-gallery{
	margin-top: 30px;
}
.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}

/*------------------------------------------------------------------
    Customer Reviews
-------------------------------------------------------------------*/

.customer-reviews-box{
	padding: 70px 0px;
}

.carousel-inner .carousel-item .img-box{
	width: 135px;
	height: 135px;
}
.carousel-control-prev{
	left: -100px;
}
.carousel-control-next{
	right: -100px;
}
.carousel-indicators{
	top: 320px;
}

.text-warning{
	color: #d0a772 !important;
	font-size: 24px;
}

@media (min-width: 320px) and (max-width: 640px) {
	.carousel-inner .carousel-item p{
		font-size: 14px;
	}
	.carousel-control-prev{
		left: -5px;
	}
	.carousel-control-next{
		right: -5px;
	}
 	.carousel-indicators{
		top: 400px;
	}
}

#reviews .carousel-control-prev{
	background: #d0a772;
	color: #ffffff;
	display: block;
	position: absolute;
	width: 8%;
	height: 50px;
	top: 50%;
	font-size: 28px;
	opacity: 1;
}
#reviews .carousel-control-prev:hover{
	background: #010101;
	color: #ffffff;
}

#reviews .carousel-control-next{
	background: #d0a772;
	color: #ffffff;
	display: block;
	position: absolute;
	width: 8%;
	height: 50px;
	top: 50%;
	font-size: 28px;
	opacity: 1;
}
#reviews .carousel-control-next:hover{
	background: #010101;
	color: #ffffff;
}


/*------------------------------------------------------------------
    Contact info
-------------------------------------------------------------------*/

.contact-imfo-box{
	background: #d0a772;
	padding: 30px 0;
}

.overflow-hidden {
    overflow: hidden;
}

.contact-imfo-box i{
	display: block;
	float: left;
	width: 60px;
	height: 60px;
	line-height: 60px;
	text-align: center;
	background: #fff;
	color: #d0a772;
	font-size: 30px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	margin-right: 20px;
}
.contact-imfo-box h4 {
    margin: 0px;
    margin-top: 5px;
	color: #ffffff;
	font-size: 20px;
	padding: 0px;
	font-weight: 500;
	line-height: 24px;
}
.contact-imfo-box p {
    margin: 0px;
	color: #ffffff;
	font-weight: 300;
}

/*------------------------------------------------------------------
    Footer
-------------------------------------------------------------------*/

.footer-area{
	padding-top: 50px;
	padding-bottom: 0px;
}
.bg-f{
	background-image: url("images/sahara02.jpg");
	background-attachment: scroll;
	background-clip: initial;
	background-color: rgba(0, 0, 0, 0);
	background-origin: initial;
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
}
.bg-f::before {
    background: #010101;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
	opacity: 0.8;
}

.footer-area .container{
	position: relative;
	z-index: 1;
}
.footer-area h3{
	color: #ffffff;
	text-transform: uppercase;
	font-size: 24px;
	border-bottom: 1px dashed rgba(207, 166, 113, 0.5);
	margin-bottom: 10px;
}
.footer-area p{
	font-size: 15px;
	color: rgba(255, 255, 255, 0.8);
	margin: 0;
	padding-bottom: 10px;
}

.footer-area p.lead{
	font-size: 19px;
	color: #ffffff;
	margin-bottom: 15px;
}
.footer-area p.lead a{
	color: #ffffff;
	margin-bottom: 15px;
}
.footer-area p.lead a:hover{
	color: #d0a772;
}
.footer-area p a{
	font-size: 18px;
	color: #ffffff;
}
.footer-area p a:hover{
	color: #d0a772;
}

.subscribe_form {
    display: block;
    text-align: center;
    padding: 5px 0;
}

.subscribe_form .form_input {
    display: block;
    background-color: rgba(0,0,0,0.7);
    color: #fff;
    border: none;
    font-size: 19px;
    line-height: 50px;
    padding: 0 10px;
    float: left;
    width: 100%;
    transition: all 0.5s ease-in-out;
}

.subscribe_form .submit {
    background-color: #d0a772;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    line-height: 50px;
    display: inline-block;
    padding: 0 10px;
    float: left;
    width: 100%;
	border: none;
	cursor: pointer;
    transition: all 0.5s ease-in-out;
}
.subscribe_form .submit:hover{
	background: #010101;
}

.f-social {
    padding-bottom: 10px;
    margin: 0px;
    margin-top: 20px;
}
.f-social li a {
    font-size: 25px;
    color: rgba(255, 255, 255, 0.9);
	margin-right: 10px;
}

.copyright{
	margin-top: 20px;
	position: relative;
	display: block;
	background-color: #010101;
	border-top: 1px dashed rgba(207, 166, 113);
	padding: 30px 0;
	z-index: 1;
}

.copyright .company-name{
	font-size: 16px;
	text-align: center;
}
.copyright .company-name a{
	font-size: 16px;
}

/*------------------------------------------------------------------
    All Pages
-------------------------------------------------------------------*/

.page-breadcrumb {
    padding: 250px 0 150px;
    background: url("images/beaches.jpg") no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: 0 0;
    position: relative;
}
.all-page-title .container{
	position: relative;
	z-index: 2;
}
.all-page-title::before{
	background: #010101;
	content: "";
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 1;
	opacity: 0.8;	
}
.all-page-title h1{
	font-size: 38px;
	color: #ffffff;
	font-family: 'Arbutus Slab', serif;
	padding: 0px;
}

.inner-pt{
	margin-top: 30px;
}
.inner-pt p{
	font-size: 18px;
}

.stuff-box{
	padding: 70px 0px;
}

.our-team{
    border: 2px solid #d0a772;
    border-radius: 0px;
    text-align: center;
    margin: 10px;
    z-index: 1;
    position: relative;
}
.our-team:before,
.our-team:after{
    content: "";
    width: 100%;
    height: 104%;
    background: #d0a772;
    position: absolute;
    top: 50%;
    left: 0;
    z-index: -1;
    transform: translateY(-50%) scaleX(0.3);
    transition: all 0.3s ease 0s;
}
.our-team:after{
    width: 106%;
    left: 50%;
    transform: translate(-50%, -50%) scaleY(0.25);
}
.our-team:hover:before{ transform: translateY(-50%) scaleX(0.7); }
.our-team:hover:after{ transform: translate(-50%, -50%) scaleY(0.7); }
.our-team img{
    width: 100%;
    height: auto;
    border-radius: 0px;
    transition: all 0.3s ease 0s;
}
.our-team .team-content{
    width: 93%;
    padding: 25px 0 10px;
    background: #d0a772;
    position: absolute;
    bottom: 50px;
    left: 50%;
    opacity: 0;
    transform: translateX(-50%);
    transition: all 0.3s cubic-bezier(0.5, 0.2,0.1,0.9);
}
.our-team:hover .team-content{
    bottom: 10px;
    opacity: 1;
}
.our-team .title{
    font-size: 25px;
    font-weight: 600;
    color: #fff;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin: 0;
}
.our-team .post{
    display: block;
    font-size: 16px;
    color: #fff;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.our-team .social{
    padding: 0;
    margin: 0;
    list-style: none;
}
.our-team .social li{
    display: inline-block;
    margin: 0 5px;
}
.our-team .social li a{
    display: block;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 50%;
    background: #fff;
    font-size: 20px;
    color: #d0a772;
    transition: all 0.3s ease 0s;
}
.our-team .social li a:hover{
    background: #ffffff;
    box-shadow: 0 0 0 5px rgba(255,255,255,0.3);
    color: #d0a772;
}
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}


.reservation-box{
	padding: 70px 0px;
}

.reservation-box h3{
	padding: 0px 15px;
	margin-bottom: 20px;
	font-weight: 600;
}

.help-block ul li{
	color: red;
}

.form-control[readonly]{
	background-color: #ffffff;
}

.form-control{
	border-radius: 0px;
	min-height: 50px;
}
.form-control:focus{
	border: 1px solid #d0a772;
	box-shadow: none;
}

.form-group .picker__input.picker__input--active{
	border-color: #d0a772;
}

.submit-button{
	margin-top: 20px;
}
.btn.btn-common{
	color: #d0a772;
	background-color: transparent;
	background-image: none;
	border-color: #cfa671;
}
.btn.btn-common:hover{
	color: #ffffff;
	background-color: #cfa671;
	border-color: #cfa671;
}
.blog-box{
	padding: 70px 0px;
}
.blog-box-inner{
	position: relative;
	margin-bottom: 30px;
}

.blog-box-inner .blog-img-box{
	position: relative;
	display: block;
}

.blog-box-inner .blog-detail{
	position: absolute;
	top: 0;
	background: #fff;
	padding: 30px 25px;
	border: 1px solid #ddd;
	transition-duration: .5s;
	height: 100%;
}

.blog-detail h4 {
    font-size: 18px;
    font-weight: 500;
    color: #222222;
}

.blog-detail ul li {
    display: inline-block;
    padding: 0px 5px;
}
.blog-detail ul li span{
	color: #d0a772;
	cursor: pointer;
}
.blog-detail ul li span:hover{
	color: #010101;
}

.blog-detail ul li:first-child {
    padding-left: 0px;
}

.blog-detail p {
    padding: 10px 0px 0 0;
	margin: 0px;
}

.blog-detail a{
	color: #d0a772;
	margin-top: 20px;
}

.blog-box-inner .blog-detail:hover{
	background: rgba(255, 255, 255, .9);
}

.blog-inner-box {
    position: relative;
    margin: 0px 10px;
    margin-bottom: 30px;
}
.side-blog-img {
    box-shadow: -15px -15px 0px 0px rgba(0,0,0,0.4);
    -webkit-transition: all 1s ease 0.01s;
    transition: all 1s ease 0.01s;
    position: relative;
}

.date-blog-up {
    position: absolute;
    right: 0px;
    top: 0px;
    background: #cfa671;
    font-size: 18px;
    color: #ffffff;
    padding: 5px 15px 5px 5px;
}
.inner-blog-detail {
    background: #ffffff;
    position: relative;
    padding: 30px 20px;
}

.inner-blog-detail h3 {
    font-size: 20px;
    font-weight: 500;
    padding-bottom: 15px;
}
.inner-blog-detail ul li {
    display: inline-block;
    padding: 0px 5px;
    color: #222222;
}
.inner-blog-detail ul li span {
    color: #cfa671;
}
.inner-blog-detail p {
    padding: 10px 0px;
}
.details-page blockquote {
    border-left: 5px solid #cfa671;
}
.details-page blockquote {
    padding: 20px;
}
blockquote {
    margin: 20px 0 20px;
    padding: 30px;
}
.blog-inner-details-line {
    margin: 20px 0px;
    clear: both;
    float: left;
    width: 100%;
}
.line-left-social h5 {
    font-size: 18px;
    font-weight: 600;
    padding-bottom: 15px;
}
.line-left-social ul li {
    display: inline-block;
    margin-bottom: 5px;
}
.line-right-social ul li {
    display: inline-block;
}
.line-right-social ul li a {
    display: block;
    padding: 5px;
    background: #f5f5f5;
    border-radius: 6px;
    font-weight: 500;
    width: 35px;
    height: 35px;
    text-align: center;
    line-height: 25px;
    font-size: 15px;
}
.line-left-social ul li a {
    display: block;
    padding: 5px 10px;
    background: #f5f5f5;
    border-radius: 6px;
    font-weight: 400;
    font-size: 12px;
}
.line-left-social ul li a:hover {
    background: #cfa671;
    color: #ffffff;
}
.line-right-social ul li a:hover {
    background: #cfa671;
    color: #ffffff;
}
.line-right-social h5 {
    font-size: 18px;
    font-weight: 600;
    padding-bottom: 15px;
}
.blog-comment-box {
    clear: both;
    margin: 20px 0px;
    float: left;
    width: 100%;
}
.blog-comment-box h3 {
    font-size: 18px;
    font-weight: 600;
    padding-bottom: 20px;
}
.comment-item {
    margin-bottom: 30px;
}
.comment-item-left {
    float: left;
    width: 90px;
    height: 90px;
}
.comment-item-left img {
    width: 100%;
    border-radius: 6px;
}
.comment-item-right {
    padding-left: 110px;
}
.comment-item-right a {
    font-size: 16px;
    font-weight: 500;
}
.des-l {
    display: inline-block;
    width: 100%;
}
.des-l p {
    font-size: 13px;
}
.comment-item-right a {
    font-size: 16px;
    font-weight: 500;
}
.right-btn-re {
    float: right;
    font-style: italic;
    text-align: right;
    font-size: 16px;
    padding: 5px 10px;
    background: #f5f5f5;
    border-radius: 6px;
}
.right-btn-re:hover {
    background: #cfa671;
    color: #ffffff !important;
}
.comment-respond-box {
    clear: both;
}
.blog-comment-box .children {
    margin-left: 70px;
}
.comment-item {
    margin-bottom: 30px;
}
.comment-item-right i {
    padding-right: 10px;
}

.comment-form-respond input {
    min-height: 38px;
    border: 1px solid #010101;
    border-radius: 0px;
    padding: 10px;
}
.comment-form-respond textarea {
    border: 1px solid #010101;
    border-radius: 0px;
    padding: 10px;
    min-height: 110px;
}

.btn-submit{
	color: #d0a772;
	background-color: transparent;
	background-image: none;
	border-color: #cfa671;
}
.btn-submit:hover{
	color: #ffffff;
	background-color: #cfa671;
	border-color: #cfa671;
}

.right-side-blog h3 {
    font-weight: 600;
    font-size: 18px;
    padding-bottom: 20px;
}
.blog-search-form {
    position: relative;
    border-bottom: 1px solid #010101;
    padding-bottom: 30px;
    margin-bottom: 20px;
}
.blog-search-form input {
    width: 100%;
    min-height: 40px;
    border: 1px solid rgba(0,0,0,0.3);
    padding: 5px 40px 5px 10px;
    font-size: 15px;
    color: #222222;
}
.blog-search-form .search-btn {
    position: absolute;
    right: 0px;
    background: none;
    border: none;
    font-size: 20px;
    min-height: 40px;
    padding: 0px 15px;
}

.right-side-blog h3 {
    font-weight: 500;
    font-size: 18px;
    padding-bottom: 20px;
}
.blog-categories {
    padding-bottom: 30px;
    margin-bottom: 20px;
}
.blog-categories ul li {
    line-height: 14px;
    padding: 10px 0px;
    border-top: 1px solid #f5f5f5;
}
.blog-categories ul li a {
    display: inline-block;
    text-transform: capitalize;
    width: 100%;
}
.blog-categories ul li a:hover{
	color: #cfa671;
}
.recent-box-blog {
    margin-bottom: 20px;
	display: inline-block;
}
.recent-img {
    float: left;
    position: relative;
}
.recent-img::before {
    position: absolute;
    content: '';
    z-index: 2;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #cfa671;
    opacity: 0.4;
    transform: scale(0);
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
}
.recent-box-blog:hover .recent-img::before {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
}
.recent-info {
    display: table-cell;
    vertical-align: top;
    padding-left: 15px;
}
.recent-info ul li {
    display: inline-block;
    font-size: 11px;
    padding: 0px;
    color: #222222;
}
.recent-info h4 {
    font-size: 14px;
    padding: 0px;
    margin: 11px 0px;
    font-weight: 500;
}
.blog-tag-box ul li {
    display: inline-block;
    margin-bottom: 3px;
}
.blog-tag-box ul li a {
    padding: 5px 15px;
    display: block;
    background: #f5f5f5;
    color: #222222;
    border-radius: 6px;
}
.blog-tag-box ul li a:hover {
    color: #ffffff;
    background: #cfa671;
}


.contact-box{
	padding: 70px 0px;
}

.map-full {
    width: 100%;
    height: 500px;
    border-radius: 0px;
    margin: 0px auto;
}

#back-to-top {
    position: fixed;
    bottom: 40px;
    right: 40px;
    z-index: 9999;
    width: 32px;
    height: 32px;
    text-align: center;
    line-height: 30px;
    background: #d0a772;
    color: #ffffff;
    cursor: pointer;
    border: 0;
    border-radius: 2px;
    text-decoration: none;
    transition: opacity 0.2s ease-out;
	font-size: 30px;
}

/*------------------------------------------------------------------
    Register form
-------------------------------------------------------------------*/
.login-container {
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	padding 20px;
	padding-bottom: 60px;

}

.login-container form{
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 5px 15px rgba(0,0,0.1);
	background: white;
	background-color: #d0a772;
	text-align: center;
	width: 500px;

}

.login-container form h3 {
	font-size: 30px;
	text-transform: uppercase;
	margin-bottom: 10px;
	color: #333333;

}

.login-container form input {
	width: 100%;
	pading: 10px 15px;
	font-size: 17px;

}

.login-container form p{
	margin-top: 10px;
	font-size: 20px;
	color: #333333;
}

.login-container form p a {
	color: crimson;
}

.image-resize {
height: 265px;
}

.image-size {
height: 300px;
}

.logoh {

height: 50px;
}











