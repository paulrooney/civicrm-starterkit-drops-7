<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Mailing/MailingComponent.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:e9628233f04820bf16542b8221eaa008)
 */

/**
 * Database access object for the MailingComponent entity.
 */
class CRM_Mailing_DAO_MailingComponent extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '';
  const COMPONENT = 'CiviMail';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailing_component';

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
   * The name of this component
   *
   * @var string
   */
  public $name;

  /**
   * Type of Component.
   *
   * @var string
   */
  public $component_type;

  /**
   * @var string
   */
  public $subject;

  /**
   * Body of the component in html format.
   *
   * @var text
   */
  public $body_html;

  /**
   * Body of the component in text format.
   *
   * @var text
   */
  public $body_text;

  /**
   * Is this the default component for this component_type?
   *
   * @var bool
   */
  public $is_default;

  /**
   * Is this property active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_component';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Mailing Components') : ts('Mailing Component');
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
          'title' => ts('Mailing Component ID'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_component.id',
          'table_name' => 'civicrm_mailing_component',
          'entity' => 'MailingComponent',
          'bao' => 'CRM_Mailing_BAO_MailingComponent',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Component Name'),
          'description' => ts('The name of this component'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_mailing_component.name',
          'table_name' => 'civicrm_mailing_component',
          'entity' => 'MailingComponent',
          'bao' => 'CRM_Mailing_BAO_MailingComponent',
          'localizable' => 0,
          'add' => NULL,
        ],
        'component_type' => [
          'name' => 'component_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Component Type'),
          'description' => ts('Type of Component.'),
          'maxlength' => 12,
          'size' => CRM_Utils_Type::TWELVE,
          'where' => 'civicrm_mailing_component.component_type',
          'table_name' => 'civicrm_mailing_component',
          'entity' => 'MailingComponent',
          'bao' => 'CRM_Mailing_BAO_MailingComponent',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::mailingComponents',
          ],
          'add' => NULL,
        ],
        'subject' => [
          'name' => 'subject',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Subject'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing_component.subject',
          'table_name' => 'civicrm_mailing_component',
          'entity' => 'MailingComponent',
          'bao' => 'CRM_Mailing_BAO_MailingComponent',
          'localizable' => 0,
          'html' => [
            'label' => ts("Subject"),
          ],
          'add' => NULL,
        ],
        'body_html' => [
          'name' => 'body_html',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Mailing Component Body HTML'),
          'description' => ts('Body of the component in html format.'),
          'rows' => 8,
          'cols' => 80,
          'where' => 'civicrm_mailing_component.body_html',
          'table_name' => 'civicrm_mailing_component',
          'entity' => 'MailingComponent',
          'bao' => 'CRM_Mailing_BAO_MailingComponent',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => NULL,
        ],
        'body_text' => [
          'name' => 'body_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Body Text'),
          'description' => ts('Body of the component in text format.'),
          'rows' => 8,
          'cols' => 80,
          'where' => 'civicrm_mailing_component.body_text',
          'table_name' => 'civicrm_mailing_component',
          'entity' => 'MailingComponent',
          'bao' => 'CRM_Mailing_BAO_MailingComponent',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
            'label' => ts("Body in Text Format"),
          ],
          'add' => NULL,
        ],
        'is_default' => [
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Mailing Component is Default?'),
          'description' => ts('Is this the default component for this component_type?'),
          'where' => 'civicrm_mailing_component.is_default',
          'default' => '0',
          'table_name' => 'civicrm_mailing_component',
          'entity' => 'MailingComponent',
          'bao' => 'CRM_Mailing_BAO_MailingComponent',
          'localizable' => 0,
          'add' => NULL,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Mailing Component Is Active?'),
          'description' => ts('Is this property active?'),
          'where' => 'civicrm_mailing_component.is_active',
          'table_name' => 'civicrm_mailing_component',
          'entity' => 'MailingComponent',
          'bao' => 'CRM_Mailing_BAO_MailingComponent',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_component', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_component', $prefix, []);
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
