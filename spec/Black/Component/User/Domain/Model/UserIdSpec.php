<?php

namespace spec\Black\Component\User\Domain\Model;

use Black\Component\User\Domain\Model\UserId;
use PhpSpec\ObjectBehavior;

class UserIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\User\Domain\Model\UserId');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\ValueObject');
    }

    public function let()
    {
        $this->beConstructedWith(1);
    }

    public function it_should_have_a_value()
    {
        $this->getValue()->shouldBeEqualTo("1");
    }

    public function it_should_have_a_toString()
    {
        $this->__toString()->shouldBeEqualTo("1");
    }

    public function it_should_be_equal(UserId $userId)
    {
        $userId->getValue()->willReturn("1");
        $this->isEqualTo($userId)->shouldReturn(true);
    }

    public function it_should_not_be_equal(UserId $userId)
    {
        $userId->getValue()->willReturn("12");
        $this->isEqualTo($userId)->shouldReturn(false);
    }
}
