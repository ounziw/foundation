<?php
/**
 * Foundation 4 template
 *
 * @copyright  2013 Fumito MIZUNO
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://ounziw.com/
 *
 *
 * HTML & CSS origin : Fundation4.2.2 by ZURB
 * https://github.com/zurb/foundation
 * distributed under MIT
 */

return array(
    'name'    => 'Foundation',
    'version' => '0.1',
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
        'foundation_right_menu' => array(
            'file' => 'foundation::right_menu',
            'title' => 'Foundation right menu',
            'cols' => 3,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,2,1',
                'sub' => '2,0,1,1',
            ),
            'module' => '',
        ),
        'foundation_banded' => array(
            'file' => 'foundation::banded',
            'title' => 'Foundation banded',
            'cols' => 3,
            'rows' => 3,
            'layout' => array(
                'mainimg' => '0,0,3,1',
                'imgl' => '0,1,1,1',
                'contentr' => '1,1,2,1',
                'contentl' => '0,2,2,1',
                'imgr' => '2,2,1,1',
            ),
            'module' => '',
        )
    ),
);
