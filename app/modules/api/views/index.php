<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?=lang("api_documentation")?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body collapse show">
        <div class="x_content">
          <p class="note"><?=lang("note_please_read_the_api_intructions_carefully_its_your_solo_responsability_what_you_add_by_our_api")?></p>
          <table class="table table-hover table-bordered projects api__table">
            <thead class="table-api-header">
              <tr>
                <td><?=lang("http_method")?></td>
                <td>POST</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?=lang("response_format")?></td>
                <td>Json</td>
              </tr>
              <tr>
                <td>API URL</td>
                <td class="api__link"><a href="<?=$api_url?>"><?=$api_url?></a></td>
              </tr>

              <tr>
                <td><?=lang("api_key")?></td>
                <td><?=$api_key?></td>
              </tr>
          </table>
          <div style="display: flex; justify-content: center;" class="card-footer">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <a href="<?=BASE?>example.txt" class="btn btn-round btn-primary" target="_blank"><i style="position: relative; font-size: 18px; margin-right: 5px;" class="far fa-cloud-download-alt"></i><?=lang("Php_code_examples")?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?=lang("place_new_order")?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group x_content">
          <select name="service-type" class="form-control ajaxChangeOrderType m-b-20">
            <option value="default"> Default</option>
            <option value="custom_comments"> Custom Comments</option>
          </select>
          <!-- Default -->
          <table class="table table-hover table-bordered service-default">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>
              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>
              <tr>
                <td>quantity</td>
                <td>Needed quantity</td>
              </tr>
              <tr>
                <td>runs (optional)</td>
                <td>Runs to deliver</td>
              </tr>
              <tr>
                <td>interval (optional)</td>
                <td>Interval in minutes</td>
              </tr>
            </tbody>
          </table>  

          <!-- package -->
          <table class="table table-hover table-bordered service-package d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>

              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>

            </tbody>
          </table>

          <!-- Custom Comments -->
          <table class="table table-hover table-bordered service-custom-comments d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>
              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>
              <tr>
                <td>comments</td>
                <td>Comments list separated by \r\n or \n</td>
              </tr>
            </tbody>
          </table>

          <!-- mentions_with_hashtags -->
          <table class="table table-hover table-bordered service-mentions-with-hashtags d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>
              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>
              <tr>
                <td>quantity</td>
                <td>Needed quantity</td>
              </tr>
              <tr>
                <td>usernames</td>
                <td>Usernames list separated by \r\n or \n</td>
              </tr>
              <tr>
                <td>hashtags</td>
                <td>Hashtags list separated by \r\n or \n</td>
              </tr>
            </tbody>
          </table> 

          <!-- mentions_custom_list -->
          <table class="table table-hover table-bordered service-mentions-custom-list d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>
              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>
              <tr>
                <td>usernames</td>
                <td>Usernames list separated by \r\n or \n</td>
              </tr>
            </tbody>
          </table>  

          <!-- mentions-hashtag -->
          <table class="table table-hover table-bordered service-mentions-hashtag d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>

              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>

              <tr>
                <td>quantity</td>
                <td>Needed quantity</td>
              </tr>
             
              <tr>
                <td>hashtag</td>
                <td>Hashtag to scrape usernames from</td>
              </tr>

            </tbody>
          </table>

          <!-- mentions-user-followers -->
          <table class="table table-hover table-bordered service-mentions-user-followers d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>
              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>
              <tr>
                <td>quantity</td>
                <td>Needed quantity</td>
              </tr>
              <tr>
                <td>username</td>
                <td>URL to scrape followers from</td>
              </tr>

            </tbody>
          </table> 

          <!-- custom-comments-package -->
          <table class="table table-hover table-bordered service-custom-comments-package d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>
              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>
              <tr>
                <td>comments</td>
                <td>Comments list separated by \r\n or \n</td>
              </tr>

            </tbody>
          </table>  

          <!-- mentions-media-likers -->
          <table class="table table-hover table-bordered service-mentions-media-likers d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>

              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>

            </tbody>
          </table>

          <!-- comment-likes -->
          <table class="table table-hover table-bordered service-comment-likes d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>
              <tr>
                <td>link</td>
                <td>Link to page</td>
              </tr>
              <tr>
                <td>quantity</td>
                <td>Needed quantity</td>
              </tr>
              <tr>
                <td>username</td>
                <td>Username of the comment owner</td>
              </tr>
            </tbody>
          </table>
          
          <!-- Subscriptions -->
          <table class="table table-hover table-bordered service-subscriptions d-none">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>key</td>
                <td>Your API key</td>
              </tr>
              <tr>
                <td>action</td>
                <td>add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>Service ID</td>
              </tr>
              <tr>
                <td>username</td>
                <td>Username</td>
              </tr>
              <tr>
                <td>min</td>
                <td>Quantity min</td>
              </tr> 
              <tr>
                <td>max</td>
                <td>Quantity max</td>
              </tr>
              <tr>
                <td>delay</td>
                <td>Delay in minutes. Possible values: 0, 5, 10, 15, 30, 60, 90</td>
              </tr>
              <tr>
                <td>expiry (optional)</td>
                <td>Expiry date. Format d/m/Y</td>
              </tr>

            </tbody>
          </table>

          <div class="title"><h4><?=lang("example_response")?></h4></div>
          <div class="card-body">
            <pre>
{
  "status": <span class="text-primary">"success"</span>,
  "order": <span class="text-primary">32</span>
}
</span>
            </pre>
          </div>
        </div>            
      </div>
    </div>
  </div>
  
  <script>
    // callback ajaxChange
    $(document).on("change", ".ajaxChangeOrderType" , function(){
      event.preventDefault();
      var _that       = $(this),
          _type       = _that.val();
      switch(_type) {

        case "package":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").removeClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;
        case "custom_comments":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").removeClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;
        case "mentions_with_hashtags":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").removeClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;
        case "mentions_custom_list":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").removeClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;
        case "mentions_hashtag":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").removeClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;
        case "mentions_user_followers":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").removeClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;

        case "mentions_media_likers":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").removeClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;

        case "custom_comments_package":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").removeClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;
  
        case "comment_likes":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").removeClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;

        case "subscriptions":
            $(".table.service-default").addClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").removeClass("d-none");
          break;

        default:
            $(".table.service-default").removeClass("d-none");
            $(".table.service-package").addClass("d-none");
            $(".table.service-custom-comments").addClass("d-none");
            $(".table.service-mentions-with-hashtags").addClass("d-none");
            $(".table.service-mentions-custom-list").addClass("d-none");
            $(".table.service-mentions-hashtag").addClass("d-none");
            $(".table.service-mentions-user-followers").addClass("d-none");
            $(".table.service-mentions-media-likers").addClass("d-none");
            $(".table.service-custom-comments-package").addClass("d-none");
            $(".table.service-comment-likes").addClass("d-none");
            $(".table.service-subscriptions").addClass("d-none");
          break;
      }
    })  

  </script>


  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?=lang("status_order")?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body">

        <div class="x_content">
          <table class="table table-hover table-bordered projects">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <?php
                if (!empty($status_order)) {
                  foreach ($status_order as $key => $row) {
              ?>
              <tr>
                <td><?=$key?></td>
                <td><?=$row?></td>
              </tr>
              <?php }} ?>
            </tbody>
          </table>


          <div class="title"><h4><?=lang("example_response")?></h4></div>
          <div class="card-body">
            <pre>
