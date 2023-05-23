<?php 
  $themeswitch =  $_SESSION['theme'];

   if($themeswitch == 1){
    $href = 'core-dark.css';
   }else{
    $href = 'core-light.css';
   }
?>
<script>
  function menuopen() {
  var x = document.getElementById("headerMenuCollapse");
  var y = document.getElementById("containerall");
  if (x.className === "navclose container-left-menu") {
    x.className = "navopen container-left-menu";
    y.className = "container-all menuclose";
  } else {
    x.className = "navclose container-left-menu";
    y.className = "container-all menuopen";
  }
}
function closenav() {
  var x = document.getElementById("headerMenuCollapse");
    x.className = "navclose container-left-menu";
}
function opennavitem(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  }else{
    x.style.display = "none";
  }
}
</script>
<script>
 function myFunc() {
  document.getElementById("mycheck").click();
}
function myFunction() {
  document.getElementById("theme_submit").click();
}
</script>
<script>
/* Get the documentElement (<html>) to display the page in fullscreen */
var elem = document.documentElement;
var isfull;

/* View in fullscreen */
function fullscreen() {
  if (isfull != "yes") {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) { /* Firefox */
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE/Edge */
      elem.msRequestFullscreen();
    }
    isfull = "yes"
  }else{
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.mozCancelFullScreen) { /* Firefox */
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE/Edge */
      document.msExitFullscreen();
    }
    isfull = "no"
  }
}
</script>
<style>
@media (max-width: 991.98px) {
  .navopen {
    left: 0px;
  } 
  .navclose {
    left: -260px;
  } 
  .nav-toggle.icon-x {
    display: block;
}
}
@media (min-width: 991.98px){
  .menuopen {
    margin-left: 260px ;
  }
  .menuclose {
    margin-left: 0px ;
  }
  .navopen {
    display: none;
  } 
  .navclose {
    display: block;
  } 
}
  @media (min-width: 991.98px){
.header.top .notifcation, .header.top .search-field, .header.top .expand-screen, .header.top .dark-light, .header.top .language {
    margin-right: 15px;
}
}
.header.top .expand-screen {
    position: relative;
    font-size: 24px;
    margin-right: 10px;
}
</style>
<script>
function searchbarOpen() {
  document.getElementById("searchbar").className = "search-input show";
}
function searchbarClose() {
  document.getElementById("searchbar").className = "search-input hide";
}
</script>
<link rel="stylesheet" type="text/css" href="<?=BASE?>assets/css/<?php print_r($href); ?>" id="lnk"/>
<div class="sidenav-overlay"></div>
<div class="navclose container-left-menu" id="headerMenuCollapse">
  <div class="header d-lg-flex p-0">
  <div clss="scroll-box">
    <div class="container">
      <div class="row align-items-center">     
        <div class="col-lg order-lg-first">
          <div class="container-logo">
            <img src="<?=get_option('website_logo_white', BASE."assets/images/logo.png")?>" alt="Website logo">
              <i onclick="closenav()" class="nav-item nav-toggle mobile-only feather icon-x"></i>
          </div>
          <ul class="nav nav-tabs border-0 flex-column" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class="nav-item">
              <a href="<?=cn('statistics')?>" class="nav-link <?=(segment(1) == 'statistics')?"active":""?>"><i class="feather icon-bar-chart"></i> <span><?=lang("Statistics")?></span></a>
            </li>

            <li class="nav-item">
              <a href="<?=cn('order/add')?>" class="nav-link <?=(segment(2) == 'add')?"active":""?>"><i class="feather icon-shopping-cart"></i> <span><?=lang("New_order")?></span></a>
            </li>

            <li class="nav-item submenu-orders">
              <a onclick="opennavitem(orderssubmenu.id)" href="javascript:void(0)" class="nav-link submenu <?=(segment(1) == 'dripfeed' || segment(2) == 'log' || segment(1) == 'subscriptions')?"active":""?>"><i class="feather icon-file-text"></i><span><?=lang('Order')?></span></a>
            </li> 
            <div id="orderssubmenu" class="submenu-menu orders" style="display:none">
                  <li class="nav-item-show">
                  <a href="<?=cn('order/log')?>" class="mini-menu-only"> <i class="far fa-history"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('dripfeed')?>" class="mini-menu-only"> <i class="feather icon-droplet"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('subscriptions')?>" class="mini-menu-only"> <i class="far fa-sync"></i></a>
                  </li>
                  <li class="nav-item">
                      <a href="<?=cn('order/log')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("order_logs")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('dripfeed')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("dripfeed")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('subscriptions')?>" class="dropdown-item "><i class="feather icon-circle"></i> <span><?=lang("Subscriptions")?></span></a>
                  </li>
              </div>
            <?php
              if (get_role("admin") || get_role("supporter")) {
            ?>
            <li class="nav-item">
              <a href="<?=cn('category')?>" class="nav-link <?=(segment(1) == 'category')?"active":""?>"><i class="feather icon-layers"></i> <span><?=lang("Category")?></span></a>
            </li>
            
            <?php }?>

            <li class="nav-item dropdown">
              <a href="<?=cn('services')?>" class="nav-link <?=(segment(1) == 'services')?"active":""?>"><i style="font-size: 17px;" class="far fa-store"></i> <span><?=lang('Services')?></span></a>
            </li>  

            <?php 
              if (get_option('enable_api_tab')) {
            ?>      
            <li class="nav-item dropdown">
              <a href="<?=cn('api/docs')?>" class="nav-link <?=(segment(2) == 'docs')?"active":""?>"><i class="far fa-laptop-code"></i> <span><?=lang("API")?></span></a>
            </li>
            <?php }?>   
            <li class="nav-item submenu-support">
              <a onclick="opennavitem(supportsubmenu.id)" href="javascript:void(0)" class="nav-link submenu <?=(segment(1) == 'tickets' || segment(1) == 'faqs')?"active":""?>"><i class="far fa-user-headset"></i>
                <span><?=lang('Support')?></span> <span class="badge badge-info"><?=$total_unread_tickets?></span>
              </a>
            </li>
            <div id="supportsubmenu" class="submenu-menu support" style="display:none">
                  <li class="nav-item-show">
                  <a href="<?=cn('tickets')?>" class="mini-menu-only"> <i class="far fa-history"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('terms')?>" class="mini-menu-only"> <i class="far fa-history"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('faqs')?>" class="mini-menu-only"> <i class="feather icon-droplet"></i></a>
                  </li>
                  <li class="nav-item">
                      <a href="<?=cn('tickets')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("Tickets")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('terms')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("Terms")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('faq')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("FAQ")?></span></a>
                  </li>
              </div>
            <?php
              if (get_role("user")) {
            ?>
            <li class="nav-item dropdown">
              <a href="<?=cn('add_funds')?>" class="nav-link <?=(segment(1) == 'add_funds')?"active":""?>"><i style="font-size:18px;" class="fal fa-credit-card"></i> <span><?=lang("Add_funds")?></span></a>
            </li>   

            <li class="nav-item dropdown">
              <a href="<?=cn('transactions')?>" class="nav-link <?=(segment(1) == 'transactions')?"active":""?>"><i class="far fa-money-check-edit-alt"></i> <span><?=lang("Transaction_logs")?></span></a>
            </li>
            <?php }?>
            
            <?php if(get_role("admin") || get_role("supporter")){
              $user_manager = array(
                'users',
                'add_funds',
                'transactions',
              );
            ?>
          
            <li class="nav-item submenu-user">
              <a onclick="opennavitem(usermanagersub.id)" href="javascript:void(0)" class="nav-link submenu <?=(segment(1) == 'users' || segment(1) == 'add_funds' || segment(1) == 'transactions')?"active":""?>"><i class="feather icon-user"></i><span><?=lang("user_manager")?></span></a>
            </li>
            <div id="usermanagersub" class="submenu-menu user-manager" style="display:none">
                  <li class="nav-item-show">
                  <a href="<?=cn('users')?>" class="mini-menu-only"> <i class="far fa-users"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('add_funds')?>" class="mini-menu-only"> <i class="far fa-credit-card"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('transactions')?>" class="mini-menu-only"> <i class="far fa-money-check-edit-alt"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('subscribers')?>" class="mini-menu-only"> <i class="far fa-money-check-edit-alt"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('user_mail_logs')?>" class="mini-menu-only"> <i class="far fa-money-check-edit-alt"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('user_logs')?>" class="mini-menu-only"> <i class="far fa-money-check-edit-alt"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('user_block_ip')?>" class="mini-menu-only"> <i class="far fa-money-check-edit-alt"></i></a>
                  </li>
                  <li class="nav-item">
                      <a href="<?=cn('users')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("users")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('add_funds')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("Add_funds")?></span></a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="<?=cn('transactions')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("Transaction_logs")?></span></a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="<?=cn('subscribers')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("Subscribers")?></span></a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="<?=cn('user_mail_logs')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("User Mail Logs")?></span></a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="<?=cn('user_logs')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("User Activity Logs")?></span></a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="<?=cn('user_block_ip')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("Banned IP Address List")?></span></a>
                  </li>
              </div>
            <?php }?>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link"><i class="fab fa-google-play"></i> <span><?=lang("Mobile_App")?></span> </a>
              <span class="badge-pill"><?=lang("Soon")?></span>
            </li>
            <?php if(get_role("admin") ||  get_role("supporter")){
              $setting_system = array(
                'setting',
                'api_provider',
                'news',
                'language',
                'module',
              );
            ?>
            <li class="nav-item submenu-admin">
              <a onclick="opennavitem(adminsubmenu.id)" href="javascript:void(0)" class="nav-link submenu <?=(in_array(segment(1), $setting_system))?"active":""?>"><i class="feather icon-settings"></i> <span><?=lang("system_settings")?></span> </a>
            </li>
            <div id="adminsubmenu" class="submenu-menu admin" style="display:none">
                  <li class="nav-item-show">
                  <a href="<?=cn('setting')?>" class="mini-menu-only"> <i class="far fa-tools"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('api_provider')?>" class="mini-menu-only"> <i class="far fa-laptop-code"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('news')?>" class="mini-menu-only"> <i class="far fa-newspaper"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('language')?>" class="mini-menu-only"> <i class="far fa-globe-asia"></i></a>
                  </li>
                  <li class="nav-item-show">
                  <a href="<?=cn('module')?>" class="mini-menu-only"> <i class="far fa-box-open"></i></a>
                  </li>
                  <li class="nav-item">
                      <a href="<?=cn('setting')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("Settings")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('api_provider')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("API_providers")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('news')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("News")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('faqs')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("FAQ's")?></span></a>
                  </li>

                  <li class="nav-item">
                      <a href="<?=cn('language')?>" class="dropdown-item "> <i class="feather icon-circle"></i> <span><?=lang("Language")?></span></a>
                  </li>
              </div>
            <?php } ?>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container-all menuopen" id="containerall">
