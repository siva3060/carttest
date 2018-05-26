<!doctype html>

<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->
	
<!-- Mirrored from demo.beetube.me/author/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2017 07:34:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php require_once('../dbconfig.php');?>
<style type="text/css">
.menu-text1 {
    font-weight: bold;
    color: inherit;
    line-height: 1;
    padding-top: 0;
    padding-bottom: 0;
    padding: 0.1rem 1rem;
	margin-top: 5rem;
}
	.display-comment
	{
	display: block;
	
	}
	.commentbox 
	{
		padding:1.5%;
		background:#f3f6f8;
		
	}
	.collapse
	{
	    padding: 1% 1% 1% 0;

	}
	.glyphicon
	{
	padding:0 1% 1% 0;	
	}	
	.upload-files 
	{
    border-radius: 20px;
    padding: 1%; 
    background: #e0e0e0;
	width:100px;
	cursor:pointer;
	}
	.uploadfiles-div
	{
		padding:0 0 3% 2.5%;
		
	}	
	.display-posts
	{
	padding:0% 0%;	
	}
	.enter-qsn
	{
	border: none;
	box-shadow: none;
	font-size: 20px;
	font-weight: bold;
	}	
	.qsnmodal
	{
		padding:2%;
		cursor:pointer;
	}	
	.qsnmodal h3{
		color:#999191;
	}
	.profile-block
	{
		display:inline;
	}
	.profilepic
	{
	float:left;
	padding-right:1.5%;
	}	
	.event-content
	{
		padding-left:10%;
	}
	
	
	.loader23 {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('feed/loader.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
		
.tabs-title > a >span{
    padding: 26px;
}
#search-list{
display:none;
}
#search-list1{
display:none;
}
.chat-box{
postion:relitive;
z-index:100;
aline:right:
width:30%;
height:50%;
}
.container2 p
{
color:white;
 display: inline-block;
    vertical-align: top;
}
.container1 {
    border: 2px solid #dedede;
    background-color: #ffffff;   
    padding: 10px;
    margin: 1px 0;
    cursor: pointer;
}
.container1:hover
{
 background-color: #a4cccb7a; 
}
.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container1::after {
    content: "";
    clear: both;
    display: table;
}

.container1 img {
    float: left;
    max-width: 35px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container1 img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}
.container2 p
{
color:white;
}
.container2 {
    border: 2px solid #dedede;
    background-color: #ffffff;   
    padding: 10px;
    margin: 1px 0;
    cursor: pointer;
}
.container2:hover
{
 background-color: #a4cccb7a; 
}
.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container2::after {
    content: "";
    clear: both;
    display: table;
}

