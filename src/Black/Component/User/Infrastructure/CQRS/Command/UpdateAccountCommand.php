<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\Component\User\Infrastructure\CQRS\Command;

use Black\Component\User\Domain\Model\UserId;
use Black\DDD\CQRSinPHP\Infrastructure\CQRS\Command;
use Domain\Model\User;
use Email\EmailAddress;

/**
 * Class UpdateAccountCommand
 */
final class UpdateAccountCommand implements Command
{
    /**
     * @var
     */
    protected $user;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @param User $user
     * @param $name
     * @param EmailAddress $email
     */
    public function __construct(User $user, $name, EmailAddress $email)
    {
        $this->user  = $user;
        $this->name  = (string) $name;
        $this->email = $email;
    }

    /**
     * @return UserId
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
