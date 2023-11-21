
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3GKMDK4KT8"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-3GKMDK4KT8');
</script>


	<meta charset="UTF-8">
	<title>HIROROGU</title>
	

	<link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
        <!-- Bootstrap core CSS -->
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>


<style>
	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    font-size: 100%;
    vertical-align: baseline
}

html {
    line-height: 1
}

ol,ul {
    list-style: none
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

caption,th,td {
    text-align: left;
    font-weight: normal;
    vertical-align: middle
}

q,blockquote {
    quotes: none
}

q:before,q:after,blockquote:before,blockquote:after {
    content: "";
    content: none
}

a img {
    border: none
}

article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary {
    display: block
}

* {
    -webkit-box-sizing: border-box;
    box-sizing: border-box
}

.font-noto-serif,body {
    font-family: "Noto Serif JP",serif
}

body {
    min-width: 320px;
    font-weight: 500;
    /* color: #232323; */
    color: #232323;
    font-size: 16px;
    background-color: #222;
    /* background-image:url('{{ asset("storage/img/haikei.jpg") }}'); */
}

body.active {
    overflow-y: hidden
}

.l-section {
    margin-top: 60px
}

@media(min-width: 768px) {
    .l-section {
        margin-top:120px
    }
}

.l-section h2 {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: bold;
    line-height: 1.5;
    text-align: center;
    position: relative;
    color:#f5f5f5;
    
}

@media(min-width: 768px) {
    .l-section h2 {
        font-size:26px;
        margin-bottom: 30px
    }
}

.l-section h2:after {
    content: "";
    display: block;
    width: 30px;
    height: 3px;
    background-color: #b51c25;
    border-radius: 4px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px
}

@media(min-width: 768px) {
    .l-section h2:after {
        width:50px;
        height: 5px
    }
}

.l-section .lead {
    text-align: center;
    line-height: 1.75;
    font-size: 20px;
    padding-bottom: 15px
}

@media(min-width: 768px) {
    .l-section .lead {
        font-size:22px;
        padding-bottom: 20px
    }
}

img {
    vertical-align: bottom;
    max-width: 100%;
    height: auto
}

a {
    text-decoration: none
}

section,main {
    display: block
}

.l-main {
    padding-top: 50px
}

@media(min-width: 992px) {
    .l-main {
        padding-top:110px
    }
}

.pc-view {
    display: none
}

@media(min-width: 768px) {
    .pc-view {
        display:block
    }
}

.tb-view {
    display: block
}

@media(min-width: 992px) {
    .tb-view {
        display:none
    }
}

.sp-view {
    display: block
}

@media(min-width: 768px) {
    .sp-view {
        display:none
    }
}

.ov-h {
    overflow: hidden
}

.l-header {
    width: 100%;
    position: fixed;
    z-index: 100;
    top: 0;
    left: 0;
    background-color:khaki;
    -webkit-transition: .2s;
    transition: .2s;
    -webkit-box-shadow: 0 0 6px 4px rgba(0,0,0,.2);
    box-shadow: 0 0 6px 4px rgba(0,0,0,.2)
}

@media(min-width: 992px) {
    .l-header {
        -webkit-box-shadow:0 0 6px 4px rgba(0,0,0,0);
        box-shadow: 0 0 6px 4px rgba(0,0,0,0)
    }
}

.l-header.scroll {
    -webkit-box-shadow: 0 0 6px 4px rgba(0,0,0,.2);
    box-shadow: 0 0 6px 4px rgba(0,0,0,.2)
}

.l-header__inner {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 5px 15px
}

@media(min-width: 992px) {
    .l-header__inner {
        padding:10px 10px;
        max-width: 1200px;      
        margin-left: auto;
        margin-right: auto
    }
}

.l-header__logo {
    width: 100px;
    margin: auto
}

@media(min-width: 1200px) {
    .l-header__logo {
        margin:0;
        width: 110px
    }
}

.l-header__logo a {
    display: block
}

.l-global-navi {
    display: none
}

@media(min-width: 992px) {
    .l-global-navi {
        display:-webkit-box !important;
        display: -webkit-flex !important;
        display: -ms-flexbox !important;
        display: flex !important;
        position: relative;
        z-index: 2
    }
}

.l-global-navi__list {
    padding-top: 70px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: -1;
    background-color: #fff
}

@media(min-width: 992px) {
    .l-global-navi__list {
        padding-top:0;
        position: static;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        margin-right: 10px
    }
}

.l-global-navi__list li {
    text-align: center
}

@media(min-width: 992px) {
    .l-global-navi__list li {
        margin-right:30px
    }
}

.l-global-navi__list li:last-child {
    margin-right: 0
}

.l-global-navi__list li:last-child a {
    border-bottom: none
}

@media(min-width: 992px) {
    .l-global-navi__list li.sns {
        display:none
    }
}

.l-global-navi__list li.sns a {
    font-size: 40px;
    color: #b51c25
}

.l-global-navi__list a {
    color: #232323;
    font-size: 18px;
    -webkit-transition: .2s;
    transition: .2s;
    position: relative;
    border-bottom: 1px dashed #232323;
    padding: 30px 0;
    display: block
}

@media(min-width: 992px) {
    .l-global-navi__list a {
        border-bottom:none;
        padding: 0;
        display: inline
    }
}

@media(min-width: 992px) {
    .l-global-navi__list a:before {
        content:"";
        width: 0;
        height: 2px;
        background-color: #b51c25;
        position: absolute;
        bottom: -7px;
        left: 0;
        -webkit-transition: .4s;
        transition: .4s;
        opacity: 0
    }
}

@media(min-width: 992px) {
    .l-global-navi__list a:hover {
        color:#b51c25
    }

    .l-global-navi__list a:hover:before {
        width: 100%;
        opacity: 1
    }
}

.l-hamburger {
    position: absolute;
    top: 0;
    right: 15px;
    width: 30px;
    height: 100%;
    cursor: pointer;
    -webkit-transition: .2s;
    transition: .2s
}

@media(min-width: 992px) {
    .l-hamburger {
        display:none
    }
}

.l-hamburger__item {
    width: 100%;
    height: 3px;
    border-radius: 2px;
    background-color: #232323;
    position: absolute;
    left: 0;
    -webkit-transition: .2s;
    transition: .2s;
    margin: auto
}

.l-hamburger__item.e-first {
    top: 15px
}

.l-hamburger__item.e-second {
    top: 0;
    bottom: 0
}

.l-hamburger__item.e-third {
    top: 33px
}

.l-hamburger.active .l-hamburger__item.e-first {
    top: 25px;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg)
}

