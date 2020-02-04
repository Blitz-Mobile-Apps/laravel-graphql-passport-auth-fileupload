<?php

namespace Nuwave\Lighthouse\Support\Contracts;

use Closure;
use Nuwave\Lighthouse\Schema\Values\TypeValue;

interface TypeMiddleware extends Directive
{
    /**
     * Handle a type AST as it is converted to an executable type.
     *
     * @param  \Nuwave\Lighthouse\Schema\Values\TypeValue  $value
     * @param  \Closure  $next
     * @return \GraphQL\Type\Definition\Type
     */
    public function handleNode(TypeValue $value, Closure $next);
}
