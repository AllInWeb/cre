<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
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
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div class="wrapper">

    <div class="header-top">
        <div class="sign-in">
            <?php if ($page['sign']): ?>
                <div class="sign">
                    <?php print render($page['sign']); ?>
                </div>
            <?php endif; ?>
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array(),)); ?>
        </div>
    </div>

    <div class="header-main">
        <div class="header">
            <div class="logo">
                <a href="<?php print $front_page; ?>"><img src="<?php print $logo ?>" alt=""/></a>

                <div class="clear"></div>
            </div>

            <div class="navigation">
                <ul>
                    <li><a href="<?php if (!$is_front): print $front_page; ?><?php endif ?>#block-views-ustav-prime-block"
                           id='scroll-link'>Устав премии</a></li>
                    <li><a href="<?php if (!$is_front): print $front_page; ?><?php endif ?>#block-views-gallery-block"
                           id='scroll-link'>Жюри CRE</a></li>
                    <li>
                        <a href="<?php if (!$is_front): print $front_page; ?><?php endif ?>#block-views-cre-retail-awards-block"
                           id='scroll-link'>Номинации CRE</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="content-wrapper<?php if ($is_front): ?> front<?php endif ?>">


        <div class="content-main">
            <div class="left-sidebar">
                <?php print render($page['date_event']); ?>

                <?php if ($page['ustav_prime']): ?>
                    <div class="content-block" id='first'>
                        <div class="award-main">
                            <div class="orange-line"></div>
                            <?php if (!$is_front): ?>
                                <?php if ($title): ?>
                                    <h1 class="title" id="page-title"><?php print $title; ?></h1>
                                <?php endif; ?>
                            <?php endif ?>

                            <?php if ($messages): ?>
                                <div id="messages">
                                    <div class="section clearfix">
                                        <?php print $messages; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php print render($page['ustav_prime']); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($page['carusel']): ?>
                    <div class="content-block" id='third'>
                        <div class="award-main">
                            <div class="orange-line"></div>
                            <?php print render($page['carusel']); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($page['nominees']): ?>
                    <div class="content-block" id='third'>
                        <div class="award-main">
                            <div class="orange-line"></div>
                            <?php print render($page['nominees']); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="footer">
                    <div class="footer-left">
                        <p>За дополнительной информацией обращайтесь:</p>
                        <span>+7 (495) 926 73 40</span>
                        <p>Copyright Russian Collection, 2014</p>
                    </div>
                    <div class="footer-right">
                        <ul>
                            <li>
                                <p class="bold">Александра Сморжевская,</p>
                                <p>директор департамента ритейла</p>
                                <p>Email: <a href="mailto:a.smorzhevskaya@impressmedia.ru">a.smorzhevskaya@impressmedia.ru</a></p>
                            </li>
                            <li>
                                <p class="bold">Екатерина Минаева,</p>
                                <p>руководитель отдела организации премий CRE Awards</p>
                                <p>Email: <a href="mailto:e.minaeva@impressmedia.ru">e.minaeva@impressmedia.ru</a></p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <p>По вопросам участия:</p>
                                <p><span>Екатерина Удалова,</span> руководитель отдела телемаркетинг</p>
                                <p>Email: <a href="mailto:e.udalova@impressmedia.ru">e.udalova@impressmedia.ru</a></p>
                            </li>
                            <li>
                                <p>По вопросам партнерства:</p>
                                <p><span>Олег Блохин,</span> коммерческий директор</p>
                                <p>Email: <a href="mailto:o.blohin@impressmedia.ru">o.blohin@impressmedia.ru</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-logo">
                    <a href="http://www.imevents.ru/rc/">
                        <?php
                        $variables
                            = array(
                            'path' => 'sites/all/themes/awards/images/rc.png',
                        );
                        print $img = theme('image', $variables);
                        ?>
                    </a>
                    <a href="http://www.cre.ru">
                        <?php
                        $variables
                            = array(
                            'path' => 'sites/all/themes/awards/images/cre.png',
                        );
                        print $img = theme('image', $variables);
                        ?>
                    </a>
                    <a href="http://www.imevents.ru/">
                        <?php
                        $variables
                            = array(
                            'path' => 'sites/all/themes/awards/images/im-events.png',
                        );
                        print $img = theme('image', $variables);
                        ?>
                    </a>
                    <a href="http://www.cre-awards.ru/">
                        <?php
                        $variables
                            = array(
                            'path' => 'sites/all/themes/awards/images/cre-award.png',
                        );
                        print $img = theme('image', $variables);
                        ?>
                    </a>
                </div>

            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
