


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
                  <?=lang("How_about_recharging_your_balance?")?>
                </h4>
                <?php }else{?>
                <h4>
                  <?=lang("How_are_your_sales_today?")?>
                </h4>
                <h4 style="margin-top:-10px;">
                  <?=lang("How_about_seeing_if_you_have_any_support_tickets_open?")?>
                </h4>
                <?php }?>
                <?php
                          if (get_role("admin")) {
                          ?>
                <div class="btn-first-bottom">
                  <span>
                    <?=lang("Check_Tickets")?>
                  </span>
                </div>
                <?php }?>
                <?php
                                if (!get_role("admin")) {

                              ?>
                <div class="btn-first-bottom">
                  <span>
                    <?=lang("Add_Balance")?>
                  </span>
                </div>
                <?php }?> 
      </div>
    <div class="l1-nonem middle-box" ></div>

    <div class="l6-nonem right-box">

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
            <span class="stamp stamp-md bg-success-gradient text-white mr-3">
              <i class="fe fe-users"></i>
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
            <span class="stamp stamp-md bg-success-gradient text-white mr-3">
              <i class="fe fe-dollar-sign"></i>
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
            <span class="stamp stamp-md bg-info-gradient text-white mr-3">
              <i class="fe fe-dollar-sign"></i>
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
            <span class="stamp stamp-md bg-warning-gradient text-white mr-3">
              <i class="fe fe-shopping-cart"></i>
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
            <span class="stamp stamp-md bg-danger-gradient text-white mr-3">
              <i class="fa fa-ticket"></i>
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
    <div class="row">
      
      <!-- Order -->
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

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-list"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-check"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-trending-up"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-loader"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-pie-chart"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fa fa-hourglass-half"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-x-square"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-rotate-ccw"></i>
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
      <?php
        if (get_role('admin')) {
      ?>
      <!-- tickets -->
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

      <div class="col-sm-6 col-lg-3 item">
        <div class="card p-4">
          <div class="d-flex align-items-center">
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fa fa-ticket"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-mail"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-pie-chart"></i>
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
            <span class="stamp stamp-md mr-3 text-info">
              <i class="fe fe-check"></i>
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
</div>

<script>
  $(document).ready(function(){

    Chart_template.chart_spline('#orders_chart_spline', <?=$data_orders_log->data_orders_chart_spline?>);
    Chart_template.chart_pie('#orders_chart_pie', <?=$data_orders_log->data_orders_chart_pie?>);

    Chart_template.chart_spline('#tickets_chart_spline', <?=$data_tickets_log->data_tickets_chart_spline?>);
    Chart_template.chart_pie('#tickets_chart_pie', <?=$data_tickets_log->data_tickets_chart_pie?>);
  });
</script>
