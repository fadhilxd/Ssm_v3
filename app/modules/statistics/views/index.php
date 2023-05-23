


<?php

session_start();
echo $_SESSION['username']; 

  $data_tickets_log = $data_log->data_tickets;
  $data_orders_log  = $data_log->data_orders;

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

?>
<div class="row justify-content-center row-card statistics">
<div class="home-container col-sm-12">

    <div class="l6-nonem left-box">
      <img class="img-left" src="<?=cn('assets/images/decore-left.png')?>" alt="Top Decore Left">
      <img class="img-right" src="<?=cn('assets/images/decore-right.png')?>" alt="Top Decore Right">
      <div class="avatar-content">
          <img class="img-avatar-statistics" src="<?=get_field(USERS, ["id" => session('uid')], 'profile_img')?>" alt="">
      </div>
      <span class="text-default">
        <?=lang("Welcome")?> &nbsp<?=get_field(USERS, ["id" => session('uid')], 'first_name')?> <?=get_field(USERS, ["id" => session('uid')], 'last_name')?>
      </span>
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
              <h4>
                <?=lang("Your_current_balance_is")?>
                <strong>
                  <?=get_option('currency_symbol',"$")?>
                  <?=$balance?>
                </strong>
                <br>
                  <?=lang("How_about_recharging_your_balance")?>
                </h4>
                <?php }else{?>
                <h4>
                  <?=lang("How_are_your_sales_today")?>
                </h4>
                <h4 style="margin-top:-10px;">
                  <?=lang("How_about_seeing_if_you_have_any_support_tickets_open")?>
                </h4>
                <?php }?>
                <?php
                          if (get_role("admin")) {
                          ?>
                <div class="btn-first-bottom">
                  <a href="<?=BASE?>/tickets"><span>
                    <?=lang("Check_Tickets")?>
                    </span>
                  </a>
                </div>
                <?php }?>
                <?php
                  if (!get_role("admin")) {
                ?>
                <div class="btn-first-bottom">
                <a href="<?=BASE?>/add_funds"><span>
                  <?=lang("Add_Balance")?>
                  </span>
                </a>
                </div>
                <?php }?> 
      </div>
    <div class="l1-nonem middle-box" >
    <img class="support-img" src="<?=cn('assets/images/24-7-support.png')?>" alt="Support Image">
    <h4 style="margin-top:15px;">
      <?=lang("Need_help")?>
    </h4>

    <h4 style="margin-top:-5px;">
      <?=lang("Contact_us_and_we_will_be_happy_to_help")?>
    </h4>

    <div class="btn-second-bottom">
      <a href="/tickets"><span>
        <?=lang("Contact_us")?>
      </span></a>
    </div>
    </div>

    <div class="l6-nonem right-box">
      <div class="left-right">
      <?=lang("Invite_your_friends_and_earn_a_reward")?>
      <?=lang("Everything_is_better_with_friends")?>
      
      <button id="invite_btn" class="invite-target"><?=lang("Invite_friend")?></button>
      </div>
      <img class="card-img" src="<?=cn('assets/svgs/card-img.svg')?>" alt="Card Img">
      <img class="rectangle" src="<?=cn('assets/svgs/rectangle.svg')?>" alt="Rectangle">
      <img class="oval" src="<?=cn('assets/svgs/oval.svg')?>" alt="Oval">
    </div>
</div>

