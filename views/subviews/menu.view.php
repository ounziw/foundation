<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

// $depth and $idParent set in template.config
// $depth: depth of the menu (1 = one level deep only, no sublevels)
// $idParent: start level, null for root (default)

?>
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><?php
          // Display a switch to others contexts home page
          $contexts = \Nos\Tools_Context::contexts();
          $links = array();
          foreach (array_keys($contexts) as $i => $context) {
              if ($context === $current_context) {
                  continue;
              }
              $links[] = '<a href="'.\Nos\Tools_Url::context($context).'"> &rarr;'.\Nos\Tools_Context::contextLabel($context).'</a>';
          }
          if (!empty($links)) {
              echo implode(' | ', $links);
          }
          ?></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
<?php
    $pages = array();
    $pages = findPages();

    $current = \Nos\Nos::main_controller()->getPage()->page_id;

    if (count($pages)) {
        ?>
        <ul class="right">
        <?php
        foreach ($pages as $p) {
            $class = array();
            $anchor = array('text' => e($p->pick('menu_title', 'title')));
            $current == $p['id'] && $class[] = 'active';
            //echo '<li>', $p->htmlAnchor($anchor);
            //if ($depth > 1) {
                $subpages = findPages($p['id']);
                if (count($subpages)) {
                    $class[] = 'has-dropdown';
                    $outputclass = implode(" ",$class);
                    if ($outputclass)
                    {
                        $outputclass = ' class="' . $outputclass .'"';
                    }
                    echo "<li$outputclass>", $p->htmlAnchor($anchor);
                    echo '<ul class="dropdown">';
                    foreach ($subpages as $sp) {
                        $anchor = array('text' => e($sp->pick('menu_title', 'title')));
                        $current == $sp['id'] && $anchor['class'] = 'active';
                        echo '<li>', $sp->htmlAnchor($anchor), '</li>';
                    }
                    echo '</ul>';
                } else {
                    $outputclass = implode(" ",$class);
                    if ($outputclass)
                    {
                        $outputclass = ' class="' . $outputclass .'"';
                    }
                    echo "<li$outputclass>", $p->htmlAnchor($anchor);
                }
            //} else {
            //    echo '<li>', $p->htmlAnchor($anchor);
            //}
            echo '</li>';
        }
        echo '</ul>';
    }

?>
            </section>
            </nav>
<?php

function findPages($idParent = null)
{
    $where = array(
        'page_parent_id' => $idParent,
        'published'      => 1,
        'page_menu'      => 1,
        'page_context'   => \Nos\Nos::main_controller()->getPage()->page_context,
    );

    $pages = \Nos\Page\Model_Page::find('all', array(
        'where'             => $where,
        'order_by'          => array('page_sort' => 'asc')
    ));

    if (count($pages) > 0) {
        return $pages;
    } else {
        return array();
    }
}
