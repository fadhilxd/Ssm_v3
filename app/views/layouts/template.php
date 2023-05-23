<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="description" content="<?=get_option('website_desc', "SmartPanel - #1 SMM Reseller Panel - Best SMM Panel for Resellers. Also well known for TOP SMM Panel and Cheap SMM Panel for all kind of Social Media Marketing Services. SMM Panel for Facebook, Instagram, YouTube and more services!")?>">
    <meta name="keywords" content="<?=get_option('website_keywords', "smm panel, SmartPanel, smm reseller panel, smm provider panel, reseller panel, instagram panel, resellerpanel, social media reseller panel, smmpanel, panelsmm, smm, panel, socialmedia, instagram reseller panel")?>">
    <title><?=get_option('website_title', "SmartPanel - SMM Panel Reseller Tool")?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?=get_option('website_favicon', BASE."assets/images/favicon.png")?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <link rel="stylesheet" href="<?=BASE?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASE?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?=BASE?>assets/css/keyframes.css">
    <link rel="stylesheet" href="<?=BASE?>assets/hints/scroll-hint.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="<?=BASE?>assets/css/tour.min.css">
    <link rel="stylesheet" href="<?=BASE?>assets/css/shepherd-theme-default.css">    



    <script src="<?=BASE?>assets/js/vendors/jquery-3.2.1.min.js"></script>
    <script src="<?=BASE?>assets/js/main.js"></script>
    <script src="<?=BASE?>assets/js/shepherd.min.js"></script>
    <script src="<?=BASE?>assets/js/styleswitcher.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//cdn.rawgit.com/tonystar/bootstrap-hover-tabs/v3.1.1/bootstrap-hover-tabs.js"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>
    <script src="<?=BASE?>assets/hints/scroll-hint.min.js"></script>


    <?php if(segment('1') == 'gallery' || segment('1') == 'setting'){ ?>
      <link rel="stylesheet" href="<?=BASE?>assets/plugins/jquery-upload/css/style.css">
      <link rel="stylesheet" href="<?=BASE?>assets/plugins/jquery-upload/css/jquery.fileupload.css">
    <?php }?>  
    

    <link href="<?=BASE?>assets/plugins/flags/css/flag-icon.css" rel="stylesheet">
      
    <!-- c3.js Charts Plugin -->
    <?php if(segment('1') == 'statistics'){ ?>
    <link href="<?=BASE?>assets/plugins/charts-c3/c3.css" rel="stylesheet">
    <script src="<?=BASE?>assets/plugins/charts-c3/d3.v3.min.js"></script>
    <script src="<?=BASE?>assets/plugins/charts-c3/c3.min.js"></script>
    <?php }?>
    <!-- toast -->
    
    <link rel="stylesheet" type="text/css" href="<?=BASE?>assets/plugins/jquery-toast/css/jquery.toast.css">

    <link rel="stylesheet" href="<?=BASE?>assets/plugins/boostrap/colors.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?=BASE?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" id="theme-stylesheet">

    <!-- emoji -->
    <link href="<?=BASE?>assets/plugins/emoji-picker/lib/css/emoji.css" rel="stylesheet">
    <link href="<?=BASE?>assets/css/util.css" rel="stylesheet">
    <link href="<?=BASE?>assets/css/layout.css" rel="stylesheet">
    <link href="<?=BASE?>assets/css/footer.css" rel="stylesheet">

    <script type="text/javascript">
      var token = '<?=$this->security->get_csrf_hash()?>',
          PATH  = '<?=PATH?>',
          BASE  = '<?=BASE?>';
     var    deleteItem = "<?=lang('Are_you_sure_you_want_to_delete_this_item')?>";
      var    deleteItems = "<?=lang('Are_you_sure_you_want_to_delete_all_items')?>";
      

      $( document ).ready(function() {

        setTimeout(function(){
          $("#pop").addClass("showPop")
      }, 3500);

        $(".closePop").click(function(){
          $("#pop").remove();
      });
      });

    </script>

    <style>
    .closePop{
      bottom:0px;
      transition:all 2s linear;
    }
    .showPop{
      bottom:20px!important;
    }
    .closePop:hover{
      opacity:0.7;
    }
    <?=get_option('custom_css', '')?>
    </style>

  </head>
  <body class="">
    <div id="page-overlay" class="visible incoming">
      <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
          <div class="lds-double-ring">
            <div></div>
            <div></div>
            <div>
              <div></div>
            </div>
            <div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <div class="page-main">
        <!-- header -->
        <?=Modules::run("blocks/header");?>

        <div class="my-3 my-md-5">
          <div class="container" <?=(segment(1)=="services" || segment(1)=="dripfeed" || segment(1)=="subscriptions" || segment(2)=="log")? 'style="max-width: 96%"' : ""?>>
            <?=$template['body']?>
          </div>
        </div>
        
      </div>
      <!-- modal -->
      <div id="modal-ajax" class="modal fade" tabindex="-1"></div>
      <div id="modal-ajax-notification" class="modal fade" tabindex="-1"></div>
    </div>

    <?=Modules::run("blocks/footer");?>
    
    <script src="<?=BASE?>assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE?>assets/js/vendors/jquery.sparkline.min.js"></script>
    <script src="<?=BASE?>assets/js/vendors/selectize.min.js"></script>
    <script src="<?=BASE?>assets/js/vendors/jquery.tablesorter.min.js"></script>
    <script src="<?=BASE?>assets/js/vendors/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?=BASE?>assets/js/vendors/jquery-jvectormap-de-merc.js"></script>
    <script src="<?=BASE?>assets/js/vendors/jquery-jvectormap-world-mill.js"></script>
    <script src="<?=BASE?>assets/js/vendors/circle-progress.min.js"></script>
    
    <script src="<?=BASE?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?=BASE?>assets/js/core.js"></script>
    <!-- toast -->
    <script type="text/javascript" src="<?=BASE?>assets/plugins/jquery-toast/js/jquery.toast.js"></script>

    <!-- emoji picker -->
    <script src="<?=BASE?>assets/plugins/emoji-picker/lib/js/config.js"></script>
    <script src="<?=BASE?>assets/plugins/emoji-picker/lib/js/util.js"></script>
    <script src="<?=BASE?>assets/plugins/emoji-picker/lib/js/jquery.emojiarea.js"></script>
    <script src="<?=BASE?>assets/plugins/emoji-picker/lib/js/emoji-picker.js"></script>
    <!-- flags icon -->
    <script src="<?=BASE?>assets/plugins/flags/js/docs.js"></script>

    <?php if(segment('1')=='gallery' || segment('1')=='setting'){ ?>
    <script src="<?=BASE?>assets/plugins/jquery-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="<?=BASE?>assets/plugins/jquery-upload/js/jquery.iframe-transport.js"></script>
    <script src="<?=BASE?>assets/plugins/jquery-upload/js/jquery.fileupload.js"></script>
    <?php } ?>

    <?php if(segment('1') == 'statistics'){ ?>
    <script src="<?=BASE?>assets/js/chart_template.js"></script>
    <?php }?>

    <?php if(segment('2') == 'log' || segment('1')=='category' || segment('1')=='dripfeed' || segment('1')=='subscriptions' || segment('1')=='services' || segment('1')=='users'){ ?>
    <script>
    new ScrollHint('.js-scrollable',{
    suggestiveShadow: true,
    scrollHintBorderWidth: 10,
      i18n: {
        scrollable: 'Arraste para a Esquerda'
      },

    });
    </script>
    <?php }?>

    <!-- general JS -->
    <script src="<?=BASE?>assets/js/process.js"></script>
    <script src="<?=BASE?>assets/js/general.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <?=htmlspecialchars_decode(get_option('embed_javascript', ''), ENT_QUOTES)?>
    <!-- <script>
    $(document).ready(function() {   
    e(), $(window).resize(e);
    var t=new Shepherd.Tour( {
        classes: "shadow-md bg-purple-dark", scrollTo: !0
    }
    );
    function e() {
        window.resizeEvt, 576<$(window).width()?$(document).ready(function() {
            clearTimeout(window.resizeEvt), t.start()
        }
        ):$("#tour").on("click", function() {
            clearTimeout(window.resizeEvt), t.cancel(), window.resizeEvt=setTimeout(function() {
                Swal.fire({
                    type: 'error',
                    title: '<?=lang("Oops")?>',
                    text: '<?=lang("Tour_only_works_for_large_screens")?>',
                  })

            }
            , 250)
        }
        )
    }
    t.addStep("step-1", {
        text:"<?=lang("Click_to_expand_or_collapse_the_menu")?>", attachTo:".hamburger--squeeze bottom", buttons:[ {
            text: "<?=lang("Skip")?>", action: t.complete
        }
        , {
            text: "<?=lang("Next")?>", action: t.next
        }
        ]
    }
    ), t.addStep("step-2", {
        text:"<?=lang("Check_your_notifications_from_here")?>", attachTo:".d-flex .notifcation .icon-bell bottom", buttons:[ {
            text: "<?=lang("Skip")?>", action: t.complete
        }
        , {
            text: "<?=lang("previous")?>", action: t.back
        }
        , {
            text: "<?=lang("Next")?>", action: t.next
        }
        ]
    }
    ), t.addStep("step-3", {
        text:"<?=lang("You_can_choose_the_light_or_dark_theme_here")?>", attachTo:".dark-light a bottom", buttons:[ {
            text: "<?=lang("Skip")?>", action: t.complete
        }
        , {
            text: "<?=lang("previous")?>", action: t.back
        }
        , {
            text: "<?=lang("Next")?>", action: t.next
        }
        ]
    }
    ), t.addStep("step-4", {
        text:"<?=lang("You_can_change_language_from_here")?>", attachTo:".language span bottom", buttons:[ {
            text: "<?=lang("Skip")?>", action: t.complete
        }
        , {
            text: "<?=lang("previous")?>", action: t.back
        }
        , {
            text: "<?=lang("Next")?>", action: t.next
        }
        ]
    }
    ), t.addStep("step-4", {
        text:"<?=lang("Buy_this_awesomeness_at_affordable_price")?>", attachTo:".buy-now bottom", buttons:[ {
            text: "<?=lang("previous")?>", action: t.back
        }
        , {
            text: "<?=lang("Finish")?>", action: t.complete
        }
        ]
    }
    )
}



);


    </script> -->
    <?php
        if (get_role("admin")) {
    ?>
      <!--div id="pop" style="position:fixed;right:20px;width:290px;height:180px;background-color:#9a1919;color:#fff;border-radius:5px;display:flex;justify-content:center;flex-direction:column;padding:5px 10px;">
        <i class="fal fa-times-circle closePop" style="right: 0px; font-size: 15px; position: relative; left: 255px; top: 5px;"></i>
          <span style="font-size:17px;padding:5px 15px;text-align:center;">Seu plano vence dia:</span>
          <span style="background-color:#fff;color:#9a1919;border-radius:5px;padding:5px 15px;text-align:center;font-weight:700;">22/12/2019</span>
          <span style="font-size:14px;padding:5px 15px;text-align:center;">Entre em contato com o whatsapp <a style="text-decoration:none;color:#fbc02d" href="https://wa.me/+5522999039468">(22) 999039468</a> para fazer um novo pagamento e evitar o bloqueio do seu sistema.</span>
      </div-->
    <?php }?> 
  </body>
</html>
