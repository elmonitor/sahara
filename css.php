<?php
    /*
     *       Sahara Multipurpose Osclass Themes
     *       
     *       Copyright (C) 2017 OSCLASS.me
     * 
     *       This is Sahara Multipurpose Osclass Themes with Single License
     *  
     *       This program is a commercial software. Copying or distribution without a license is not allowed.
     *         
     *       If you need more licenses for this software. Please read more here <http://www.osclass.me/osclass-me-license/>.
     */  
?>
<style>
body{
    background-color: #<?php echo osc_get_preference('back-color', 'sahara'); ?>;
}
a, button.mami.btn.btn-default.dropdown-toggle, li#sks a,.warnamu{
    color:#<?php echo osc_get_preference('a-color', 'sahara'); ?>;
}
button.navbar-toggle.collapsed i, .navbar-default .navbar-nav > li > a {
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
span.icon-bar {
    background-color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
input.depan.form-control {
    border-top: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-radius: 0px;
    border-left: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-bottom: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
}
select.dpn#sCategory {
    background: #f1efef;
    border-top: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-bottom: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-radius: 0px;
}
select.dpn#sRegion {
    border-top: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-radius: 0px;
    background: #f1efef;
    border-right: none;
    border-bottom: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
}
select.dpn#sCountry {
    border-top: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-radius: 0px;
    background: #f1efef;
    border-bottom: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-right: none;
    border-left: none;
}
select.dpn#sCity {
    border-top: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-radius: 0px;
    background: #f1efef;
    border-bottom: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-right: none;
}
input.btn.btn-primary.depans {
    border-radius: 0px;
}
.list .user_type .personal, .list .user_type .firm{
color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.list .user_type span:hover{
    background: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
.list .user_type{
    background: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.list .user_type .search_num {
    margin: 5px;
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
a.putihh {
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
li.dropdown i, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus{
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
span.tuxedo-menu-trigger i, a.navbar-brand, .navbar-nav>li>a, .links>a, div#footer-copyright, .iconbox-wrap {
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.user_type {
    border-bottom: #<?php echo osc_get_preference('theme-color', 'sahara'); ?> 3px solid;
}
span.prices {
    background-color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
h4.titless {
    border-bottom: #ddd 2px dotted;
    padding-bottom: 8px;
}
.premi{
    background-color: #<?php echo osc_get_preference('premi-color', 'sahara'); ?>;
}
.list .user_type .all {
    margin-left: 5px;
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.socc li a{
    background: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
a.reggion {
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    background: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
<?php if(arabic_language_direction()=='rtl'){ ?>
.tags span:before {
    border-color: transparent transparent transparent #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
<?php } else { ?>
.tags span:before {
    border-color: transparent #<?php echo osc_get_preference('theme-color', 'sahara'); ?> transparent transparent;
}
<?php } ?>
p.post-price {
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.tags span {
    background: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
.socc li a:hover {
    background: #f1efef;
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.list .user_type .active {
    border-radius: 0px 0px 10px 10px;
    background: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
.harga-product {
    border-radius: 5px;
     background: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.fa.kategoris {
    background: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.fa.kategoris:hover {
    color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
    background: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
  color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
#footer{
    color:#555;
}
.pull-right span small, .caption strong, .caption p, .ari h2, .col-md-9.text.kat1 strong, .thumbnail .caption, .well-sm strong, .product-price h2, .pricetext, .pricolor {
    color: #<?php echo osc_get_preference('b-color', 'sahara'); ?>;
}
.pages li {
    list-style: none;
}
.navbar, .navbar-default, .dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus, .dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus, .nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus, .label-primary, .badge, .progress-bar, .list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus, .panel-primary > .panel-heading, .breadcrumb_wrapper, #breadcrumb_wrapper, div#footer-copyright, .iconbox-wrap, .cursor1 span.badge, header#top, .menu-sahara2{
    background: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
    border-color: transparent;
}
.pagination>li>a, .pagination>li>span, .box h4, h3.title, .panel-default>.panel-heading, .warna, li.manis a:hover {
    color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
h1, h2, h3, h4, .box h4, h5, h6{
    color:#<?php echo osc_get_preference('h1-color', 'sahara'); ?>;
}
.btn-primary.active,.btn-primary:active, .btn-primary.focus, .btn-primary:focus, .btn-primary{background-color:#<?php echo osc_get_preference('primary-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('primary-color', 'sahara'); ?>;
}
.tuxedo-menu ul li.postadd a:hover, .tuxedo-menu ul li.postadd a:focus, .btn-primary:active:hover,.btn-primary:hover{background-color:#<?php echo osc_get_preference('primaryh-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('primaryh-color', 'sahara'); ?>;
}
.btn-success.active,.btn-success:active, .btn-success.focus, .btn-success:focus, .btn-success{background-color:#<?php echo osc_get_preference('green-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('green-color', 'sahara'); ?>;
}
.btn-success:active:hover,.btn-success:hover{background-color:#<?php echo osc_get_preference('greenh-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('greenh-color', 'sahara'); ?>;
}
.btn-warning.active,.btn-warning:active, .btn-warning.focus, .btn-warning:focus, .btn-warning{background-color:#<?php echo osc_get_preference('yellow-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('yellow-color', 'sahara'); ?>;
}
.btn-warning:active:hover,.btn-warning:hover{background-color:#<?php echo osc_get_preference('yellowh-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('yellowh-color', 'sahara'); ?>;
}
.btn-info:active:hover,.btn-info.active,.btn-info:active, .btn-info.focus, .btn-info:focus, .btn-info{background-color:#<?php echo osc_get_preference('blue-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('blue-color', 'sahara'); ?>;
}
.btn-info:hover{background-color:#<?php echo osc_get_preference('blueh-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('blueh-color', 'sahara'); ?>;
}
.btn-danger.active,.btn-danger:active, .btn-danger.focus, .btn-danger:focus, .btn-danger{background-color:#<?php echo osc_get_preference('red-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('red-color', 'sahara'); ?>;
}
.btn-danger:active:hover,.btn-danger:hover{background-color:#<?php echo osc_get_preference('redh-color', 'sahara'); ?>;border-color:#<?php echo osc_get_preference('redh-color', 'sahara'); ?>;
}
a.watchlist {
    background-color:#<?php echo osc_get_preference('blue-color', 'sahara'); ?>;
}
a.watchlist:hover {
    text-decoration: none;background-color:#<?php echo osc_get_preference('blueh-color', 'sahara'); ?>;
}
a.list-group-item-warning:focus, a.list-group-item-warning:hover, button.list-group-item-warning:focus, button.list-group-item-warning:hover {
   color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    background-color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
h1.opening {
    text-shadow: 2px 2px 8px #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
h2.opening {
    text-shadow: 2px 2px 8px #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
a.list-group-item:focus, a.list-group-item:hover, button.list-group-item:focus, button.list-group-item:hover {
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    background-color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
.list-group-item-warning, a.clous {
    color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
    background-color: #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
a.list-group-item-warning, button.list-group-item-warning {
color: #<?php echo osc_get_preference('a2-color', 'sahara'); ?>;
}
.catalog, .catalogi{
    border-bottom: #ddd 2px dotted;
}

.beautiful, .cd-top.cd-is-visible{
    background-color:#<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
.box h4 {
    border-bottom: 2px solid #<?php echo osc_get_preference('theme-color', 'sahara'); ?>;
}
@media (max-width: 992px) {
input.depan.form-control {
    border-right: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-bottom: inherit;
}
select.dpn#sCategory {
    border-left: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-right: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-bottom: inherit;
}
select.dpn#sCountry {
   border-left: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
   border-right: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
   border-bottom: inherit;
}
select.dpn#sRegion {
    border-left: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-right: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-bottom: inherit;
}
select.dpn#sCity {
    border-left: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-right: #<?php echo osc_get_preference('primary-color', 'sahara'); ?> 2px solid;
    border-bottom: inherit;
}
}

<?php echo osc_get_preference('address-us', 'sahara'); ?>
</style>