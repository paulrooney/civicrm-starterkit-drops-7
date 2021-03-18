<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/SystemLog.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:cfa50c5985279e7135c046e0aeccb662)
 */

/**
 * Database access object for the SystemLog entity.
 */
class CRM_Core_DAO_SystemLog extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '4.5';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_system_log';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Primary key ID
   *
   * @var int
   */
  public $id;

  /**
   * Standardized message
   *
   * @var string
   */
  public $message;

  /**
   * JSON encoded data
   *
   * @var longtext
   */
  public $context;

  /**
   * error level per PSR3
   *
   * @var string
   */
  public $level;

  /**
   * Timestamp of when event occurred.
   *
   * @var timestamp
   */
  public $timestamp;

  /**
   * Optional Contact ID that created the log. Not an FK as we keep this regardless
   *
   * @var int
   */
  public $contact_id;

  /**
   * Optional Name of logging host
   *
   * @var string
   */
  public $hostname;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_system_log';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('System Logs') : ts('System Log');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('System Log ID'),
          'description' => ts('Primary key ID'),
          'required' => TRUE,
          'where' => 'civicrm_system_log.id',
          'table_name' => 'civicrm_system_log',
          'entity' => 'SystemLog',
          'bao' => 'CRM_Core_DAO_SystemLog',
          'localizable' => 0,
          'add' => '4.4',
        ],
        'message' => [
          'name' => 'message',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('System Log Message'),
          'description' => ts('Standardized message'),
          'required' => TRUE,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_system_log.message',
          'table_name' => 'civicrm_system_log',
          'entity' => 'SystemLog',
          'bao' => 'CRM_Core_DAO_SystemLog',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'context' => [
          'name' => 'context',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Detailed Log Data'),
          'description' => ts('JSON encoded data'),
          'where' => 'civicrm_system_log.context',
          'table_name' => 'civicrm_system_log',
          'entity' => 'SystemLog',
          'bao' => 'CRM_Core_DAO_SystemLog',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'level' => [
          'name' => 'level',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Detailed Log Data'),
          'description' => ts('error level per PSR3'),
          'maxlength' => 9,
          'size' => CRM_Utils_Type::TWELVE,
          'where' => 'civicrm_system_log.level',
          'default' => 'info',
          'table_name' => 'civicrm_system_log',
          'entity' => 'SystemLog',
          'bao' => 'CRM_Core_DAO_SystemLog',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'timestamp' => [
          'name' => 'timestamp',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Log Timestamp'),
          'description' => ts('Timestamp of when event occurred.'),
          'where' => 'civicrm_system_log.timestamp',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_system_log',
          'entity' => 'SystemLog',
          'bao' => 'CRM_Core_DAO_SystemLog',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Log Contact ID'),
          'description' => ts('Optional Contact ID that created the log. Not an FK as we keep this regardless'),
          'where' => 'civicrm_system_log.contact_id',
          'table_name' => 'civicrm_system_log',
          'entity' => 'SystemLog',
          'bao' => 'CRM_Core_DAO_SystemLog',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'hostname' => [
          'name' => 'hostname',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Log Host'),
          'description' => ts('Optional Name of logging host'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_system_log.hostname',
          'table_name' => 'civicrm_system_log',
          'entity' => 'SystemLog',
          'bao' => 'CRM_Core_DAO_SystemLog',
          'localizable' => 0,
          'add' => '4.5',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'system_log', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'system_log', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
