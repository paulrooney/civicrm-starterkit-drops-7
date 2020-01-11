<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/WordReplacement.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:f423838740b39ae0935ac1282d9c5734)
 */

/**
 * Database access object for the WordReplacement entity.
 */
class CRM_Core_DAO_WordReplacement extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_word_replacement';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Word replacement ID
   *
   * @var int
   */
  public $id;

  /**
   * Word which need to be replaced
   *
   * @var string
   */
  public $find_word;

  /**
   * Word which will replace the word in find
   *
   * @var string
   */
  public $replace_word;

  /**
   * Is this entry active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * @var string
   */
  public $match_type;

  /**
   * FK to Domain ID. This is for Domain specific word replacement
   *
   * @var int
   */
  public $domain_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_word_replacement';
    parent::__construct();
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'domain_id', 'civicrm_domain', 'id');
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
          'title' => ts('Word Replacement ID'),
          'description' => ts('Word replacement ID'),
          'required' => TRUE,
          'where' => 'civicrm_word_replacement.id',
          'table_name' => 'civicrm_word_replacement',
          'entity' => 'WordReplacement',
          'bao' => 'CRM_Core_BAO_WordReplacement',
          'localizable' => 0,
        ],
        'find_word' => [
          'name' => 'find_word',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Replaced Word'),
          'description' => ts('Word which need to be replaced'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_word_replacement.find_word',
          'table_name' => 'civicrm_word_replacement',
          'entity' => 'WordReplacement',
          'bao' => 'CRM_Core_BAO_WordReplacement',
          'localizable' => 0,
        ],
        'replace_word' => [
          'name' => 'replace_word',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Replacement Word'),
          'description' => ts('Word which will replace the word in find'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_word_replacement.replace_word',
          'table_name' => 'civicrm_word_replacement',
          'entity' => 'WordReplacement',
          'bao' => 'CRM_Core_BAO_WordReplacement',
          'localizable' => 0,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Word Replacement is Active'),
          'description' => ts('Is this entry active?'),
          'where' => 'civicrm_word_replacement.is_active',
          'default' => '1',
          'table_name' => 'civicrm_word_replacement',
          'entity' => 'WordReplacement',
          'bao' => 'CRM_Core_BAO_WordReplacement',
          'localizable' => 0,
        ],
        'match_type' => [
          'name' => 'match_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Word Replacement Match Type'),
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
          'where' => 'civicrm_word_replacement.match_type',
          'default' => 'wildcardMatch',
          'table_name' => 'civicrm_word_replacement',
          'entity' => 'WordReplacement',
          'bao' => 'CRM_Core_BAO_WordReplacement',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::getWordReplacementMatchType',
          ],
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Word Replacement Domain ID'),
          'description' => ts('FK to Domain ID. This is for Domain specific word replacement'),
          'where' => 'civicrm_word_replacement.domain_id',
          'table_name' => 'civicrm_word_replacement',
          'entity' => 'WordReplacement',
          'bao' => 'CRM_Core_BAO_WordReplacement',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'word_replacement', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'word_replacement', $prefix, []);
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
      'UI_domain_find' => [
        'name' => 'UI_domain_find',
        'field' => [
          0 => 'domain_id',
          1 => 'find_word',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_word_replacement::1::domain_id::find_word',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
