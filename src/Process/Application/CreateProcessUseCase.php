<?php

declare(strict_types=1);

namespace Src\Process\Application;

use Src\Process\Domain\ProcessRepository;
use Src\Process\Domain\ValueObject\ProcessInput;
use Src\Process\Domain\Process;

final class CreateProcessUseCase
{
    private $repository;

    public function __construct(ProcessRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $input): void
    {
        $process = Process::create( new ProcessInput($input) );
        $this->repository->save($process);

    }
}
