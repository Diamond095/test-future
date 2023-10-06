<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use Illuminate\Http\Request;
use  App\Models\Note;
use Illuminate\Support\Facades\Storage;

class PostNoteController extends Controller
{
    public function __invoke(NoteRequest $request)
    {
        //Проверяем авторизован ли пользователь
        if (!auth()) {
            return response()->json(['message' => 'Вы не авторизовались'], 401);
        }

        //Валидация данных
        $data = $request->validated();
        //Добавляем изображение в хранилище
        $path = Storage::disk('public')->put('/images', $request['image']);
        //Создаем запись
        $newNote = Note::create($data);
        return json_decode($newNote);
    }
}