.container2 img {
    float: left;
    max-width: 35px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container2 img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
#okclose { 
float:right;
}
.you{
	    
	    border-radius: 8px;
    padding: 8px 12px;
    max-width: 75%;
    box-shadow: inset 0 0 0 2px #e1e9ee;
    background-color: transparent;
    color: rgba(0,0,0,.9);
    word-wrap: break-word;
    white-space: pre-line;
    -webkit-font-smoothing: antialiased;
	font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol,Hiragino Kaku Gothic Pro,Meiryo,Hiragino Sans GB W3,Noto Naskh Arabic,Droid Arabic Naskh,Geeza Pro,Simplified Arabic,Noto Sans Thai,Thonburi,Dokchampa,Droid Sans Thai,Droid Sans Fallback,'.SFNSDisplay-Regular',Heiti SC,Microsoft Yahei;
    font-size: 14px;
    line-height: 20px;
}
.me{
	       
	    border-radius: 8px;
    padding: 8px 12px;
    max-width: 75%;
    box-shadow: inset 0 0 0 2px #e1e9ee;
    background-color: transparent;
    color: rgba(0,0,0,.9);
    word-wrap: break-word;
    white-space: pre-line;
    -webkit-font-smoothing: antialiased;
	font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol,Hiragino Kaku Gothic Pro,Meiryo,Hiragino Sans GB W3,Noto Naskh Arabic,Droid Arabic Naskh,Geeza Pro,Simplified Arabic,Noto Sans Thai,Thonburi,Dokchampa,Droid Sans Thai,Droid Sans Fallback,'.SFNSDisplay-Regular',Heiti SC,Microsoft Yahei;
    font-size: 14px;
    line-height: 20px;
    float: right;
}
.sendbtn{
	    width: 100%;
    border: 1px solid #f6f6f6;
    text-align: center;
    text-transform: capitalize;
    background: #f0f0f0;
    font-size: 13px;
    padding: 10px 0;
    border-radius: 3px;
    margin-bottom: 30px;
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}
	.top-button .menu li:nth-of-type(2) a.loginReg, .blog-post .blog-post-content a.blog-post-btn:hover, #navBar .top-bar .search-btn li.betubeSearch i:hover, .button:hover, .button:focus, .top-button .menu li a:hover, .topBar .socialLinks a:hover, .secondary-button:hover, .content .head-text .grid-system a.current, .content .main-heading .tabs li.tabs-title:last-of-type a:hover, footer #back-to-top:hover, .sidebar .widgetBox .tagcloud a:hover, footer .widgetBox .tagcloud a:hover, #carouselSlider .item .inner-item .item-title span, .inner-video .tabs .tabs-title > a:focus, .tabs-title > a[aria-selected='true'], .thumbs .thumbnails .ver-thumbnail .item-title span, .sidebar .widgetBox .widgetContent .profile-overview li a.active, .sidebar .widgetBox .widgetContent .profile-overview li a:hover, .profile-inner .profile-videos .profile-video .media-object .video-btns a.video-btn:hover, .singlePostDescription .description .inner-btn:hover, .followers .follower button:hover, .sidebar .widgetBox .widgetContent .accordion .accordion-item.is-active .accordion-title, .pagination span.current, .pagination a:hover, .topProfile .main-text h1, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span, .singlePostDescription .description a[rel='tag']:hover, .topProfile .profile-stats .profile-author-img .btn-upload:hover span, .topProfile-inner .upload-bg label:hover span, .topProfile .profile-stats .profile-subscribe button:hover, #navBar .top-bar .search-btn li.upl-btn a:hover, .top-button .menu li a.active, .SinglePostStats .media-object .social-share .post-like-btn form button:hover, .SinglePostStats .media-object .author-des .subscribe button:hover, .tabs-title > a:hover, .light-off-menu .responsive-search .input-group-button button:hover, #back-to-top:hover, #navBar .navFull .topbar-light-dark .menu > li:not(.menu-text) > a:hover, #navBar .middleNav .search-btns li.upl-btn a:hover, #navBar .middleNav .search-btns li.login a:hover, #navBar .middleNav .search-btns li.betubeSearch i:hover, .light-off-menu .off-social a:hover, #navBar .navFull .topbar-light-dark li.active a, #navBar .navFull-v2 .top-bar-light .search-btn li.search-active i, .pagination > .page-numbers.current, .pagination > li.current{     background-color: #f3f6f8;
    box-shadow: 4px 0 0 #e96969 inset, 0 -1px 0 #f3f6f8 inset; } .blog-post .blog-post-heading p span a:hover, .blog-post .blog-post-heading h3 a:hover, .category-heading .cat-head i, .content .main-heading .head-title i, .profile-inner .heading i, .topProfile .profile-stats .profile-author-stats ul li div.li-text p.number-text, .content .head-text h4 i, input[type='radio']:checked + .customLabel::before, #navBar .top-bar li.active a i, #navBar .top-bar .menu > li:not(.menu-text) > a:hover i, #navBar .top-bar .dropdown.menu .submenu li a:hover i, #breadcrumb .breadcrumbs li i, #breadcrumb .breadcrumbs li a:hover, .sidebar .widgetBox .widgetContent .twitter-carousel .twitter-item i, .sidebar .widgetBox .widgetContent .twitter-carousel .twitter-item span a, .sidebar .widgetBox .widgetContent .accordion .accordion-content ul li i, #footer-bottom .btm-footer-text p a, .singlePostDescription .description ul li a, a.liked, .light-off-menu .menu .active > a i, .topBar .topBarMenu .menu li a:hover, .topBar .topBarMenu .menu li a:hover i, #navBar .navBlack .topbar-light-dark .dropdown.menu .submenu li a:hover i, #navBar .navFull .topbar-light-dark .topnews .newsTicker i, #navBar .navFull .topbar-light-dark .topnews .newsTicker #newsBar li a:hover, #navBar .topbar-full .topnews .newsTicker #newsBar li a:hover, #navBar .topbar-dark .topnews .newsTicker i{ color: #e96969 !important; } .profile-inner .profile-videos .profile-video .media-object .video-btns a.video-btn:hover, .pagination span.current, .pagination a:hover, #navBar .top-bar .search-btn li.upl-btn a:hover, .SinglePostStats .media-object .social-share .post-like-btn form button:hover, .SinglePostStats .media-object .author-des .subscribe button:hover, #navBar .middleNav .search-btns li.upl-btn a:hover, #navBar .middleNav .search-btns li.login a:hover, .pagination > .page-numbers.current{ border-color:#e96969 !important; } .top-button .menu li.dropdown-login .login-form{ border-color:#e96969#ececec #ececec !important; } #navBar .navFull-v2 .top-bar-light .search-btn li.betubeSearch i:hover{ border-color:#e96969 !important; } #navBar .top-bar li.active a, #navBar .top-bar .menu > li:not(.menu-text) > a:hover, #randomMedia .random-media-head .tabs li.is-active a, #randomMedia .random-media-head .tabs li a:hover{ border-bottom: 2px solid #e96969 !important; } .sidebar .widgetBox .widgetContent .profile-overview a.button:hover, .profile-settings .setting-form .setting-form-inner .button:hover, .submit-post button[type='submit']:hover{ border-bottom: 3px solid #e96969 !important; } #navBar .top-bar .dropdown.menu .submenu{ border-top: 2px solid #e96969 !important; } a:hover, a{ color: #e96969; } .light-off-menu .off-menu-close{ background-color: #e96969 !important; } .button, .top-button .menu li a{ background-color: #444444 !important; } .blog-post .blog-post-heading h3 a, h1, h2, h3, h4, h5, h6, .sidebar .widgetBox .widgetContent .video-box .video-box-content h6 a, .sidebar .widgetBox .widgetContent .media-object .media-object-section .media-content h6 a, .SinglePostStats .media-object .author-des .post-title h4, .SinglePostStats .media-object .author-img-sec p a, .profile-inner .profile-videos .profile-video .media-object .video-content h5 a{ color: #444444; } #breadcrumb{ background: #444444; } #breadcrumb .breadcrumbs li a, #breadcrumb .breadcrumbs li, ul.breadcrumbs{ color: #aaaaaa !important; } #verticalSlider{ background: #303030 !important; } .sidebar .sidebarBg{ background: #f0f0f0 !important; } footer{ background: #444444 !important; } footer .widgetBox .widgetTitle h5{ color: #ececec !important; } footer .widgetBox .textwidget, footer .widgetBox .tagcloud a, footer .widgetBox ul li a, footer .widgetBox .widgetContent .media-object .media-object-section .media-content h6 a, footer .widgetBox .widgetContent .media-object .media-object-section .media-content p span, #footer-bottom .btm-footer-text p, footer .widgetBox .item.twitter-item i, footer .widgetBox .item.twitter-item span{ color: #aaaaaa !important; } footer .widgetBox .tagcloud a{ background: #6c6c6c !important; } #footer-bottom{ background: #2e2e2e !important; } #betubeloader-animation{ background-image:url(../wp-content/uploads/2016/10/betube-loader.gif) !important; } #betubeloader-container{ background-color: #ffffff !important; } </style><style type="text/css" title="dynamic-css" class="options-output">body{font-family:"Open Sans";line-height:24px;font-weight:400;font-style:normal;color:#6c6c6c;font-size:13px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}h1{font-family:"Open Sans";line-height:36px;font-weight:700;font-style:normal;color:#444;font-size:36px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1,{opacity: 0;}.ie.wf-loading h1,{visibility: hidden;}h2{font-family:"Open Sans";line-height:30px;font-weight:700;font-style:normal;color:#444;font-size:30px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2,{opacity: 0;}.ie.wf-loading h2,{visibility: hidden;}h3{font-family:"Open Sans";line-height:24px;font-weight:700;font-style:normal;color:#444;font-size:24px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3,{opacity: 0;}.ie.wf-loading h3,{visibility: hidden;}h4{font-family:"Open Sans";line-height:18px;font-weight:700;font-style:normal;color:#444;font-size:18px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4,{opacity: 0;}.ie.wf-loading h4,{visibility: hidden;}h5{font-family:"Open Sans";line-height:16px;font-weight:700;font-style:normal;color:#444;font-size:16px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5,{opacity: 0;}.ie.wf-loading h5,{visibility: hidden;}h6{font-family:"Open Sans";line-height:14px;font-weight:700;font-style:normal;color:#444;font-size:14px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6,{opacity: 0;}.ie.wf-loading h6,{visibility: hidden;}
a:hover, a {
    text-decoration: none;
    color: #e96969;
}
.search {
       width: 195px;
		height:33px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 20px 20px 20px 50px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.search:focus {
    width: 100%;
}
.image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 80px;
    cursor: pointer;
}
.fa{

    margin-right: 10px;
}
.cpp{
	
	color: #657786;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
    margin-left: 2px;
    position: relative;
    vertical-align: text-bottom;
}

.side
{
	    font-size: 12px;
    color: #666 !important;
    font-weight: 700;
    cursor: default;

    background-color: #f0f0f000 !important;
    border: 0px solid #7728280a;
}
.side:hover 
{

	      color: #00864f !important;
}

.bbb:hover 
{

	    background: #e8faf2  !important;
}

