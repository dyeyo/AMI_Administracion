<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskSeed extends Seeder
{
  public function run()
  {
    Task::create([
      'name'=> 'Llamada de bienvenida'
    ]);
    Task::create([
      'name'=> 'Envio de mudulos'
    ]);
    Task::create([
      'name'=> 'Orientacion'
    ]);
    Task::create([
      'name'=> 'Inicio de plataforma'
    ]);
  }
}
