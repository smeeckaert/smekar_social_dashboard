<?php
namespace Smekar\Social\Dashboard;

/**
 * Class Model_Url
 *
 * @property int             url_id
 * @property string          url_url
 * @property Model_Context[] contexts
 * @property bool            url_enabled
 * @property \Date           url_created_at
 * @property \Date           url_updated_at
 * @package Smekar\Social\Dashboard
 */
class Model_Url extends \Nos\Orm\Model
{
    protected static $_primary_key = array('url_id');
    protected static $_table_name = 'smekar_url';

    protected static $_title_property = 'url_url';
    protected static $_properties = array(
        'url_id',
        'url_url',
        'url_created_at',
        'url_updated_at'
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'mysql_timestamp' => true,
            'property'        => 'url_created_at'
        ),
        'Orm\Observer_UpdatedAt' => array(
            'mysql_timestamp' => true,
            'property'        => 'url_updated_at'
        ),
    );

    protected static $_has_one = array();
    protected static $_belongs_to = array();
    protected static $_has_many = array(
        'stats' => array(
            'key_from'       => 'url_id',
            'model_to'       => '\Smekar\Social\Dashboard\Model_Stat',
            'key_to'         => 'stat_url_id',
            'cascade_save'   => false,
            'cascade_delete' => false,
        ),
    );
    protected static $_many_many = array();
    protected static $_twinnable_has_one = array();
    protected static $_twinnable_has_many = array();
    protected static $_twinnable_belongs_to = array();
    protected static $_twinnable_many_many = array();
}