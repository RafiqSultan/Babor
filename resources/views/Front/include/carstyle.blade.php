<style>

    
/*
Template Name: Electro - HTML Ecommerce Template
Author: yaminncco

Colors:
	Body 		: #333
	Headers 	: #2B2D42
	Primary 	: #F7941D
	Dark 		: #15161D ##1E1F29
	Grey 		: #E4E7ED #FBFBFC #8D99AE #B9BABC

Fonts: Montserrat

Table OF Contents
------------------------------------
1 > GENERAL
------ Typography
------ Buttons
------ Inputs
------ Sections
------ Breadcrumb
2 > HEADER
------ Top header
------ Logo
------ Search
------ Cart
3 > NAVIGATION
------ Main nav
------ Responsive Nav
4 > CATEGORY SHOP
5 > HOT DEAL
6 > PRODUCT
------ Product
------ Widget product
------ Product slick
7 > STORE PAGE
------ Aside
------ Store
8 > PRODUCT DETAILS PAGE
------ Product view
------ Product details
------ Product tab
9 > CHECKOUT PAGE
10 > NEWSLETTER
11 > FOOTER
11 > SLICK STYLE
12 > RESPONSIVE
------------------------------------*/

/*=========================================================
	01 -> GENERAL
===========================================================*/

/*----------------------------*\
	Typography
\*----------------------------*/

body {
  font-family: 'Montserrat', sans-serif;
  font-weight: 400;
  color: #333;
}

h1, h2, h3, h4, h5, h6 {
  color: #2B2D42;
  font-weight: 700;
  margin: 0 0 10px;
}

a {
  color: #2B2D42;
  font-weight: 500;
  -webkit-transition: 0.2s color;
  transition: 0.2s color;
}

a:hover, a:focus {
  color: #F7941D;
  text-decoration: none;
  outline: none;
}

ul, ol {
  margin: 0;
  padding: 0;
  list-style: none
}

/*----------------------------*\
	Buttons
\*----------------------------*/

.primary-btn {
  display: inline-block;
  padding: 12px 30px;
  background-color: #F7941D;
  border: none;
  border-radius: 40px;
  color: #FFF;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.primary-btn:hover, .primary-btn:focus {
  opacity: 0.9;
  color: #FFF;
}

/*----------------------------*\
	Inputs
\*----------------------------*/

/*-- Text input --*/

.input {
  height: 40px;
  padding: 0px 15px;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  width: 100%;
}

textarea.input {
  padding: 15px;
  min-height: 90px;
}

/*-- Number input --*/

.input-number {
  position: relative;
}

.input-number input[type="number"]::-webkit-inner-spin-button, .input-number input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.input-number input[type="number"] {
  -moz-appearance: textfield;
  height: 40px;
  width: 100%;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  padding: 0px 35px 0px 15px;
}

