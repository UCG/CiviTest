<?php

namespace Civi\Api4\Action\Afform;

use Civi\Api4\CustomField;
use Civi\Api4\CustomGroup;
use CRM_Afform_ExtensionUtil as E;

/**
 * @inheritDoc
 * @package Civi\Api4\Action\Afform
 */
class Get extends \Civi\Api4\Generic\BasicGetAction {

  use \Civi\Api4\Utils\AfformFormatTrait;

  public function getRecords() {
    /** @var \CRM_Afform_AfformScanner $scanner */
    $scanner = \Civi::service('afform_scanner');
    $getComputed = $this->_isFieldSelected('has_local') || $this->_isFieldSelected('has_base');
    $getLayout = $this->_isFieldSelected('layout');

    // This helps optimize lookups by file/module/directive name
    $toGet = array_filter([
      'name' => $this->_itemsToGet('name'),
      'module_name' => $this->_itemsToGet('module_name'),
      'directive_name' => $this->_itemsToGet('directive_name'),
    ]);

    $names = $toGet['name'] ?? array_keys($scanner->findFilePaths());

    $values = $this->getAutoGenerated($names, $toGet, $getLayout);

    if ($this->checkPermissions) {
      $names = array_filter($names, [$this, 'checkPermission']);
    }

    foreach ($names as $name) {
      $info = [
        'name' => $name,
        'module_name' => _afform_angular_module_name($name, 'camel'),
        'directive_name' => _afform_angular_module_name($name, 'dash'),
      ];
      foreach ($toGet as $key => $get) {
        if (!in_array($info[$key], $get)) {
          continue;
        }
      }
      $record = $scanner->getMeta($name);
      if (!$record && !isset($values[$name])) {
        continue;
      }
      $values[$name] = array_merge($values[$name] ?? [], $record ?? [], $info);
      if ($getComputed) {
        $scanner->addComputedFields($values[$name]);
      }
      if ($getLayout) {
        // Autogenerated layouts will already be in values but can be overridden; scanner takes priority
        $values[$name]['layout'] = $scanner->getLayout($name) ?? $values[$name]['layout'] ?? '';
      }
    }

    if ($getLayout && $this->layoutFormat !== 'html') {
      foreach ($values as $name => $record) {
        $values[$name]['layout'] = $this->convertHtmlToOutput($record['layout']);
      }
    }

    return $values;
  }

  /**
   * Assert that a form is authorized.
   *
   * @return bool
   */
  protected function checkPermission($name) {
    return \CRM_Core_Permission::check("@afform:$name");
  }

  /**
   * Generates afform blocks from custom field sets.
   *
   * @param $names
   * @param $toGet
   * @param $getLayout
   * @return array
   * @throws \API_Exception
   */
  protected function getAutoGenerated(&$names, $toGet, $getLayout) {
    $values = $groupNames = [];
    foreach ($toGet['name'] ?? [] as $name) {
      if (strpos($name, 'afjoinCustom_') === 0 && strlen($name) > 13) {
        $groupNames[] = substr($name, 13);
      }
    }
    // Early return if this api call is fetching afforms by name and those names are not custom-related
    if ((!empty($toGet['name']) && !$groupNames)
      || (!empty($toGet['module_name']) && !strstr(implode(' ', $toGet['module_name']), 'afjoinCustom'))
      || (!empty($toGet['directive_name']) && !strstr(implode(' ', $toGet['directive_name']), 'afjoin-custom'))
    ) {
      return $values;
    }
    $customApi = CustomGroup::get()
      ->setCheckPermissions(FALSE)
      ->addSelect('name', 'title', 'help_pre', 'help_post', 'extends', 'max_multiple')
      ->addWhere('is_multiple', '=', 1)
      ->addWhere('is_active', '=', 1);
    if ($groupNames) {
      $customApi->addWhere('name', 'IN', $groupNames);
    }
    if ($getLayout) {
      $customApi->addSelect('help_pre', 'help_post');
      $customApi->addChain('fields', CustomField::get(FALSE)
        ->addSelect('name')
        ->addWhere('custom_group_id', '=', '$id')
        ->addWhere('is_active', '=', 1)
        ->addOrderBy('weight', 'ASC')
      );
    }
    foreach ($customApi->execute() as $custom) {
      $name = 'afjoinCustom_' . $custom['name'];
      if (!in_array($name, $names)) {
        $names[] = $name;
      }
      $item = [
        'name' => $name,
        'type' => 'block',
        'requires' => [],
        'title' => E::ts('%1 block (default)', [1 => $custom['title']]),
        'description' => '',
        'is_dashlet' => FALSE,
        'is_public' => FALSE,
        'is_token' => FALSE,
        'permission' => 'access CiviCRM',
        'join' => 'Custom_' . $custom['name'],
        'block' => $custom['extends'],
        'repeat' => $custom['max_multiple'] ?: TRUE,
        'has_base' => TRUE,
      ];
      if ($getLayout) {
        $item['layout'] = ($custom['help_pre'] ? '<div class="af-markup">' . $custom['help_pre'] . "</div>\n" : '');
        foreach ($custom['fields'] as $field) {
          $item['layout'] .= "<af-field name=\"{$field['name']}\" />\n";
        }
        $item['layout'] .= ($custom['help_post'] ? '<div class="af-markup">' . $custom['help_post'] . "</div>\n" : '');
      }
      $values[$name] = $item;
    }
    return $values;
  }

}