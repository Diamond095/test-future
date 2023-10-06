<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;

class UpdateNoteController extends Controller
{
    public function __invoke(NoteRequest $request, $id)
    {
        //Валидция данных
        $data = $request->validated();
        //Находим запись 
        $note = Note::find($id);
       
        //Проверяем есть ли такая запись
        if (!$note) {
            return response()->json(['message' => 'Note not found'], 404);
        }
        //Проверяем является ли запись пользователя
        if (auth()->id() != $note->id) {
           return response()->json(['message' => 'Это не ваша запись или же вы не авторизовались'], 401);
        }
        $note->update($data);
        return json_decode($note);
    }
}