.bbb
{

	    padding: 0px 9px;
}
[contentEditable=true]:empty:not(:focus):before
{
    content:attr(data-text)
}
.notific{
	
    background-color: #00864f;
    color: #fff;
    border: 1px solid #ffffffe8;
    border-radius: 33px;
    margin-top: 12px;
    margin-left: 28px;
    padding: 3px;
    font-size:10px;
    position: absolute;
}
.subh{
	background-color: #0000 !important;
	color: #8f8f8f !important;
	border: 0px solid #7728280a;
	font-weight: 400;
	font-style: normal;
	
}
.menu-text {
		padding: 0.1rem 1rem;
}
.tabs-title > a {
       padding: 0;
    border: 0;
    border-bottom: 1px solid #e6e6e6;
}
.msg-search-form__title-bar-title {
    position: relative;
    top: 0;
    padding: 0;
    
    height: 44px;
}
.visually-hidden {
    display: block;
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    white-space: nowrap;
    width: 1px;
}
.msg-search-form__search-field[type=search] {
    background: #fff;
    padding: 0 48px;
    -webkit-appearance: none;
    border: none;
    border-bottom: 1px solid #cdcfd2;
    z-index: 0;
    position: relative;
    font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol,Hiragino Kaku Gothic Pro,Meiryo,Hiragino Sans GB W3,Noto Naskh Arabic,Droid Arabic Naskh,Geeza Pro,Simplified Arabic,Noto Sans Thai,Thonburi,Dokchampa,Droid Sans Thai,Droid Sans Fallback,'.SFNSDisplay-Regular',Heiti SC,Microsoft Yahei;
    font-size: 16px;
    transition-duration: 334ms;
    transition-property: border-color,box-shadow;
    box-shadow: none;
    border-radius: 2px;
    width: 100%;
    outline: 0;
    height: 43px;
    box-sizing: border-box;
    background-color: transparent;
    color: rgba(0,0,0,.9);
}
.msg-search-form__search-icon {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 1;
}
.msg-search-form__cancel-search, .msg-search-form__choose-filters {
    background: 0 0;
    color: rgba(0,0,0,.6);
    position: absolute;
    top: 10px;
    right: 12px;
}
.inner-video .tabs .tabs-title > a:focus, .tabs-title > a[aria-selected="true"] {
    background: #e1e9ee80   !important;
    color: #FFFFFF !important;
}
.cen {
	    width: 32px;
    height: 32px;
    box-sizing: border-box;
    background-clip: content-box;
    border: 3px solid transparent;
    border-radius: 49.9%;
}
.sidename{
	    padding-left: 5%;
    color: #000;
	text-transform: capitalize;
    font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol,Hiragino Kaku Gothic Pro,Meiryo,Hiragino Sans GB W3,Noto Naskh Arabic,Droid Arabic Naskh,Geeza Pro,Simplified Arabic,Noto Sans Thai,Thonburi,Dokchampa,Droid Sans Thai,Droid Sans Fallback,'.SFNSDisplay-Regular',Heiti SC,Microsoft Yahei;
    font-size: 14px;
}
.sidemsg
{
	    padding-left:71px;
    margin-top: -21px;
    color: #0000008a !important;
    font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol,Hiragino Kaku Gothic Pro,Meiryo,Hiragino Sans GB W3,Noto Naskh Arabic,Droid Arabic Naskh,Geeza Pro,Simplified Arabic,Noto Sans Thai,Thonburi,Dokchampa,Droid Sans Thai,Droid Sans Fallback,'.SFNSDisplay-Regular',Heiti SC,Microsoft Yahei;
    font-size: 13px;
    font-weight: 400;
	text-transform: capitalize;
}
.ember-text-area{
	
	    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-property: height;
    transition-duration: 167ms;
    display: flex;
    height: 100%;
    min-height: 40px;
    padding: 12px 12px 0;
    border: none;
    resize: none;
    white-space: pre-wrap;
    word-wrap: break-word;
    box-sizing: border-box;
    top: 0;
    left: 0;
    font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol,Hiragino Kaku Gothic Pro,Meiryo,Hiragino Sans GB W3,Noto Naskh Arabic,Droid Arabic Naskh,Geeza Pro,Simplified Arabic,Noto Sans Thai,Thonburi,Dokchampa,Droid Sans Thai,Droid Sans Fallback,'.SFNSDisplay-Regular',Heiti SC,Microsoft Yahei;
    font-size: 14px;
    line-height: 20px;
    color: rgba(0,0,0,.9);
}
.msg-form__footer
{
	    background-color: #f3f6f8 !important;
    padding-bottom: 48px;
    border-top: 1px solid #cdcfd2;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
    padding: 18px 8px;
}
.msg-form__send-button{
	
	    background-color: #0073b1;
    border-radius: 2px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-weight: 600;
    height: 24px;
    line-height: 24px;
    padding: 0 16px;
    position: relative;
    transition-duration: 167ms;
    transition-property: background-color,box-shadow,color;
    transition-timing-function: cubic-bezier(0,0,.2,1);
    vertical-align: middle;
    z-index: 0;
}
.newfrnd{
	font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol;
    font-size: 14px;
    line-height: 20px;
    font-weight: 400;
    transition-duration: 334ms;
    transition-property: border-color,box-shadow;
    box-shadow: none;
    border-radius: 2px;
    border: 1px solid rgba(0, 0, 0, 0);
    padding: 0 10px;
    width: 100%;
    outline: 0;
    height: 32px;
    box-sizing: border-box;
    background-color: transparent;
    color: rgba(0,0,0,.9);
	    margin: 7px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta charset="UTF-8" />	
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">			
		<meta name="theme-color" content="#444444">					
			<link rel="icon" href="../wp-content/themes/betube/favicon.png">
			<link href="../wp-content/themes/betube/assets/images/apple-icon-touch.html" rel="apple-touch-icon" />
			<meta name="msapplication-TileColor" content="#444444">
			<meta name="msapplication-TileImage" content="../wp-content/themes/betube/favicon.png">
	    	<meta name="theme-color" content="#444444">
	    
		<link rel="pingback" href="../xmlrpc.php">
			<meta property="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare faucibus dignissim. Pellentesque at auctor tortor. Aliquam nec eleifend neque."/>
			
	<title>admin &#8211; BeTube Video WordPress Theme</title>
                       
                        <link rel='dns-prefetch' href='http://maps.googleapis.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="BeTube Video WordPress Theme &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="BeTube Video WordPress Theme &raquo; Comments Feed" href="../comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="BeTube Video WordPress Theme &raquo; Posts by admin Feed" href="feed/index.html" />
		<script type='text/javascript' src="add.js" ></script>
  <script type='text/javascript' src="jsfiels.js" ></script>
  
  <script type='text/javascript' src="opratonsjs.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--js files in all chats-->
  <script type='text/javascript' src='../wp-content/themes/betube/js/app125b.js?ver=4.7.4'></script>
<script type='text/javascript' src='../wp-content/themes/betube/vendor/foundation-sites/dist/foundationf731.js?ver=6.2.1'></script>
<script type='text/javascript' src='../wp-content/themes/betube/assets/js/scripts125b.js?ver=4.7.4'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min125b.js?ver=4.7.4'></script>
 <script type="text/javascript">
 	  
  $( function() {
    $( ".demo" ).dialog();
  } );
 </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="add.js" ></script>
  <script type='text/javascript' src="jsfiels.js" ></script>
  <script type='text/javascript' src="diaplayall.js" ></script>
  <script type='text/javascript' src="opratonsjs.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <!--js files in all chats-->
<link rel='stylesheet' id='layerslider-css'  href='../wp-content/plugins/LayerSlider/static/css/layerslider76f9.css?ver=5.6.8' type='text/css' media='all' />
<link rel='stylesheet' id='ls-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='betube-plugin-custom-css'  href='../wp-content/plugins/betube-ads/css/betube-plugin-custom125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-four-css'  href='../wp-content/plugins/font-awesome-4-menus/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='nextend_fb_connect_stylesheet-css'  href='../wp-content/plugins/nextend-facebook-connect/buttons/facebook-btn125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel='stylesheet' id='nextend_google_connect_stylesheet-css'  href='../wp-content/plugins/nextend-google-connect/buttons/google-btn125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel='stylesheet' id='nextend_twitter_connect_stylesheet-css'  href='../wp-content/plugins/nextend-twitter-connect/buttons/twitter-btn125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel='stylesheet' id='parent-style-css'  href='../wp-content/themes/betube/style125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel='stylesheet' id='child-style-css'  href='../wp-content/themes/betube-child/style125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel='stylesheet' id='custom-css'  href='../wp-content/themes/betube-child/css/custom125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel='stylesheet' id='app-css'  href='../wp-content/themes/betube/css/app68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='betube-theme-css'  href='../wp-content/themes/betube/css/theme68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='hover-min-css'  href='../wp-content/themes/betube/css/hover-min68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='jquery.kyco.easyshare-css'  href='../wp-content/themes/betube/css/jquery.kyco.easyshare68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='ninja-slider-css'  href='../wp-content/themes/betube/css/ninja-slider68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='owl.carousel-css'  href='../wp-content/themes/betube/css/owl.carousel68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='owl.theme.default-css'  href='../wp-content/themes/betube/css/owl.theme.default68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='betube-responsive-css'  href='../wp-content/themes/betube/css/responsive68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='thumbnail-slider-css'  href='../wp-content/themes/betube/css/thumbnail-slider68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='simple-likes-public-css'  href='../wp-content/themes/betube/css/simple-likes-public68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='../wp-content/themes/betube/css/font-awesome.min68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='motion-ui-css'  href='../wp-content/themes/betube/vendor/motion-ui/dist/motion-ui.min125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel='stylesheet' id='site-css'  href='../wp-content/themes/betube/assets/css/style125b.css?ver=4.7.4' type='text/css' media='all' />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css"> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type='text/javascript' src="displayall.js" ></script>
<meta name="generator" content="Powered by LayerSlider 5.6.8 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
<!-- LayerSlider updates and docs at: https://kreaturamedia.com/layerslider-responsive-wordpress-slider-plugin/ -->
<link rel='https://api.w.org/' href='../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.7.4" />	
<script type="text/javascript" src="jsfiels.js"></script>
</head>
	
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
	<body class="archive author author-admin author-1">
		<!--betubeLoader-->
		
				<div id="betubeloader-container">
		  <div id="betubeloader-animation">&nbsp;</div>
		</div>
				<!--betubeLoader-->
		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<div class="off-canvas position-left light-off-menu " id="offCanvas-responsive" data-off-canvas>
	<div class="off-menu-close">
        <h3>Menu</h3>
        <span data-toggle="offCanvas-responsive"><i class="fa fa-times"></i></span>
    </div><!--off-menu-close-->	
	

<li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="../about/index.html"><i class="fa fa-user"></i><span class="fontawesome-text"> About</span></a></li>

<li id="menu-item-59" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-59"><a href="../blog/index.html"><i class="fa fa-edit"></i><span class="fontawesome-text"> Blog</span></a></li>

</ul>	<div class="responsive-search">
		<form role="search" method="get" class="search-form" action="http://demo.beetube.me/">
			<div class="input-group">
				<input class="input-group-field search-field" type="search" placeholder="Search..." value="" name="s" title="Search for:">
				<div class="input-group-button">
					<button type="submit" name="search" value="Search"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</form>		
	</div><!--responsive-search-->	
	<div class="off-social">
		<h6>Get Socialize</h6>
				<a href="http://www.facebook.com/emc2india"><i class="fa fa-facebook"></i></a>
				
				<a href="http://www.twitter.com/emc2india"><i class="fa fa-twitter"></i></a>
				
				
				
				<a href="https://www.linkedin.com/company/13343984/"><i class="fa fa-linkedin"></i></a>
				
				
			
		
	</div><!--Get Socialize-->
	<!--Only for Header V3-->
		<!--Only for Header V3-->
</div>
<!--Only for Header V3 and V4-->
				<!--***************-->
				
				
				
					<div class="" style=" line-height: 14px;background: #fff !important;min-height: 100%;transition: transform 0.5s ease;backface-visibility: hidden;z-index: 1;padding-bottom: 0.1px;box-shadow: 0 0 10px rgba(10, 10, 10, 0); " data-off-canvas-content>
						
						<header class="header" role="banner" >
								
							 <!-- This navs will be applied to the topbar, above all content 
								  To see additional nav styles, visit the /parts directory -->
							 <!-- By default, this menu will use off-canvas for small
		 and a topbar for medium-up -->
	<section id="top" class="topBar show-for-large" style="padding:0px;border-bottom: 1px solid #ececec00;background: #fff !important; display: block !important;">
		<div class="row" style="height:42px   ">
			<div class="medium-4 columns">
							<!--<div class="socialLinks">
				
									<a href="http://www.facebook.com/zinkame"><i class="fa fa-facebook"></i></a>
									
									<a href="http://www.twitter.com/zinkame"><i class="fa fa-twitter"></i></a>
									
									<a href="https://www.linkedin.com/company/13343984/"><i class="fa fa-linkedin"></i></a>
							</div><!--End socialLinks-->
							
							<ul class="menu" style="    padding-left: 37px;padding-top: 5px;">
							<li class="menu-text">
							<a href="http://zinka.me" style="padding:0"><img src="../mentors/wp-content/uploads/2016/07/logo.png" alt="Zinka Logo" /></a>								
							</li>
										
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71">
	 
	
	 <i style="font-size: 17px;position: absolute;    margin: 9px 0px 0px 10px;" class="fa fa-search"></i> 
	 <input type="text" class="search1" name="search" height="15px " placeholder="Search.." style=" color: #6c6c6c;padding-left: 45px;font-size: 0.9rem;padding: 0px 0px 0px 50px;
		border: 01px solid #ccccccb5;
		border-radius:19px;    height: 2.2rem;
	}">
	
	


	</li>
										
							</ul>	
									
							<div id="search-list" style="width:30%;height:auto;margin-left:13%;background:#fff;padding:2%;border:1px solid #e0e0e0;position:absolute;z-index:100;"> <p>Searching...</p>
			
		</div>
							
						</div><!--End social Medium6-->
						
					<div class="medium-7 columns">
				<div class="top-button">
								<ul class="menu float-right" style="margin-top: -21px;">
			<li class="menu-text" style=""><div class="profile-author-name float-left" ><p>
			<a style="background-color: #fff0 !important;
    padding: 0px !important;    color: #000000 !important;" role="tab" aria-controls="" aria-selected="false" id="-label">Home</a>
			
			
			</p></div></li>		
			<li class="menu-text1" ><div style="width: 180%;" class="profile-author-name float-left" ><a style="background-color: #fff0 !important;
    padding: 0px !important;" role="tab" aria-controls="" aria-selected="false" href="http://theblackbucks.com/betu/livementors" id="-label"><p >Zinka <div><button class="notific" style=" margin-top: -47px;">Live</button></div></p></a></div></li>
			<li class="menu-text1" style=""><div class="profile-author-name float-left" ><a style="background-color: #fff0 !important;
    padding: 0px !important;" role="tab" aria-controls="" aria-selected="false" href="../training/index.php" id="-label"><p >Trainings</p></a></div></li>
			<li class="menu-text1" style=""><div class="profile-author-name float-left" ><a style="background-color: #fff0 !important;
    padding: 0px !important;" role="tab" aria-controls="" aria-selected="false" id="-label"><p >Events</p></a></div></li>
			<li class="menu-text1" style=""><div class="profile-author-name float-left" ><a style="background-color: #fff0 !important;
    padding: 0px !important;" role="tab" aria-controls="" aria-selected="false" href="http://theblackbucks.com/betu/socitys/demo" id="-label"><p >Societies </p></a></div></li>
			<li class="menu-text1" style=""><div class="profile-author-name float-left" ><a style="background-color: #fff0 !important;
    padding: 0px !important;" role="tab" aria-controls="" aria-selected="false" id="-label"><p >Internships</p></a></div></li>
			<!--<li class="menu-text" style=""><div class="profile-author-name float-left" ><p >Jobs</p></div></li>-->
						
				
				
										 
									
						<!--li class="menu-text" style=""><div class="profile-author-name float-left">
						
						<div><button class="notific">10</button></div>
					<img width="75%" style=" border-left: 2px solid #e6e6e6;   float: left;     margin: 20px 0 0 10px;