.input-number .qty-up, .input-number .qty-down {
  position: absolute;
  display: block;
  width: 20px;
  height: 20px;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  text-align: center;
  font-weight: 700;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.input-number .qty-up {
  right: 0;
  top: 0;
  border-bottom: 0px;
}

.input-number .qty-down {
  right: 0;
  bottom: 0;
}

.input-number .qty-up:hover, .input-number .qty-down:hover {
  background-color: #E4E7ED;
  color: #F7941D;
}

/*-- Select input --*/

.input-select {
  padding: 0px 15px;
  background: #FFF;
  border: 1px solid #E4E7ED;
  height: 40px;
}

/*-- checkbox & radio input --*/

.input-radio, .input-checkbox {
  position: relative;
  display: block;
}

.input-radio input[type="radio"]:not(:checked), .input-radio input[type="radio"]:checked, .input-checkbox input[type="checkbox"]:not(:checked), .input-checkbox input[type="checkbox"]:checked {
  position: absolute;
  margin-left: -9999px;
  visibility: hidden;
}

.input-radio label, .input-checkbox label {
  font-weight: 500;
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 5px;
  cursor: pointer;
}

.input-radio input[type="radio"]+label span, .input-checkbox input[type="checkbox"]+label span {
  position: absolute;
  left: 0px;
  top: 4px;
  width: 14px;
  height: 14px;
  border: 2px solid #E4E7ED;
  background: #FFF;
}

.input-radio input[type="radio"]+label span {
  border-radius: 50%;
}

.input-radio input[type="radio"]+label span:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) scale(0);
  -ms-transform: translate(-50%, -50%) scale(0);
  transform: translate(-50%, -50%) scale(0);
  background-color: #FFF;
  width: 4px;
  height: 4px;
  border-radius: 50%;
  opacity: 0;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.input-checkbox input[type="checkbox"]+label span:after {
  content: '✔';
  position: absolute;
  top: -2px;
  left: 1px;
  font-size: 10px;
  color: #FFF;
  opacity: 0;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.input-radio input[type="radio"]:checked+label span, .input-checkbox input[type="checkbox"]:checked+label span {
  background-color: #F7941D;
  border-color: #F7941D;
}

.input-radio input[type="radio"]:checked+label span:after {
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(1);
  -ms-transform: translate(-50%, -50%) scale(1);
  transform: translate(-50%, -50%) scale(1);
}

.input-checkbox input[type="checkbox"]:checked+label span:after {
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.input-radio .caption, .input-checkbox .caption {
  margin-top: 5px;
  max-height: 0;
  overflow: hidden;
  -webkit-transition: 0.3s max-height;
  transition: 0.3s max-height;
}

.input-radio input[type="radio"]:checked~.caption, .input-checkbox input[type="checkbox"]:checked~.caption {
  max-height: 800px;
}

/*----------------------------*\
	Section
\*----------------------------*/

.section {
  padding-top: 30px;
  padding-bottom: 30px;
}

.section-title {
  position: relative;
  margin-bottom: 30px;
  margin-top: 15px;
}

.section-title .title {
  display: inline-block;
  text-transform: uppercase;
  margin: 0px;
}

.section-title .section-nav {
  float: right;
}

.section-title .section-nav .section-tab-nav {
  display: inline-block;
}

.section-tab-nav li {
  display: inline-block;
  margin-right: 15px;
}

.section-tab-nav li:last-child {
  margin-right: 0px;
}

.section-tab-nav li a {
  font-weight: 700;
  color: #8D99AE;
}

.section-tab-nav li a:after {
  content: "";
  display: block;
  width: 0%;
  height: 2px;
  background-color: #F7941D;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.section-tab-nav li.active a {
  color: #F7941D;
}

.section-tab-nav li a:hover:after, .section-tab-nav li a:focus:after, .section-tab-nav li.active a:after {
  width: 100%;
}

.section-title .section-nav .products-slick-nav {
  top: 0px;
  right: 0px;
}

/*----------------------------*\
	Breadcrumb
\*----------------------------*/

#breadcrumb {
  padding: 30px 0px;
  background: #FBFBFC;
  border-bottom: 1px solid #E4E7ED;
  margin-bottom: 30px;
}

#breadcrumb .breadcrumb-header {
  display: inline-block;
  margin-top: 0px;
  margin-bottom: 0px;
  margin-right: 15px;
  text-transform: uppercase;
}

#breadcrumb .breadcrumb-tree {
  display: inline-block;
}

#breadcrumb .breadcrumb-tree li {
  display: inline-block;
  font-size: 12px;
  font-weight: 500;
  text-transform: uppercase;
}

#breadcrumb .breadcrumb-tree li+li {
  margin-left: 10px;
}

#breadcrumb .breadcrumb-tree li+li:before {
  content: '/';
  display: inline-block;
  color: #8D99AE;
  margin-right: 10px;
}

#breadcrumb .breadcrumb-tree li a {
  color: #8D99AE;
}

#breadcrumb .breadcrumb-tree li a:hover {
  color: #F7941D;
}

/*=========================================================
	02 -> HEADER
===========================================================*/

/*----------------------------*\
	Top header
\*----------------------------*/

#top-header {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #1E1F29;
}

.header-links li {
  display: inline-block;
  margin-right: 15px;
  font-size: 12px;
}

.header-links li:last-child {
  margin-right: 0px;
}

.header-links li a {
  color: #FFF;
}

.header-links li a:hover {
  color: #F7941D;
}

.header-links li i {
  color: #F7941D;
  margin-right: 5px;
}

/*----------------------------*\
	Logo
\*----------------------------*/

#header {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #15161D;
}

.header-logo {
  float: left;
}

.header-logo .logo img {
  display: block;
}

/*----------------------------*\
	Search
\*----------------------------*/

.header-search {
  padding: 15px 0px;
}

.header-search form {
  position: relative;
}

.header-search form .input-select {
  margin-right: -4px;
  border-radius: 40px 0px 0px 40px;
}

.header-search form .input {
  width: calc(100% - 260px);
  margin-right: -4px;
}

.header-search form .search-btn {
  height: 40px;
  width: 100px;
  background: #F7941D;
  color: #FFF;
  font-weight: 700;
  border: none;
  border-radius: 0px 40px 40px 0px;
}

/*----------------------------*\
	Cart
\*----------------------------*/

.header-ctn {
  float: right;
  padding: 15px 0px;
}

.header-ctn>div {
  display: inline-block;
}

.header-ctn>div+div {
  margin-left: 15px;
}

.header-ctn>div>a {
  display: block;
  position: relative;
  width: 90px;
  text-align: center;
  color: #FFF;
}

.header-ctn>div>a>i {
  display: block;
  font-size: 18px;
}

.header-ctn>div>a>span {
  font-size: 12px;
}

.header-ctn>div>a>.qty {
  position: absolute;
  right: 15px;
  top: -10px;
  width: 20px;
  height: 20px;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  font-size: 10px;
  color: #FFF;
  background-color: #F7941D;
}

