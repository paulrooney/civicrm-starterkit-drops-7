<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Case/CaseType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:c65e3b1aa03fb9ad3122915d612fefb8)
 */

/**
 * Database access object for the CaseType entity.
 */
class CRM_Case_DAO_CaseType extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_case_type';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Autoincremented type id
   *
   * @var int
   */
  public $id;

  /**
   * Machine name for Case Type
   *
   * @var string
   */
  public $name;

  /**
   * Natural language name for Case Type
   *
   * @var string
   */
  public $title;

  /**
   * Description of the Case Type
   *
   * @var string
   */
  public $description;

  /**
   * Is this entry active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Is this case type a predefined system type?
   *
   * @var bool
   */
  public $is_reserved;

  /**
   * Ordering of the case types
   *
   * @var int
   */
  public $weight;

  /**
   * xml definition of case type
   *
   * @var blob
   */
  public $definition;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_case_type';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Case Types');
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
          'title' => ts('Case Type ID'),
          'description' => ts('Autoincremented type id'),
          'required' => TRUE,
          'where' => 'civicrm_case_type.id',
          'table_name' => 'civicrm_case_type',
          'entity' => 'CaseType',
          'bao' => 'CRM_Case_BAO_CaseType',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Case Type Name'),
          'description' => ts('Machine name for Case Type'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_case_type.name',
          'table_name' => 'civicrm_case_type',
          'entity' => 'CaseType',
          'bao' => 'CRM_Case_BAO_CaseType',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'title' => [
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Case Type Title'),
          'description' => ts('Natural language name for Case Type'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_case_type.title',
          'table_name' => 'civicrm_case_type',
          'entity' => 'CaseType',
          'bao' => 'CRM_Case_BAO_CaseType',
          'localizable' => 1,
          'add' => '4.5',
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Case Type Description'),
          'description' => ts('Description of the Case Type'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_case_type.description',
          'table_name' => 'civicrm_case_type',
          'entity' => 'CaseType',
          'bao' => 'CRM_Case_BAO_CaseType',
          'localizable' => 1,
          'add' => '4.5',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Case Type Is Active'),
          'description' => ts('Is this entry active?'),
          'where' => 'civicrm_case_type.is_active',
          'table_name' => 'civicrm_case_type',
          'entity' => 'CaseType',
          'bao' => 'CRM_Case_BAO_CaseType',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Case Type Is Reserved'),
          'description' => ts('Is this case type a predefined system type?'),
          'where' => 'civicrm_case_type.is_reserved',
          'table_name' => 'civicrm_case_type',
          'entity' => 'CaseType',
          'bao' => 'CRM_Case_BAO_CaseType',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'description' => ts('Ordering of the case types'),
          'required' => TRUE,
          'where' => 'civicrm_case_type.weight',
          'default' => '1',
          'table_name' => 'civicrm_case_type',
          'entity' => 'CaseType',
          'bao' => 'CRM_Case_BAO_CaseType',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'definition' => [
          'name' => 'definition',
          'type' => CRM_Utils_Type::T_BLOB,
          'title' => ts('Case Type Definition'),
          'description' => ts('xml definition of case type'),
          'where' => 'civicrm_case_type.definition',
          'table_name' => 'civicrm_case_type',
          'entity' => 'CaseType',
          'bao' => 'CRM_Case_BAO_CaseType',
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
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'case_type', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'case_type', $prefix, []);
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
      'case_type_name' => [
        'name' => 'case_type_name',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_case_type::1::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
