<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.backup.form_data_provider' shared service.

return $this->services['prestashop.admin.backup.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Backup\BackupDataProvider(${($_ = isset($this->services['prestashop.core.backup.options_configuration']) ? $this->services['prestashop.core.backup.options_configuration'] : $this->load('getPrestashop_Core_Backup_OptionsConfigurationService.php')) && false ?: '_'});