<span id="copy-2">
{
  "order": <span class="text-primary">"32"</span>,
  "status": <span class="text-primary">"pending"</span>,
  "charge": <span class="text-primary">"0.0360"</span>,
  "start_count": <span class="text-primary">"0"</span>,
  "remains": <span class="text-primary">"0"</span>
}
</span>
            </pre>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> <?=lang("multiple_orders_status")?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="x_content">
          <table class="table table-hover table-bordered projects">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <?php
                if (!empty($status_orders)) {
                  foreach ($status_orders as $key => $row) {
              ?>
              <tr>
                <td><?=$key?></td>
                <td><?=$row?></td>
              </tr>
              <?php }} ?>
            </tbody>
          </table>


          <div class="title"><h4><?=lang("example_response")?></h4></div>
          <div class="card-body">
            <pre>
  <span id="copy-3">
  {
      "12": {
          "order": <span class="text-primary">"12"</span>,
          "status": <span class="text-primary">"processing"</span>,
          "charge": <span class="text-primary">"1.2600"</span>,
          "start_count": <span class="text-primary">"0"</span>,
          "remains": <span class="text-primary">"0"</span>
      },
      "2": <span class="text-primary">"Incorrect order ID"</span>,
      "13": {
          "order": <span class="text-primary">"13"</span>,
          "status": <span class="text-primary">"pending"</span>,
          "charge": <span class="text-primary">"0.6300"</span>,
          "start_count": <span class="text-primary">"0"</span>,
          "remains": <span class="text-primary">"0"</span>
      }
  }
