<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ConfigurationExtension\Dependency\Plugin;

interface ConfigurationScopeIdentifierProviderPluginInterface
{
    /**
     * Specification:
     * - Returns the scope key this plugin provides identifiers for (e.g. 'store', 'locale').
     * - Used by `ConfigurationFacade::getScopeIdentifiers()` to match the requested scope to the responsible plugin.
     *
     * @api
     *
     * @return string
     */
    public function getScopeKey(): string;

    /**
     * Specification:
     * - Returns available identifiers for the scope this plugin handles.
     * - Used to populate the scope identifier dropdown in the Backoffice Configuration Management UI.
     * - Example: for scope `store`, returns `['DE', 'AT', 'US']`.
     *
     * @api
     *
     * @return array<string>
     */
    public function getIdentifiers(): array;
}
