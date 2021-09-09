<?php

declare(strict_types=1);
namespace Src\Process\Infrastructure;
use Illuminate\Database\Eloquent\Model;

final class EloquentProcessModel extends Model
{
    protected $table = 'processes';
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['input'];
}
