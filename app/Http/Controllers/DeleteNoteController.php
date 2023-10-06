<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class DeleteNoteController extends Controller
{
    public function __invoke($id)
    {
        //Находим запись в базе данных
        $note = Note::find($id);
        //Проверяем есть ли такая запись в базе данных
        if (!$note) {
            return response()->json(['message' => 'Запись не найдена'], 404);
        }
        //Проверяем является ли запись пользователя
<<<<<<< HEAD
       // if (auth()->id() != $note->id) {
        //    return response()->json(['message' => 'Это не ваша запись или же вы не авторизовались'], 401);
       // }
=======
       if (auth()->id() != $note->id) {
            return response()->json(['message' => 'Это не ваша запись или же вы не авторизовались'], 401);
        }
>>>>>>> e15c2c2 (Initial commit)
        //Удаляем запись
        $note->delete();
    
        return response()->json(['message' => 'Запись успешно удалена'], 200);
    }
}
