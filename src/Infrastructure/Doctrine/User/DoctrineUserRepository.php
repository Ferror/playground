<?php
declare(strict_types=1);

namespace Ferror\Infrastructure\Doctrine\User;

use Ferror\Application\Repository\UserRepository;
use Ferror\Domain\User;

final class DoctrineUserRepository implements UserRepository
{
    public function find(): User
    {
        return new User();
    }
}
