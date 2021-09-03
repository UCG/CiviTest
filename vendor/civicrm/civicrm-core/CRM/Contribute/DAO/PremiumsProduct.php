<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Contribute/PremiumsProduct.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:41745812fcc812419159f6a93b52a715)
 */

/**
 * Database access object for the PremiumsProduct entity.
 */
class CRM_Contribute_DAO_PremiumsProduct extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.4';
  const COMPONENT = 'CiviContribute';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_premiums_product';

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
   * Foreign key to premiums settings record.
   *
   * @var int
   */
  public $premiums_id;

  /**
   * Foreign key to each product object.
   *
   * @var int
   */
  public $product_id;

  /**
   * @var int
   */
  public $weight;

  /**
   * FK to Financial Type.
   *
   * @var int
   */
  public $financial_type_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_premiums_product';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Product Premiums') : ts('Product Premium');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'premiums_id', 'civicrm_premiums', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'product_id', 'civicrm_product', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'financial_type_id', 'civicrm_financial_type', 'id');
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
          'title' => ts('Premium Product ID'),
          'description' => ts('Contribution ID'),
          'required' => TRUE,
          'where' => 'civicrm_premiums_product.id',
          'table_name' => 'civicrm_premiums_product',
          'entity' => 'PremiumsProduct',
          'bao' => 'CRM_Contribute_DAO_PremiumsProduct',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.4',
        ],
        'premiums_id' => [
          'name' => 'premiums_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Premium ID'),
          'description' => ts('Foreign key to premiums settings record.'),
          'required' => TRUE,
          'where' => 'civicrm_premiums_product.premiums_id',
          'table_name' => 'civicrm_premiums_product',
          'entity' => 'PremiumsProduct',
          'bao' => 'CRM_Contribute_DAO_PremiumsProduct',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_Premium',
          'html' => [
            'label' => ts("Premium"),
          ],
          'add' => '1.4',
        ],
        'product_id' => [
          'name' => 'product_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Product ID'),
          'description' => ts('Foreign key to each product object.'),
          'required' => TRUE,
          'where' => 'civicrm_premiums_product.product_id',
          'table_name' => 'civicrm_premiums_product',
          'entity' => 'PremiumsProduct',
          'bao' => 'CRM_Contribute_DAO_PremiumsProduct',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_Product',
          'html' => [
            'label' => ts("Product"),
          ],
          'add' => '1.4',
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'required' => TRUE,
          'where' => 'civicrm_premiums_product.weight',
          'table_name' => 'civicrm_premiums_product',
          'entity' => 'PremiumsProduct',
          'bao' => 'CRM_Contribute_DAO_PremiumsProduct',
          'localizable' => 0,
          'add' => '2.0',
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type ID'),
          'description' => ts('FK to Financial Type.'),
          'where' => 'civicrm_premiums_product.financial_type_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_premiums_product',
          'entity' => 'PremiumsProduct',
          'bao' => 'CRM_Contribute_DAO_PremiumsProduct',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'html' => [
            'label' => ts("Financial Type"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'premiums_product', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'premiums_product', $prefix, []);
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