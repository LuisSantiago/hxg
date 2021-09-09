<?php


namespace Src\Process\Infrastructure;
use Src\Process\Domain\ProcessRepository;
use Src\Process\Domain\ValueObject\ProcessId;
use Src\Process\Domain\ValueObject\ProcessInput;

final class EloquentProcessRepository implements ProcessRepository
{
    public function create(Process $process): void
    {
        $model = new EloquentProcessModel();
        $model->input = $process->input()->value();
        $model->save();
    }

    public function find(ProcessId $processId): Process
    {
        $model = EloquentProcessModel::find($processId->value());
        if($model === null){
            return null;
        }
        return new Process(new ProcessId($model->uuid), new ProcessInput($model->input));
    }
}
