<?php
/*
 * This file is part of the Black package.
 *
 * (c) Alexandre Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Black\Component\User\Domain\Event;

use Black\Component\User\Domain\Model\User;
use Black\DDD\DDDinPHP\Domain\Event\DomainEvent;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class UserActivatedEvent
 */
class UserActivatedEvent extends Event implements DomainEvent
{
    /**
     * @var
     */
    private $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function message()
    {
        return "The user {$this->user->getName()} ({$this->user->getUserId()}) is now activated.";
    }
}
