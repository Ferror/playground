<?php
declare(strict_types=1);

namespace Ferror\Application\Repository;

use Ferror\Domain\User;

interface UserRepository
{
    public function find(): User;
}
