<?php

namespace spec\Acme;

use Acme\TasksController;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Acme\Authorizer;

class TasksControllerSpec extends ObjectBehavior
{
    function let(Authorizer $auth)
    {
        $this->beConstructedWith($auth);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TasksController::class);
    }

    function it_shows_a_spesific_task()
    {
        $this->show()->shouldReturn('a task');
    }
}