<div class="header top  py-4">
  <div class="container">
  <?php
          $array_allow = array('user_block_ip', 'user_logs', 'user_mail_logs', 'services', 'category', 'subscriptions', 'dripfeed', 'users', 'tickets', 'faqs', 'log', 'transactions');
          if (in_array(segment(1), $array_allow) || in_array(segment(2), $array_allow)) {
        ?>
        <div id="searchbar" class="search-input hide">
          <form class="ajaxSearchItem input-icon my-3 my-lg-0" method="POST" action="<?=cn(segment(1)."/ajax_search/keyword")?>">
            <div class="form-group">
              <div class="input-group">
              <i onclick="searchbarClose()" class="feather icon-x close-search"></i>
                <input type="text" class="form-control" name="k" placeholder="<?=lang("Search_for_")?>">
                <span class="input-group-append">
                  <button class="btn btn-secondary" type="submit"><i class="feather icon-search"></i></button>
                </span>
              </div>
            </div>
          </form>
        </div>
        <?php }?>
    <div class="d-flex">
    <div onclick="menuopen()" class="header-toggler hamburger hamburger--squeeze">
      <div class="hamburger-box">
          <div class="hamburger-inner"></div>
      </div>
  </div>
      <div class="d-flex order-lg-2 ml-auto my-auto">
      <div class="language">
      <span style="width: 25px;height: 25px;" class="flag-target flag-icon" data-toggle="tooltip" data-placement="left" title="<?=lang("Select_language")?>"></span>
            <?php
              $redirect = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            ?>
            <?php 
              if (!empty($languages)) {
            ?>
            <div class="show-hide-selec" style="display:none;">
            <select class="footer-lang-selector ajaxChangeLanguage" name="ids" data-url="<?=cn('language/set_language/')?>" data-redirect="<?=$redirect?>" data-toggle="tooltip" data-placement="left" title="<?=lang("Click_to_select_language")?>">
              <?php 
                foreach ($languages as $key => $row) {
              ?>
              <option value="<?=$row->ids?>" <?=(!empty($lang_current) && $lang_current->code == $row->code) ? 'selected' : '' ?> ><?=language_codes($row->code)?></option>
              
              <?php }?>

            </select>
            <div class="vs-dropdown--menu--after" style="top: 0px;right: 15px;"></div>
            </div>
            <?php }?>   
        </div>       
      <div class="dark-light">
      <a id="theme" class="link-switcher" onclick="myFunc()" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Change theme">
            <i class="switch-template feather icon-sun-moon"></i>
          </a>
        </div>

        <form id="myForm" method="POST" action="" >
        <div class="form-group">
                    <label class="switch">
                      <input type="hidden" name="theme_switch" value="0">
                      <input id="mycheck" onclick="myFunction()" type="checkbox" name="theme_switch" class="custom-switch-input" <?=($themeswitch == 1) ? "checked" : ""?> value="1" hidden>
                      <span class="slider"></span>
                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <input style="display: none;" id="theme_submit" type="submit" name="theme_submit" value="">
                    </label>
                  </div>
         </form>

      <div class="expand-screen">
          <a onclick="fullscreen()" class="expand-icon" href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="<?=lang("Full_width")?>">
            <i class="feather max-icon icon-maximize"></i>
          </a>
        </div>
      <?php
          $array_allow = array('user_block_ip', 'user_logs', 'user_mail_logs', 'services', 'category', 'subscriptions', 'dripfeed', 'users', 'tickets', 'faqs', 'log', 'transactions');
          if (in_array(segment(1), $array_allow) || in_array(segment(2), $array_allow)) {
        ?>
        
      <div class="search-field">
          <a onclick="searchbarOpen()" href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="<?=lang("Search_for_")?>">
            <i class="feather icon-search"></i>
          </a>
        </div>
        <?php }?>
        <?php
          if (session('uid_tmp')) {
        ?>
        <div class="notifcation m-r-10">
          <a href="<?=cn("blocks/back_to_admin")?>" data-toggle="tooltip" data-placement="bottom" title="<?=lang('Back_to_Admin')?>" class="text-white ajaxBackToAdmin">
            <i class="far fa-sign-out-alt"></i>
          </a>
        </div>
        <?php } ?>
        <?php
          if (get_option("enable_news_announcement") == 1) {
        ?>
        <div class="notifcation">
          <a href="<?=cn("news/ajax_notification")?>" data-toggle="tooltip" data-placement="bottom" title="<?=lang("news__announcement")?>" class="ajaxModal text-white">
            <i class="feather icon-bell"></i>
            <div class="">
              <span class="nav-unread <?=(isset($_COOKIE["news_annoucement"]) && $_COOKIE["news_annoucement"] == "clicked") ? "" : "change_color"?>"></span>
            </div>
          </a>
        </div>
        <?php }?>
        <div class="username">
        <span class="text-default"><span class="text-uppercase"><?=get_field(USERS, ["id" => session('uid')], 'first_name')?> <?=get_field(USERS, ["id" => session('uid')], 'last_name')?></span></span>
              <small class="balance-adm d-block mt-1">
                <?php
                  // !get_role("admin")
                  if (!get_role("admin")) {
                    $balance = get_field(USERS, ["id" => session('uid')], 'balance');

                    switch (get_option('currency_decimal_separator', 'dot')) {
                      case 'dot':
                        $decimalpoint = '.';
                        break;
                      case 'comma':
                        $decimalpoint = ',';
                        break;
                      default:
                        $decimalpoint = '';
                        break;
                    } 

                    switch (get_option('currency_thousand_separator', 'comma')) {
                      case 'dot':
                        $separator = '.';
                        break;
                      case 'comma':
                        $separator = ',';
                        break;
                      case 'space':
                        $separator = ' ';
                        break;
                      default:
                        $separator = '';
                        break;
                    }
                    if (empty($balance) || $balance == 0) {
                      $balance = 0.00;
                    }else{
                      $balance = currency_format($balance,  get_option('currency_decimal', 2), $decimalpoint, $separator);
                    }
                ?>
                <?=lang("Balance")?>: <?=get_option('currency_symbol',"$")?><?=$balance?>
                <?php }else{?> 
                  <?=lang("Admin_account")?>
                <?php }?> 
              </small>
            </span>
            </div>
        <div class="dropdown">
          <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
            <span class="avatar" style="background-image: url(<?=get_field(USERS, ["id" => session('uid')], 'profile_img')?>"></span>
            <span class="ml-2 d-none d-lg-block">
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <div class="username-mobile">
             <small class="balance-adm mt-1">
                <?php
                  // !get_role("admin")
                  if (!get_role("admin")) {
                    $balance = get_field(USERS, ["id" => session('uid')], 'balance');

                    switch (get_option('currency_decimal_separator', 'dot')) {
                      case 'dot':
                        $decimalpoint = '.';
                        break;
                      case 'comma':
                        $decimalpoint = ',';
                        break;
                      default:
                        $decimalpoint = '';
                        break;
                    } 

                    switch (get_option('currency_thousand_separator', 'comma')) {
                      case 'dot':
                        $separator = '.';
                        break;
                      case 'comma':
                        $separator = ',';
                        break;
                      case 'space':
                        $separator = ' ';
                        break;
                      default:
                        $separator = '';
                        break;
                    }
                    if (empty($balance) || $balance == 0) {
                      $balance = 0.00;
                    }else{
                      $balance = currency_format($balance,  get_option('currency_decimal', 2), $decimalpoint, $separator);
                    }
                ?>
                <?=lang("Balance")?>: <?=get_option('currency_symbol',"$")?><?=$balance?>
                <?php }else{?> 
                  <?=lang("Admin_account")?>
                <?php }?> 
              </small>
            </span>
            </div>
            <a class="dropdown-item" href="<?=cn('profile')?>">
              <i class="dropdown-icon feather icon-user"></i> <?=lang("Profile")?>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=cn("auth/logout")?>">
              <i class="dropdown-icon feather icon-power"></i> <?=lang("Sign_out")?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