.header-ctn .menu-toggle {
  display: none;
}

.cart-dropdown {
  position: absolute;
  width: 300px;
  background: #FFF;
  padding: 15px;
  -webkit-box-shadow: 0px 0px 0px 2px #E4E7ED;
  box-shadow: 0px 0px 0px 2px #E4E7ED;
  z-index: 99;
  right: 0;
  opacity: 0;
  visibility: hidden;
}

.dropdown.open>.cart-dropdown {
  opacity: 1;
  visibility: visible;
}

.cart-dropdown .cart-list {
  max-height: 180px;
  overflow-y: scroll;
  margin-bottom: 15px;
}

.cart-dropdown .cart-list .product-widget {
  padding: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.cart-dropdown .cart-list .product-widget:last-child {
  margin-bottom: 0px;
}

.cart-dropdown .cart-list .product-widget .product-img {
  left: 0px;
  top: 0px;
}

.cart-dropdown .cart-list .product-widget .product-body .product-price {
  color: #2B2D42;
}

.cart-dropdown .cart-btns {
  margin: 0px -17px -17px;
}

.cart-dropdown .cart-btns>a {
  display: inline-block;
  width: calc(50% - 0px);
  padding: 12px;
  background-color: #F7941D;
  color: #FFF;
  text-align: center;
  font-weight: 700;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.cart-dropdown .cart-btns>a:first-child {
  margin-right: -4px;
  background-color: #1e1f29;
}

.cart-dropdown .cart-btns>a:hover {
  opacity: 0.9;
}

.cart-dropdown .cart-summary {
  border-top: 1px solid #E4E7ED;
  padding-top: 15px;
  padding-bottom: 15px;
}

/*=========================================================
	03 -> Navigation
===========================================================*/

#navigation {
  background: #FFF;
  border-bottom: 2px solid #E4E7ED;
  border-top: 3px solid #F7941D;
}

/*----------------------------*\
	Main nav
\*----------------------------*/

.main-nav>li+li {
  margin-left: 30px
}

.main-nav>li>a {
  padding: 20px 0px;
}

.main-nav>li>a:hover, .main-nav>li>a:focus, .main-nav>li.active>a {
  color: #F7941D;
  background-color: transparent;
}

.main-nav>li>a:after {
  content: "";
  display: block;
  width: 0%;
  height: 2px;
  background-color: #F7941D;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.main-nav>li>a:hover:after, .main-nav>li>a:focus:after, .main-nav>li.active>a:after {
  width: 100%;
}

.header-ctn li.nav-toggle {
  display: none;
}

/*----------------------------*\
	responsive nav
\*----------------------------*/

@media only screen and (max-width: 991px) {
  .header-ctn .menu-toggle {
    display: inline-block;
  }
  #responsive-nav {
    position: fixed;
    left: 0;
    top: 0;
    background: #15161D;
    height: 100vh;
    max-width: 250px;
    width: 0%;
    overflow: hidden;
    z-index: 22;
    padding-top: 60px;
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
  }
  #responsive-nav.active {
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
    width: 100%;
  }
  .main-nav {
    margin: 0px;
    float: none;
  }
  .main-nav>li {
    display: block;
    float: none;
  }
  .main-nav>li+li {
    margin-left: 0px;
  }
  .main-nav>li>a {
    padding: 15px;
    color: #FFF;
  }
}

/

/*=========================================================
	05 -> HOT DEAL
===========================================================*/

#hot-deal.section {
  padding: 60px 0px;
  margin: 30px 0px;
  background-color: #E4E7ED;
  background-image: url('../img/hotdeal.png');
  background-position: center;
  background-repeat: no-repeat;
}

.hot-deal {
  text-align: center;
}

.hot-deal .hot-deal-countdown {
  margin-bottom: 30px;
}

.hot-deal .hot-deal-countdown>li {
  position: relative;
  display: inline-block;
  width: 100px;
  height: 100px;
  background: #F7941De6;
  text-align: center;
  border-radius: 50%;
  margin: 0px 5px;
}

