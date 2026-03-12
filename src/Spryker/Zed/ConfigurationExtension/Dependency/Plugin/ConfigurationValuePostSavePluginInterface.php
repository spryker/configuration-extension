<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ConfigurationExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ConfigurationValueCollectionResponseTransfer;

interface ConfigurationValuePostSavePluginInterface
{
    /**
     * Specification:
     * - Executes after configuration values have been validated and persisted in `ConfigurationFacade::saveConfigurationValues()`.
     * - Receives the `ConfigurationValueCollectionResponseTransfer` with `isSuccess`, `savedCount`, and errors.
     * - Can enrich or modify the response transfer (e.g. trigger cache invalidation events, add warnings, send notifications).
     * - Returns the (potentially modified) response transfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ConfigurationValueCollectionResponseTransfer $responseTransfer
     *
     * @return \Generated\Shared\Transfer\ConfigurationValueCollectionResponseTransfer
     */
    public function postSave(
        ConfigurationValueCollectionResponseTransfer $responseTransfer,
    ): ConfigurationValueCollectionResponseTransfer;
}
