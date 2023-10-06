<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class GetNotesController extends Controller
{
    public function __invoke()
    {
        //Выбираем все записи в базе данных
        $notes = Note::all();
        $i = 0;
        //Добавляем для каждой записи страницу
        foreach ($notes as $note) {
            $i++;
            $note->page = ceil($i / 30);
        }
        return json_encode($notes);
    }
}
