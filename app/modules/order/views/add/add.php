
<div class="row justify-content-md-center justify-content-xl-center" id="result_ajaxSearch">
  <div class="col-md-10 col-xl-10 ">
    <div class="card">
      <div class="card-header-order d-flex align-items-center">
        <div class="tabs-list">
          <ul class="nav nav-tabs">
            <li class="">
              <a class="active single-order" data-toggle="tab" href="#new_order"><i class="fas fa-cube"></i> <?=lang("single_order")?></a>
            </li>
            <!-- <li style="margin-right: 15px;">
              <a class="mass-order"  data-toggle="tab" href="#mass_order"><i class="fas fa-cubes"></i> <?=lang("mass_order")?></a>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div id="new_order" class="tab-pane fade in active show">
            <form class="form actionForm" action="<?=cn($module."/ajax_add_order")?>" data-redirect="<?=cn($module)?>" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="content-header-title flex-header-title">
                    <h6><i class="fas fa-cart-plus"></i> <?=lang('add_new')?></h6>

                    <span class="help-for-icons">
                    <i class="fa fa-question-circle"></i>
                    <div class="icons-panel card">
                    <ul class="nav nav-pills">
                            <li class="active">
                              <a href="#tab-1" data-hover="tab">⭐</a>
                            </li>
                            <li>
                              <a href="#tab-2" data-hover="tab">⚡️</a>
                            </li>
                            <li>
                              <a href="#tab-3" data-hover="tab">⛔</a>
                            </li>
                            <li>
                              <a href="#tab-4" data-hover="tab">♻</a>
                            </li>
                            <li>
                              <a href="#tab-5" data-hover="tab"><b>AR</b></a>
                            </li>
                            <li>
                              <a href="#tab-6" data-hover="tab"><b>R30</b></a>
                            </li>
                            <li>
                              <a href="#tab-7" data-hover="tab"><b>R60</b></a>
                            </li>
                            <li>
                              <a href="#tab-8" data-hover="tab"><b>R∞</b></a>
                            </li>
                            <li>
                              <a href="#tab-9" data-hover="tab">🚩</a>
                            </li>
                          </ul>
                          <div class="tab-content well">
                            <div class="tab-pane" id="tab-1">Best Service</div>
                            <div class="tab-pane" id="tab-2">Fast Start</div>
                            <div class="tab-pane" id="tab-3">Cancel button</div>
                            <div class="tab-pane" id="tab-4">Refill button</div>
                            <div class="tab-pane" id="tab-5">Auto-Refill</div>
                            <div class="tab-pane" id="tab-6">Refill 30 days</div>
                            <div class="tab-pane" id="tab-7">Refill 60 days</div>
                            <div class="tab-pane" id="tab-8">Lifetime Refill</div>
                            <div class="tab-pane active show" id="tab-9">Service Updating (Slow Start, Slow Delivery)</div>
                          </div>
                    </div>

                    </span>

                  </div>
                  <div class="form-group">
                    <label><?=lang("Category")?></label>
                    <select name="category_id" class="form-control square ajaxChangeCategory"  data-url="<?=cn($module."/order/get_services/")?>">
                      <option> <?=lang("choose_a_category")?></option>
                      <?php
                        if (!empty($categories)) {

                          foreach ($categories as $key => $category) {
                      ?>
                      <option value="<?=$category->id?>"><?=$category->name?></option>
                      <?php }}?>
                    </select>
                  </div>
                  <div class="form-group" id="result_onChange">
                    <label><?=lang("order_service")?></label>
                    <select name="service_id" class="form-control square ajaxChangeService" data-url="<?=cn($module."/order/get_service/")?>">
                      <option> <?=lang("choose_a_service")?></option>
                      <?php
                        if (!empty($services)) {
                          $service_item_default = $services[0];
                          foreach ($services as $key => $service) {
                      ?>
                      <option value="<?=$service->id?>" ><?=$service->name?></option>
                      <?php }}?>
                    </select>
                  </div>
                  
                  <div class="form-group order-default-link">
                    <label><?=lang("Link")?></label>
                    <input class="form-control square" type="text" name="link" placeholder="https://" id="">
                  </div>

                  <div class="form-group order-default-quantity">
                    <label><?=lang("Quantity")?></label>
                    <input class="form-control square ajaxQuantity" name="quantity" type="number">
                  </div>
                  
                  <div class="form-group order-comments d-none">
                    <label for=""><?=lang("Comments")?></label>
                    <input type="text" class="form-control input-tags ajax_custom_comments" name="comments" value="good pic,great photo,:)">
                  </div> 

                  <div class="form-group order-comments-custom-package d-none">
                    <label for=""><?=lang("Comments")?></label>
                    <input type="text" class="form-control input-tags" name="comments_custom_package" value="good pic,great photo,:)">
                  </div>

                  <div class="form-group order-usernames d-none">
                    <label for=""><?=lang("Usernames")?></label>
                    <input type="text" class="form-control input-tags" name="usernames" value="usenameA,usenameB,usenameC,usenameD">
                  </div>

                  <div class="form-group order-usernames-custom d-none">
                    <label for=""><?=lang("Usernames")?></label>
                    <input type="text" class="form-control input-tags ajax_custom_lists" name="usernames_custom" value="usenameA,usenameB,usenameC,usenameD">
                  </div>

                  <div class="form-group order-hashtags d-none">
                    <label for=""><?=lang("hashtags_format_hashtag")?></label>
                    <input type="text" class="form-control input-tags" name="hashtags" value="#goodphoto,#love,#nice,#sunny">
                  </div>

                  <div class="form-group order-hashtag d-none">
                    <label for=""><?=lang("Hashtag")?> </label>
                    <input class="form-control square" type="text" name="hashtag">
                  </div>

                  <div class="form-group order-username d-none">
                    <label for=""><?=lang("Username")?></label>
                    <input class="form-control square" name="username" type="text">
                  </div>   
                  
                  <!-- Mentions Media Likers -->
                  <div class="form-group order-media d-none">
                    <label for=""><?=lang("Media_Url")?></label>
                    <input class="form-control square" name="media_url" type="link">
                  </div>

                  <!-- Subscriptions  -->
                  <div class="row order-subscriptions d-none">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label><?=lang("Username")?></label>
                        <input class="form-control square" type="text" name="sub_username">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label><?=lang("New_posts")?></label>
                        <input class="form-control square" type="number" placeholder="<?=lang("minimum_1_post")?>" name="sub_posts">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label><?=lang("Quantity")?></label>
                        <input class="form-control square" type="number" name="sub_min" placeholder="<?=lang("min")?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>&nbsp;</label>
                        <input class="form-control square" type="number" name="sub_max" placeholder="<?=lang("max")?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label><?=lang("Delay")?> (<?=lang("minutes")?>)</label>
                        <select name="sub_delay" class="form-control square">
                          <option value="0"><?=lang("")?><?=lang("No_delay")?></option>
                          <option value="5">5</option>
                          <option value="10">10</option>
                          <option value="15">15</option>
                          <option value="30">30</option>
                          <option value="60">60</option>
                          <option value="90">90</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label><?=lang("Expiry")?></label>
                        <div class="input-group">
                          <input type="text" class="form-control datepicker" name="sub_expiry" onkeydown="return false" name="expiry" placeholder="" id="expiry">
                          <span class="input-group-append">
                            <button class="btn btn-info" type="button" onclick="document.getElementById('expiry').value = ''"><i class="far fa-trash"></i></button>
                          </span>
                        </div>
                        </div>
                    </div>

                  </div>
                  <?php
                    if (get_option("enable_drip_feed","") == 1) {
                  ?>
                  <div class="row drip-feed-option d-none">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="form-label"><?=lang("dripfeed")?> 
                          <label class="custom-switch">
                            <span class="custom-switch-description m-r-20"><i class="fa fa-question-circle" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="<?=lang("drip_feed_desc")?>" data-title="<?=lang("what_is_dripfeed")?>"></i></span>

                            <input type="checkbox" name="is_drip_feed" class="is_drip_feed custom-switch-input" data-toggle="collapse" data-target="#drip-feed" aria-expanded="false" aria-controls="drip-feed">
                            <span class="custom-switch-indicator"></span>
                          </label>
                        </div>
                      </div>

                      <div class="row collapse" id="drip-feed">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label><?=lang("Runs")?></label>
                            <input class="form-control square ajaxDripFeedRuns" type="number" name="runs" value="<?=get_option("default_drip_feed_runs", "")?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label><?=lang("interval_in_minutes")?></label>
                            <select name="interval" class="form-control square">
                              <?php
                                for ($i = 1; $i <= 60; $i++) {
                                  if ($i%10 == 0) {
                              ?>
                              <option value="<?=$i?>" <?=(get_option("default_drip_feed_interval", "") == $i)? "selected" : ''?>><?=$i?></option>
                              <?php }} ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label><?=lang("total_quantity")?></label>
                            <input class="form-control square" name="total_quantity" type="number" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }?>
                  <div class="form-group" id="result_total_charge">
                    <input type="hidden" name="total_charge" value="0.00">
                    <input type="hidden" name="currency_symbol" value="<?=get_option("currency_symbol", "")?>">
                    <p class="btn btn-info total_charge"><?=lang("total_charge")?> <span class="charge_number">$0</span></p>
                    
                    <?php
                      $user = $this->model->get("balance, custom_rate", 'general_users', ['id' => session('uid')]);
                      if ($user->custom_rate > 0 ) {
                    ?>
                    <p class="small text-muted"><?=lang("custom_rate")?>: <span class="charge_number"><?=$user->custom_rate?>%</span></p>
                    <?php }?>
                    <div class="alert alert-icon alert-danger d-none" role="alert">
                      <i class="far fa-exclamation-triangle mr-2" aria-hidden="true"></i><?=lang("order_amount_exceeds_available_funds")?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input id="checkboxorder"  type="checkbox" class="custom-control-input" name="agree">
                      <span class="custom-control-label"><?=lang("yes_i_have_confirmed_the_order")?></span>
                    </label>
                  </div>

                  <div class="form-actions left">
                    <button type="submit" class="btn round btn-primary btn-min-width mr-1 mb-1">
                      <?=lang("place_order")?>
                    </button>

                  </div>
                </div>  

                <div class="col-md-6" id="order_resume">
                  <div class="content-header-title">
                    <h6><i class="fas fa-shopping-cart"></i> <?=lang("order_resume")?></h6>
                  </div>
                  <div class="row" id="result_onChangeService">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label><?=lang("service_name")?></label>
                        <input type="hidden" name="service_id" id="service_id" value="<?=(!empty($service_item_default->id))? $service_item_default->id :''?>">
                        <input class="form-control square" name="service_name" type="text" value="<?=(!empty($service_item_default->name))? $service_item_default->name :''?>" disabled>
                      </div>
                    </div>   

                    <div class="col-md-4  col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label><?=lang("minimum_amount")?></label>
                        <input class="form-control square" name="service_min" type="text" value="<?=(!empty($service->min))? $service->min :''?>" id="min_amount" disabled>
                      </div>
                    </div>

                    <div class="col-md-4  col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label><?=lang("maximum_amount")?></label>
                        <input class="form-control square" name="service_max" type="text" value="<?=(!empty($service->max))? $service->max :''?>" id="max_amount" disabled>
                      </div>
                    </div>

                    <div class="col-md-4  col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label><?=lang("price_per_1000")?></label>
                        <input class="form-control square" name="service_price" type="text" value="" disabled>
                      </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="userinput8"><?=lang("Description")?></label>
                        <textarea  rows="10" name="service_desc" class="form-control square" disabled>
                        </textarea>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </form>
          </div>
          <div id="mass_order" class="tab-pane fade">
            <form class="form actionForm" action="<?=cn($module."/ajax_mass_order")?>" data-redirect="<?=cn($module."/log")?>" method="POST">
              <div class="x_content row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="content-header-title">
                    <h6> <?=lang("one_order_per_line_in_format")?></h6>
                  </div>
                  <div class="form-group">
                    <textarea id="editor" rows="14" name="mass_order" class="form-control square" placeholder="service_id|quantity|link"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox" style="margin-top:10px;">
                      <input id="checkboxorder-mass" type="checkbox" class="custom-control-input" name="agree">
                      <span class="custom-control-label"><?=lang("yes_i_have_confirmed_the_order")?></span>
                    </label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="mass_order_error" id="result_notification">
                    <div class="content-header-title">
                      <h6><i class="fa fa-info-circle"></i> <?=lang("note")?></h6>
                    </div>
                    <div class="form-group">
                      <?=lang("here_you_can_place_your_orders_easy_please_make_sure_you_check_all_the_prices_and_delivery_times_before_you_place_a_order_after_a_order_submited_it_cannot_be_canceled")?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions left">
                <button type="submit" class="disabled-target-mass btn round btn-primary btn-min-width mr-1 mb-1" disabled="disabled">
                  <?=lang("place_order")?>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function () {
    $("#mass_order_button").click(function () {
        $("#mass-order").toggle();
    });
});
</script>


<script>
  $(function(){
    $('.datepicker').datepicker({
      format: "dd/mm/yyyy",
      autoclose: true,
      startDate: truncateDate(new Date())
    });
    $(".datepicker").datepicker().datepicker("setDate", new Date());

    function truncateDate(date) {
      return new Date(date.getFullYear(), date.getMonth(), date.getDate());
    }

    $('.input-tags').selectize({
        delimiter: ',',
        persist: false,
        create: function (input) {
            return {
                value: input,
                text: input
            }
        }
    });
  });
</script>
