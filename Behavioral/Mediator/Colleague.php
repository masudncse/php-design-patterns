<?php


namespace DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    protected Mediator $mediator;

    final public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