" src="feed/Messaging.png"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>	
						</li-->
								


<li class="menu-text" style="padding-right: 0;"><div class="profile-author-name float-left">
						
						
						<div class="dropdown"><div><button style="margin-top: 4px;margin-left: 14px;" class="notific">10</button></div>
    <p style="background: #fff0 !important;  border-color: #0000;    margin-left: -41px;
    margin-top: -5px;
    white-space: normal;" class="dropdown-toggle"  id="menu1" data-toggle="dropdown">
	<img width="75%" style=" border-left: 2px solid #e6e6e6;   float: left; cursor: pointer;margin: 12px 0 0 38px;
    width: 33px;" src="feed/Messaging.png"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </p>
	

	
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="margin-left: -6pc;margin-top: -1pc;">
       

      
	  <li role="presentation" ><a role="menuitem" style="padding:9px 5px; background-color: #fff !important;line-height: 24px;white-space: nowrap;word-break: break-all;color: #14171a;font-size: 14px;font-weight: bold;" tabindex="-1" href="#"> 
	  Notifications Dropdown </a></li>

      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" style="padding:9px 5px;background-color: #fff !important;line-height: 24px;white-space: nowrap;word-break: break-all;color: #14171a;font-size: 14px;font-weight: bold;" tabindex="-1" href="#"> 
       
       Notifications Dropdown </a></li>
    </ul>
  </div>
  
						</div>	
						
                                   
  

						</li>