.l-hamburger.active .l-hamburger__item.e-second {
    opacity: 0
}

.l-hamburger.active .l-hamburger__item.e-third {
    top: 25px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg)
}

.l-navigation-open-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    z-index: -10;
    opacity: 0;
    background-color: rgba(0,0,0,.9)
}

@media(min-width: 992px) {
    .l-navigation-open-bg {
        display:none !important
    }
}

.l-navigation-open-bg.active {
    z-index: 90;
    opacity: 1
}

footer {
    margin-top: 100px;
    display: block;
    text-align: center;
    background-color: #b51c25;
    font-size: 14px;
    font-weight: bold;
    padding: 20px 10px;
    color: #fff
}

@media(min-width: 768px) {
    footer {
        margin-top:200px
    }
}

.page-top {
    position: fixed;
    right: -40px;
    bottom: 60px;
    font-size: 40px;
    color: #b51c25;
    -webkit-transition: .2s;
    transition: .2s;
    opacity: 0
}

@media(min-width: 768px) {
    .page-top {
        bottom:100px
    }
}

.page-top.active {
    right: 20px;
    opacity: 1;
    -webkit-transition: .8s;
    transition: .8s
}

@media(min-width: 768px) {
    .page-top.active {
        right:40px
    }
}

@media(min-width: 992px) {
    .page-top:hover {
        opacity:.8
    }
}

.l-slider img {
    width: 100%;
    max-width: 100%
}

