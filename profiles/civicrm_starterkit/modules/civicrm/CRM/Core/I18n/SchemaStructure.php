<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from schema_structure.tpl
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
class CRM_Core_I18n_SchemaStructure {

  /**
   * Get translatable columns.
   *
   * @return array
   *   A table-indexed array of translatable columns.
   */
  public static function &columns() {
    static $result = NULL;
    if (!$result) {
      $result = [
        'civicrm_location_type' => [
          'display_name' => "varchar(64) COMMENT 'Location Type Display Name.'",
        ],
        'civicrm_option_group' => [
          'title' => "varchar(255) COMMENT 'Option Group title.'",
          'description' => "varchar(255) COMMENT 'Option group description.'",
        ],
        'civicrm_relationship_type' => [
          'label_a_b' => "varchar(64) COMMENT 'label for relationship of contact_a to contact_b.'",
          'label_b_a' => "varchar(64) COMMENT 'Optional label for relationship of contact_b to contact_a.'",
          'description' => "varchar(255) COMMENT 'Optional verbose description of the relationship type.'",
        ],
        'civicrm_contact_type' => [
          'label' => "varchar(64) COMMENT 'localized Name of Contact Type.'",
          'description' => "text COMMENT 'localized Optional verbose description of the type.'",
        ],
        'civicrm_batch' => [
          'title' => "varchar(255) COMMENT 'Friendly Name.'",
          'description' => "text COMMENT 'Description of this batch set.'",
        ],
        'civicrm_premiums' => [
          'premiums_intro_title' => "varchar(255) COMMENT 'Title for Premiums section.'",
          'premiums_intro_text' => "text COMMENT 'Displayed in <div> at top of Premiums section of page. Text and HTML allowed.'",
          'premiums_nothankyou_label' => "varchar(255) COMMENT 'Label displayed for No Thank-you option in premiums block (e.g. No thank you)'",
        ],
        'civicrm_membership_status' => [
          'label' => "varchar(128) COMMENT 'Label for Membership Status'",
        ],
        'civicrm_survey' => [
          'title' => "varchar(255) NOT NULL COMMENT 'Title of the Survey.'",
          'instructions' => "text COMMENT 'Script instructions for volunteers to use for the survey.'",
          'thankyou_title' => "varchar(255) COMMENT 'Title for Thank-you page (header title tag, and display at the top of the page).'",
          'thankyou_text' => "text COMMENT 'text and html allowed. displayed above result on success page'",
        ],
        'civicrm_participant_status_type' => [
          'label' => "varchar(255) COMMENT 'localized label for display of this status type'",
        ],
        'civicrm_case_type' => [
          'title' => "varchar(64) NOT NULL COMMENT 'Natural language name for Case Type'",
          'description' => "varchar(255) COMMENT 'Description of the Case Type'",
        ],
        'civicrm_tell_friend' => [
          'title' => "varchar(255)",
          'intro' => "text COMMENT 'Introductory message to contributor or participant displayed on the Tell a Friend form.'",
          'suggested_message' => "text COMMENT 'Suggested message to friends, provided as default on the Tell A Friend form.'",
          'thankyou_title' => "varchar(255) COMMENT 'Text for Tell a Friend thank you page header and HTML title.'",
          'thankyou_text' => "text COMMENT 'Thank you message displayed on success page.'",
        ],
        'civicrm_custom_group' => [
          'title' => "varchar(64) NOT NULL COMMENT 'Friendly Name.'",
          'help_pre' => "text COMMENT 'Description and/or help text to display before fields in form.'",
          'help_post' => "text COMMENT 'Description and/or help text to display after fields in form.'",
        ],
        'civicrm_custom_field' => [
          'label' => "varchar(255) NOT NULL COMMENT 'Text for form field label (also friendly name for administering this custom property).'",
          'help_pre' => "text COMMENT 'Description and/or help text to display before this field.'",
          'help_post' => "text COMMENT 'Description and/or help text to display after this field.'",
        ],
        'civicrm_option_value' => [
          'label' => "varchar(512) NOT NULL COMMENT 'Option string as displayed to users - e.g. the label in an HTML OPTION tag.'",
          'description' => "text COMMENT 'Optional description.'",
        ],
        'civicrm_group' => [
          'title' => "varchar(255) COMMENT 'Name of Group.'",
          'frontend_title' => "varchar(255) DEFAULT NULL COMMENT 'Alternative public title for this Group.'",
          'frontend_description' => "text DEFAULT NULL COMMENT 'Alternative public description of the group.'",
        ],
        'civicrm_contribution_page' => [
          'title' => "varchar(255) COMMENT 'Contribution Page title. For top of page display'",
          'intro_text' => "text COMMENT 'Text and html allowed. Displayed below title.'",
          'pay_later_text' => "text COMMENT 'The text displayed to the user in the main form'",
          'pay_later_receipt' => "text COMMENT 'The receipt sent to the user instead of the normal receipt text'",
          'initial_amount_label' => "varchar(255) COMMENT 'Initial amount label for partial payment'",
          'initial_amount_help_text' => "text COMMENT 'Initial amount help text for partial payment'",
          'thankyou_title' => "varchar(255) COMMENT 'Title for Thank-you page (header title tag, and display at the top of the page).'",
          'thankyou_text' => "text COMMENT 'text and html allowed. displayed above result on success page'",
          'thankyou_footer' => "text COMMENT 'Text and html allowed. displayed at the bottom of the success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.'",
          'receipt_from_name' => "varchar(255) COMMENT 'FROM email name used for receipts generated by contributions to this contribution page.'",
          'receipt_text' => "text COMMENT 'text to include above standard receipt info on receipt email. emails are text-only, so do not allow html for now'",
          'footer_text' => "text COMMENT 'Text and html allowed. Displayed at the bottom of the first page of the contribution wizard.'",
          'frontend_title' => "varchar(255) DEFAULT NULL COMMENT 'Contribution Page Public title'",
        ],
        'civicrm_product' => [
          'name' => "varchar(255) NOT NULL COMMENT 'Required product/premium name'",
          'description' => "text COMMENT 'Optional description of the product/premium.'",
          'options' => "text COMMENT 'Store comma-delimited list of color, size, etc. options for the product.'",
        ],
        'civicrm_payment_processor' => [
          'title' => "varchar(127) COMMENT 'Payment Processor Descriptive Name.'",
        ],
        'civicrm_membership_type' => [
          'name' => "varchar(128) NOT NULL COMMENT 'Name of Membership Type'",
          'description' => "varchar(255) COMMENT 'Description of Membership Type'",
        ],
        'civicrm_membership_block' => [
          'new_title' => "varchar(255) COMMENT 'Title to display at top of block'",
          'new_text' => "text COMMENT 'Text to display below title'",
          'renewal_title' => "varchar(255) COMMENT 'Title for renewal'",
          'renewal_text' => "text COMMENT 'Text to display for member renewal'",
        ],
        'civicrm_price_set' => [
          'title' => "varchar(255) NOT NULL COMMENT 'Displayed title for the Price Set.'",
          'help_pre' => "text COMMENT 'Description and/or help text to display before fields in form.'",
          'help_post' => "text COMMENT 'Description and/or help text to display after fields in form.'",
        ],
        'civicrm_dashboard' => [
          'label' => "varchar(255) COMMENT 'dashlet title'",
        ],
        'civicrm_uf_group' => [
          'title' => "varchar(64) NOT NULL COMMENT 'Form title.'",
          'frontend_title' => "varchar(64) COMMENT 'Profile Form Public title'",
          'help_pre' => "text COMMENT 'Description and/or help text to display before fields in form.'",
          'help_post' => "text COMMENT 'Description and/or help text to display after fields in form.'",
          'cancel_button_text' => "varchar(64) DEFAULT NULL COMMENT 'Custom Text to display on the Cancel button when used in create or edit mode'",
          'submit_button_text' => "varchar(64) DEFAULT NULL COMMENT 'Custom Text to display on the submit button on profile edit/create screens'",
        ],
        'civicrm_uf_field' => [
          'help_post' => "text COMMENT 'Description and/or help text to display after this field.'",
          'help_pre' => "text COMMENT 'Description and/or help text to display before this field.'",
          'label' => "varchar(255) NOT NULL COMMENT 'To save label for fields.'",
        ],
        'civicrm_price_field' => [
          'label' => "varchar(255) NOT NULL COMMENT 'Text for form field label (also friendly name for administering this field).'",
          'help_pre' => "text COMMENT 'Description and/or help text to display before this field.'",
          'help_post' => "text COMMENT 'Description and/or help text to display after this field.'",
        ],
        'civicrm_price_field_value' => [
          'label' => "varchar(255) DEFAULT NULL COMMENT 'Price field option label'",
          'description' => "text DEFAULT NULL COMMENT 'Price field option description.'",
          'help_pre' => "text DEFAULT NULL COMMENT 'Price field option pre help text.'",
          'help_post' => "text DEFAULT NULL COMMENT 'Price field option post field help.'",
        ],
        'civicrm_pcp_block' => [
          'link_text' => "varchar(255) DEFAULT NULL COMMENT 'Link text for PCP.'",
        ],
        'civicrm_event' => [
          'title' => "varchar(255) COMMENT 'Event Title (e.g. Fall Fundraiser Dinner)'",
          'summary' => "text COMMENT 'Brief summary of event. Text and html allowed. Displayed on Event Registration form and can be used on other CMS pages which need an event summary.'",
          'description' => "text COMMENT 'Full description of event. Text and html allowed. Displayed on built-in Event Information screens.'",
          'registration_link_text' => "varchar(255) COMMENT 'Text for link to Event Registration form which is displayed on Event Information screen when is_online_registration is true.'",
          'event_full_text' => "text COMMENT 'Message to display on Event Information page and INSTEAD OF Event Registration form if maximum participants are signed up. Can include email address/info about getting on a waiting list, etc. Text and html allowed.'",
          'fee_label' => "varchar(255)",
          'intro_text' => "text COMMENT 'Introductory message for Event Registration page. Text and html allowed. Displayed at the top of Event Registration form.'",
          'footer_text' => "text COMMENT 'Footer message for Event Registration page. Text and html allowed. Displayed at the bottom of Event Registration form.'",
          'confirm_title' => "varchar(255) DEFAULT NULL COMMENT 'Title for Confirmation page.'",
          'confirm_text' => "text COMMENT 'Introductory message for Event Registration page. Text and html allowed. Displayed at the top of Event Registration form.'",
          'confirm_footer_text' => "text COMMENT 'Footer message for Event Registration page. Text and html allowed. Displayed at the bottom of Event Registration form.'",
          'confirm_email_text' => "text COMMENT 'text to include above standard event info on confirmation email. emails are text-only, so do not allow html for now'",
          'confirm_from_name' => "varchar(255) COMMENT 'FROM email name used for confirmation emails.'",
          'thankyou_title' => "varchar(255) DEFAULT NULL COMMENT 'Title for ThankYou page.'",
          'thankyou_text' => "text COMMENT 'ThankYou Text.'",
          'thankyou_footer_text' => "text COMMENT 'Footer message.'",
          'pay_later_text' => "text COMMENT 'The text displayed to the user in the main form'",
          'pay_later_receipt' => "text COMMENT 'The receipt sent to the user instead of the normal receipt text'",
          'initial_amount_label' => "varchar(255) COMMENT 'Initial amount label for partial payment'",
          'initial_amount_help_text' => "text COMMENT 'Initial amount help text for partial payment'",
          'waitlist_text' => "text COMMENT 'Text to display when the event is full, but participants can signup for a waitlist.'",
          'approval_req_text' => "text COMMENT 'Text to display when the approval is required to complete registration for an event.'",
          'template_title' => "varchar(255) COMMENT 'Event Template Title'",
        ],
      ];
    }
    return $result;
  }

