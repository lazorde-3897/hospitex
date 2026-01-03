<?php

namespace Drupal\hospitex_patient;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Access controller for the Patient entity.
 */
class PatientAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    // Super admins always allowed.
    if ($account->hasPermission('administer hospitex patient entities')) {
      return AccessResult::allowed()->cachePerPermissions();
    }

    // Default deny everything.
    return AccessResult::forbidden();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {

    if ($account->hasPermission('administer hospitex patient entities')) {
      return AccessResult::allowed()->cachePerPermissions();
    }

    return AccessResult::forbidden();
  }

}
