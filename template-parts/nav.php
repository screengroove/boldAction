<!-- MOBILE NAV - HOMEPAGE -->
<?php get_template_part( 'template-parts/nav-mobile' ); ?>

<!-- MOBILE HEADER - HOMEPAGE -->
<?php get_template_part( 'template-parts/header-mobile' ); ?>

<nav id="site-navigation" class="nav-fixed" role="navigation">
  <div class="nav-wrap">
    <img class="nav-brand" src="<?php bloginfo('template_directory'); ?>/assets/images/nav_logo.png" alt="">
    <div class="nav-links">
      <a href="/news">News</a>
      <a href="#member-section" >Members</a>
      <a href="#candidate-section" >Candidates</a>
      <a href="#footer">Contact</a>
      <a href="https://www.facebook.com/chcboldpac" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="https://twitter.com/chcboldpac" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

      <a id="ribbon" href="https://secure.actblue.com/contribute/page/bold-homepage?refcode=homepage-donate&amounts=15,25,50,100,250,500,1000&amount=25&recurring=true" target="_blank" class="ribbon white">
        <div class="btn">Donate</div>
      </a>
    </div>
  </div>
</nav>
