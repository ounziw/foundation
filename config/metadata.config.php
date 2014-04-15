<?php
/**
 * Foundation 5 template
 *
 * @copyright  2013-2014 Fumito MIZUNO
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://ounziw.com/
 *
 *
 * HTML & CSS origin : Fundation5.1.1 by ZURB
 * https://github.com/zurb/foundation
 * distributed under MIT
 */

return array(
    'name'    => 'Foundation',
    'version' => '0.2',
    'provider' => array(
        'name' => 'Fumito MIZUNO',
    ),
    'namespace' => 'Foundation',
    'i18n_file' => 'foundation::metadata',
    'launchers' => array(
    ),
    'enhancers' => array(
    ),
    'templates' => array(
        'foundation_top_menu' => array(
            'file' => 'foundation::top_menu',
            'title' => 'Foundation top menu',
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        ),
        'foundation_12__6-6' => array(
            'file' => 'foundation::12__6-6',
            'title' => 'top 12, below 6-6',
            'cols' => 12,
            'rows' => 3,
            'layout' => array(
                'content' => '0,0,12,1',
                'content-l' => '0,1,6,2',
                'content-r' => '6,1,6,2',
            ),
            'module' => '',
        ),
    ),
);
