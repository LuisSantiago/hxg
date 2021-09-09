<?php

namespace Src\Process\Application;

final class FindProcessUseCase
{
    public function __construct(ProcessRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findProcess(string $uuid){
        return $this->repository->find(new ValueObjectProcessId($uuid));
    }
}
