<?php
declare(strict_types=1);
namespace Src\Process\Domain;
use Src\Process\Domain\ValueObject\ProcessId;

interface ProcessRepository
{
    public function find(ProcessId $processId): ?ProcessId;
    public function save(Process $process): void;
}
