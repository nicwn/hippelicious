<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <?php print $styles ?>

    <!--[if lt IE 7]>
    <style type="text/css" media="all"><?php print $styles_ie6 ?></style>
    <![endif]-->

    <title><?php print $head_title ?></title>
  </head>
  <body <?php print drupal_attributes($attr) ?>>

  <?php print !empty($admin) ? $admin : '' ?>

  <?php if ($show_messages && $messages): ?>
    <div id='growl'><?php print $messages; ?></div>
  <?php endif; ?>

  <div id='root' class='clear-block'>

  <?php if (!empty($right)): ?>
    <div id='sidebar'><div class='sidebar-wrapper clear-block'><?php print $right ?></div></div>
  <?php endif; ?>

  <div id='main'><div class='limiter'>

  <div id='branding' class='clear-block'>
    <?php if ($site_name): ?><h1 class='site-name'><a href="<?php print $front_page ?>"><?php print '<img alt="'. strip_tags($site_name) .'" src="'. check_url($logo) .'" id="logo" />'?></a></h1><?php endif; ?>
    <div class='secondary'>
      <?php if (isset($secondary_links)) print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
    </div>

    <div class='primary'>
      <?php if (isset($primary_links)) print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
    </div>
  </div>

  <?php if (!empty($banner)): ?>
    <div id='banner'><div class='banner-wrapper clear-block'><?php print $banner ?></div></div>
  <?php endif; ?>

  <div id='page'>
    <?php if ($title || $tabs): ?>
    <div class='page-header'>
      <?php if ($title): ?><h2 class='page-title'><?php print $title ?></h2><?php endif; ?>
      <?php if ($help): ?><p class='page-help'><?php print $help; ?></p><?php endif; ?>
      <?php if ($tabs) print $tabs ?>
      <?php if ($tabs2) print $tabs2 ?>
    </div>
    <?php endif; ?>
    <?php if ($lead): ?><div id='lead' class='clear-block'><?php print $lead ?></div><?php endif; ?>
    <div id='content' class='clear-block'><?php print $content ?></div>
  </div>

  <div id="footer" class='clear-block'>
    <?php print $feed_icons ?>
    <?php print $footer ?>
    <?php print $footer_message ?>
  </div>

  </div></div>

  </div>

  <?php print $scripts ?>
  <?php print $closure ?>

  </body>
</html>
