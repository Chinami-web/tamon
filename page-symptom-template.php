<?php
/*
Template Name: 症状下層テンプレート
*/
?>
<?php get_header(); ?>
<main id="js-topContents">


  <section class="bgDark">
    <div class="inner">
      <h2 class="ttl"><?php the_field('title'); ?></h2><!-- /.lineTtl -->
      <?php if(get_field('txt')): ?>
      <p><?php the_field('txt'); ?></p>
      <?php endif; ?>
      <?php if(get_field('example')['sympt1']): ?>
      <div class="ex">
        <h3 class="mainTtl"> <span class="mainTtl__inner"> <span class="upper">For example</span><!-- /upper -->
            <span class="below">このような症状がある方は<br><span class="block"><?php the_title(); ?></span><span class="block">が疑われます</span></span><!-- /below -->
          </span><!-- /mainTtl__inner -->
        </h3>
        <?php $example = get_field('example'); ?>
        <ul class="chk">
        <?php if($example['sympt1']): ?>
          <li><span><?php echo $example['sympt1']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt2']): ?>
          <li><span><?php echo $example['sympt2']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt3']): ?>
          <li><span><?php echo $example['sympt3']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt4']): ?>
          <li><span><?php echo $example['sympt4']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt5']): ?>
          <li><span><?php echo $example['sympt5']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt6']): ?>
          <li><span><?php echo $example['sympt6']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt7']): ?>
          <li><span><?php echo $example['sympt7']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt8']): ?>
          <li><span><?php echo $example['sympt8']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt9']): ?>
          <li><span><?php echo $example['sympt9']; ?></span></li>
          <?php endif; ?>
          <?php if($example['sympt10']): ?>
          <li><span><?php echo $example['sympt10']; ?></span></li>
          <?php endif; ?>
        </ul><!-- /.chk -->
        <!-- /ex__list -->
      </div>
      <?php endif; ?>
    </div><!-- /.inner -->
  </section>

  <section class="editor">
    <div class="inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div><!-- /.inner -->
  </section><!-- /.editor -->

  <p class="ctaTxt"><span><?php the_title(); ?>について<br class="show--sp">詳しくはクリニックへ<br class="show--sp"><span class="block">お問い合わせください。</span><!-- /.block --></span></p><!-- /.ctaTxt -->

  <?php get_template_part('template-parts/cta'); ?>
</main>
<?php get_footer(); ?>