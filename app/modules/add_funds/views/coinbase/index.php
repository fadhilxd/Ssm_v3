<div id="coinbase" class="tab-pane fade">
  <form class="form actionForm" action method="POST">
    <div class="row">
      <div class="col-md-12">
        <?php 
          if (get_option("coinbase_api_key", '') != "") {
        ?>
        <div class="for-group text-center">
          <img src="<?=BASE?>/assets/images/payments/coinbase.png" style="max-width: 250px;" alt="coinbase icon">
          <p class="p-t-10"><small><?=sprintf(lang("you_can_deposit_funds_with_paypal_they_will_be_automaticly_added_into_your_account"), 'Coinbase')?></small></p>
        </div>
        <div class="form-group">
          <label><?=sprintf(lang("amount_usd"), 'USD')?></label>
          <input class="form-control square" type="number" name="amount" placeholder="10">
          <input type="hidden" name="payment_method" value="coinbase">
        </div>
        <div class="form-group">
          <small class=""><?=lang("transaction_fee")?>: <strong><?=(get_option("coinbase_chagre_fee", 1))?>%</strong></small>
        </div>
        <div class="form-group">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="agree" value="1">
            <span class="custom-control-label"><?=lang("yes_i_understand_after_the_funds_added_i_will_not_ask_fraudulent_dispute_or_chargeback")?></span>
          </label>
        </div>
        <div class="form-actions left">
          <button type="submit" class="btn round btn-primary btn-min-width mr-1 mb-1">
            <?=lang("Pay")?>
          </button>
        </div>

        <?php }else{?>
        <div class="form-group">
          <div class="alert alert-danger p-t-10" role="alert">
            <?=lang("this_payment_gateway_is_not_already_active_at_the_present")?>
          </div>
        </div>
        <?php }?>

      </div>  
    </div>
  </form>
</div>


