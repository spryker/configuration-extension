<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ConfigurationExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ConfigurationValueRequestTransfer;

interface ConfigurationValueRequestExpanderPluginInterface
{
    /**
     * Specification:
     * - Executes during `ConfigurationFacade::getConfigurationValue()` before scope resolution.
     * - Expands the `ConfigurationValueRequestTransfer` with additional scope context.
     * - Adds `ConfigurationScopeTransfer` objects (e.g. current store) to the request scopes when not already provided.
     * - Returns the (potentially modified) request transfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ConfigurationValueRequestTransfer $configurationValueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ConfigurationValueRequestTransfer
     */
    public function expand(
        ConfigurationValueRequestTransfer $configurationValueRequestTransfer,
    ): ConfigurationValueRequestTransfer;
}
