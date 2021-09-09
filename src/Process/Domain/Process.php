<?php

declare(strict_types=1);

namespace Src\Process\Domain;
use Src\Process\Domain\ValueObject\ProcessId;
use Src\Process\Domain\ValueObject\ProcessInput;

final class Process
{
    private $uuid;
    private $input;

    public function __construct(
        ProcessInput $input
    )
    {
        $this->input = $input;
    }

    public function uuid(): ProcessId
    {
        return $this->uuid;
    }

    public function input(): ProcessInput
    {
        return $this->input;
    }

    public static function create(
        ProcessInput $input
    ): self
    {
        $process = new Process($input);
        return $process;
    }
}
