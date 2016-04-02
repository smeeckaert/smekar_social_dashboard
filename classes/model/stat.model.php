<?php
namespace Smekar\Social\Dashboard;

/**
 * Class Model_Stat
 *
 * @property int             stat_id
 * @property string          stat_url
 * @property Model_Context[] contexts
 * @property bool            stat_enabled
 * @property \Date           stat_created_at
 * @property \Date           stat_updated_at
 * @package Smekar\Social\Dashboard
 */
class Model_Stat extends \Nos\Orm\Model
{
    protected static $_primary_key = array('stat_id');
    protected static $_table_name = 'smekar_url_stat';

    protected static $_title_property = 'stat_url';
    protected static $_properties = array(
        'stat_id',
        'stat_service',
        'stat_key',
        'stat_value',
    );

    protected static $_observers = array();

    protected static $_has_one = array();
    protected static $_belongs_to = array();
    protected static $_has_many = array();
    protected static $_many_many = array();
    protected static $_twinnable_has_one = array();
    protected static $_twinnable_has_many = array();
    protected static $_twinnable_belongs_to = array();
    protected static $_twinnable_many_many = array();
}