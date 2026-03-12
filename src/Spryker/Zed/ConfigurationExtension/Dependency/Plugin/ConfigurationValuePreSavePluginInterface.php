<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ConfigurationExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ConfigurationValueCollectionRequestTransfer;

interface ConfigurationValuePreSavePluginInterface
{
    /**
     * Specification:
     * - Executes before configuration values are validated and persisted in `ConfigurationFacade::saveConfigurationValues()`.
     * - Receives the full `ConfigurationValueCollectionRequestTransfer` including values and deletion keys.
     * - Can modify the request transfer (e.g. sanitize values, normalize data, add audit metadata).
     * - Returns the (potentially modified) request transfer for downstream processing.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ConfigurationValueCollectionRequestTransfer $requestTransfer
     *
     * @return \Generated\Shared\Transfer\ConfigurationValueCollectionRequestTransfer
     */
    public function preSave(
        ConfigurationValueCollectionRequestTransfer $requestTransfer,
    ): ConfigurationValueCollectionRequestTransfer;
}
