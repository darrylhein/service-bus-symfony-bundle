<?php
/**
 * prooph (http://getprooph.org/)
 *
 * @see       https://github.com/prooph/service-bus-symfony-bundle for the canonical source repository
 * @copyright Copyright (c) 2016 prooph software GmbH (http://prooph-software.com/)
 * @license   https://github.com/prooph/service-bus-symfony-bundle/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace ProophTest\Bundle\ServiceBus\DependencyInjection\Fixture\Model;

final class AcmeRegisterUserHandler
{
    private $lastCommand;

    public function __invoke(AcmeRegisterUserCommand $command)
    {
        $this->lastCommand = $command;
    }

    public function handle(AcmeRegisterUserCommand $command)
    {
        $this->lastCommand = $command;
    }

    public function lastCommand()
    {
        return $this->lastCommand;
    }
}
