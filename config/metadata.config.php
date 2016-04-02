<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link       http://www.novius-os.org
 */

return array(
    'name'       => 'Social Dashboard',
    'version'    => '1.0.0',
    'provider'   => array(
        'name' => 'Martin Smeeckaert',
    ),
    'namespace'  => 'Smekar\Social\Dashboard',
    'permission' => array(),
    'i18n_file'  => 'smekar_social_dashboard::metadata',
    'launchers'  => array(
        'dashboard' => array(
            'name'   => 'Social Dashboard',
            'action' => array(
                'action' => 'nosTabs',
                'tab'    => array(
                    'url'     => 'admin/noviusos_form/appdesk/index',
                    'iconUrl' => 'static/apps/noviusos_form/img/icons/form-32.png',
                ),
            ),
        ),
    ),
    'icons'      => array(
        16 => 'static/apps/noviusos_form/img/icons/form-16.png',
        32 => 'static/apps/noviusos_form/img/icons/form-32.png',
        64 => 'static/apps/noviusos_form/img/icons/form-64.png',
    ),
);
