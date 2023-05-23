<style type="text/css">
  .order_btn_group .list-inline-item a.btn{
    font-size: 0.9rem;
    font-weight: 400;
  }
  
</style>
<div class="page-header">
  <div class="d-flex-center">
  <h1 class="page-title">
    <?=lang("order_logs")?>
  </h1>
  </div>
  <div class="page-options d-flex tabs-wrapper">
    <ul class="list-inline mb-0 order_btn_group nav">
      <li class="list-inline-item nav-select" style="margin-left: -5px;"><a class="nav-link <?=($order_status == 'all') ? 'active' : ''?>" href="<?=cn($module."/log/all")?>"><i class="far fa-list-ul" style="margin-right:5px;"></i>All</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'pending') ? 'active' : ''?>" href="<?=cn($module."/log/pending")?>"><i class="far fa-clock" style="margin-right:5px;"></i>Pending</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'processing') ? 'active' : ''?>" href="<?=cn($module."/log/processing")?>"><i class="far fa-chart-line" style="margin-right:5px;"></i>Processing</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'inprogress') ? 'active' : ''?>" href="<?=cn($module."/log/inprogress")?>"><i class="far fa-spinner" style="margin-right:5px;"></i>In progress</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'completed') ? 'active' : ''?>" href="<?=cn($module."/log/completed")?>"><i class="far fa-check" style="margin-right:5px;"></i>Completed</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'partial') ? 'active' : ''?>" href="<?=cn($module."/log/partial")?>"><i class="far fa-hourglass-half" style="margin-right:5px;"></i>Partial</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'canceled') ? 'active' : ''?>" href="<?=cn($module."/log/canceled")?>"><i class="far fa-times-circle" style="margin-right:5px;"></i>Canceled</a></li>
      <li class="list-inline-item nav-select"><a class="nav-link <?=($order_status == 'refunded') ? 'active' : ''?>" href="<?=cn($module."/log/refunded")?>"><i class="far fa-undo-alt" style="margin-right:5px;"></i>Refunded</a></li>
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
                    <ul style="margin:0px">
                      <?php
                        if (get_role("admin")) {
                      ?>
                      <li><?=lang("Type")?>: <?=(!empty($row->api_service_id) && $row->api_service_id != "")? lang("API")." (".$row->api_name.")" : lang("Manual")?></li>
                      <?php }?>
                      <li><?=lang("Link")?>: <a href="<?=$row->link?>" target="_blank"><?=truncate_string($row->link, 60)?></a></li>
                      <li><?=lang("Quantity")?>: <?=$row->quantity?></li>
                      <li><?=lang("Amount")?>: <?=get_option("currency_symbol","").$row->charge?></li>
                      <li><?=lang("Start_counter")?>: <?=(!empty($row->start_counter)) ? $row->start_counter : ""?></li>
                      <li><?=lang("Remains")?>: <?=(!empty($row->remains)) ? $row->remains : ""?></li>
                    </ul>
                  </small>
                </div>
              </td>
              <td><?=convert_timezone($row->created, "user")?></td>
              <td>
                <?php
                  if ($row->status == "pending" || $row->status == "processing") {
                    $btn_background = "btn-info";
                  }elseif ($row->status == "inprogress") {
                    $btn_background = "btn-orange";
                  }elseif($row->status == "completed"){
                    $btn_background = "btn-blue";
                  }else{
                    $btn_background = "btn-danger";
                  }
                ?>
                <span class="btn round btn-sm <?=$btn_background?>"><?=order_status_title($row->status)?></span>
              </td>

              <?php
                if (get_role("admin") || get_role("supporter")) {
              ?>
              <td class="text-red"><?=(empty($row->note))? "" : $row->note?></td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="far fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu">
                    <a href="<?=cn("$module/log_update/".$row->ids)?>" class="dropdown-item ajaxModal"><i class="dropdown-icon far fa-edit"></i> <?=lang('Edit')?> </a>
                    <?php
                      if (get_role('admin')) {
                    ?>
                    <a href="<?=cn("$module/ajax_log_delete_item/".$row->ids)?>" class="dropdown-item ajaxDeleteItem"><i class="dropdown-icon far fa-trash"></i> <?=lang('Delete')?> </a>
                    <?php } ?>
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
