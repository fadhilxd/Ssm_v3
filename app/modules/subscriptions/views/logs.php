<style type="text/css">
  .order_btn_group .list-inline-item a.btn{
    font-size: 0.9rem;
    font-weight: 400;
  }
  
</style>
  <div class="d-flex-center">
  <h1 class="page-title">
    <?=lang("Subscriptions")?>
  </h1>
</div>
  <div class="page-options d-flex tabs-wrapper">
    <ul class="list-inline mb-0 order_btn_group nav">
    <li class="list-inline-item nav-select" style="margin-left: -5px;"><a class="nav-link <?=($order_status == 'all') ? 'active' : ''?>" href="<?=cn($module."/all")?>"><i class="far fa-list-ul" style="margin-right:5px;"></i>All</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'active') ? 'active' : ''?>" href="<?=cn($module."/active")?>"><i class="far fa-play-circle" style="margin-right:5px;"></i>Active</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'paused') ? 'paused' : ''?>" href="<?=cn($module."/paused")?>"><i class="far fa-pause-circle" style="margin-right:5px;"></i>Paused</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'completed') ? 'active' : ''?>" href="<?=cn($module."/completed")?>"><i class="far fa-check" style="margin-right:5px;"></i>Completed</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'expired') ? 'active' : ''?>" href="<?=cn($module."/expired")?>"><i class="far fa-hourglass" style="margin-right:5px;"></i>Expiry field is required</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'canceled') ? 'active' : ''?>" href="<?=cn($module."/canceled")?>"><i class="far fa-times-circle" style="margin-right:5px;"></i>Canceled</a></li>

    </ul>
  </div>
</div>

<div class="row" id="result_ajaxSearch">
  <?php if(!empty($order_logs)){
  ?>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?=lang("Lists")?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="feather icon-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="feather icon-x"></i></a>
        </div>
      </div>
      <div class="table-responsive js-scrollable">
        <table class="table table-hover table-bordered table-vcenter card-table">
          <thead>
            <tr>
              <?php if (!empty($columns)) {
                foreach ($columns as $key => $row) {
              ?>
              <th><?=$row?></th>
              <?php }}?>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($order_logs)) {
              $i = 0;
              foreach ($order_logs as $key => $row) {
              $i++;
            ?>
            <tr class="tr_<?=$row->ids?>">
              <td class="text-center"><?=$row->id?></td>
              <?php
                if (get_role("admin") || get_role("supporter")) {
              ?>
              <td class="text-center"><?=($row->api_order_id == 0 || $row->api_order_id ==-1)? "" : $row->api_order_id?></td>
              <td><?=$row->user_email?></td>
              <?php } ?>
              <td>
                <div class="title">
                  <h6><?=$row->service_id." - ".$row->service_name?></h6>
                </div>
                <div>
                  <small>
                    <?php
                      if (!empty($row->sub_expiry) && strtotime($row->sub_expiry) != "") {
                        $expiry = convert_timezone($row->sub_expiry, "user");
                        $expiry = date("Y-m-d", strtotime($expiry));
                      }else{
                        $expiry = "";
                      } 
                    ?>
                    <ul style="margin:0px">
                      <?php
                        if (get_role("admin")) {
                      ?>
                      <li><?=lang("Type")?>: <?=(!empty($row->api_service_id) && $row->api_service_id > 0)? lang("API")." (".$row->api_name.")" : lang("Manual")?></li>
                      <?php }?>
                      <li><?=lang("Username")?>: <strong><?=$row->username?></strong></li>
                      <li><?=lang("Quantity")?>: <strong><?=$row->sub_min?>/<?=$row->sub_max?></strong></li>
                      <li><?=lang("Posts")?>: <strong><?=($row->sub_response_posts > 0) ? $row->sub_response_posts : 0 ?> / <?=($row->sub_posts == -1) ? "&infin;" : $row->sub_posts?></strong></li>
                      <li><?=lang("Delay")?>: <strong><?=($row->sub_delay == "" || $row->sub_delay == 0)? lang("No_delay") : $row->sub_delay . " ".lang("minutes")?></strong></li>
                      <li><?=lang("Expiry")?>: <strong><?=$expiry?></strong></li>
                    </ul>
                  </small>
                </div>
              </td>
              <td><?=convert_timezone($row->created, "user")?></td>
              <td><?=convert_timezone($row->changed, "user")?></td>
              <td>
                <?php
                  if ($row->sub_status == "Active") {
                    $btn_background = "btn-info";
                  }elseif ($row->sub_status == "Paused") {
                    $btn_background = "btn-orange";
                  }elseif($row->sub_status == "Completed"){
                    $btn_background = "btn-blue";
                  }else{
                    $btn_background = "btn-danger";
                  }
                ?>
                <span class="btn round btn-sm <?=$btn_background?>"><?=order_status_title($row->sub_status)?></span>
              </td>
              <!-- in_array($row->sub_status, array('Active', 'Paused')) ||  -->
              <?php 
                if (get_role("admin") || get_role('supporter')) {
              ?>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="far fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu">
                    <a href="<?=cn("$module/update/".$row->ids)?>" class="dropdown-item ajaxModal"><i class="dropdown-icon far fa-edit"></i> <?=lang('Edit')?> </a>
                    <?php
                      if (get_role("admin")) {
                    ?>
                    <a href="<?=cn("$module/ajax_log_delete_item/".$row->ids)?>" class="dropdown-item ajaxDeleteItem"><i class="dropdown-icon far fa-trash"></i> <?=lang('Delete')?> </a>
                    <?php }?>
                  </div>
                </div>
              </td>
              <?php }?>

            </tr>  
            <?php }}?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="float-right">
      <?=$links?>
    </div>
  </div>
  <?php }else{?>
  <div class="col-md-12 data-empty text-center">
    <div class="content">
      <img class="img mb-1" src="<?=BASE?>assets/images/ofm-nofiles.png" alt="empty">
      <div class="title"><?=lang("look_like_there_are_no_results_in_here")?></div>
    </div>
  </div>
  <?php }?>
</div>
