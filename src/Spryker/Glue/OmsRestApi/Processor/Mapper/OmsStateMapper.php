<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\OmsRestApi\Processor\Mapper;

use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\RestOrderItemsAttributesTransfer;

class OmsStateMapper implements OmsStateMapperInterface
{
    public function mapItemTransferToRestOrderItemsAttributesTransfer(
        ItemTransfer $itemTransfer,
        RestOrderItemsAttributesTransfer $restOrderItemsAttributesTransfer
    ): RestOrderItemsAttributesTransfer {
        $itemStateTransfer = $itemTransfer->getState();

        if (!$itemStateTransfer) {
            return $restOrderItemsAttributesTransfer;
        }

        return $restOrderItemsAttributesTransfer->setState($itemTransfer->getState()->getName());
    }
}
