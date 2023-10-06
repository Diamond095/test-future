<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class GetNoteController extends Controller
{
    public function __invoke($id){
        //Проверяем есть ли такая запись в базе данных
        $note=Note::find($id);
        if (!$note) {
            return response()->json(['message' => 'Запись не найдена'], 404);
        }
        return json_decode($note);
    }
}
