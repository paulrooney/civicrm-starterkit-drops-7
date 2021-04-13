<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Contribute/ContributionSoft.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:e6e9714690d71b36fc982ba2215fc0a1)
 */

/**
 * Database access object for the ContributionSoft entity.
 */
class CRM_Contribute_DAO_ContributionSoft extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '2.2';
  const COMPONENT = 'CiviContribute';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_contribution_soft';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Soft Credit ID
   *
   * @var int
   */
  public $id;

  /**
   * FK to contribution table.
   *
   * @var int
   */
  public $contribution_id;

  /**
   * FK to Contact ID
   *
   * @var int
   */
  public $contact_id;

  /**
   * Amount of this soft credit.
   *
   * @var float
   */
  public $amount;

  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;

  /**
   * FK to civicrm_pcp.id
   *
   * @var int
   */
  public $pcp_id;

  /**
   * @var bool
   */
  public $pcp_display_in_roll;

  /**
   * @var string
   */
  public $pcp_roll_nickname;

  /**
   * @var string
   */
  public $pcp_personal_note;

  /**
   * Soft Credit Type ID.Implicit FK to civicrm_option_value where option_group = soft_credit_type.
   *
   * @var int
   */
  public $soft_credit_type_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_contribution_soft';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Contribution Soft Credits') : ts('Contribution Soft Credit');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contribution_id', 'civicrm_contribution', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'pcp_id', 'civicrm_pcp', 'id');
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
        'contribution_soft_id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Credit ID'),
          'description' => ts('Soft Credit ID'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_contribution_soft.id',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '2.2',
        ],
        'contribution_id' => [
          'name' => 'contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution ID'),
          'description' => ts('FK to contribution table.'),
          'required' => TRUE,
          'where' => 'civicrm_contribution_soft.contribution_id',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_Contribution',
          'html' => [
            'label' => ts("Contribution"),
          ],
          'add' => '2.2',
        ],
        'contribution_soft_contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => ts('FK to Contact ID'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_contribution_soft.contact_id',
          'headerPattern' => '/contact(.?id)?/i',
          'dataPattern' => '/^\d+$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'label' => ts("Contact"),
          ],
          'add' => '2.2',
        ],
        'amount' => [
          'name' => 'amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Soft Credit Amount'),
          'description' => ts('Amount of this soft credit.'),
          'required' => TRUE,
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_contribution_soft.amount',
          'headerPattern' => '/total(.?am(ou)?nt)?/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'currency' => [
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution Currency'),
          'description' => ts('3 character string, value from config setting or input via user.'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'where' => 'civicrm_contribution_soft.currency',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
            'abbrColumn' => 'symbol',
          ],
          'add' => '3.2',
        ],
        'pcp_id' => [
          'name' => 'pcp_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('PCP ID'),
          'description' => ts('FK to civicrm_pcp.id'),
          'where' => 'civicrm_contribution_soft.pcp_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'FKClassName' => 'CRM_PCP_DAO_PCP',
          'html' => [
            'label' => ts("PCP"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_pcp',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
          'add' => '2.2',
        ],
        'pcp_display_in_roll' => [
          'name' => 'pcp_display_in_roll',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Soft Contribution Display on PCP'),
          'where' => 'civicrm_contribution_soft.pcp_display_in_roll',
          'default' => '0',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'pcp_roll_nickname' => [
          'name' => 'pcp_roll_nickname',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution PCP Nickname'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_soft.pcp_roll_nickname',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'pcp_personal_note' => [
          'name' => 'pcp_personal_note',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution PCP Note'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_soft.pcp_personal_note',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '2.2',
        ],
        'soft_credit_type_id' => [
          'name' => 'soft_credit_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Credit Type'),
          'description' => ts('Soft Credit Type ID.Implicit FK to civicrm_option_value where option_group = soft_credit_type.'),
          'where' => 'civicrm_contribution_soft.soft_credit_type_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'soft_credit_type',
            'optionEditPath' => 'civicrm/admin/options/soft_credit_type',
          ],
          'add' => '2.2',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contribution_soft', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contribution_soft', $prefix, []);
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
      'index_id' => [
        'name' => 'index_id',
        'field' => [
          0 => 'pcp_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_contribution_soft::0::pcp_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
