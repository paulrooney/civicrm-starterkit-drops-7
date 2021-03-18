<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Member/MembershipLog.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:9766c309b84737eab95138742c8437b6)
 */

/**
 * Database access object for the MembershipLog entity.
 */
class CRM_Member_DAO_MembershipLog extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.5';
  const COMPONENT = 'CiviMember';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_membership_log';

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
   * FK to Membership table
   *
   * @var int
   */
  public $membership_id;

  /**
   * New status assigned to membership by this action. FK to Membership Status
   *
   * @var int
   */
  public $status_id;

  /**
   * New membership period start date
   *
   * @var date
   */
  public $start_date;

  /**
   * New membership period expiration date.
   *
   * @var date
   */
  public $end_date;

  /**
   * FK to Contact ID of person under whose credentials this data modification was made.
   *
   * @var int
   */
  public $modified_id;

  /**
   * Date this membership modification action was logged.
   *
   * @var date
   */
  public $modified_date;

  /**
   * FK to Membership Type.
   *
   * @var int
   */
  public $membership_type_id;

  /**
   * Maximum number of related memberships.
   *
   * @var int
   */
  public $max_related;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_membership_log';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Membership Logs') : ts('Membership Log');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'membership_id', 'civicrm_membership', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'status_id', 'civicrm_membership_status', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'modified_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'membership_type_id', 'civicrm_membership_type', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
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
          'title' => ts('Membership Log ID'),
          'required' => TRUE,
          'where' => 'civicrm_membership_log.id',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'membership_id' => [
          'name' => 'membership_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership ID'),
          'description' => ts('FK to Membership table'),
          'required' => TRUE,
          'where' => 'civicrm_membership_log.membership_id',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'FKClassName' => 'CRM_Member_DAO_Membership',
          'add' => '1.5',
        ],
        'status_id' => [
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Status'),
          'description' => ts('New status assigned to membership by this action. FK to Membership Status'),
          'required' => TRUE,
          'where' => 'civicrm_membership_log.status_id',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'FKClassName' => 'CRM_Member_DAO_MembershipStatus',
          'add' => '1.5',
        ],
        'start_date' => [
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Membership Log Start Date'),
          'description' => ts('New membership period start date'),
          'where' => 'civicrm_membership_log.start_date',
          'dataPattern' => '/\d{4}-?\d{2}-?\d{2}/',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'end_date' => [
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Membership Log End Date'),
          'description' => ts('New membership period expiration date.'),
          'where' => 'civicrm_membership_log.end_date',
          'dataPattern' => '/\d{4}-?\d{2}-?\d{2}/',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'modified_id' => [
          'name' => 'modified_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Log modified By'),
          'description' => ts('FK to Contact ID of person under whose credentials this data modification was made.'),
          'where' => 'civicrm_membership_log.modified_id',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '1.5',
        ],
        'modified_date' => [
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Membership Change Date'),
          'description' => ts('Date this membership modification action was logged.'),
          'where' => 'civicrm_membership_log.modified_date',
          'dataPattern' => '/\d{4}-?\d{2}-?\d{2}/',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'membership_type_id' => [
          'name' => 'membership_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type ID'),
          'description' => ts('FK to Membership Type.'),
          'where' => 'civicrm_membership_log.membership_type_id',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'FKClassName' => 'CRM_Member_DAO_MembershipType',
          'add' => '3.4',
        ],
        'max_related' => [
          'name' => 'max_related',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Maximum Related Memberships'),
          'description' => ts('Maximum number of related memberships.'),
          'where' => 'civicrm_membership_log.max_related',
          'table_name' => 'civicrm_membership_log',
          'entity' => 'MembershipLog',
          'bao' => 'CRM_Member_BAO_MembershipLog',
          'localizable' => 0,
          'add' => '4.3',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'membership_log', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'membership_log', $prefix, []);
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