.hot-deal .hot-deal-countdown>li>div {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.hot-deal .hot-deal-countdown>li>div h3 {
  color: #FFF;
  margin-bottom: 0px;
}

.hot-deal .hot-deal-countdown>li>div span {
  display: block;
  font-size: 10px;
  text-transform: uppercase;
  color: #FFF;
}

.hot-deal p {
  text-transform: uppercase;
  font-size: 24px;
}

.hot-deal .cta-btn {
  margin-top: 15px;
}

/*=========================================================
	06 -> PRODUCT
===========================================================*/

/*----------------------------*\
	product
\*----------------------------*/

.product {
  position: relative;
  margin: 15px 0px;
  -webkit-box-shadow: 0px 0px 0px 0px #E4E7ED, 0px 0px 0px 1px #E4E7ED;
  box-shadow: 0px 0px 0px 0px #E4E7ED, 0px 0px 0px 1px #E4E7ED;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.product:hover {
  -webkit-box-shadow: 0px 0px 6px 0px #E4E7ED, 0px 0px 0px 2px #F7941D;
  box-shadow: 0px 0px 6px 0px #E4E7ED, 0px 0px 0px 2px #F7941D;
}

.product .product-img {
  position: relative;
}

.product .product-img>img {
  width: 100%;
}

.product .product-img .product-label {
  position: absolute;
  top: 15px;
  right: 15px;
}

.product .product-img .product-label>span {
  border: 2px solid;
  padding: 2px 10px;
  font-size: 12px;
}

.product .product-img .product-label>span.sale {
  background-color: #FFF;
  border-color: #F7941D;
  color: #F7941D;
}

.product .product-img .product-label>span.new {
  background-color: #F7941D;
  border-color: #F7941D;
  color: #FFF;
}

.product .product-body {
  position: relative;
  padding: 15px;
  background-color: #FFF;
  text-align: center;
  z-index: 20;
}

.product .product-body .product-category {
  text-transform: uppercase;
  font-size: 12px;
  color: #8D99AE;
}

.product .product-body .product-name {
  text-transform: uppercase;
  font-size: 14px;
}

.product .product-body .product-name>a {
  font-weight: 700;
}

.product .product-body .product-name>a:hover, .product .product-body .product-name>a:focus {
  color: #F7941D;
}

.product .product-body .product-price {
  color: #F7941D;
  font-size: 18px;
}

.product .product-body .product-price .product-old-price {
  font-size: 70%;
  font-weight: 400;
  color: #8D99AE;
}

.product .product-body .product-rating {
  position: relative;
  margin: 15px 0px 10px;
  height: 20px;
}

.product .product-body .product-rating>i {
  position: relative;
  width: 14px;
  margin-right: -4px;
  background: #FFF;
  color: #E4E7ED;
  z-index: 10;
}

.product .product-body .product-rating>i.fa-star {
  color: #F7941D;
}

.product .product-body .product-rating:after {
  content: "";
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  height: 1px;
  background-color: #E4E7ED;
}

.product .product-body .product-btns>button {
  position: relative;
  width: 40px;
  height: 40px;
  line-height: 40px;
  background: transparent;
  border: none;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.product .product-body .product-btns>button:hover {
  background-color: #E4E7ED;
  color: #F7941D;
  border-radius: 50%;
}

.product .product-body .product-btns>button .tooltipp {
  position: absolute;
  bottom: 100%;
  left: 50%;
  -webkit-transform: translate(-50%, -15px);
  -ms-transform: translate(-50%, -15px);
  transform: translate(-50%, -15px);
  width: 150px;
  padding: 10px;
  font-size: 12px;
  line-height: 10px;
  background: #1e1f29;
  color: #FFF;
  text-transform: uppercase;
  z-index: 10;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.product .product-body .product-btns>button:hover .tooltipp {
  opacity: 1;
  visibility: visible;
  -webkit-transform: translate(-50%, -5px);
  -ms-transform: translate(-50%, -5px);
  transform: translate(-50%, -5px);
}

.product .add-to-cart {
  position: absolute;
  left: 1px;
  right: 1px;
  bottom: 1px;
  padding: 15px;
  background: #1e1f29;
  text-align: center;
  -webkit-transform: translateY(0%);
  -ms-transform: translateY(0%);
  transform: translateY(0%);
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
  z-index: 2;
}

.product:hover .add-to-cart {
  -webkit-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
}

.product .add-to-cart .add-to-cart-btn {
  position: relative;
  border: 2px solid transparent;
  height: 40px;
  padding: 0 30px;
  background-color: #F7941D;
  color: #FFF;
  text-transform: uppercase;
  font-weight: 700;
  border-radius: 40px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.product .add-to-cart .add-to-cart-btn>i {
  position: absolute;
  left: 0;
  top: 0;
  width: 40px;
  height: 40px;
  line-height: 38px;
  color: #F7941D;
  opacity: 0;
  visibility: hidden;
}

.product .add-to-cart .add-to-cart-btn:hover {
  background-color: #FFF;
  color: #F7941D;
  border-color: #F7941D;
  padding: 0px 30px 0px 50px;
}

.product .add-to-cart .add-to-cart-btn:hover>i {
  opacity: 1;
  visibility: visible;
}

/*----------------------------*\
	Widget product
\*----------------------------*/

.product-widget {
  position: relative;
}

.product-widget+.product-widget {
  margin: 30px 0px;
}

.product-widget .product-img {
  position: absolute;
  left: 0px;
  top: 0px;
  width: 60px;
}

.product-widget .product-img>img {
  width: 100%;
}

.product-widget .product-body {
  padding-left: 75px;
  min-height: 60px;
}

.product-widget .product-body .product-category {
  text-transform: uppercase;
  font-size: 10px;
  color: #8D99AE;
}

.product-widget .product-body .product-name {
  text-transform: uppercase;
  font-size: 12px;
}

.product-widget .product-body .product-name>a {
  font-weight: 700;
}

.product-widget .product-body .product-name>a:hover, .product-widget .product-body .product-name>a:focus {
  color: #F7941D;
}

.product-widget .product-body .product-price {
  font-size: 14px;
  color: #F7941D;
}

.product-widget .product-body .product-price .product-old-price {
  font-size: 70%;
  font-weight: 400;
  color: #8D99AE;
}

.product-widget .product-body .product-price .qty {
  font-weight: 400;
  margin-right: 10px;
}

.product-widget .delete {
  position: absolute;
  top: 0;
  left: 0;
  height: 14px;
  width: 14px;
  text-align: center;
  font-size: 10px;
  padding: 0;
  background: #1e1f29;
  border: none;
  color: #FFF;
}

/*----------------------------*\
	Products slick
\*----------------------------*/

.products-slick .slick-list {
  padding-bottom: 60px;
  margin-bottom: -60px;
  z-index: 2;
}

.products-slick .product.slick-slide {
  margin: 15px;
}

.products-tabs>.tab-pane {
  display: block;
  height: 0;
  opacity: 0;
  visibility: hidden;
  overflow-y: hidden;
  padding-bottom: 60px;
  margin-bottom: -60px;
}

.products-tabs>.tab-pane.active {
  opacity: 1;
  visibility: visible;
  height: auto;
}

.products-slick-nav {
  position: absolute;
  right: 15px;
  z-index: 10;
}

.products-slick-nav .slick-prev, .products-slick-nav .slick-next {
  position: static;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
  width: 20px;
  height: 20px;
  display: inline-block !important;
  margin: 0px 2px;
}

.products-slick-nav .slick-prev:before, .products-slick-nav .slick-next:before {
  font-size: 14px;
}

/*=========================================================
	07 -> PRODUCTS PAGE
===========================================================*/

/*----------------------------*\
	Aside
\*----------------------------*/

.aside+.aside {
  margin-top: 30px;
}

.aside>.aside-title {
  text-transform: uppercase;
  font-size: 18px;
  margin: 15px 0px 30px;
}

/*-- checkbox Filter --*/

.checkbox-filter>div+div {
  margin-top: 10px;
}

.checkbox-filter .input-radio label, .checkbox-filter .input-checkbox label {
  font-size: 12px;
}

.checkbox-filter .input-radio label small, .checkbox-filter .input-checkbox label small {
  color: #8D99AE;
}

/*-- Price Filter --*/

#price-slider {
  margin-bottom: 15px;
}

.noUi-target {
  background-color: #FFF;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #E4E7ED;
  border-radius: 0px;
}

.noUi-connect {
  background-color: #F7941D;
}

.noUi-horizontal {
  height: 6px;
}

.noUi-horizontal .noUi-handle {
  width: 12px;
  height: 12px;
  left: -6px;
  top: -4px;
  border: none;
  background: #F7941D;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 50%;
}

.noUi-handle:before, .noUi-handle:after {
  display: none;
}

.price-filter .input-number {
  display: inline-block;
  width: calc(50% - 7px);
}

/*----------------------------*\
	Store
\*----------------------------*/

.store-filter {
  margin-bottom: 15px;
  margin-top: 15px;
}

/*-- Store Sort --*/

.store-sort {
  display: inline-block;
}

.store-sort label {
  font-weight: 500;
  font-size: 12px;
  text-transform: uppercase;
  margin-right: 15px;
}

/*-- Store Grid --*/

.store-grid {
  float: right;
}

.store-grid li {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  background-color: #FFF;
  border: 1px solid #E4E7ED;
  text-align: center;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.store-grid li+li {
  margin-left: 5px;
}

.store-grid li:hover {
  background-color: #E4E7ED;
  color: #F7941D;
}

.store-grid li.active {
  background-color: #F7941D;
  border-color: #F7941D;
  color: #FFF;
  cursor: default;
}

.store-grid li a {
  display: block;
}

/*-- Store Pagination --*/

.store-pagination {
  float: right;
}

.store-pagination li {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: #FFF;
  border: 1px solid #E4E7ED;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.store-pagination li+li {
  margin-left: 5px;
}

.store-pagination li:hover {
  background-color: #E4E7ED;
  color: #F7941D;
}

.store-pagination li.active {
  background-color: #F7941D;
  border-color: #F7941D;
  color: #FFF;
  font-weight: 500;
  cursor: default;
}

.store-pagination li a {
  display: block;
}

.store-qty {
  margin-right: 30px;
  font-weight: 500;
  text-transform: uppercase;
  font-size: 12px;
}

/*=========================================================
	08 -> PRODUCT DETAILS PAGE
===========================================================*/

/*----------------------------*\
	Product view
\*----------------------------*/

#product-main-img .slick-prev {
  -webkit-transform: translateX(-15px);
  -ms-transform: translateX(-15px);
  transform: translateX(-15px);
  left: 15px;
}

#product-main-img .slick-next {
  -webkit-transform: translateX(15px);
  -ms-transform: translateX(15px);
  transform: translateX(15px);
  right: 15px;
}

#product-main-img .slick-prev, #product-main-img .slick-next {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

#product-main-img:hover .slick-prev, #product-main-img:hover .slick-next {
  -webkit-transform: translateX(0%);
  -ms-transform: translateX(0%);
  transform: translateX(0%);
  opacity: 1;
  visibility: visible;
}

#product-main-img .zoomImg {
  background-color: #FFF;
}

