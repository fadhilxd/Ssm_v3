<div class="container-footer">
  <footer class="footer footer_bottom dark">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-auto ml-lg-auto">
          <div class="row align-items-center">
            <div class="col-auto">
              <ul class="list-inline mb-0">
                <?php 
                  if (get_option('social_facebook_link','') != '') {
                ?>
                <li class="list-inline-item"><a href="<?=get_option('social_facebook_link','')?>" target="_blank" class="btn-icon"><img src="<?=cn('assets/images/m5.png')?>" alt="Facebook"></a></li>
                <?php }?>
                <?php 
                  if (get_option('social_twitter_link','') != '') {
                ?>
                <li class="list-inline-item"><a href="<?=get_option('social_twitter_link','')?>" target="_blank" class="btn-icon"><img src="<?=cn('assets/images/m4.png')?>" alt="Twitter"></a></li>
                <?php }?>
                <?php 
                  if (get_option('social_instagram_link','') != '') {
                ?>
                <li class="list-inline-item"><a href="<?=get_option('social_instagram_link','')?>" target="_blank" class="btn-icon"><img src="<?=cn('assets/images/m1.png')?>" alt="Instagram"></a></li>
                <?php }?>

                <?php 
                  if (get_option('social_pinterest_link','') != '') {
                ?>
                <li class="list-inline-item"><a href="<?=get_option('social_pinterest_link','')?>" target="_blank" class="btn-icon"><img src="<?=cn('assets/images/m3.png')?>" alt="Pinterest"></a></li>
                <?php }?>

                <?php 
                  if (get_option('social_tumblr_link','') != '') {
                ?>
                <li class="list-inline-item"><a href="<?=get_option('social_tumblr_link','')?>" target="_blank" class="btn-icon"><img src="<?=cn('assets/images/m6.png')?>" alt="Tumblr"></a></li>
                <?php }?>

                <?php 
                  if (get_option('social_youtube_link','') != '') {
                ?>
                <li class="list-inline-item"><a href="<?=get_option('social_youtube_link','')?>" target="_blank" class="btn-icon"><img style="background: #cd1f28; border-radius: 3px;" src="<?=cn('assets/images/m2.png')?>" alt="Youtube"></a></li>
                <?php }?>

              </ul>
            </div>
          </div>
        </div>
        
        <?php
          $version = get_field(PURCHASE, ['pid' => 23595718], 'version');
          $version = 'Ver'.$version;
        ?>
        <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center footer-copy">
        <?=get_option('copy_right_content',"Copyright &copy; 2020 - SmartPanel")?> 
          <?=lang("")?> <?=(get_role("admin")) ? $version : "" ?>
        </div>
      </div>
    </div>
  </footer>
  </div>
</div>
