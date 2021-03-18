<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Mailing/BounceType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:d85cecf66659cee08c967e8671ba7b6d)
 */

/**
 * Database access object for the BounceType entity.
 */
class CRM_Mailing_DAO_BounceType extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '';
  const COMPONENT = 'CiviMail';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailing_bounce_type';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * @var int
   */
  public $id;

  /**
   * Type of bounce
   *
   * @var string
   */
  public $name;

  /**
   * A description of this bounce type
   *
   * @var string
   */
  public $description;

  /**
   * Number of bounces of this type required before the email address is put on bounce hold
   *
   * @var int
   */
  public $hold_threshold;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_bounce_type';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Bounce Types') : ts('Bounce Type');
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
          'title' => ts('Bounce Type ID'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_bounce_type.id',
          'table_name' => 'civicrm_mailing_bounce_type',
          'entity' => 'BounceType',
          'bao' => 'CRM_Mailing_DAO_BounceType',
          'localizable' => 0,
          'add' => NULL,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Bounce Type Name'),
          'description' => ts('Type of bounce'),
          'required' => TRUE,
          'maxlength' => 24,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_mailing_bounce_type.name',
          'table_name' => 'civicrm_mailing_bounce_type',
          'entity' => 'BounceType',
          'bao' => 'CRM_Mailing_DAO_BounceType',
          'localizable' => 0,
          'add' => NULL,
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Bounce Type Description'),
          'description' => ts('A description of this bounce type'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing_bounce_type.description',
          'table_name' => 'civicrm_mailing_bounce_type',
          'entity' => 'BounceType',
          'bao' => 'CRM_Mailing_DAO_BounceType',
          'localizable' => 0,
          'add' => NULL,
        ],
        'hold_threshold' => [
          'name' => 'hold_threshold',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Hold Threshold'),
          'description' => ts('Number of bounces of this type required before the email address is put on bounce hold'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_bounce_type.hold_threshold',
          'table_name' => 'civicrm_mailing_bounce_type',
          'entity' => 'BounceType',
          'bao' => 'CRM_Mailing_DAO_BounceType',
          'localizable' => 0,
          'add' => NULL,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_bounce_type', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_bounce_type', $prefix, []);
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
