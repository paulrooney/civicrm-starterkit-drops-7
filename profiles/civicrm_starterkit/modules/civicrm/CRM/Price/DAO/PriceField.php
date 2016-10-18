<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Price/PriceField.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Price_DAO_PriceField extends CRM_Core_DAO {
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_price_field';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Price Field
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to civicrm_price_set
   *
   * @var int unsigned
   */
  public $price_set_id;
  /**
   * Variable name/programmatic handle for this field.
   *
   * @var string
   */
  public $name;
  /**
   * Text for form field label (also friendly name for administering this field).
   *
   * @var string
   */
  public $label;
  /**
   *
   * @var string
   */
  public $html_type;
  /**
   * Enter a quantity for this field?
   *
   * @var boolean
   */
  public $is_enter_qty;
  /**
   * Description and/or help text to display before this field.
   *
   * @var text
   */
  public $help_pre;
  /**
   * Description and/or help text to display after this field.
   *
   * @var text
   */
  public $help_post;
  /**
   * Order in which the fields should appear
   *
   * @var int
   */
  public $weight;
  /**
   * Should the price be displayed next to the label for each option?
   *
   * @var boolean
   */
  public $is_display_amounts;
  /**
   * number of options per line for checkbox and radio
   *
   * @var int unsigned
   */
  public $options_per_line;
  /**
   * Is this price field active
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Is this price field required (value must be > 1)
   *
   * @var boolean
   */
  public $is_required;
  /**
   * If non-zero, do not show this field before the date specified
   *
   * @var datetime
   */
  public $active_on;
  /**
   * If non-zero, do not show this field after the date specified
   *
   * @var datetime
   */
  public $expire_on;
  /**
   * Optional scripting attributes for field
   *
   * @var string
   */
  public $javascript;
  /**
   * Implicit FK to civicrm_option_group with name = 'visibility'
   *
   * @var int unsigned
   */
  public $visibility_id;
  /**
   * class constructor
   *
   * @return civicrm_price_field
   */
  function __construct() {
    $this->__table = 'civicrm_price_field';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'price_set_id', 'civicrm_price_set', 'id');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Price Field ID') ,
          'description' => 'Price Field',
          'required' => true,
        ) ,
        'price_set_id' => array(
          'name' => 'price_set_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Price Set') ,
          'description' => 'FK to civicrm_price_set',
          'required' => true,
          'FKClassName' => 'CRM_Price_DAO_PriceSet',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name') ,
          'description' => 'Variable name/programmatic handle for this field.',
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label') ,
          'description' => 'Text for form field label (also friendly name for administering this field).',
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'html_type' => array(
          'name' => 'html_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Html Type') ,
          'required' => true,
          'maxlength' => 12,
          'size' => CRM_Utils_Type::TWELVE,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Price_BAO_PriceField::htmlTypes',
          )
        ) ,
        'is_enter_qty' => array(
          'name' => 'is_enter_qty',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Price Field Quantity Required?') ,
          'description' => 'Enter a quantity for this field?',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'help_pre' => array(
          'name' => 'help_pre',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Price Field Pre Text') ,
          'description' => 'Description and/or help text to display before this field.',
          'rows' => 4,
          'cols' => 80,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'help_post' => array(
          'name' => 'help_post',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Price Field Post Text') ,
          'description' => 'Description and/or help text to display after this field.',
          'rows' => 4,
          'cols' => 80,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'description' => 'Order in which the fields should appear',
          'default' => '1',
          'html' => array(
            'type' => 'Select',
          ) ,
        ) ,
        'is_display_amounts' => array(
          'name' => 'is_display_amounts',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Price Field Show Amounts?') ,
          'description' => 'Should the price be displayed next to the label for each option?',
          'default' => '1',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'options_per_line' => array(
          'name' => 'options_per_line',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Price Field Options per Row') ,
          'description' => 'number of options per line for checkbox and radio',
          'default' => '1',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Price Field Is Active?') ,
          'description' => 'Is this price field active',
          'default' => '1',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'is_required' => array(
          'name' => 'is_required',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Price Field is Required?') ,
          'description' => 'Is this price field required (value must be > 1)',
          'default' => '1',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'active_on' => array(
          'name' => 'active_on',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Price Field Start Date') ,
          'description' => 'If non-zero, do not show this field before the date specified',
          'default' => 'NULL',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'expire_on' => array(
          'name' => 'expire_on',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Price Field End Date') ,
          'description' => 'If non-zero, do not show this field after the date specified',
          'default' => 'NULL',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'javascript' => array(
          'name' => 'javascript',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Price Field Javascript') ,
          'description' => 'Optional scripting attributes for field',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'visibility_id' => array(
          'name' => 'visibility_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Price Field Visibility') ,
          'description' => 'Implicit FK to civicrm_option_group with name = \'visibility\'',
          'default' => '1',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'visibility',
            'optionEditPath' => 'civicrm/admin/options/visibility',
          )
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys() {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'price_set_id' => 'price_set_id',
        'name' => 'name',
        'label' => 'label',
        'html_type' => 'html_type',
        'is_enter_qty' => 'is_enter_qty',
        'help_pre' => 'help_pre',
        'help_post' => 'help_post',
        'weight' => 'weight',
        'is_display_amounts' => 'is_display_amounts',
        'options_per_line' => 'options_per_line',
        'is_active' => 'is_active',
        'is_required' => 'is_required',
        'active_on' => 'active_on',
        'expire_on' => 'expire_on',
        'javascript' => 'javascript',
        'visibility_id' => 'visibility_id',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['price_field'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['price_field'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
