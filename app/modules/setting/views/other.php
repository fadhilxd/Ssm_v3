
    <div class="card content">
      <div class="card-header">
        <h3 class="card-title"><i class="far fa-sliders-v-square"></i> <?=lang("other_settings")?></h3>
      </div>
      <div class="card-body">
        <form class="actionForm" action="<?=cn("$module/ajax_general_settings")?>" method="POST" data-redirect="<?=cn($module."?t=".$tab)?>">
          <div class="row">

            <div class="col-md-12 col-lg-12">

              <h5 class="text-info"><i class="far fa-shield-check"></i> <?=lang("enable_https")?></h5>
              <div class="form-group">
                <div class="custom-switches-stacked">
                  <label class="custom-switch">
                    <input type="radio" name="enable_https" class="custom-switch-input" value="0" <?=(get_option('enable_https', 0) == 0)? "checked" : ''?>>
                    <span class="custom-switch-indicator"></span>
                    <span class="custom-switch-description"><?=lang("Deactive")?></span>
                  </label>
                  <label class="custom-switch">
                    <input type="radio" name="enable_https" value="1" class="custom-switch-input" <?=(get_option('enable_https', 0) == 1)? "checked" : ''?>> 
                    <span class="custom-switch-indicator"></span>
                    <span class="custom-switch-description"><?=lang("Active")?></span>
                  </label>
                  <small class="text-danger"><?=lang("note_please_make_sure_the_ssl_certificate_has_the_active_status_in_your_hosting_before__you_activate")?> </small>
                </div>
              </div>

              <h5 class="text-info"><i class="far fa-code"></i> <?=lang("custom_home")?></h5>
              <div class="form-group">
                <textarea id="custom_html" rows="10" name="custom_home" class="form-control"><?=get_option('custom_home', '')?></textarea>
              </div>

              <h5 class="text-info"><i class="far fa-code"></i> <?=lang("custom_css")?></h5>
              <div class="form-group">
                <textarea id="custom_css" rows="10" name="custom_css" class="form-control"><?=get_option('custom_css', '')?></textarea>
                <small class="text-danger"><?=lang("Customize_something_using_css")?></small>
              </div>
              
              <h5 class="text-info"><i class="far fa-code"></i> <?=lang("emded_code")?></h5>
              <div class="form-group">
                <textarea rows="10" name="embed_javascript" class="form-control"><?=get_option('embed_javascript', '')?></textarea>
                <small class="text-danger"><?=lang("note_only_supports_javascript_code")?></small>
              </div>

              <h5 class="text-info"><i class="far fa-link"></i> <?=lang("social_media_links")?></h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?=lang("Facebook")?></label>
                    <input class="form-control" name="social_facebook_link" value="<?=get_option('social_facebook_link',"https://www.facebook.com/")?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?=lang("Instagram")?></label>
                    <input class="form-control" name="social_instagram_link" value="<?=get_option('social_instagram_link',"https://www.instagram.com/")?>">
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?=lang("Pinterest")?></label>
                    <input class="form-control" name="social_pinterest_link" value="<?=get_option('social_pinterest_link',"https://www.pinterest.com/")?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?=lang("Twitter")?></label>
                    <input class="form-control" name="social_twitter_link" value="<?=get_option('social_twitter_link',"https://twitter.com/")?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Tumblr</label>
                    <input class="form-control" name="social_tumblr_link" value="<?=get_option('social_tumblr_link',"https://tumblr.com/")?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Youtube</label>
                    <input class="form-control" name="social_youtube_link" value="<?=get_option('social_youtube_link',"https://youtube.com/")?>">
                  </div>
                </div>

              </div>

              <h5 class="text-info"><i class="far fa-phone-alt"></i> <?=lang("contact_informations")?></h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?=lang("Tel")?></label>
                    <input class="form-control" name="contact_tel" value="<?=get_option('contact_tel',"+12345678")?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?=lang("Email")?></label>
                    <input class="form-control" name="contact_email" value="<?=get_option('contact_email',"do-not-reply@rocketpainel.com")?>">
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?=lang("working_hour")?></label>
                    <input class="form-control" name="contact_work_hour" value="<?=get_option('contact_work_hour',"Mon - Sat 09 am - 10 pm")?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?=lang("Home Contact")?></label>
                    <input id="click_field" class="form-control" name="home_contact" value="<?=get_option('home_contact')?>">
                    <ul style="padding-left: 20px; margin-top: 10px;">
                    <li><a class="click_whatsapp"><?=lang("Whatsapp: Use <b>https://wa.me/+yourphonenumber</b>")?></a></li>
                    <li><a class="click_email"><?=lang("Email: Use <b>mailto:youremail</b>")?></a></li>
                    </ul>
                  </div> 
                </div>
              </div>
            </div> 
            <div class="col-md-8">
              <div class="form-footer">
                <button class="btn btn-primary btn-min-width btn-lg text-uppercase"><?=lang("Save")?></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="<?=BASE?>/assets/plugins/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
    selector: 'textarea',
    height: 300,
    theme: 'modern',
    plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true
  });
  setInterval(function(){
    $(".mce-notification, .mce-branding").remove();
    }, 3);
    </script>