#product-imgs .product-preview {
  margin: 0px 5px;
  border: 1px solid #E4E7ED;
}

#product-imgs .product-preview.slick-current {
  border-color: #F7941D;
}

#product-imgs .slick-prev {
  top: -20px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}

#product-imgs .slick-next {
  top: calc(100% - 20px);
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}

#product-imgs .slick-prev:before {
  content: "\f106";
}

#product-imgs .slick-next:before {
  content: "\f107";
}

.product-preview img {
  width: 100%;
}

/*----------------------------*\
	Product details
\*----------------------------*/

.product-details .product-name {
  text-transform: uppercase;
  font-size: 18px;
}

.product-details .product-rating {
  display: inline-block;
  margin-right: 15px;
}

.product-details .product-rating>i {
  color: #E4E7ED;
}

.product-details .product-rating>i.fa-star {
  color: #F7941D;
}

.product-details .review-link {
  font-size: 12px;
}

.product-details .product-price {
  display: inline-block;
  font-size: 24px;
  margin-top: 10px;
  margin-bottom: 15px;
  color: #F7941D;
}

.product-details .product-price .product-old-price {
  font-size: 70%;
  font-weight: 400;
  color: #8D99AE;
}

.product-details .product-available {
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 700;
  margin-left: 30px;
  color: #F7941D;
}