</span>
            </pre>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?=lang("services_lists")?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="x_content">
          <table class="table table-hover table-bordered projects">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <?php
                if (!empty($services)) {
                  foreach ($services as $key => $row) {
              ?>
              <tr>
                <td><?=$key?></td>
                <td><?=$row?></td>
              </tr>
              <?php }} ?>
            </tbody>
          </table>
          <div class="title"><h4><?=lang("example_response")?></h4></div>
          <div class="card-body">
            <pre>
<span id="copy-4">
[
  {
      "service": <span class="text-primary">"5"</span>,
      "name": <span class="text-primary">"Instagram Followers [15K] "</span>,
      "category": <span class="text-primary">"Instagram - Followers [Guaranteed\/Refill] - Less Drops \u2b50"</span>,
      "rate": <span class="text-primary">"1.02"</span>,
      "min": <span class="text-primary">"500"</span>,
      "max": <span class="text-primary">"10000"</span>
  },
  {
      "service": <span class="text-primary">"9"</span>,
      "name": <span class="text-primary">"Instagram Followers - Max 300k - No refill - 30-40k\/Day"</span>,
      "category": <span class="text-primary">"Instagram - Followers [Guaranteed\/Refill] - Less Drops \u2b50"</span>,
      "rate": <span class="text-primary">"0.04"</span>,
      "min": <span class="text-primary">"500"</span>,
      "max": <span class="text-primary">"300000"</span>
  },
  {
      "service": <span class="text-primary">"10"</span>,
      "name": <span class="text-primary">"Instagram Followers ( 30 days auto refill ) ( Max 350K ) (Indian Majority )"</span>,
      "category": <span class="text-primary">"Instagram - Followers [Guaranteed\/Refill] - Less Drops \u2b50"</span>,
      "rate": <span class="text-primary">"1.2"</span>,
      "min": <span class="text-primary">"100"</span>,
      "max": <span class="text-primary">"350000"</span>
  }
]
</span>
            </pre>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?=lang("Balance")?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body">
        
        <div class="x_content">
          <table class="table table-hover table-bordered projects">
            <thead>
              <tr>
                <th><?=lang("parameter")?></th>
                <th><?=lang("Description")?></th>
              </tr>
            </thead>
            <tbody>
              <?php
                if (!empty($balance)) {
                  foreach ($balance as $key => $row) {
              ?>
              <tr>
                <td><?=$key?></td>
                <td><?=$row?></td>
              </tr>
              <?php }} ?>
            </tbody>
          </table>
          <div class="title"><h4><?=lang("example_response")?></h4></div>
          <div class="card-body">
            <pre>
  <span id="copy-5">
  {
      "status": <span class="text-primary">"success"</span>,
      "balance": <span class="text-primary">"0.03"</span>,
      "currency": <span class="text-primary">"USD"</span>
  }
</span>
            </pre>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>