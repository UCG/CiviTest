<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/StatusPreference.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:97f98c6f510e57260d2a5e3647a00d4f)
 */

/**
 * Database access object for the StatusPreference entity.
 */
class CRM_Core_DAO_StatusPreference extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '4.7';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_status_pref';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Unique Status Preference ID
   *
   * @var int
   */
  public $id;

  /**
   * Which Domain is this Status Preference for
   *
   * @var int
   */
  public $domain_id;

  /**
   * Name of the status check this preference references.
   *
   * @var string
   */
  public $name;

  /**
   * expires ignore_severity.  NULL never hushes.
   *
   * @var date
   */
  public $hush_until;

  /**
   * Hush messages up to and including this severity.
   *
   * @var int
   */
  public $ignore_severity;

  /**
   * These settings are per-check, and can't be compared across checks.
   *
   * @var string
   */
  public $prefs;

  /**
   * These values are per-check, and can't be compared across checks.
   *
   * @var string
   */
  public $check_info;

  /**
   * Is this status check active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_status_pref';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Status Preferences') : ts('Status Preference');
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
          'title' => ts('Status Preference ID'),
          'description' => ts('Unique Status Preference ID'),
          'required' => TRUE,
          'where' => 'civicrm_status_pref.id',
          'table_name' => 'civicrm_status_pref',
          'entity' => 'StatusPreference',
          'bao' => 'CRM_Core_BAO_StatusPreference',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '4.7',
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Domain ID'),
          'description' => ts('Which Domain is this Status Preference for'),
          'required' => TRUE,
          'where' => 'civicrm_status_pref.domain_id',
          'table_name' => 'civicrm_status_pref',
          'entity' => 'StatusPreference',
          'bao' => 'CRM_Core_BAO_StatusPreference',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'html' => [
            'label' => ts("Domain"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '4.7',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status Check Name'),
          'description' => ts('Name of the status check this preference references.'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_status_pref.name',
          'export' => TRUE,
          'table_name' => 'civicrm_status_pref',
          'entity' => 'StatusPreference',
          'bao' => 'CRM_Core_BAO_StatusPreference',
          'localizable' => 0,
          'add' => '4.7',
        ],
        'hush_until' => [
          'name' => 'hush_until',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Snooze Status Notifications Until'),
          'description' => ts('expires ignore_severity.  NULL never hushes.'),
          'import' => TRUE,
          'where' => 'civicrm_status_pref.hush_until',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_status_pref',
          'entity' => 'StatusPreference',
          'bao' => 'CRM_Core_BAO_StatusPreference',
          'localizable' => 0,
          'add' => '4.7',
        ],
        'ignore_severity' => [
          'name' => 'ignore_severity',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Ignore Severity'),
          'description' => ts('Hush messages up to and including this severity.'),
          'import' => TRUE,
          'where' => 'civicrm_status_pref.ignore_severity',
          'export' => TRUE,
          'default' => '1',
          'table_name' => 'civicrm_status_pref',
          'entity' => 'StatusPreference',
          'bao' => 'CRM_Core_BAO_StatusPreference',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_Utils_Check::getSeverityList',
          ],
          'add' => '4.7',
        ],
        'prefs' => [
          'name' => 'prefs',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status Preferences'),
          'description' => ts('These settings are per-check, and can\'t be compared across checks.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_status_pref.prefs',
          'table_name' => 'civicrm_status_pref',
          'entity' => 'StatusPreference',
          'bao' => 'CRM_Core_BAO_StatusPreference',
          'localizable' => 0,
          'add' => '4.7',
        ],
        'check_info' => [
          'name' => 'check_info',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Check Info'),
          'description' => ts('These values are per-check, and can\'t be compared across checks.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_status_pref.check_info',
          'table_name' => 'civicrm_status_pref',
          'entity' => 'StatusPreference',
          'bao' => 'CRM_Core_BAO_StatusPreference',
          'localizable' => 0,
          'add' => '4.7',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Check Is Active'),
          'description' => ts('Is this status check active?'),
          'where' => 'civicrm_status_pref.is_active',
          'default' => '1',
          'table_name' => 'civicrm_status_pref',
          'entity' => 'StatusPreference',
          'bao' => 'CRM_Core_BAO_StatusPreference',
          'localizable' => 0,
          'add' => '5.19',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'status_pref', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'status_pref', $prefix, []);
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
      'UI_status_pref_name' => [
        'name' => 'UI_status_pref_name',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_status_pref::0::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