.product-details .product-options {
  margin-top: 30px;
  margin-bottom: 30px;
}

.product-details .product-options label {
  font-weight: 500;
  font-size: 12px;
  text-transform: uppercase;
  margin-right: 15px;
  margin-bottom: 0px;
}

.product-details .product-options .input-select {
  width: 90px;
}

.product-details .add-to-cart {
  margin-bottom: 30px;
}

.product-details .add-to-cart .add-to-cart-btn {
  position: relative;
  border: 2px solid transparent;
  height: 40px;
  padding: 0 30px;
  background-color: #F7941D;
  color: #FFF;
  text-transform: uppercase;
  font-weight: 700;
  border-radius: 40px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.product-details .add-to-cart .add-to-cart-btn>i {
  position: absolute;
  left: 0;
  top: 0;
  width: 40px;
  height: 40px;
  line-height: 38px;
  color: #F7941D;
  opacity: 0;
  visibility: hidden;
}

.product-details .add-to-cart .add-to-cart-btn:hover {
  background-color: #FFF;
  color: #F7941D;
  border-color: #F7941D;
  padding: 0px 30px 0px 50px;
}

.product-details .add-to-cart .add-to-cart-btn:hover>i {
  opacity: 1;
  visibility: visible;
}

.product-details .add-to-cart .qty-label {
  display: inline-block;
  font-weight: 500;
  font-size: 12px;
  text-transform: uppercase;
  margin-right: 15px;
  margin-bottom: 0px;
}

.product-details .add-to-cart .qty-label .input-number {
  width: 90px;
  display: inline-block;
}

.product-details .product-btns li {
  display: inline-block;
  text-transform: uppercase;
  font-size: 12px;
}

.product-details .product-btns li+li {
  margin-left: 15px;
}

.product-details .product-links {
  margin-top: 15px;
}

.product-details .product-links li {
  display: inline-block;
  text-transform: uppercase;
  font-size: 12px;
}

.product-details .product-links li+li {
  margin-left: 10px;
}

/*----------------------------*\
	 Product tab
\*----------------------------*/

#product-tab {
  margin-top: 60px;
}

#product-tab .tab-nav {
  position: relative;
  text-align: center;
  padding: 15px 0px;
  margin-bottom: 30px;
}

#product-tab .tab-nav:after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  height: 1px;
  background-color: #E4E7ED;
  z-index: -1;
}

#product-tab .tab-nav li {
  display: inline-block;
  background: #FFF;
  padding: 0px 15px;
}

#product-tab .tab-nav li+li {
  margin-left: 15px;
}

#product-tab .tab-nav li a {
  display: block;
  font-weight: 700;
  color: #8D99AE;
}

#product-tab .tab-nav li.active a {
  color: #F7941D;
}

