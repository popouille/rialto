<?php

namespace NigelCunningham\Rialto\Traits;

trait UsesBasicResourceAsDefault
{
    /**
     * Return the fully qualified name of the default resource.
     */
    public function defaultResource(): string
    {
        return \NigelCunningham\Rialto\Data\BasicResource::class;
    }
}