.l-slider .slick-dots {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    text-align: right;
    text-align: center;
    position: absolute;
    bottom: 10px
}

.l-slider .slick-dots li {
    display: inline-block;
    width: 12px;
    height: 12px;
    margin: 0 5px;
    border-radius: 50%;
    background-color: rgba(204,204,204,.8);
    -webkit-transition: .2s;
    transition: .2s;
    cursor: pointer
}

.l-slider .slick-dots li.slick-active {
    background-color: #b51c25
}

.l-slider .slick-dots button {
    display: none
}

.l-wrap {
    display: block;
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    padding-left: 20px;
    padding-right: 20px
}

@media(min-width: 1200px) {
    .l-wrap {
        padding-left:0;
        padding-right: 0
    }
}

.slick-slider {
    position: relative;
    display: block;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: rgba(0,0,0,0)
}

.slick-list {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0
}

.slick-list:focus {
    outline: none
}

.slick-list.dragging {
    cursor: pointer;
    cursor: hand
}

.slick-slider .slick-track,.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block
}

.slick-track:before,.slick-track:after {
    display: table;
    content: ""
}

.slick-track:after {
    clear: both
}

.slick-loading .slick-track {
    visibility: hidden
}

.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px
}

[dir=rtl] .slick-slide {
    float: right
}

.slick-slide img {
    display: block
}

.slick-slide.slick-loading img {
    display: none
}

.slick-initialized .slick-slide {
    display: block
}

.slick-loading .slick-slide {
    visibility: hidden
}

.slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid rgba(0,0,0,0)
}

.slick-arrow.slick-hidden {
    display: none
}

