<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Contribute/ContributionPage.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:311103358834b23440ba20d8354c2438)
 */

/**
 * Database access object for the ContributionPage entity.
 */
class CRM_Contribute_DAO_ContributionPage extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.3';
  const COMPONENT = 'CiviContribute';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_contribution_page';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'title';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Contribution ID
   *
   * @var int
   */
  public $id;

  /**
   * Contribution Page title. For top of page display
   *
   * @var string
   */
  public $title;

  /**
   * Text and html allowed. Displayed below title.
   *
   * @var text
   */
  public $intro_text;

  /**
   * default financial type assigned to contributions submitted via this page, e.g. Contribution, Campaign Contribution
   *
   * @var int
   */
  public $financial_type_id;

  /**
   * Payment Processors configured for this contribution Page
   *
   * @var string
   */
  public $payment_processor;

  /**
   * if true - processing logic must reject transaction at confirmation stage if pay method != credit card
   *
   * @var bool
   */
  public $is_credit_card_only;

  /**
   * if true - allows real-time monetary transactions otherwise non-monetary transactions
   *
   * @var bool
   */
  public $is_monetary;

  /**
   * if true - allows recurring contributions, valid only for PayPal_Standard
   *
   * @var bool
   */
  public $is_recur;

  /**
   * if false, the confirm page in contribution pages gets skipped
   *
   * @var bool
   */
  public $is_confirm_enabled;

  /**
   * Supported recurring frequency units.
   *
   * @var string
   */
  public $recur_frequency_unit;

  /**
   * if true - supports recurring intervals
   *
   * @var bool
   */
  public $is_recur_interval;

  /**
   * if true - asks user for recurring installments
   *
   * @var bool
   */
  public $is_recur_installments;

  /**
   * if true - user is able to adjust payment start date
   *
   * @var bool
   */
  public $adjust_recur_start_date;

  /**
   * if true - allows the user to send payment directly to the org later
   *
   * @var bool
   */
  public $is_pay_later;

  /**
   * The text displayed to the user in the main form
   *
   * @var text
   */
  public $pay_later_text;

  /**
   * The receipt sent to the user instead of the normal receipt text
   *
   * @var text
   */
  public $pay_later_receipt;

  /**
   * is partial payment enabled for this online contribution page
   *
   * @var bool
   */
  public $is_partial_payment;

  /**
   * Initial amount label for partial payment
   *
   * @var string
   */
  public $initial_amount_label;

  /**
   * Initial amount help text for partial payment
   *
   * @var text
   */
  public $initial_amount_help_text;

  /**
   * Minimum initial amount for partial payment
   *
   * @var float
   */
  public $min_initial_amount;

  /**
   * if true, page will include an input text field where user can enter their own amount
   *
   * @var bool
   */
  public $is_allow_other_amount;

  /**
   * FK to civicrm_option_value.
   *
   * @var int
   */
  public $default_amount_id;

  /**
   * if other amounts allowed, user can configure minimum allowed.
   *
   * @var float
   */
  public $min_amount;

  /**
   * if other amounts allowed, user can configure maximum allowed.
   *
   * @var float
   */
  public $max_amount;

  /**
   * The target goal for this page, allows people to build a goal meter
   *
   * @var float
   */
  public $goal_amount;

  /**
   * Title for Thank-you page (header title tag, and display at the top of the page).
   *
   * @var string
   */
  public $thankyou_title;

  /**
   * text and html allowed. displayed above result on success page
   *
   * @var text
   */
  public $thankyou_text;

  /**
   * Text and html allowed. displayed at the bottom of the success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.
   *
   * @var text
   */
  public $thankyou_footer;

  /**
   * if true, receipt is automatically emailed to contact on success
   *
   * @var bool
   */
  public $is_email_receipt;

  /**
   * FROM email name used for receipts generated by contributions to this contribution page.
   *
   * @var string
   */
  public $receipt_from_name;

  /**
   * FROM email address used for receipts generated by contributions to this contribution page.
   *
   * @var string
   */
  public $receipt_from_email;

  /**
   * comma-separated list of email addresses to cc each time a receipt is sent
   *
   * @var string
   */
  public $cc_receipt;

  /**
   * comma-separated list of email addresses to bcc each time a receipt is sent
   *
   * @var string
   */
  public $bcc_receipt;

  /**
   * text to include above standard receipt info on receipt email. emails are text-only, so do not allow html for now
   *
   * @var text
   */
  public $receipt_text;

  /**
   * Is this property active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Text and html allowed. Displayed at the bottom of the first page of the contribution wizard.
   *
   * @var text
   */
  public $footer_text;

  /**
   * Is this property active?
   *
   * @var bool
   */
  public $amount_block_is_active;

  /**
   * Date and time that this page starts.
   *
   * @var datetime
   */
  public $start_date;

  /**
   * Date and time that this page ends. May be NULL if no defined end date/time
   *
   * @var datetime
   */
  public $end_date;

  /**
   * FK to civicrm_contact, who created this contribution page
   *
   * @var int
   */
  public $created_id;

  /**
   * Date and time that contribution page was created.
   *
   * @var datetime
   */
  public $created_date;

  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;

  /**
   * The campaign for which we are collecting contributions with this page.
   *
   * @var int
   */
  public $campaign_id;

  /**
   * Can people share the contribution page through social media?
   *
   * @var bool
   */
  public $is_share;

  /**
   * if true - billing block is required for online contribution page
   *
   * @var bool
   */
  public $is_billing_required;

  /**
   * Contribution Page Public title
   *
   * @var string
   */
  public $frontend_title;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_contribution_page';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Contribution Pages') : ts('Contribution Page');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'financial_type_id', 'civicrm_financial_type', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'created_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'campaign_id', 'civicrm_campaign', 'id');
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
          'title' => ts('Contribution Page ID'),
          'description' => ts('Contribution ID'),
          'required' => TRUE,
          'where' => 'civicrm_contribution_page.id',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.3',
        ],
        'title' => [
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contribution Page Title'),
          'description' => ts('Contribution Page title. For top of page display'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.title',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'add' => '1.3',
        ],
        'intro_text' => [
          'name' => 'intro_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Contribution Page Introduction Text'),
          'description' => ts('Text and html allowed. Displayed below title.'),
          'rows' => 6,
          'cols' => 50,
          'where' => 'civicrm_contribution_page.intro_text',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => [
            'type' => 'RichTextEditor',
          ],
          'add' => '1.3',
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type ID'),
          'description' => ts('default financial type assigned to contributions submitted via this page, e.g. Contribution, Campaign Contribution'),
          'where' => 'civicrm_contribution_page.financial_type_id',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'html' => [
            'type' => 'Select',
            'label' => ts("Financial Type"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '4.3',
        ],
        'payment_processor' => [
          'name' => 'payment_processor',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Payment Processor'),
          'description' => ts('Payment Processors configured for this contribution Page'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.payment_processor',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_TRIMMED,
          'html' => [
            'type' => 'Select',
            'label' => ts("Payment Processors"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_payment_processor',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '1.8',
        ],
        'is_credit_card_only' => [
          'name' => 'is_credit_card_only',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Credit Card Only?'),
          'description' => ts('if true - processing logic must reject transaction at confirmation stage if pay method != credit card'),
          'where' => 'civicrm_contribution_page.is_credit_card_only',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'is_monetary' => [
          'name' => 'is_monetary',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Monetary'),
          'description' => ts('if true - allows real-time monetary transactions otherwise non-monetary transactions'),
          'where' => 'civicrm_contribution_page.is_monetary',
          'default' => '1',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.6',
        ],
        'is_recur' => [
          'name' => 'is_recur',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Recurring'),
          'description' => ts('if true - allows recurring contributions, valid only for PayPal_Standard'),
          'where' => 'civicrm_contribution_page.is_recur',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.6',
        ],
        'is_confirm_enabled' => [
          'name' => 'is_confirm_enabled',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Confirmation Page?'),
          'description' => ts('if false, the confirm page in contribution pages gets skipped'),
          'where' => 'civicrm_contribution_page.is_confirm_enabled',
          'default' => '1',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '4.2',
        ],
        'recur_frequency_unit' => [
          'name' => 'recur_frequency_unit',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Recurring Frequency'),
          'description' => ts('Supported recurring frequency units.'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.recur_frequency_unit',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_TRIMMED,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'recur_frequency_units',
            'keyColumn' => 'name',
            'optionEditPath' => 'civicrm/admin/options/recur_frequency_units',
          ],
          'add' => '2.1',
        ],
        'is_recur_interval' => [
          'name' => 'is_recur_interval',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Support Recurring Intervals'),
          'description' => ts('if true - supports recurring intervals'),
          'where' => 'civicrm_contribution_page.is_recur_interval',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'is_recur_installments' => [
          'name' => 'is_recur_installments',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Recurring Installments?'),
          'description' => ts('if true - asks user for recurring installments'),
          'where' => 'civicrm_contribution_page.is_recur_installments',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'adjust_recur_start_date' => [
          'name' => 'adjust_recur_start_date',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Adjust Recurring Start Date'),
          'description' => ts('if true - user is able to adjust payment start date'),
          'where' => 'civicrm_contribution_page.adjust_recur_start_date',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '4.7',
        ],
        'is_pay_later' => [
          'name' => 'is_pay_later',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Pay Later'),
          'description' => ts('if true - allows the user to send payment directly to the org later'),
          'where' => 'civicrm_contribution_page.is_pay_later',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '2.0',
        ],
        'pay_later_text' => [
          'name' => 'pay_later_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Pay Later Text'),
          'description' => ts('The text displayed to the user in the main form'),
          'where' => 'civicrm_contribution_page.pay_later_text',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'add' => '2.0',
        ],
        'pay_later_receipt' => [
          'name' => 'pay_later_receipt',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Pay Later Receipt'),
          'description' => ts('The receipt sent to the user instead of the normal receipt text'),
          'where' => 'civicrm_contribution_page.pay_later_receipt',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'add' => '2.0',
        ],
        'is_partial_payment' => [
          'name' => 'is_partial_payment',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Allow Partial Payment'),
          'description' => ts('is partial payment enabled for this online contribution page'),
          'where' => 'civicrm_contribution_page.is_partial_payment',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'initial_amount_label' => [
          'name' => 'initial_amount_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Initial Amount Label'),
          'description' => ts('Initial amount label for partial payment'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.initial_amount_label',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => [
            'label' => ts("Initial Amount Label"),
          ],
          'add' => '4.3',
        ],
        'initial_amount_help_text' => [
          'name' => 'initial_amount_help_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Initial Amount Help Text'),
          'description' => ts('Initial amount help text for partial payment'),
          'where' => 'civicrm_contribution_page.initial_amount_help_text',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => [
            'label' => ts("Initial Amount Help Text"),
          ],
          'add' => '4.3',
        ],
        'min_initial_amount' => [
          'name' => 'min_initial_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Min Initial Amount'),
          'description' => ts('Minimum initial amount for partial payment'),
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_contribution_page.min_initial_amount',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'html' => [
            'label' => ts("Min. Initial Amount"),
          ],
          'add' => '4.3',
        ],
        'is_allow_other_amount' => [
          'name' => 'is_allow_other_amount',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Allow Other Amounts'),
          'description' => ts('if true, page will include an input text field where user can enter their own amount'),
          'where' => 'civicrm_contribution_page.is_allow_other_amount',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'default_amount_id' => [
          'name' => 'default_amount_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Default Amount'),
          'description' => ts('FK to civicrm_option_value.'),
          'where' => 'civicrm_contribution_page.default_amount_id',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.7',
        ],
        'min_amount' => [
          'name' => 'min_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Minimum Amount'),
          'description' => ts('if other amounts allowed, user can configure minimum allowed.'),
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_contribution_page.min_amount',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'max_amount' => [
          'name' => 'max_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Maximum Amount'),
          'description' => ts('if other amounts allowed, user can configure maximum allowed.'),
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_contribution_page.max_amount',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'goal_amount' => [
          'name' => 'goal_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Goal Amount'),
          'description' => ts('The target goal for this page, allows people to build a goal meter'),
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_contribution_page.goal_amount',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'html' => [
            'label' => ts("Goal Amount"),
          ],
          'add' => '1.5',
        ],
        'thankyou_title' => [
          'name' => 'thankyou_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Thank-you Title'),
          'description' => ts('Title for Thank-you page (header title tag, and display at the top of the page).'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.thankyou_title',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'add' => '1.3',
        ],
        'thankyou_text' => [
          'name' => 'thankyou_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Thank-you Text'),
          'description' => ts('text and html allowed. displayed above result on success page'),
          'rows' => 8,
          'cols' => 60,
          'where' => 'civicrm_contribution_page.thankyou_text',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => [
            'type' => 'RichTextEditor',
          ],
          'add' => '1.3',
        ],
        'thankyou_footer' => [
          'name' => 'thankyou_footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Thank-you Footer'),
          'description' => ts('Text and html allowed. displayed at the bottom of the success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.'),
          'rows' => 8,
          'cols' => 60,
          'where' => 'civicrm_contribution_page.thankyou_footer',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => [
            'type' => 'RichTextEditor',
          ],
          'add' => '1.3',
        ],
        'is_email_receipt' => [
          'name' => 'is_email_receipt',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Send email Receipt'),
          'description' => ts('if true, receipt is automatically emailed to contact on success'),
          'where' => 'civicrm_contribution_page.is_email_receipt',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'receipt_from_name' => [
          'name' => 'receipt_from_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt From'),
          'description' => ts('FROM email name used for receipts generated by contributions to this contribution page.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.receipt_from_name',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'add' => '1.3',
        ],
        'receipt_from_email' => [
          'name' => 'receipt_from_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt From email'),
          'description' => ts('FROM email address used for receipts generated by contributions to this contribution page.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.receipt_from_email',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'cc_receipt' => [
          'name' => 'cc_receipt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt cc'),
          'description' => ts('comma-separated list of email addresses to cc each time a receipt is sent'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.cc_receipt',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'bcc_receipt' => [
          'name' => 'bcc_receipt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt bcc'),
          'description' => ts('comma-separated list of email addresses to bcc each time a receipt is sent'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.bcc_receipt',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'receipt_text' => [
          'name' => 'receipt_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Receipt Text'),
          'description' => ts('text to include above standard receipt info on receipt email. emails are text-only, so do not allow html for now'),
          'rows' => 6,
          'cols' => 50,
          'where' => 'civicrm_contribution_page.receipt_text',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.3',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Page Active?'),
          'description' => ts('Is this property active?'),
          'where' => 'civicrm_contribution_page.is_active',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.3',
        ],
        'footer_text' => [
          'name' => 'footer_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Footer Text'),
          'description' => ts('Text and html allowed. Displayed at the bottom of the first page of the contribution wizard.'),
          'rows' => 6,
          'cols' => 50,
          'where' => 'civicrm_contribution_page.footer_text',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => [
            'type' => 'RichTextEditor',
          ],
          'add' => '1.4',
        ],
        'amount_block_is_active' => [
          'name' => 'amount_block_is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Amount Block Active?'),
          'description' => ts('Is this property active?'),
          'where' => 'civicrm_contribution_page.amount_block_is_active',
          'default' => '1',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'start_date' => [
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Contribution Page Start Date'),
          'description' => ts('Date and time that this page starts.'),
          'where' => 'civicrm_contribution_page.start_date',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'end_date' => [
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Contribution Page End Date'),
          'description' => ts('Date and time that this page ends. May be NULL if no defined end date/time'),
          'where' => 'civicrm_contribution_page.end_date',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'created_id' => [
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Created By Contact ID'),
          'description' => ts('FK to civicrm_contact, who created this contribution page'),
          'where' => 'civicrm_contribution_page.created_id',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'label' => ts("Created By"),
          ],
          'add' => '3.0',
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Contribution Page Created Date'),
          'description' => ts('Date and time that contribution page was created.'),
          'where' => 'civicrm_contribution_page.created_date',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '3.0',
        ],
        'currency' => [
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contribution Page Currency'),
          'description' => ts('3 character string, value from config setting or input via user.'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'where' => 'civicrm_contribution_page.currency',
          'headerPattern' => '/cur(rency)?/i',
          'dataPattern' => '/^[A-Z]{3}$/i',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
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
          'add' => '3.3',
        ],
        'campaign_id' => [
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign ID'),
          'description' => ts('The campaign for which we are collecting contributions with this page.'),
          'where' => 'civicrm_contribution_page.campaign_id',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'html' => [
            'label' => ts("Campaign"),
          ],
          'add' => '3.4',
        ],
        'is_share' => [
          'name' => 'is_share',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Contribution Page Shared?'),
          'description' => ts('Can people share the contribution page through social media?'),
          'where' => 'civicrm_contribution_page.is_share',
          'default' => '1',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '4.1',
        ],
        'is_billing_required' => [
          'name' => 'is_billing_required',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is billing block required'),
          'description' => ts('if true - billing block is required for online contribution page'),
          'where' => 'civicrm_contribution_page.is_billing_required',
          'default' => '0',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'add' => '4.6',
        ],
        'contribution_page_frontend_title' => [
          'name' => 'frontend_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Public Title'),
          'description' => ts('Contribution Page Public title'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_page.frontend_title',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.20',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contribution_page', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contribution_page', $prefix, []);
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
