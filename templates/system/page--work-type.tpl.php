<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['content']: The main content of the current page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see omega_preprocess_page()
 */
?>
<div class="l-page" id="top">
  <header class="l-header" role="banner">
    <div class="l-branding">
      <h1 class="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Penelope Boyd</a>
      </h1>
    </div>
    <div class="l-menu-wrapper">
      <div class="l-menu">
        <?php if($is_front) : ?>
          <ul class="menu">
            <li><a href="#top" title="Top">Top</a></li>
            <li><a href="#categories" title="Works">Works</a></li>
            <li><a href="#about" title="About">About</a></li>
            <li><a href="#contact" title="Contact">Contact</a></li>
          </ul>
        <?php else : ?>
          <?php $menu_block = module_invoke('superfish', 'block_view', 1); ?>
          <?php print render($menu_block['content']); ?>
        <?php endif; ?>
      </div>
    </div>
  </header>
  <div id="content" class="l-main">
    <div class="l-content" role="main">
      <a id="main-content"></a>
      <h1><?php print $title; ?></h1>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </div>
  </div>
  <footer class="l-footer" role="contentinfo">
    <div class="l-copyright">
      <p>&copy;&nbsp;Copyright&nbsp;2016 Penelope Boyd</p>
    </div>
    <div class="l-social">
        <ul class="menu">
          <li><a class="icon-facebook" href="https://www.facebook.com/Penelope-Boyd-728642920581783/" title="Penelope Boyd on Facebook"><span class="sr-only">Facebook</span></a></li>
          <li><a class="icon-instagram" href="https://www.instagram.com/penelopeboydart/" title="Penelope Boyd on Instagram"><span class="sr-only">Instagram</span></a></li>
          <li ><a class="icon-envelope-o" href="mailto:penelopeboydart@gmail.com" title="Email Penelope Boyd"><span class="sr-only">Email</span></a></li>
        </ul>
      </div>
  </footer>
</div>