.slick-dots button {
    background-color: rgba(0,0,0,0);
    border: none;
    cursor: pointer;
    outline: none;
    padding: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.is-home .l-kv {
    text-align: center
}

.is-home .l-lead {
    font-size: 26px;
    padding: 40px 0 0;
    line-height: 1.5;
    text-align: center;
    font-weight: bold
}

@media(min-width: 768px) {
    .is-home .l-lead {
        margin-bottom:-40px;
        font-size: 30px;
        padding: 80px 0 0
    }
}

.is-home .l-about .img {
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto
}

@media(min-width: 768px) {
    .is-home .l-about .img {
        text-align:center
    }
}

.is-home .l-about .img p {
    padding-top: 10px;
    font-size: 16px;
    line-height: 1.75
}

@media(min-width: 768px) {
    .is-home .l-about .img p {
        padding-top:10px;
        font-size: 18px
    }
}

.is-home .l-point .l-box {
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 30px
}

@media(min-width: 768px) {
    .is-home .l-point .l-box {
        display:-webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 40px
    }
}

.is-home .l-point .l-box:last-child {
    margin-bottom: 0
}

.is-home .l-point .l-box.reverse {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -webkit-flex-direction: row-reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse
}

@media(min-width: 768px) {
    .is-home .l-point .l-box .img {
        width:50%
    }
}

.is-home .l-point .l-box .text {
    font-size: 16px;
    line-height: 2;
    padding-top: 5px
}

@media(min-width: 768px) {
    .is-home .l-point .l-box .text {
        padding-top:0;
        width: 47%
    }
}

.is-home .l-menu section {
    background-color: #f5f5f5;
    margin-bottom: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 1.75;
    padding-left: 15px;
    padding-right: 15px
}

@media(min-width: 768px) {
    .is-home .l-menu section {
        margin-bottom:40px;
        padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 0;
        padding-right: 0
    }
}

.is-home .l-menu section:last-child {
    margin-bottom: 0
}

.is-home .l-menu section h3 {
    font-size: 20px;
    margin-bottom: 15px;
    text-decoration: underline;
    text-align: center
}

@media(min-width: 768px) {
    .is-home .l-menu section h3 {
        font-size:30px;
        margin-bottom: 20px
    }
}

.is-home .l-menu section .box {
    width: 100%;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px
}

@media(min-width: 768px) {
    .is-home .l-menu section .box {
        margin-bottom:40px
    }
}

.is-home .l-menu section .box:last-child {
    margin-bottom: 0
}

.is-home .l-menu section .box .category {
    font-size: 18px;
    text-align: center;
    margin-bottom: 5px
}

@media(min-width: 768px) {
    .is-home .l-menu section .box .category {
        font-size:20px
    }
}

.is-home .l-menu section .box .group {
    margin-bottom: 4%
}

@media(min-width: 768px) {
    .is-home .l-menu section .box .group {
        display:-webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin-bottom: -4%;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }
}

.is-home .l-menu section .box .group>div {
    margin-bottom: 4%
}

@media(min-width: 768px) {
    .is-home .l-menu section .box .group>div {
        width:32%;
        /* margin-right: 2%; */
        margin-bottom: 4%;
        text-align: center;
    }
}

@media(min-width: 768px) {
    .is-home .l-menu section .box .group>div:nth-child(3n) {
        margin-right:0
    }
}

.is-home .l-menu section .box .group>div p {
    font-size: 16px;
    padding-top: 5px;
    text-align: center;
    line-height: 1.25
}

.is-home .l-menu section .box .group .slide-dots2 {
    font-size: 0;
    text-align: center
}

.is-home .l-menu section .box .group .slide-dots2 li {
    display: inline-block;
    width: 20px;
    height: 3px;
    margin: 0 4px;
    background-color: rgba(204,204,204,.8)
}

.is-home .l-menu section .box .group .slide-dots2 li.slick-active {
    background-color: #b51c25
}

.is-home .l-menu section .box .group .slide-dots2 li button {
    display: none
}

.is-home .l-menu section .box .text {
    font-size: 16px;
    line-height: 2
}

@media(min-width: 768px) {
    .is-home .l-menu section .box .text {
        font-size:18px
    }
}

.is-home .l-menu section .box .text strong {
    display: block;
    font-weight: bold;
    font-size: 1.2em
}

.is-home .l-menu section .box .list {
    font-size: 16px;
    line-height: 1.5;
    list-style: disc;
    margin-bottom: -5px;
    margin-left: 1.5em
}

@media(min-width: 768px) {
    .is-home .l-menu section .box .list {
        font-size:18px
    }
}

.is-home .l-menu section .box .list li {
    list-style: disc;
    margin-bottom: 5px
}

.is-home .l-menu .e-text {
    font-size: 12px;
    text-align: right;
    margin-top: -10px;
    color: #222
}

@media(min-width: 768px) {
    .is-home .l-menu .e-text {
        font-size:14px
    }
}

.is-home .l-sns p {
    text-align: center;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 15px
}

.is-home .l-sns a {
    display: block;
    max-width: 200px;
    font-size: 18px;
    background-color: #b51c25;
    border: 1px solid #b51c25;
    color: #fff;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding: 15px 20px;
    border-radius: 4px;
    text-align: center;
    -webkit-transition: .2s;
    transition: .2s
}

@media(min-width: 992px) {
    .is-home .l-sns a:hover {
        background-color:#fff;
        color: #b51c25
    }
}

.is-home .l-sns a i {
    margin-right: 10px
}

.is-home .l-shop .l-box {
    width: 100%;
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto
}

@media(min-width: 768px) {
    .is-home .l-shop .l-box {
        display:-webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }
}

@media(min-width: 768px) {
    .is-home .l-shop .l-box .img {
        width:40%
    }
}

.is-home .l-shop .l-box .text {
    line-height: 1.75;
    font-size: 16px;
    padding-top: 10px
}

@media(min-width: 768px) {
    .is-home .l-shop .l-box .text {
        padding-top:0;
        font-size: 18px;
        width: 58%
    }
}

.is-home .l-shop .l-box .icon {
    display: inline-block;
    color: #b51c25;
    font-size: 40px;
    -webkit-transition: .2s;
    transition: .2s
}

@media(min-width: 992px) {
    .is-home .l-shop .l-box .icon:hover {
        opacity:.8
    }
}

.is-home .l-company .text {
    max-width: 600px;
    margin-left: auto;
    margin-right: auto
}

.is-home .l-company .text dl {
    margin-bottom: 10px;
    line-height: 1.5;
    width: 100%
}

@media(min-width: 768px) {
    .is-home .l-company .text dl {
        display:-webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }
}

.is-home .l-company .text dl:last-child {
    margin-bottom: 0
}

.is-home .l-company .text dl dt {
    font-size: 16px;
    font-weight: bold
}

@media(min-width: 768px) {
    .is-home .l-company .text dl dt {
        width:25%
    }
}

.is-home .l-company .text dl dd {
    font-size: 16px
}

@media(min-width: 768px) {
    .is-home .l-company .text dl dd {
        width:72%
    }
}

.is-home .l-company .text dl dd a {
    color: #b51c25;
    text-decoration: underline
}

@media(min-width: 992px) {
    .is-home .l-company .text dl dd a:hover {
        text-decoration:none
    }
}


/* ここから自作 */



#imageContainer {
    margin-top:30px;
    position: relative;
    width: 700x; /* 画像の幅を設定 */
    height: 1200px; /* 画像の高さを設定 */
    overflow: hidden;
}
@media(max-width: 768px) {
    #imageContainer {
        max-width: 1000px; /* 画像の幅を設定 */
        max-height: 800px; /* 画像の高さを設定 */
    }
}
.imageFood{
    position: absolute;
    margin-left:10%;
    margin-right:10%;
    width: 80%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease-in-out; /* フェードのアニメーションを設定 */

}

