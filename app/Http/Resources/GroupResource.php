<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /*
        * Оригинальный код
        return parent::toArray($request);
        */

        // Получаем данные стандартным методом
        $resultArray = parent::toArray($request);

        // Удаляем ненужные данные
        unset($resultArray['updated_at']);

        return $resultArray;

        /* В качестве альтернативы можно не удалять лишние данные, а перечислять нужные
        return [
            'id' =>         $this->id,
            'name' =>       $this->name,
            'created_at' => $this->created_at,
        ];
        */
    }
}
