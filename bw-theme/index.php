<?php get_header(); ?>
    <div class="about" id="about" style="background: url(<?= CFS()->get('background_white'); ?>) center 100% repeat-x,
    url(<?= CFS()->get('background_black'); ?>) center 100% repeat-x, #1d1d1d;">
      <div class="container">
        <div class="about_inner">
          <?php
          $loop = CFS()->get('card');
          foreach ($loop as $row) {
            ?>
            <div class="about_item">
              <div class="about_year"><?= $row['card_year'] ?></div>
              <div class="about_text"><?= $row['card_text'] ?></div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>

    <div class="team" id="team">
      <div class="container">
        <div class="block_head">
          <h2 class="block_title"><?= CFS()->get('team_title'); ?></h2>
          <p class="block_text"><?= CFS()->get('team_description'); ?></p>
        </div>
        <div class="team_inner">

          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <?php
              $loop = CFS()->get('team_card');
              foreach ($loop as $row) {
              ?>
                <div class="swiper-slide">
                  <div class="team_item">
                    <img class="team_item-img" src="<?= $row['team_img'] ?>" alt="" />
                    <h3 class="team_item-title"><?= $row['team_name'] ?></h3>
                    <p class="team_item-text"><?= $row['team_post'] ?></p>
                    <div class="team_icon-box">
                      <?php
                        if(!empty($row['team_twitter']['url'])) {
                          ?>
                            <a 
                              href="<?= $row['team_twitter']['url'] ?>" 
                              target="<?= $row['team_twitter']['target'] ?>">
                                <i class="icon-twitter"></i>
                            </a>
                          <?php
                        }
                        if(!empty($row['team_instagram']['url'])) {
                          ?>
                            <a 
                              href="<?= $row['team_instagram']['url'] ?>" 
                              target="<?= $row['team_instagram']['target'] ?>">
                                <i class="icon-instagram"></i>
                            </a>
                          <?php
                        }
                        if(!empty($row['team_vk']['url'])) {
                          ?>
                            <a 
                              href="<?= $row['team_vk']['url'] ?>" 
                              target="<?= $row['team_vk']['target'] ?>">
                                <i class="icon-vkontakte"></i>
                            </a>
                          <?php
                        }
                        if(!empty($row['team_facebook']['url'])) {
                          ?>
                            <a 
                              href="<?= $row['team_facebook']['url'] ?>" 
                              target="<?= $row['team_facebook']['target'] ?>">
                                <i class="icon-facebook-squared"></i>
                            </a>
                          <?php
                        }
                      ?>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>





          
        </div>
      </div>
    </div>

    <div class="provide" id="provide">
      <div class="container">
        <div class="block_head inverse">
          <h2 class="block_title"><?= CFS()->get('provide_title'); ?></h2>
          <p class="block_text"><?= CFS()->get('provide_text'); ?></p>
        </div>
        <div class="provide_inner">

          <?php
          $loop = CFS()->get('provide_card');
          foreach ($loop as $row) {
            ?>
            <div class="provide_item">
              <img src="<?= $row['provide_card_img'] ?>" alt="">
              <h3 class="provide_item-title"><?= $row['provide_card_title'] ?></h3>
              <p class="provide_item-text"><?= $row['provide_card_text'] ?></p>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>

    <div class="contact" id="contact">
      <div class="container">
        <div class="block_head">
          <h2 class="block_title"><?= CFS()->get('footer_title'); ?></h2>
          <p class="block_text"><?= CFS()->get('footer_text'); ?></p>
        </div>
        <div class="contact_inner">
          <div class="contact_icon-box">
            <div class="contact_item">
              <i class="icon-phone"></i>
              <div class="contact_text">
                <a href="tel:<?= CFS()->get('footer_phone'); ?>">
                  <?= CFS()->get('footer_phone'); ?>
                </a>
              </div>
            </div>
            <div class="contact_item">
              <i class="icon-location"></i>
              <div class="contact_text">
                <?php
                  if(!empty(CFS()->get('footer_address')['url'])) {
                    ?>
                      <a href="<?= CFS()->get('footer_address')['url'] ?>" 
                        target="<?= CFS()->get('footer_address')['target'] ?>">
                          <?= CFS()->get('footer_address')['text'] ?>
                      </a>
                    <?php
                  }
                ?>
              </div>
            </div>
            <div class="contact_item">
              <i class="icon-mail"></i>
              <div class="contact_text">
                <a href="mailto:<?= CFS()->get('footer_email'); ?>">
                  <?= CFS()->get('footer_email'); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
        
        <?php the_content(); ?>
      </div>
    </div>
<?php get_footer(); ?>