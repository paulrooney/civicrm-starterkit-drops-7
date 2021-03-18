<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Website.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:9176466bab7c06d5ace2080bfcfe51d6)
 */

/**
 * Database access object for the Website entity.
 */
class CRM_Core_DAO_Website extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '3.2';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_website';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-desktop';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'url';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Unique Website ID
   *
   * @var int
   */
  public $id;

  /**
   * FK to Contact ID
   *
   * @var int
   */
  public $contact_id;

  /**
   * Website
   *
   * @var string
   */
  public $url;

  /**
   * Which Website type does this website belong to.
   *
   * @var int
   */
  public $website_type_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_website';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Websites') : ts('Website');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
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
          'title' => ts('Website ID'),
          'description' => ts('Unique Website ID'),
          'required' => TRUE,
          'where' => 'civicrm_website.id',
          'table_name' => 'civicrm_website',
          'entity' => 'Website',
          'bao' => 'CRM_Core_BAO_Website',
          'localizable' => 0,
          'add' => '3.2',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact'),
          'description' => ts('FK to Contact ID'),
          'where' => 'civicrm_website.contact_id',
          'table_name' => 'civicrm_website',
          'entity' => 'Website',
          'bao' => 'CRM_Core_BAO_Website',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '3.2',
        ],
        'url' => [
          'name' => 'url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Website'),
          'description' => ts('Website'),
          'maxlength' => 128,
          'size' => 30,
          'import' => TRUE,
          'where' => 'civicrm_website.url',
          'headerPattern' => '/Website/i',
          'dataPattern' => '/^[A-Za-z][0-9A-Za-z]{20,}$/',
          'export' => TRUE,
          'table_name' => 'civicrm_website',
          'entity' => 'Website',
          'bao' => 'CRM_Core_BAO_Website',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '3.2',
        ],
        'website_type_id' => [
          'name' => 'website_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Website Type'),
          'description' => ts('Which Website type does this website belong to.'),
          'where' => 'civicrm_website.website_type_id',
          'table_name' => 'civicrm_website',
          'entity' => 'Website',
          'bao' => 'CRM_Core_BAO_Website',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'website_type',
            'optionEditPath' => 'civicrm/admin/options/website_type',
          ],
          'add' => '3.2',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'website', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'website', $prefix, []);
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
      'UI_website_type_id' => [
        'name' => 'UI_website_type_id',
        'field' => [
          0 => 'website_type_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_website::0::website_type_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
