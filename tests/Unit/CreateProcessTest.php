<?php

namespace Tests\Unit;
use Src\Process\Application\CreateProcessUseCase;
use Src\Process\Domain\Process;
use Src\Process\Domain\ProcessRepository;
Use Mockery;
use Src\Process\Domain\ValueObject\ProcessInput;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateProcessTest extends TestCase
{
    use RefreshDatabase;

    private $repository;

    protected function setUp(): void
    {
        $this->repository = Mockery::mock(ProcessRepository::class);
        $this->service = new CreateProcessUseCase($this->repository);
    }

    public function test_it_create_a_process():void
    {
        $process = new Process( new ProcessInput('test input') );
        $this->repository->shouldReceive('create')->with($process);
        ($this->service)($process);
    }

}
