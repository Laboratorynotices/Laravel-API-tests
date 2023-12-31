<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Group;
use App\Http\Resources\GroupResource;
use App\Http\Requests\StoreGroupRequest;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return GroupResource::collection(Group::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        // Сохраняем данные, если они пройдут валидацию
        $createdGroup = Group::create($request->validated());

        // Возвращаем сохранённую группу, чтобы она появилась в интерфейсе
        return new GroupResource($createdGroup);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return new GroupResource(Group::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGroupRequest $request, string $id)
    {
        // Находим группу, которую надо обновить.
        $updatedGroup = Group::findOrFail($id);

        // Сохраняем данные, если они пройдут валидацию
        $updatedGroup->update($request->validated());

        // Возвращаем сохранённую группу, чтобы она появилась в интерфейсе
        return new GroupResource($updatedGroup);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Находим группу, которую надо удалить.
        $deletedGroup = Group::findOrFail($id);

        // Удаляем данные
        $deletedGroup->delete();

        // Возвращаем статус 204
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
