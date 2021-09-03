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

namespace Civi\Api4\Event\Subscriber;

use Civi\Api4\Generic\DAOCreateAction;

class CustomGroupPreCreationSubscriber extends Generic\PreCreationSubscriber {

  /**
   * @param \Civi\Api4\Generic\DAOCreateAction $request
   */
  protected function modify(DAOCreateAction $request) {
    $title = $request->getValue('title');
    $name = $request->getValue('name');

    if (NULL === $title && $name) {
      $request->addValue('title', $name);
    }
  }

  protected function applies(DAOCreateAction $request) {
    return $request->getEntityName() === 'CustomGroup';
  }

}
