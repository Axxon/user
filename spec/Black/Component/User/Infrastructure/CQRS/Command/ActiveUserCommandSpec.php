<?php

namespace spec\Black\Component\User\Infrastructure\CQRS\Command;

use Black\Component\User\Domain\Model\UserId;
use PhpSpec\ObjectBehavior;

class ActiveUserCommandSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\User\Infrastructure\CQRS\Command\ActiveUserCommand');
        $this->shouldImplement('Black\DDD\CQRSinPHP\Infrastructure\CQRS\Command');
    }

    public function let(UserId $userId)
    {
        $userId->getValue()->willReturn("1234");
        $this->beConstructedWith($userId);
    }

    public function it_should_return_a_userId()
    {
        $this->getUserId()->shouldBeAnInstanceOf('Black\Component\User\Domain\Model\UserId');
        $this->getUserId()->getValue()->shouldBeString();
        $this->getUserId()->getValue()->shouldReturn("1234");
    }
}