@media(max-width: 768px) {
    .imageFood {
        max-width:1000px;
        max-height:800px;
        margin-left:0%;
        margin-right:0%;
    }
}

.visible {
    opacity: 1;
}
#scrollingContainer {
    overflow-x: scroll;
    white-space: nowrap;
    width: 100%;
}


 /* モーダルのスタイル */
 .modal {
    display: none; /* 最初は非表示 */
    position: fixed;
    top: 1;
    left: 5;
    width: 100%;
    height: 100%;   
    background-color: rgba(0, 0, 0, 0.5); /* 半透明の背景色 */
}

.modal-content {
    background-color: #fefefe;
    margin: 40% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 500px
}

.modal-dialog{
    width: 100%;
    height: 100%;
}

.close {
float: right;
cursor: pointer;
}
.modalbtn{
text-align: right;
}
.gazo-box {
    max-width: 1500px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 30px;
    margin-top:30px;
}



.gazo_open {
    width:300px;
    height: 300px;
}
#modal_gazo{
    width:600px;
    height: 400px;
}



/*# sourceMappingURL=style.css.map */


</style>
<body class="is-home" >
	<header class="l-header" style= "background-color:honeydew">
		<div class="l-header__inner">
			<h1 class="l-header__logo">
				<a href="">
					<img class="scrollImage" src="{{asset('storage/img/roka2.jpg')}}" alt="HIROROGU">                  
				</a>
			</h1>
			<div class="l-header__global-navi" >
				<nav class="l-global-navi">
					<ul class="l-global-navi__list">
						<li><a href="#about" class="js-anker">店舗検索</a></li>						
						<li><a href="#menu" class="js-anker">MENU</a></li>
						<li><a href="#shop" class="js-anker">店舗情報</a></li>
						<li><a href="#company" class="js-anker">お問い合わせ</a></li>
						<!-- <li class="sns"> -->
							<!-- <a href="https://www.instagram.com/hitowan098/" target="_blank" class="icon">
								<i class="fa-brands fa-instagram"></i>
							</a> -->
						<!-- </li> -->
					</ul>
				</nav>
			</div>

			<div id="js-hamburger" class="l-hamburger">
				<span class="l-hamburger__item e-first"></span>
				<span class="l-hamburger__item e-second"></span>
				<span class="l-hamburger__item e-third"></span>
			</div>
		</div>
	</header>
	<div class="l-navigation-open-bg"></div>


	<main class="l-main">
		<article>
            <div class="gazo-box" style="margin-top:30px"> 
                <div class="box width:100%" > 
                    <div id="imageContainer">                             
                        <img class="imageFood" src="{{asset('storage/img/roka1.jpg')}}"></img>
                        <img class="imageFood" src="{{asset('storage/img/roka2.jpg')}}"></img>
                    </div>
                </div>
            </div>  
			<section class="l-section l-menu">
				<div class="l-wrap">
					<h2>MENU</h2>
					<section  id="menu">
                    <h3>FOOD MENU</h3>						
						<div class="box"> 
                            <!-- 画像ファイル -->
							<div class="group js-slider2">
                                @foreach($M_foodmenu as $item)
								<div style="margin-right:auto; margin-left:auto;">
									<img class="gazo_open" src="{{asset($item->gazo)}}" alt="{{$item->menu_name}}" 
                                    data-menu_name="{{$item->menu_name}}" data-setumei="{{$item->Menu_introduction}}" data-gazo="{{$item->gazo}}"data-price="{{$item->price}}"><br>
                                    <i>{{$item->menu_name}}</i><br>
                                    <i>{{$item->price}}円</i><br>
                                    <p>{{$item->Menu_introduction}}</p>
                                    <input type="hidden"value="">                                      
								</div>                              
                                @endforeach								
							</div>                           
						</div>						
				
				    </section>

					
					<section>
						<h3>DRINK MENU</h3>
                        <div class="box"> 
                            <!-- 画像ファイル -->
                            <div class="group js-slider2">
                                @foreach($M_drinkmenu as $item)
                                <div style="margin-right:auto; margin-left:auto;">
                                    <img class="gazo_open" src="{{asset($item->gazo)}}" alt="{{$item->menu_name}}"
                                        data-menu_name="{{$item->menu_name}}" data-setumei="{{$item->Menu_introduction}}" data-gazo="{{$item->gazo}}"data-price="{{$item->price}}"><br>
                                    <i>{{$item->menu_name}}</i><br>
                                    <i>{{$item->price}}円</i><br>
                                    <p>{{$item->Menu_introduction}}</p>
                                    <input type="hidden"value="">                                      
                                </div>                              
                                @endforeach								
                            </div>                           
                        </div>								
					</section>


                    <h2>店舗情報</h2>
					<section id="shop" >
                        
                        <div class="l-wrap">					
                            <div class="text">												
                                <div class="box">
                                    <!-- 画像ファイル -->
                                    <div class="group js-slider2">
                                        @foreach($MTenpo_gazo as $item)
                                        <div style="margin-right:auto; margin-left:auto;">
                                            <img class="gazo_open" src="{{asset($item->gazo)}}" alt="{{$item->tenpo_name}}"
                                            data-menu_name="{{$item->tenpo_name}}" data-setumei="{{$item->tenpo_introduction}}" data-gazo="{{$item->gazo}}"data-price=""><br>
                                            <i>{{$item->tenpo_name}}</i><br>                                           
                                            <p>{{$item->tenpo_introduction}}</p>
                                            <input type="hidden"value="">                                      
                                        </div>                              
                                        @endforeach								
                                    </div>
                                    <div style="margin-top:5%;"><h3>地図</h3></div> 
                                    <div id="map" style="width: 100%; height: 400px;"></div>                              
                                </div>
                            </div>
                        </div>							
					</section>

                    <h2>お問い合わせ</h2>
                    <section id="company" class="l-company" >
                        <div class="l-wrap">					
                            <div class="text">						
                                <dl>
                                    <dt>お問い合わせ</dt>
                                    <dd>
                                        <a href="mailto:loca8638778@gmail.com" target="_blank">loca8638778@gmail.com</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </section>	
				</div>
			</section>

			<div class="l-section l-sns">
				<p>詳しくはInstagramをチェック！</p>
				<a href="https://instagram.com/bar_loca24?igshid=MWhqemk3cmFzaXptZw%3D%3D&utm_source=qr" target="_blank">
					<i class="fa-brands fa-instagram"></i>Instagram
				</a>
                <!-- https://instagram.com/bar_loca24?igshid=MWhqemk3cmFzaXptZw%3D%3D&utm_source=qr -->
			</div>

			
		</article>

        <!-- テーブルモーダル本体 -->
        <div id="modal" class="modal">
            <div class="modal-dialog">  
                <div class="modal-content">   
                    <div class="modal-header">        
                        <h2 class="modal-title" id="label1">メニュー情報</h2>
                    </div>
                    <div class="row"style="margin-top:5%">
                        <div class ="col-6 modal-gazo">
                            <img class="imageFood"id="modal_gazo"></img>
                        </div>
                        <div class ="col-6">
                           <div class="modal-menu_name" style="text-align:center;margin-bottom:5%;"></div>
                           <div class="modal-price" style="text-align:center;margin-bottom:20%;"></div>
                           <div class="modal-setumei"style="text-align:center";></div>
                        </div>
                    </div>
                    <div class="modalbtn">
                        <input type="button"class="modal-btn btn-lg btn-primary col-3" style="margin:3%" id="close"name="close"value="閉じる">                
                    </div>
                </div>               
            </div>
        </div>


	</main>