<li id="notifi" class="menu-text"><i class="fa fa-globe" style="font-size:24px"><span id="notificount" style="background:#fa3e3e;font-size:12px;position:absolute;color:#fff;padding:1px;border-radius:2px"></span></i></li>	



								
						<li class="menu-text" style=""><div class="profile-author-name float-left">
						<div><button class="notific" style="margin-left:0.2%">2</button></div>
						
							<img width="75%" style="    float: left;
    margin: 20px 0 0 -11px;
" src="feed/Notifications2.png"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>	
						</li>
										
						<li class="menu-text" style=""><div class="profile-author-name float-left">
						
						
						<div class="dropdown">
    <button style="background: #fff !important;  border-color: #0000;    margin-left: -41px;
    margin-top: -20px;" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
	
<img style="border-radius: 21px;" src="<?php echo $_SESSION['userData']['photo'];?>" width="35" height="40" class="profileimg" alt="Lights">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </button>
	

	
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="margin-left: -6pc;">
       

	 <li role="presentation" >
	  <a role="menuitem" style="padding:9px 5px; background-color: #fff !important;line-height: 24px;white-space: nowrap;word-break: break-all;color: #14171a;font-size: 14px;font-weight: bold;" tabindex="-1" href="<?php if($_SESSION['userData']['user_type']=='user'){echo '../students/resume/';}else{ echo '../mentors/resume/'; }?>"> 
	  <img style="float: left; margin: -5% 10% 0% 0%; " src="feed/Profile.png">
Profile </a>
	  </li>
      
	  <li role="presentation" ><a role="menuitem" style="padding:9px 5px; background-color: #fff !important;line-height: 24px;white-space: nowrap;word-break: break-all;color: #14171a;font-size: 14px;font-weight: bold;" tabindex="-1" href="#"> 
	  <img style="float: left;     margin: -5% 10% 0% 0%" src="feed/Profile.png">
	  Goals </a></li>
      <li role="presentation" ><a role="menuitem" style="padding:9px 5px; background-color: #fff !important;line-height: 24px;white-space: nowrap;word-break: break-all;color: #14171a;font-size: 14px;font-weight: bold;" tabindex="-1" href="../mentors/resume/logout.php">
       <img style="float: left;     margin: -5% 10% 0% 0%" src="feed/Profile.png">
      Log out</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" style="padding:9px 5px;background-color: #fff !important;line-height: 24px;white-space: nowrap;word-break: break-all;color: #14171a;font-size: 14px;font-weight: bold;" tabindex="-1" href="#"> 
       <img style="float: left;     margin: -5% 10% 0% 0%" src="feed/Home.png">
      About Us </a></li>
    </ul>
  </div>
  
						</div>	
						
                                   
  

						</li>
						
						
										
											</ul><!--End menu float-right-->
								</div><!--End top-button-->
			</div><!--End Medium6-->
			
		</div><!--End Row-->
	</section><!--End Top Section-->
				
						</header>
						
						
						
						
						
						
						 <!-- end .header --><br>
						 <div class="js-off-canvas-exit"></div></div><!--profile-stats-->
				<!--********************************************************-->
				<div class="off-canvas-content" data-off-canvas-content>
			
	
		
<div class="row" style="    max-width: 70rem;    padding-bottom: 2pc;">
	<!-- left sidebar -->
	<div class="large-3 columns" style=" margin-top: 33px;     border-left: 1px solid;
    border-left-color: rgb(205, 207, 210);
    border-top: 1px solid;
    border-top-color: rgb(205, 207, 210);  padding-left: 0;padding-right: 0;">
		<aside class="secBg sidebar" style="      margin-bottom: 0;
    padding-bottom: 0;  padding-top: 14px;">
			<div class="row">
				<!-- profile overview -->
				<div class="large-12 columns">
					<div class="widgetBox" style="padding: 0;">
						<div class="widgetTitle" style="    ">
							<h5 style="  padding-left:1pc;  padding-bottom: 16px;font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol,Hiragino Kaku Gothic Pro,Meiryo,Hiragino Sans GB W3,Noto Naskh Arabic,Droid Arabic Naskh,Geeza Pro,Simplified Arabic,Noto Sans Thai,Thonburi,Dokchampa,Droid Sans Thai,Droid Sans Fallback,'.SFNSDisplay-Regular',Heiti SC,Microsoft Yahei;font-size: 16px;font-weight: 600;    margin-bottom: 0;">Messaging</h5>
							<!--span class="userdetails "  id = "newid"  style="background: 0 0;color: rgba(0,0,0,.6);    position: absolute;    top: 10px;    right: 12px;">
							
							<a href="#" style="margin-bottom: 0;border-radius: 0;">
									<svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M17,13.75l2-2V20a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V6A1,1,0,0,1,4,5h8.25l-2,2H5V19H17V13.75Zm5-8a1,1,0,0,1-.29.74L13.15,15,7,17l2-6.15,8.55-8.55a1,1,0,0,1,1.41,0L21.71,5A1,1,0,0,1,22,5.71ZM17.93,7.58l-1.5-1.5-6.06,6.06,1.5,1.5Zm1.84-1.84-1.5-1.5L17.09,5.41l1.5,1.5Z" class="large-icon" style="fill: currentColor;    color: #2196F3;"></path></svg></a>
							</span-->
						</div>
						
						<div class="shared-title-bar__title msg-search-form__title-bar-title">

  <label for="search-conversations" class="visually-hidden">Search messages</label>
  <input name="searchTerm" type="search" placeholder="Search messages" id="search-conversations" class="msg-search-form__search-field Sans-15px-black-85% ember-text-field ember-view">
    <span class="msg-search-form__search-icon svg-icon-wrap"><li-icon aria-hidden="true" type="search-icon" size="small"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M14,12.67L11.13,9.8A5,5,0,1,0,9.8,11.13L12.67,14ZM3.88,7A3.13,3.13,0,1,1,7,10.13,3.13,3.13,0,0,1,3.88,7Z" class="small-icon" style="fill-opacity: 1"></path></svg></li-icon></span>
