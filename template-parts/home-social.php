<section id="social" >
  <div class="social-grid">
    <div class="social-grid_item fb">
     <i class="fa fa-facebook" aria-hidden="true"></i>
     <div class="social-grid_content">
       <p>
         <?php echo do_shortcode('[custom-facebook-feed]'); ?>
       </p>
     </div>
     <a href="https://www.facebook.com/chcboldpac/" target="_blank" class="btn-follow">Like Page<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>

    <div class="social-grid_item twitter">
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <div class="social-grid_content">
       <p>
        <?php echo do_shortcode('[statictweets skin="simplistic" resource="usertimeline" user="chcboldpac" list="" query="" id="" count="1" retweets="on" replies="on" ajax="off" show=""]'); ?>
       </p>
     </div>
      <a href="https://twitter.com/CHCBOLDPAC/" target="_blank" class="btn-follow">Follow Page<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</section>