<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Email.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:3347cb591dc1868f493d8aa7bd7ab546)
 */

/**
 * Database access object for the Email entity.
 */
class CRM_Core_DAO_Email extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_email';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-envelope-o';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'email';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique Email ID
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
   * Which Location does this email belong to.
   *
   * @var int
   */
  public $location_type_id;

  /**
   * Email address
   *
   * @var string
   */
  public $email;

  /**
   * Is this the primary email address
   *
   * @var bool
   */
  public $is_primary;

  /**
   * Is this the billing?
   *
   * @var bool
   */
  public $is_billing;

  /**
   * Implicit FK to civicrm_option_value where option_group = email_on_hold.
   *
   * @var int
   */
  public $on_hold;

  /**
   * Is this address for bulk mail ?
   *
   * @var bool
   */
  public $is_bulkmail;

  /**
   * When the address went on bounce hold
   *
   * @var datetime
   */
  public $hold_date;

  /**
   * When the address bounce status was last reset
   *
   * @var datetime
   */
  public $reset_date;

  /**
   * Text formatted signature for the email.
   *
   * @var text
   */
  public $signature_text;

  /**
   * HTML formatted signature for the email.
   *
   * @var text
   */
  public $signature_html;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_email';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Emails') : ts('Email');
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
          'title' => ts('Email ID'),
          'description' => ts('Unique Email ID'),
          'required' => TRUE,
          'where' => 'civicrm_email.id',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Email Contact'),
          'description' => ts('FK to Contact ID'),
          'where' => 'civicrm_email.contact_id',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '2.0',
        ],
        'location_type_id' => [
          'name' => 'location_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Email Location Type'),
          'description' => ts('Which Location does this email belong to.'),
          'where' => 'civicrm_email.location_type_id',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_location_type',
            'keyColumn' => 'id',
            'labelColumn' => 'display_name',
          ],
          'add' => '2.0',
        ],
        'email' => [
          'name' => 'email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Email'),
          'description' => ts('Email address'),
          'maxlength' => 254,
          'size' => 30,
          'import' => TRUE,
          'where' => 'civicrm_email.email',
          'headerPattern' => '/e.?mail/i',
          'dataPattern' => '/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/',
          'export' => TRUE,
          'rule' => 'email',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.1',
        ],
        'is_primary' => [
          'name' => 'is_primary',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Primary email'),
          'description' => ts('Is this the primary email address'),
          'where' => 'civicrm_email.is_primary',
          'default' => '0',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'html' => [
            'type' => 'Radio',
          ],
          'add' => '1.1',
        ],
        'is_billing' => [
          'name' => 'is_billing',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Billing Email?'),
          'description' => ts('Is this the billing?'),
          'where' => 'civicrm_email.is_billing',
          'default' => '0',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'add' => '2.0',
        ],
        'on_hold' => [
          'name' => 'on_hold',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('On Hold'),
          'description' => ts('Implicit FK to civicrm_option_value where option_group = email_on_hold.'),
          'required' => TRUE,
          'where' => 'civicrm_email.on_hold',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_PseudoConstant::emailOnHoldOptions',
          ],
          'add' => '1.1',
        ],
        'is_bulkmail' => [
          'name' => 'is_bulkmail',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Use for Bulk Mail'),
          'description' => ts('Is this address for bulk mail ?'),
          'required' => TRUE,
          'where' => 'civicrm_email.is_bulkmail',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'add' => '1.9',
        ],
        'hold_date' => [
          'name' => 'hold_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Hold Date'),
          'description' => ts('When the address went on bounce hold'),
          'where' => 'civicrm_email.hold_date',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'reset_date' => [
          'name' => 'reset_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Reset Date'),
          'description' => ts('When the address bounce status was last reset'),
          'where' => 'civicrm_email.reset_date',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'signature_text' => [
          'name' => 'signature_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Signature Text'),
          'description' => ts('Text formatted signature for the email.'),
          'import' => TRUE,
          'where' => 'civicrm_email.signature_text',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
          'add' => '3.2',
        ],
        'signature_html' => [
          'name' => 'signature_html',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Signature Html'),
          'description' => ts('HTML formatted signature for the email.'),
          'import' => TRUE,
          'where' => 'civicrm_email.signature_html',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_email',
          'entity' => 'Email',
          'bao' => 'CRM_Core_BAO_Email',
          'localizable' => 0,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'email', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'email', $prefix, []);
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
      'index_location_type' => [
        'name' => 'index_location_type',
        'field' => [
          0 => 'location_type_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_email::0::location_type_id',
      ],
      'UI_email' => [
        'name' => 'UI_email',
        'field' => [
          0 => 'email',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_email::0::email',
      ],
      'index_is_primary' => [
        'name' => 'index_is_primary',
        'field' => [
          0 => 'is_primary',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_email::0::is_primary',
      ],
      'index_is_billing' => [
        'name' => 'index_is_billing',
        'field' => [
          0 => 'is_billing',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_email::0::is_billing',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