<div id="ember1186" class=" closed ember-view"><button type="button" aria-controls="ember1186-options" aria-expanded="false" data-control-name="filter_messages_by" id="ember1186-trigger" class="dropdown-trigger msg-search-form__choose-filters button-tertiary-small-round-muted ember-view">        <span class="svg-icon-wrap"><span class="visually-hidden">Filter messages</span><li-icon aria-hidden="true" type="filter-icon" size="small"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M15,2V4H6.72A2,2,0,0,1,3.28,4H1V2H3.28A2,2,0,0,1,6.72,2H15ZM11,6A2,2,0,0,0,9.28,7H1V9H9.28a2,2,0,0,0,3.45,0H15V7H12.72A2,2,0,0,0,11,6ZM5,11a2,2,0,0,0-1.72,1H1v2H3.28a2,2,0,0,0,3.45,0H15V12H6.72A2,2,0,0,0,5,11Z" class="small-icon" style="fill-opacity: 1"></path></svg></li-icon></span>
</button><ul id="ember1186-options" style="display: none;" class="msg-search-form__filters-dropdown ember-view" tabindex="-1"><!----></ul>
</div></div>



						
							

						<div class="widgetContent" style="    overflow-y: scroll;    height: 412px;">
						
						<!--$*$*$-->
						<ul class="tabs vertical" id="vert-tabs" data-tabs>
													
													
				                                  <?php require_once("add.php");
				                                          session_start();
				                                         $ob = new FriendActivites();
				                                         $userid = $_SESSION['userData']['id'];
				                                         $result = $ob->listofFriends($userid);
				                                         $i = 0;
				                                         $id =base64_decode($_GET['user']);
				                                         foreach($result as $key)
				                                         {
				                                         
				                                         if($userid != $key['userid'])
				                                         {
				                                         $i++; 
				                                         ?>
								<li class="userdetails "  id = "<?= $key['userid']; ?>" style="    box-shadow: 0 0 0 1px rgba(0,0,0,.1);<?php if($key['userid']==$id){ echo "background:#7fd4d1"; } ?>">
								
								<a href="#personone" style="margin-bottom: 0;border-radius: 0;" aria-selected="true">
							<div  style="height:75px;padding: 1pc;">
							
								<img style="width: 56px;    height: 56px;    border-radius: 49.9%;" src="<?= $key['photo']; ?>" alt="Author" class="center">
									<span class="sidename"><?= $key['username']." ".$key['lastname'];?></span>
									<p class="sidemsg">last message here</p>
									
									
									</div>
								</a>
								</li>
									<?php }} ?>				
								
														
															
							</ul>
										
						</div><!--widgetContent -->
					</div><!--widgetBox -->
				</div><!--Large12 -->
			</div><!--row-->
		</aside><!--aside-->
	</div><!--Large4-->
	<!-- left sidebar -->
	<!-- right side content area -->
	<div id="foo" class="large-6 columns profile-inner" style="float:left;padding-left: 0px;  border-right: 1px solid;border-right-color: rgb(205, 207, 210); border-top: 1px solid;border-top-color: rgb(205, 207, 210);">
		<div class="tabs-content vertical" data-tabs-content="vert-tabs">
			
			
			<!--$*$*$*$$*$*$*$*$*$*$*$**$*$*$*$*$*--->
				<div class="tabs-panel is-active" id="personone" style="display:block">
					<section id="ssd">
				<div class="row secBg" style="margin-left:0px">
				<?php require_once('add.php');
				     
				      //echo $id;
				      $ob = new FriendActivites();
				      $result = $ob->displayuser($id);
				      //print_r($result);
				       foreach($result as $key){
												   ?>
						<div class="large-12 columns" style="padding: 0;">
							<div class="heading" style="    padding: 0px;">
							<div style="padding: 12.5px;border-bottom: 1px solid #e0e0e0;">
								
								<h4 style=" padding-left:1pc;  font-family: -apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Lucida Grande,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Emoji,Segoe UI Symbol,Hiragino Kaku Gothic Pro,Meiryo,Hiragino Sans GB W3,Noto Naskh Arabic,Droid Arabic Naskh,Geeza Pro,Simplified Arabic,Noto Sans Thai,Thonburi,Dokchampa,Droid Sans Thai,Droid Sans Fallback,'.SFNSDisplay-Regular',Heiti SC,Microsoft Yahei;font-size: 16px;font-weight: 600;    margin-bottom: 0;" class="username"><?php echo $key['username']." ".$key['lastname'];?></h4>
								
								
								
						
							
						
								</div>
						
							<div style="height: 19pc;padding-top: 22px;overflow-y: scroll;" class="diaplaymess" id="<?=$id; ?>"></div><br>
																	<div id="ember2742" class="msg-form__attachment-previews ember-view"></div>


														<div id="ember2743" class="msg-form__compose-area relative ember-view"><label for="a11y-ember2743" class="msg-form__label visually-hidden">Compose a message</label>
														<div class="msg-form__textarea-clone visibility-hidden"></div>
					<textarea name="message" spellcheck="true" placeholder="Write a message or attach a file" id="" class="chat-box1 ember-text-area"></textarea>
												</div>
										<input type="hidden" id="chat_box2" class="chat_box2" value=<?=$id; ?>>					
										
												
										  <footer class="msg-form__footer">
											<div class="msg-form__left-actions display-flex" style="    display: flex;">
											<div id="ember2745"  style="    margin-right: 10px;" class="msg-form__upload-attachment inline-block mr1 ember-view"><input type="hidden" name="persist" value="true">
											<input type="hidden" name="upload_info" value="">
												<label for="attachment-ember2745" class="button-tertiary-medium-round-muted m0">
												<li-icon type="image-icon" size="large" role="img" aria-label="Attach an image"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M21,4H3A1,1,0,0,0,2,5V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V5A1,1,0,0,0,21,4ZM20,6V16.65l-3.7-3.53a0.44,0.44,0,0,0-.6,0L13.79,15,7.87,9.13a0.44,0.44,0,0,0-.62,0L4,12.4V6H20ZM4,18V13.64l3.57-3.59,5.91,5.82a0.44,0.44,0,0,0,.61,0L16,14l4,3.82V18H4Zm12-6a2,2,0,1,0-2-2A2,2,0,0,0,16,12Zm0-3.25A1.25,1.25,0,1,1,14.75,10,1.25,1.25,0,0,1,16,8.75Z" class="large-icon" style="fill: currentColor"></path></svg></li-icon>
												</label>
											<input id="attachment-ember2745" type="file" name="file" accept="image/*" data-control-name="image_select" class="msg-form__attachment-input visually-hidden">
											</div>

											<div id="ember2746"   style="    margin-right: 10px;" class="msg-form__upload-attachment inline-block ember-view"><input type="hidden" name="persist" value="true">
												<input type="hidden" name="upload_info" value="">
												<label for="attachment-ember2746" class="button-tertiary-medium-round-muted m0">
													<li-icon type="paperclip-icon" size="large" role="img" aria-label="Attach a file"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M8,6h9.5c3,0,5.5,2.5,5.5,5.5S20.5,17,17.5,17H5c-2.2,0-4-1.8-4-4s1.8-4,4-4h9.5c1.4,0,2.5,1.1,2.5,2.5S15.9,14,14.5,14H8v-2h6.5c0.3,0,0.6-0.1,0.6-0.4c0,0,0,0,0-0.1c0-0.3-0.3-0.5-0.5-0.5c0,0-0.1,0-0.1,0H5c-1-0.1-2,0.6-2.1,1.6c0,0.1,0,0.3,0,0.4c-0.1,1,0.7,1.9,1.7,2c0.1,0,0.3,0,0.4,0h12.6c1.9,0,3.5-1.5,3.5-3.3c0-0.1,0-0.1,0-0.2c0-1.9-1.4-3.4-3.3-3.5c-0.1,0-0.1,0-0.2,0H8V6z" class="large-icon" style="fill: currentColor;color: #6d6969;"></path></svg></li-icon>
												</label>
												<input id="attachment-ember2746" type="file" name="file" accept=".ai,.psd,.pdf,.doc,.docx,.csv,.zip,.rar,.ppt,.pptx,.pps,.ppsx,.odt,.rtf,.xls,.xlsx,.txt,.pub,.html,.7z,.eml" data-control-name="file_select" class="msg-form__attachment-input visually-hidden">
											</div>
											<div id="ember2747" class="tenor-gif__button relative mh1 ember-view">
												<button class="button-tertiary-medium-round-muted" data-ember-action="" data-ember-action-2748="2748">
													<li-icon aria-hidden="true" type="gif-icon" size="medium"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M13,18H11V6h2V18ZM22,8V6H16a1,1,0,0,0-1,1V18h2V13h4V11H17V8h5ZM2,7V17a1,1,0,0,0,1,1H8a1,1,0,0,0,1-1V12H5v2H7v2H4V8H7v2H9V7A1,1,0,0,0,8,6H3A1,1,0,0,0,2,7Z" class="large-icon" style="fill: currentColor;color: #6d6969;"></path></svg></li-icon>
												</button>
											</div>
											</div>
											<div class="msg-form__right-actions display-flex" style="    display: flex;">
											  <div id="ember2749" class="ember-view" style="    padding-right: 10px;">
											  <button type="submit" data-control-name="send" id="<?=$key['id']?>" class="sendmess msg-form__send-button button-primary-small">
												Send
											  </button>
											</div>
											  <!--div id="ember2750" class="msg-form__hovercard-container ml2 relative ember-view" style="    margin-top: 6px;">
												<button aria-expanded="false" class="msg-form__send-toggle button-tertiary-small-round-muted" data-ember-action="" data-ember-action-2751="2751">
												  <li-icon type="ellipsis-horizontal-icon" class="icon" size="small" role="img" aria-label="Open send options"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M2,7H4V9H2V7ZM7,9H9V7H7V9Zm5-2V9h2V7H12Z" class="small-icon" style="fill-opacity: 1;color:#6d6969;"></path></svg></li-icon>
												</button>
												</div-->
											</div>
										  </footer>

							
								
								<br> 
							</div>								
						</div><!--Heading-->
							<?php } ?>
				</div>
				</section>
			</div>
			<!--$*$*$*$$*$*$*$*$*$*$*$**$*$*$*$*$*--->	
			
			
			<!--$*$*$*$$*$*$*$*$*$*$*$**$*$*$*$*$*--->
				<div class="tabs-panel is-active" id="persontwo" style="display:none" >
					<section id="ssd">
				<div class="row secBg" style="margin-left:0px">
			
						<div class="large-12 columns" style="padding: 0;">
							<div class="heading" style="    padding: 0px;">
							<div style="border-bottom: 1px solid #e0e0e0;">
								<input  type="text" class="newfrnd" name="search2" id="search2"  placeholder="Type a name" >
								 
			
								</div>
							<div id="search-list1" style="width:40%;height:auto;background:#fff;padding:1%;    border: 1px solid rgb(206, 198, 198);position:absolute;z-index:100;"> <p>Searching...</p>
							</div>
							
							<div style="height: 19pc;padding-top: 22px;overflow-y: scroll;" class="newdiaplaymess" ></div><br>
							<form id="jobs" style="border-top: 2px solid #0073b1;">  
																	<div id="ember2742" class="msg-form__attachment-previews ember-view"></div>


														<div id="ember2743" class="msg-form__compose-area relative ember-view"><label for="a11y-ember2743" class="msg-form__label visually-hidden">Compose a message</label>
														<div class="msg-form__textarea-clone visibility-hidden"></div>
																<textarea name="message" spellcheck="true" placeholder="Write a message or attach a file" id="a11y-ember2743" class="ember-text-area"></textarea>
														</div>
														
														
										  <footer class="msg-form__footer">
											<div class="msg-form__left-actions display-flex" style="    display: flex;">
											<div id="ember2745"  style="    margin-right: 10px;" class="msg-form__upload-attachment inline-block mr1 ember-view"><input type="hidden" name="persist" value="true">
											<input type="hidden" name="upload_info" value="">
												<label for="attachment-ember2745" class="button-tertiary-medium-round-muted m0">
												<li-icon type="image-icon" size="large" role="img" aria-label="Attach an image"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M21,4H3A1,1,0,0,0,2,5V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V5A1,1,0,0,0,21,4ZM20,6V16.65l-3.7-3.53a0.44,0.44,0,0,0-.6,0L13.79,15,7.87,9.13a0.44,0.44,0,0,0-.62,0L4,12.4V6H20ZM4,18V13.64l3.57-3.59,5.91,5.82a0.44,0.44,0,0,0,.61,0L16,14l4,3.82V18H4Zm12-6a2,2,0,1,0-2-2A2,2,0,0,0,16,12Zm0-3.25A1.25,1.25,0,1,1,14.75,10,1.25,1.25,0,0,1,16,8.75Z" class="large-icon" style="fill: currentColor"></path></svg></li-icon>
												</label>
											<input id="attachment-ember2745" type="file" name="file" accept="image/*" data-control-name="image_select" class="msg-form__attachment-input visually-hidden">
											</div>

											<div id="ember2746"   style="    margin-right: 10px;" class="msg-form__upload-attachment inline-block ember-view"><input type="hidden" name="persist" value="true">
												<input type="hidden" name="upload_info" value="">
												<label for="attachment-ember2746" class="button-tertiary-medium-round-muted m0">
													<li-icon type="paperclip-icon" size="large" role="img" aria-label="Attach a file"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M8,6h9.5c3,0,5.5,2.5,5.5,5.5S20.5,17,17.5,17H5c-2.2,0-4-1.8-4-4s1.8-4,4-4h9.5c1.4,0,2.5,1.1,2.5,2.5S15.9,14,14.5,14H8v-2h6.5c0.3,0,0.6-0.1,0.6-0.4c0,0,0,0,0-0.1c0-0.3-0.3-0.5-0.5-0.5c0,0-0.1,0-0.1,0H5c-1-0.1-2,0.6-2.1,1.6c0,0.1,0,0.3,0,0.4c-0.1,1,0.7,1.9,1.7,2c0.1,0,0.3,0,0.4,0h12.6c1.9,0,3.5-1.5,3.5-3.3c0-0.1,0-0.1,0-0.2c0-1.9-1.4-3.4-3.3-3.5c-0.1,0-0.1,0-0.2,0H8V6z" class="large-icon" style="fill: currentColor;color: #6d6969;"></path></svg></li-icon>
												</label>
												<input id="attachment-ember2746" type="file" name="file" accept=".ai,.psd,.pdf,.doc,.docx,.csv,.zip,.rar,.ppt,.pptx,.pps,.ppsx,.odt,.rtf,.xls,.xlsx,.txt,.pub,.html,.7z,.eml" data-control-name="file_select" class="msg-form__attachment-input visually-hidden">
											</div>
											<div id="ember2747" class="tenor-gif__button relative mh1 ember-view">
												<button class="button-tertiary-medium-round-muted" data-ember-action="" data-ember-action-2748="2748">
													<li-icon aria-hidden="true" type="gif-icon" size="medium"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M13,18H11V6h2V18ZM22,8V6H16a1,1,0,0,0-1,1V18h2V13h4V11H17V8h5ZM2,7V17a1,1,0,0,0,1,1H8a1,1,0,0,0,1-1V12H5v2H7v2H4V8H7v2H9V7A1,1,0,0,0,8,6H3A1,1,0,0,0,2,7Z" class="large-icon" style="fill: currentColor;color: #6d6969;"></path></svg></li-icon>
												</button>
											</div>
											</div>
											<div class="msg-form__right-actions display-flex" style="    display: flex;">
											  <div id="ember2749" class="ember-view" style="    padding-right: 10px;">
											  <button type="submit" data-control-name="send" disabled="" class="msg-form__send-button button-primary-small">
												Send
											  </button>
											</div>
											  <div id="ember2750" class="msg-form__hovercard-container ml2 relative ember-view" style="    margin-top: 6px;">
												<button aria-expanded="false" class="msg-form__send-toggle button-tertiary-small-round-muted" data-ember-action="" data-ember-action-2751="2751">
												  <li-icon type="ellipsis-horizontal-icon" class="icon" size="small" role="img" aria-label="Open send options"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false"><path d="M2,7H4V9H2V7ZM7,9H9V7H7V9Zm5-2V9h2V7H12Z" class="small-icon" style="fill-opacity: 1;color:#6d6969;"></path></svg></li-icon>
												</button>
												</div>
											</div>
										  </footer>

							</form>
								
								<br> 
							</div>								
						</div><!--Heading-->
				</div>
				</section>
			</div>
			<!--$*$*$*$$*$*$*$*$*$*$*$**$*$*$*$*$*--->	




			
			

		</div><!--tabs-content-->
	</div><!--IF FOO-->
	