<div class="col-sm-12">
    <div class="row">
      <?php
        if (get_role("admin")) {
      ?>
      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-3">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md text-white mr-3">
              <i class="feather icon-users"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_log->total_users?></h4>
                <small class="text-muted "><?=lang("total_users")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }else{ ?>
      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-3">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md text-white mr-3">
              <i class="far fa-dollar-sign"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=get_option('currency_symbol',"$")?><?=(!empty($data_log->user_balance)) ? currency_format($data_log->user_balance, get_option('currency_decimal', 2), $decimalpoint, $separator) : 0?></h4>
                <small class="text-muted "><?=lang("your_balance")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-3">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-2 stamp-md text-white mr-3">
              <i class="far fa-dollar-sign"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=get_option('currency_symbol',"$")?><?=(!empty($data_log->total_spent_receive)) ? currency_format($data_log->total_spent_receive, get_option('currency_decimal', 2), $decimalpoint, $separator) : 0?></h4>
                <small class="text-muted ">
                  <?=(get_role("admin") ? lang("total_amount_recieved") : lang("total_amount_spent"))?>
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-3">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-3 stamp-md text-white mr-3">
              <i class="far fa-shopping-cart"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_orders_log->total?></h4>
                <small class="text-muted "><?=lang("total_orders")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-3">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-4 stamp-md bg-danger-gradient text-white mr-3">
              <i class="far fa-ticket-alt"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_tickets_log->total?></h4>
                <small class="text-muted "><?=lang("total_tickets")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
      
      <!-- Order -->
      <div class="sm-bottom">
        <div class="card-container">
        <div class="left-card">
          <span class="bubble like-1"><i class="fas fa-heart"></i><span>78</span>
          <div class="arrow-down"></div>
          </span>

          <span class="bubble follow-1"><i class="fas fa-user"></i><span>137</span>
          <div class="arrow-down"></div>
          </span>

          <span class="bubble follow-2"><i class="fas fa-user"></i><span>82</span>
          <div class="arrow-down"></div>
          </span>

          <span class="bubble like-2"><i class="fas fa-heart"></i><span>321</span>
          <div class="arrow-down"></div>
          </span>

          <span class="bubble follow-3"><i class="fas fa-user"></i><span>152</span>
          <div class="arrow-down"></div>
          </span>

          <span class="bubble like-3"><i class="fas fa-heart"></i><span>35</span>
          <div class="arrow-down"></div>
          </span>

          <span class="bubble like-4"><i class="fas fa-heart"></i><span>15</span>
          <div class="arrow-down"></div>
          </span>

          <span class="bubble like-5"><i class="fas fa-heart"></i><span>335</span>
          <div class="arrow-down"></div>
          </span>

        </div>
        <div class="right-card">
        <div style="width:100%; color: white;">
        <center><h3 style="color: white;">Admin Note</h3></center>
        <p style="color: white;">
        <?=htmlspecialchars_decode(get_option('custom_home', ''), ENT_QUOTES)?>
        </p>
        </div>
        </div>
      </div>
      <div class="card-header-statistics">
        <h3 class="card-title"><?=lang("recent_orders")?></h3>
      </div> 
      <div class="row">
      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-list"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_orders_log->total?></h4>
                <small class="text-muted "><?=lang("total_orders")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-check"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 number"><?=$data_orders_log->completed?></h4>
                <small class="text-muted"><?=lang("Completed")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-chart-line"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_orders_log->processing?></h4>
                <small class="text-muted "><?=lang("Processing")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-spinner"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_orders_log->inprogress?></h4>
                <small class="text-muted "><?=lang("In_progress")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-clock"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_orders_log->pending?></h4>
                <small class="text-muted "><?=lang("Pending")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-hourglass-half"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_orders_log->partial?></h4>
                <small class="text-muted "><?=lang("Partial")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>    

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-times-circle"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_orders_log->canceled?></h4>
                <small class="text-muted "><?=lang("Canceled")?></small>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-undo-alt"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_orders_log->refunded?></h4>
                <small class="text-muted "><?=lang("Refunded")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php
        if (get_role('admin')) {
      ?>
      <!-- Orders Graph -->
      <div class="col-sm-12 charts">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?=lang("recent_orders")?></h3>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="p-4 card">
                <div id="orders_chart_spline" style="height: 20rem;"></div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="p-4 card">
                <div id="orders_chart_pie" style="height: 20rem;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    
      <?php
        if (get_role('admin')) {
      ?>
      <!-- tickets -->
      <div class="card-header-statistics">
        <h3 class="card-title"><?=lang("Tickets")?></h3>
      </div>
    <div class="row">
      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-ticket"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_tickets_log->total?></h4>
                <small class="text-muted "><?=lang("total_tickets")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-envelope"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 number"><?=$data_tickets_log->new?></h4>
                <small class="text-muted"><?=lang("New")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-user-clock"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_tickets_log->pending?></h4>
                <small class="text-muted "><?=lang("Pending")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-1 stamp-md mr-3 text-info">
              <i class="far fa-do-not-enter"></i>
            </span>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="ml-2 d-lg-block text-right">
                <h4 class="m-0 text-right number"><?=$data_tickets_log->closed?></h4>
                <small class="text-muted "><?=lang("Closed")?></small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
  
  <?php
        if (get_role('admin')) {
      ?>
      <!-- Tickets Graph -->
      <div class="col-sm-12 charts">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?=lang("recent_tickets")?></h3>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="p-4 card">
                <div id="tickets_chart_spline" style="height: 20rem;"></div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="p-4 card">
                <div id="tickets_chart_pie" style="height: 20rem;"></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php }?>
  
  <div class="invite-friend" style="display:none;">
    <div class="invite-container">
      <h2><?=lang("Invite_your_<u>Friends</u>")?></h2>
      <div class="a2a_kit a2a_kit_size_32 a2a_default_style"><a class="a2a_dd" href="https://www.addtoany.com/share"></a><a class="a2a_button_facebook"></a><a class="a2a_button_email"></a><a class="a2a_button_whatsapp"></a><a class="a2a_button_facebook_messenger"></a></div><script async src="<?=cn("assets/js/share-buttons.js")?>"></script>
    </div>      
  </div>
</div>

<script>
  $(document).ready(function(){

    Chart_template.chart_spline('#orders_chart_spline', <?=$data_orders_log->data_orders_chart_spline?>);
    Chart_template.chart_pie('#orders_chart_pie', <?=$data_orders_log->data_orders_chart_pie?>);

    Chart_template.chart_spline('#tickets_chart_spline', <?=$data_tickets_log->data_tickets_chart_spline?>);
    Chart_template.chart_pie('#tickets_chart_pie', <?=$data_tickets_log->data_tickets_chart_pie?>);
  });
</script>

<style>
  .a2a_kit,
  .a2a_menu,
  .a2a_modal,
  .a2a_overlay {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    align-content: center;
    margin: auto;
    width: 50%;
    padding: 10px;
  }
</style>

<div class="modal-infor">
  <div class="modal" id="invite" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title"><i class="fe fe-bell"></i>Invite</h4>
          <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        
        <?php
        $normal_url = $_SERVER['SERVER_NAME'];
        ?>

        <!-- AddToAny BEGIN -->
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php $normal_url ?>" data-a2a-title="<?php get_option('website_name') ?>" style="line-height: 32px;">
          <a class="a2a_dd" href="https://www.addtoany.com/share#url=https%3A%2F%2Fparadisepremium.in&amp;title=Paradise%20Premium"><span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <g fill="#FFF">
                  <path d="M14 7h4v18h-4z"></path>
                  <path d="M7 14h18v4H7z"></path>
                </g>
              </svg></span><span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">Share</span></a>
          <a class="a2a_button_facebook" target="_blank" href="/#facebook" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(24, 119, 242);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path>
              </svg></span><span class="a2a_label">Facebook</span></a>
          <a class="a2a_button_twitter" target="_blank" href="/#twitter" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(85, 172, 238);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path>
              </svg></span><span class="a2a_label">Twitter</span></a>
          <a class="a2a_button_email" target="_blank" href="/#email" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_email" style="background-color: rgb(1, 102, 255);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path fill="#FFF" d="M26 21.25v-9s-9.1 6.35-9.984 6.68C15.144 18.616 6 12.25 6 12.25v9c0 1.25.266 1.5 1.5 1.5h17c1.266 0 1.5-.22 1.5-1.5zm-.015-10.765c0-.91-.265-1.235-1.485-1.235h-17c-1.255 0-1.5.39-1.5 1.3l.015.14s9.035 6.22 10 6.56c1.02-.395 9.985-6.7 9.985-6.7l-.015-.065z"></path>
              </svg></span><span class="a2a_label">Email</span></a>
          <a class="a2a_button_whatsapp" target="_blank" href="/#whatsapp" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: rgb(18, 175, 10);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.241 11.241 0 0 0 5.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292zm0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.345 9.345 0 0 1-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4 5.183 0 9.397 4.22 9.397 9.4 0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055-.158-.295 0-.445.15-.584.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297.266-.664.287-1.24.22-1.363-.07-.123-.26-.203-.54-.357z"></path>
              </svg></span><span class="a2a_label">WhatsApp</span></a>
          <div style="clear: both;"></div>
        </div>
        <script async="" src="https://static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->

        <br>
        <br>

      </div>
    </div>
  </div>
</div>

<script>
  // Get the modal
  var modal = document.getElementById("invite");

  // Get the button that opens the modal
  var btn = document.getElementById("invite_btn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }

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
</script>
