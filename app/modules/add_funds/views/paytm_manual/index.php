<div id="paytm_manual" class="tab-pane fade">
  <form class="form actionForm" action="<?=cn($module."/paytm_manual/verify")?>" data-redirect="<?=cn($module."/success")?>" method="POST">
    <div class="row">
      <div class="col-md-12">


        <div class="for-group text-center">
          <img src="https://smmcliq.com//assets/images/paytm.jpg" alt="Paytm icon">
          <p class="p-t-10">Pay on <span class="h4"><?=get_option('paytm_number')?></span> For Paytm</p>
          <p class="p-t-08"><b><p style="color:red">Don't call on paytm number, if any one does then<br>we may terminate there account without any intimation.</p></b><span class="h4"></span></p>
          <img src="<?=get_option('paytm_qr_url')?>">  
        </div>

        <p class="p-t-10"><b> Step 1 - Scan Barcode <br>
        Step 2 - Pay Amount (Min 10₹) <br>Step 3 - Put Amount & Enter your Transaction/Order Id <br>Step 4 - Click on Pay Button <br>The amount will be added Instantly. <br>
        </b> <span class="h4">
        <div class="form-group">
          <label><?=sprintf(lang("amount_usd"), 'INR')?></label>
          <input class="form-control square" type="number" name="amount"placeholder="Min 10₹" required placeholder="<?=get_option('paytm_payment_transaction_min')?>">
          <input type="hidden" name="payment_method" value="paytm_manual">
        </div>

        <div class="form-group">
          <label>Transaction ID (Enter Exact ID*)</label>
          <input class="form-control square" type="number" required name="txn_id" placeholder="20200311XXXXXXXXXXX">
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



      </div>  
    </div>
  </form>
</div>