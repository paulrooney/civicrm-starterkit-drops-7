<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/PreferencesDate.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:e24b6513a0604a340a896973ce8d2db2)
 */

/**
 * Database access object for the PreferencesDate entity.
 */
class CRM_Core_DAO_PreferencesDate extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_preferences_date';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * @var int
   */
  public $id;

  /**
   * The meta name for this date (fixed in code)
   *
   * @var string
   */
  public $name;

  /**
   * Description of this date type.
   *
   * @var string
   */
  public $description;

  /**
   * The start offset relative to current year
   *
   * @var int
   */
  public $start;

  /**
   * The end offset relative to current year, can be negative
   *
   * @var int
   */
  public $end;

  /**
   * The date type
   *
   * @var string
   */
  public $date_format;

  /**
   * time format
   *
   * @var string
   */
  public $time_format;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_preferences_date';
    parent::__construct();
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
          'title' => ts('Date Preference ID'),
          'required' => TRUE,
          'where' => 'civicrm_preferences_date.id',
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Date Preference Name'),
          'description' => ts('The meta name for this date (fixed in code)'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_preferences_date.name',
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Description'),
          'description' => ts('Description of this date type.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_preferences_date.description',
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ],
        'start' => [
          'name' => 'start',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Start'),
          'description' => ts('The start offset relative to current year'),
          'required' => TRUE,
          'where' => 'civicrm_preferences_date.start',
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ],
        'end' => [
          'name' => 'end',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('End Offset'),
          'description' => ts('The end offset relative to current year, can be negative'),
          'required' => TRUE,
          'where' => 'civicrm_preferences_date.end',
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ],
        'date_format' => [
          'name' => 'date_format',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Date Format'),
          'description' => ts('The date type'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_preferences_date.date_format',
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ],
        'time_format' => [
          'name' => 'time_format',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Time Format'),
          'description' => ts('time format'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_preferences_date.time_format',
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'preferences_date', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'preferences_date', $prefix, []);
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
    $indices = [
      'index_name' => [
        'name' => 'index_name',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_preferences_date::0::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
