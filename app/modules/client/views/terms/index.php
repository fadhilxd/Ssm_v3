
<style>
  .page-title h1{
    margin-bottom: 5px; }
    .page-title .border-line {
      height: 5px;
      width: 300px;
      background: #5420b9;
      background: -webkit-linear-gradient(45deg, #5420b9, #00d985) !important;
      background: -moz- oldlinear-gradient(45deg, #5420b9, #00d985) !important;
      background: -o-linear-gradient(45deg, #5420b9, #00d985) !important;
      background: linear-gradient(45deg, #5420b9, #00d985) !important;
      position: relative;
      border-radius: 30px; }
    .page-title .border-line::before {
      content: '';
      position: absolute;
      left: 0;
      top: -2.7px;
      height: 10px;
      width: 10px;
      border-radius: 50%;
      background: #00d985;
      -webkit-animation-duration: 6s;
      animation-duration: 6s;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-name: moveIcon;
      animation-name: moveIcon; }

  @-webkit-keyframes moveIcon {
    from {
      -webkit-transform: translateX(0);
    }
    to { 
      -webkit-transform: translateX(300px);
    }
  }
</style>

<div class="row justify-content-center">

  <div class="col-md-8">
    <div class="page-title m-b-30">
      <h1>
        <?php echo lang('Terms__Privacy_Policy'); ?>
      </h1>
      <div class="border-line"></div>
    </div>
    <div class="content">
      <div class="title">
        <h2><?=lang("Terms")?></h2>
      </div>
      <?php echo get_option("terms_content", ""); ?>
    </div>
  </div> 

  <div class="col-md-8">
    <div class="content m-t-30">
      <div class="title">
        <h2><?=lang("Privacy_Policy")?></h2>
      </div>
      <?php echo get_option("policy_content", ""); ?>
    </div>
  </div> 

</div>