#product-tab .tab-nav li a:after {
  content: "";
  display: block;
  width: 0%;
  height: 2px;
  background-color: #F7941D;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

#product-tab .tab-nav li a:hover:after, #product-tab .tab-nav li a:focus:after, #product-tab .tab-nav li.active a:after {
  width: 100%;
}

/*-- Rating --*/

.rating-avg {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 15px;
}

.rating-avg .rating-stars {
  margin-left: 10px;
}

.rating-avg .rating-stars, .rating .rating-stars {
  display: inline-block;
}

.rating-avg .rating-stars>i, .rating .rating-stars>i {
  color: #E4E7ED;
}

.rating-avg .rating-stars>i.fa-star, .rating .rating-stars>i.fa-star {
  color: #F7941D;
}

.rating li {
  margin: 5px 0px;
}

.rating .rating-progress {
  position: relative;
  display: inline-block;
  height: 9px;
  background-color: #E4E7ED;
  width: 120px;
  margin: 0px 10px;
  border-radius: 5px;
}

.rating .rating-progress>div {
  background-color: #F7941D;
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  border-radius: 5px;
}

.rating .sum {
  display: inline-block;
  font-size: 12px;
  color: #8D99AE;
}

/*-- Reviews --*/

.reviews li {
  position: relative;
  padding-left: 145px;
  margin-bottom: 30px;
}

.reviews .review-heading {
  position: absolute;
  width: 130px;
  left: 0;
  top: 0;
  height: 70px;
}

.reviews .review-body {
  min-height: 70px;
}

.reviews .review-heading .name {
  margin-bottom: 5px;
  margin-top: 0px;
}

.reviews .review-heading .date {
  color: #8D99AE;
  font-size: 10px;
  margin: 0;
}

.reviews .review-heading .review-rating {
  margin-top: 5px;
}

.reviews .review-heading .review-rating>i {
  color: #E4E7ED;
}

.reviews .review-heading .review-rating>i.fa-star {
  color: #F7941D;
}

.reviews-pagination {
  text-align: center;
}

.reviews-pagination li {
  display: inline-block;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  background-color: #FFF;
  border: 1px solid #E4E7ED;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.reviews-pagination li:hover {
  background-color: #E4E7ED;
  color: #F7941D;
}

.reviews-pagination li.active {
  background-color: #F7941D;
  border-color: #F7941D;
  color: #FFF;
  cursor: default;
}

.reviews-pagination li a {
  display: block;
}

/*-- Review Form --*/

.review-form .input {
  margin-bottom: 15px;
}

.review-form .input-rating {
  margin-bottom: 15px;
}

.review-form .input-rating .stars {
  display: inline-block;
  vertical-align: top;
}

.review-form .input-rating .stars input[type="radio"] {
  display: none;
}

.review-form .input-rating .stars>label {
  float: right;
  cursor: pointer;
  padding: 0px 3px;
  margin: 0px;
}

.review-form .input-rating .stars>label:before {
  content: "\f006";
  font-family: FontAwesome;
  color: #E4E7ED;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.review-form .input-rating .stars>label:hover:before, .review-form .input-rating .stars>label:hover~label:before {
  color: #F7941D;
}

.review-form .input-rating .stars>input:checked label:before, .review-form .input-rating .stars>input:checked~label:before {
  content: "\f005";
  color: #F7941D;
}

/*=========================================================
	09 -> CHECKOUT PAGE
===========================================================*/

.billing-details {
  margin-bottom: 30px;
}

.shiping-details {
  margin-bottom: 30px;
}

.order-details {
  position: relative;
  padding: 0px 30px 30px;
  border-right: 1px solid #E4E7ED;
  border-left: 1px solid #E4E7ED;
  border-bottom: 1px solid #E4E7ED;
}

.order-details:before {
  content: "";
  position: absolute;
  left: -1px;
  right: -1px;
  top: -15px;
  height: 30px;
  border-top: 1px solid #E4E7ED;
  border-left: 1px solid #E4E7ED;
  border-right: 1px solid #E4E7ED;
}

.order-summary {
  margin: 15px 0px;
}

.order-summary .order-col {
  display: table;
  width: 100%;
}

.order-summary .order-col:after {
  content: "";
  display: block;
  clear: both;
}

.order-summary .order-col>div {
  display: table-cell;
  padding: 10px 0px;
}

.order-summary .order-col>div:first-child {
  width: calc(100% - 150px);
}

.order-summary .order-col>div:last-child {
  width: 150px;
  text-align: right;
}

.order-summary .order-col .order-total {
  font-size: 24px;
  color: #F7941D;
}

.order-details .payment-method {
  margin: 30px 0px;
}

.order-details .order-submit {
  display: block;
  margin-top: 30px;
}

/*=========================================================
	10 -> NEWSLETTER
===========================================================*/