<a href="#" class="page-top js-smooth">
	<i class="fa-solid fa-circle-chevron-up"></i>
</a>


<footer style= "background-color:honeydew">
	<small>© SUNAGAWA.Food Site</small>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDorbt3hfftFdXczBTHco6aB4sI8Q4LIu4&callback=initMap" async defer></script>
<!-- <script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/script.js"></script> -->

<script>

    // $(document).ready(function(){
    //     var currentIndex = 0; // 現在の画像のインデックス
    //     var images = $(".imageFood"); // 画像のクラスを持つ要素

    //     setInterval(function() {
    //         // 現在の画像を非表示にし、次の画像を表示する
    //         images.eq(currentIndex).fadeOut();
    //         currentIndex = (currentIndex + 1) % images.length;
    //         images.eq(currentIndex).fadeIn();
    //     }, 3300); // 2秒ごとに画像を切り替える
    // });

    // トップ画像を入れ替える
    $(document).ready(function () {
        var currentIndex = 0;
        var images = $(".imageFood");

        function changeImage() {
            images.removeClass("visible");
            currentIndex = (currentIndex + 1) % images.length;
            images.eq(currentIndex).addClass("visible");
        }

        setInterval(changeImage, 3300); // 3.3秒ごとに画像を変更
    });

    function initMap() {
        // マップを表示する位置の緯度経度
        var myLatLng = { lat: 26.2124, lng: 127.6809 }; // 例: 那覇市

        // マップを表示する div 要素を取得
        var mapDiv = document.getElementById('map');

        // マップを作成
        var map = new google.maps.Map(mapDiv, {
            center: myLatLng,
            zoom: 13 // ズームレベル
        });

        // マーカーを追加（オプション）
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'マーカータイトル'
        });
    }

    $('.gazo_open').click(function(){

        // 画像ファイルパス
        var gazoPath = $(this).data('gazo');
       
        // 画像を作成し、属性を設定
        var gazo = $("<img>").attr("src", gazoPath);

        // 画像をモーダル内に追加
        $('.modal-gazo').html(gazo);
        // クリックしたメニュー名を取得
        var menu = $(this).data("menu_name");       

        //　メニューをモーダル内に追加
        $('.modal-menu_name').html(menu);

        // 店舗情報の場合は価格を表示しない
        if($(this).data("price") !== ""){
            // クリックした価格を取得
            var price = $(this).data("price");

            //　価格をモーダル内に追加
            $('.modal-price').html(price+"円");

        }

        

        // クリックしたメニュー情報名を取得
        var setumei = $(this).data("setumei");
        //　メニュー説明をモーダル内に追加
        $('.modal-setumei').html(setumei);


        $('#imageFood').css({
            width: 1000 +"px",
            height: 800 +"px"

        })


        // モーダルを開く
        $('#modal').css("display","block");  

    })

    $('#close').click(function(){
        // モーダルを閉じる
        $('#modal').css("display","none");  
    })


</script>

</body>
</html>