  /**
   * Get a table indexed array of the indices for translatable fields.
   *
   * @return array
   *   Indices for translatable fields.
   */
  public static function &indices() {
    static $result = NULL;
    if (!$result) {
      $result = [
        'civicrm_custom_group' => [
          'UI_title_extends' => [
            'name' => 'UI_title_extends',
            'field' => [
              'title',
              'extends',
            ],
            'unique' => 1,
          ],
        ],
        'civicrm_custom_field' => [
          'UI_label_custom_group_id' => [
            'name' => 'UI_label_custom_group_id',
            'field' => [
              'label',
              'custom_group_id',
            ],
            'unique' => 1,
          ],
        ],
        'civicrm_group' => [
          'UI_title' => [
            'name' => 'UI_title',
            'field' => [
              'title',
            ],
            'unique' => 1,
          ],
        ],
      ];
    }
    return $result;
  }

  /**
   * Get tables with translatable fields.
   *
   * @return array
   *   Array of names of tables with fields that can be translated.
   */
  public static function &tables() {
    static $result = NULL;
    if (!$result) {
      $result = array_keys(self::columns());
    }
    return $result;
  }

  /**
   * Get a list of widgets for editing translatable fields.
   *
   * @return array
   *   Array of the widgets for editing translatable fields.
   */
  public static function &widgets() {
    static $result = NULL;
    if (!$result) {
      $result = [
        'civicrm_location_type' => [
          'display_name' => [
            'type' => "Text",
          ],
        ],
        'civicrm_option_group' => [
          'title' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "Text",
          ],
        ],
        'civicrm_relationship_type' => [
          'label_a_b' => [
            'type' => "Text",
          ],
          'label_b_a' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "Text",
          ],
        ],
        'civicrm_contact_type' => [
          'label' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
        ],
        'civicrm_batch' => [
          'title' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
        ],
        'civicrm_premiums' => [
          'premiums_intro_title' => [
            'type' => "Text",
          ],
          'premiums_intro_text' => [
            'type' => "Text",
          ],
          'premiums_nothankyou_label' => [
            'type' => "Text",
          ],
        ],
        'civicrm_membership_status' => [
          'label' => [
            'type' => "Text",
          ],
        ],
        'civicrm_survey' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'instructions' => [
            'type' => "TextArea",
            'rows' => "20",
            'cols' => "80",
          ],
          'thankyou_title' => [
            'type' => "Text",
          ],
          'thankyou_text' => [
            'type' => "TextArea",
            'rows' => "8",
            'cols' => "60",
          ],
        ],
        'civicrm_participant_status_type' => [
          'label' => [
            'type' => "Text",
          ],
        ],
        'civicrm_case_type' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'description' => [
            'type' => "Text",
          ],
        ],
        'civicrm_tell_friend' => [
          'title' => [
            'type' => "Text",
          ],
          'intro' => [
            'type' => "Text",
          ],
          'suggested_message' => [
            'type' => "Text",
          ],
          'thankyou_title' => [
            'type' => "Text",
          ],
          'thankyou_text' => [
            'type' => "Text",
          ],
        ],
        'civicrm_custom_group' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
        ],
        'civicrm_custom_field' => [
          'label' => [
            'type' => "Text",
            'required' => "true",
          ],
          'help_pre' => [
            'type' => "Text",
          ],
          'help_post' => [
            'type' => "Text",
          ],
        ],
        'civicrm_option_value' => [
          'label' => [
            'type' => "Text",
            'required' => "true",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "8",
            'cols' => "60",
          ],
        ],
        'civicrm_group' => [
          'title' => [
            'type' => "Text",
          ],
          'frontend_title' => [
            'type' => "Text",
          ],
          'frontend_description' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
        ],
        'civicrm_contribution_page' => [
          'title' => [
            'type' => "Text",
          ],
          'intro_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'pay_later_text' => [
            'type' => "Text",
          ],
          'pay_later_receipt' => [
            'type' => "Text",
          ],
          'initial_amount_label' => [
            'type' => "Text",
          ],
          'initial_amount_help_text' => [
            'type' => "Text",
          ],
          'thankyou_title' => [
            'type' => "Text",
          ],
          'thankyou_text' => [
            'type' => "RichTextEditor",
            'rows' => "8",
            'cols' => "60",
          ],
          'thankyou_footer' => [
            'type' => "RichTextEditor",
            'rows' => "8",
            'cols' => "60",
          ],
          'receipt_from_name' => [
            'type' => "Text",
          ],
          'receipt_text' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
          ],
          'footer_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'frontend_title' => [
            'type' => "Text",
          ],
        ],
        'civicrm_product' => [
          'name' => [
            'type' => "Text",
            'required' => "true",
          ],
          'description' => [
            'type' => "Text",
          ],
          'options' => [
            'type' => "Text",
          ],
        ],
        'civicrm_payment_processor' => [
          'title' => [
            'type' => "Text",
          ],
        ],
        'civicrm_membership_type' => [
          'name' => [
            'type' => "Text",
            'label' => "Name",
            'required' => "true",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
            'label' => "Description",
          ],
        ],
        'civicrm_membership_block' => [
          'new_title' => [
            'type' => "Text",
          ],
          'new_text' => [
            'type' => "Text",
          ],
          'renewal_title' => [
            'type' => "Text",
          ],
          'renewal_text' => [
            'type' => "Text",
          ],
        ],
        'civicrm_price_set' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
        ],
        'civicrm_dashboard' => [
          'label' => [
            'type' => "Text",
          ],
        ],
        'civicrm_uf_group' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'frontend_title' => [
            'type' => "Text",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'cancel_button_text' => [
            'type' => "Text",
          ],
          'submit_button_text' => [
            'type' => "Text",
          ],
        ],
        'civicrm_uf_field' => [
          'help_post' => [
            'type' => "Text",
          ],
          'help_pre' => [
            'type' => "Text",
          ],
          'label' => [
            'type' => "Text",
            'required' => "true",
          ],
        ],
        'civicrm_price_field' => [
          'label' => [
            'type' => "Text",
            'required' => "true",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
        ],
        'civicrm_price_field_value' => [
          'label' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
        ],
        'civicrm_pcp_block' => [
          'link_text' => [
            'type' => "Text",
          ],
        ],
        'civicrm_event' => [
          'title' => [
            'type' => "Text",
          ],
          'summary' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "60",
          ],
          'description' => [
            'type' => "RichTextEditor",
            'rows' => "8",
            'cols' => "60",
          ],
          'registration_link_text' => [
            'type' => "Text",
          ],
          'event_full_text' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "60",
          ],
          'fee_label' => [
            'type' => "Text",
          ],
          'intro_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'footer_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'confirm_title' => [
            'type' => "Text",
          ],
          'confirm_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'confirm_footer_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'confirm_email_text' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "50",
          ],
          'confirm_from_name' => [
            'type' => "Text",
          ],
          'thankyou_title' => [
            'type' => "Text",
          ],
          'thankyou_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'thankyou_footer_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'pay_later_text' => [
            'type' => "RichTextEditor",
          ],
          'pay_later_receipt' => [
            'type' => "Text",
          ],
          'initial_amount_label' => [
            'type' => "Text",
          ],
          'initial_amount_help_text' => [
            'type' => "Text",
          ],
          'waitlist_text' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "60",
          ],
          'approval_req_text' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "60",
          ],
          'template_title' => [
            'type' => "Text",
          ],
        ],
      ];
    }
    return $result;
  }

}
