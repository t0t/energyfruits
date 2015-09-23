<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<main class="main__content" role="main">

  <!-- Loop for posts -->
  <?php get_template_part('templates/content', 'page-posts'); ?>

</main>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us5.list-manage.com","uuid":"c5802993bc","lid":"857eaffa92"}) })</script>

<?php get_footer(); ?>
