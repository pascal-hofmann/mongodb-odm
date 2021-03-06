<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Id;

use Doctrine\ODM\MongoDB\DocumentManager;
use MongoDB\BSON\ObjectId;

/**
 * AutoGenerator generates a native ObjectId
 *
 */
class AutoGenerator extends AbstractIdGenerator
{
    /** @inheritDoc */
    public function generate(DocumentManager $dm, $document)
    {
        return new ObjectId();
    }
}
