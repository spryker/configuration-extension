<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ConfigurationExtension\Dependency\Plugin;

/**
 * Implement this interface to provide dynamic data for a configuration setting at render time.
 *
 * Implementations are declared in the YAML schema via the `data_object` property
 * and resolved by the Configuration module during Backoffice page rendering.
 *
 * The returned array is merged into the setting parameters, allowing dynamic
 * population of options, constraints, descriptions, or any other setting property.
 *
 * Example YAML:
 * ```yaml
 * - key: preferred_merchant
 *   name: Preferred Merchant
 *   type: select
 *   data_object: \Pyz\Zed\Configuration\Plugin\MerchantListDataProviderPlugin
 * ```
 *
 * Example implementation:
 * ```php
 * class MerchantListDataProviderPlugin extends AbstractPlugin implements ConfigurationSettingDataProviderPluginInterface
 * {
 *     public function getData(): array
 *     {
 *         return [
 *             'options' => [
 *                 ['value' => 'merchant-1', 'label' => 'Merchant One'],
 *                 ['value' => 'merchant-2', 'label' => 'Merchant Two'],
 *             ],
 *         ];
 *     }
 * }
 * ```
 */
interface ConfigurationSettingDataProviderPluginInterface
{
    /**
     * Specification:
     * - Returns an associative array of setting parameters to merge into the setting definition.
     * - Supported keys: `options`, `description`, `help_text`, `placeholder`, `constraints`, or any template-recognized key.
     * - Called once per setting during Backoffice configuration page rendering.
     *
     * @api
     *
     * @return array<string, mixed>
     */
    public function getData(): array;
}