#newsletter.section {
  border-top: 2px solid #E4E7ED;
  border-bottom: 3px solid #F7941D;
  margin-top: 30px;
}

.newsletter {
  text-align: center;
}

.newsletter p {
  font-size: 24px;
}

.newsletter form {
  position: relative;
  max-width: 520px;
  margin: 30px auto;
}

.newsletter form:after {
  content: "\f003";
  font-family: FontAwesome;
  position: absolute;
  font-size: 160px;
  color: #E4E7ED;
  top: 15px;
  -webkit-transform: translateY(-50%) rotate(15deg);
  -ms-transform: translateY(-50%) rotate(15deg);
  transform: translateY(-50%) rotate(15deg);
  z-index: -1;
  left: -90px;
}

.newsletter form .input {
  width: calc(100% - 160px);
  margin-right: -4px;
  border-radius: 40px 0px 0px 40px;
}

.newsletter form .newsletter-btn {
  width: 160px;
  height: 40px;
  font-weight: 700;
  background: #F7941D;
  color: #FFF;
  border: none;
  border-radius: 0px 40px 40px 0px;
}

.newsletter .newsletter-follow {
  text-align: center;
}

.newsletter .newsletter-follow li {
  display: inline-block;
  margin-right: 5px;
}

.newsletter .newsletter-follow li:last-child {
  margin-right: 0px;
}

.newsletter .newsletter-follow li a {
  position: relative;
  display: block;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.newsletter .newsletter-follow li a:hover, .newsletter .newsletter-follow li a:focus {
  background-color: #E4E7ED;
  color: #F7941D;
}

/*=========================================================
	11 -> FOOTER
===========================================================*/

#footer {
  background: #15161D;
  color: #B9BABC;
}

#bottom-footer {
  background: #1E1F29;
}

.footer {
  margin: 30px 0px;
}

.footer .footer-title {
  color: #FFF;
  text-transform: uppercase;
  font-size: 18px;
  margin: 0px 0px 30px;
}

.footer-links li+li {
  margin-top: 15px;
}

.footer-links li a {
  color: #B9BABC;
}

.footer-links li i {
  margin-right: 15px;
  color: #F7941D;
  width: 14px;
  text-align: center;
}

.footer-links li a:hover {
  color: #F7941D;
}

.copyright {
  margin-top: 30px;
  display: block;
  font-size: 12px;
}

.footer-payments li {
  display: inline-block;
  margin-right: 5px;
}

.footer-payments li a {
  color: #15161D;
  font-size: 36px;
  display: block;
}

/*=========================================================
	12 -> SLICK STYLE
===========================================================*/

/*----------------------------*\
	Arrows
\*----------------------------*/

.slick-prev, .slick-next {
  width: 40px;
  height: 40px;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  border-radius: 50%;
  z-index: 22;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus {
  background-color: #F7941D;
  border-color: #F7941D;
}

.slick-prev:before, .slick-next:before {
  font-family: FontAwesome;
  color: #2B2D42;
}

.slick-prev:before {
  content: "\f104";
}

.slick-next:before {
  content: "\f105";
}

.slick-prev:hover:before, .slick-prev:focus:before, .slick-next:hover:before, .slick-next:focus:before {
  color: #FFF;
}

.slick-prev {
  left: -20px;
}

.slick-next {
  right: -20px;
}

/*----------------------------*\
	Dots
\*----------------------------*/

.slick-dots li, .slick-dots li button, .slick-dots li button:before {
  width: 10px;
  height: 10px;
}

.slick-dots li button:before {
  content: "";
  opacity: 1;
  background: #E4E7ED;
  border-radius: 50%;
}

.slick-dots li.slick-active button:before {
  background-color: #F7941D;
}

.custom-dots .slick-dots {
  position: static;
  margin: 15px 0px;
}

/*=========================================================
	13 -> RESPONSIVE
===========================================================*/

@media only screen and (max-width: 1201px) {}

@media only screen and (max-width: 991px) {
  #top-header .header-links.pull-left {
    float: none !important;
  }
  #top-header .header-links.pull-right {
    float: none !important;
    margin-top: 5px;
  }
  .header-logo {
    float: none;
    text-align: center;
  }
  .header-logo .logo {
    display: inline-block;
  }
  #product-imgs {
    margin-bottom: 60px;
    margin-top: 15px;
  }
  #rating {
    text-align: center;
  }
  #reviews {
    margin-top: 30px;
    margin-bottom: 30px;
  }
}

@media only screen and (max-width: 767px) {
  .section-title .section-nav {
    float: none;
    margin-top: 10px;
  }
  .section-tab-nav li {
    margin-top: 10px;
  }
}

@media only screen and (max-width: 480px) {
  [class*='col-xs'] {
    width: 100%;
  }
  .store-grid {
    float: none;
    margin-top: 10px;
  }
  .store-pagination {
    float: none;
    margin-top: 10px;
  }
}

    
        </style>