</div><!--End Row-->

										
																<a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-double-up"></i></a>
										<div id="footer-bottom" style="background-color:#363636 !important">
											<div class="btm-footer-text text-center">
											<div class="container"><p style="line-height:2.5em">
         	<a href="" class="footer-link" style="padding:5px;color:#fff !important;font-size:14px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">About</a>
         	<a href="" class="footer-link" style="padding:5px;color:#fff !important;font-size:14px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">Help Center</a>
         	<a href="" class="footer-link" style="padding:5px;color:#fff !important;font-size:14px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">Business Solutions</a>
         	<a href="" class="footer-link" style="padding:5px;color:#fff !important;font-size:14px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">Mentors</a>
         	<a href="" class="footer-link" style="padding:5px;color:#fff !important;font-size:14px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">Careers</a>
         	<a href="" class="footer-link" style="padding:5px;color:#fff !important;font-size:14px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">User Agreement</a>
         	<a href="" class="footer-link" style="padding:5px;color:#fff !important;font-size:14px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">Privacy Policy</a>
            <a href="" class="footer-link" style="padding:5px;color:#fff !important;font-size:14px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">Contact</a></p>
             
	  </div>
							<p style="color:#fff !important">© 2016 Zinka Online Services Private Limited - All Rights Reserved.</p>
						</div><!--CopyRightText -->
											</div><!--footer-bottom -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
			<!--[if lte IE 8]>
	<style>
		.attachment:focus {
			outline: #1e8cbe solid;
		}
		.selected.attachment {
			outline: #1e8cbe solid;
		}
	</style>
	<![endif]-->
	<script type="text/html" id="tmpl-media-frame">
		<div class="media-frame-menu"></div>
		<div class="media-frame-title"></div>
		<div class="media-frame-router"></div>
		<div class="media-frame-content"></div>
		<div class="media-frame-toolbar"></div>
		<div class="media-frame-uploader"></div>
	</script>

	

	<script type="text/html" id="tmpl-crop-content">
		<img class="crop-image" src="{{ data.url }}" alt="Image crop area preview. Requires mouse interaction.">
		<div class="upload-errors"></div>
	</script>

	<script type="text/html" id="tmpl-site-icon-preview">
		<h2>Preview</h2>
		<strong aria-hidden="true">As a browser icon</strong>
		<div class="favicon-preview">
			<img src="http://demo.beetube.me/wp-admin/images/browser.png" class="browser-preview" width="182" height="" alt="" />

			<div class="favicon">
				<img id="preview-favicon" src="{{ data.url }}" alt="Preview as a browser icon"/>
			</div>
			<span class="browser-title" aria-hidden="true">BeTube Video WordPress Theme</span>
		</div>

		<strong aria-hidden="true">As an app icon</strong>
		<div class="app-icon-preview">
			<img id="preview-app-icon" src="{{ data.url }}" alt="Preview as an app icon"/>
		</div>
	</script>


	
<script type='text/javascript' src='../wp-content/themes/betube/js/app125b.js?ver=4.7.4'></script>
<script type='text/javascript' src='../wp-content/themes/betube/vendor/foundation-sites/dist/foundationf731.js?ver=6.2.1'></script>
<script type='text/javascript' src='../wp-content/themes/betube/assets/js/scripts125b.js?ver=4.7.4'></script>


 <script type="text/javascript">
 	  
  $( function() {
    $( ".demo" ).dialog();
  } );
  
 </script>
	</body>

<!-- Mirrored from demo.beetube.me/author/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2017 07:34:44 GMT -->
</html> <!-- end page -->