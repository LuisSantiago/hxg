<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Src\Process\Application\CreateProcessUseCase;
use Src\Process\Domain\ProcessRepository;

class CreateProcessController extends Controller
{

    public function store(Request $request)
    {
        $command = new CreateProcessUseCase(ProcessRepository::class);

        $this->command->__invoke();

        return response()->json(['result' => 'Process created']);
    }
}
