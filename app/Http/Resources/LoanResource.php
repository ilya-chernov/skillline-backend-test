<?php

namespace App\Http\Resources;

use App\Models\Status;
use Illuminate\Http\Resources\Json\JsonResource;

class LoanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $status = Status::where('status_id', $this->status)->get('meaning');

        return [
            'bank_id' => $this->bank_id,
            'personnel' => $this->user,
            'percent' => $this->percent,
            'description' => $this->description,
            'amount' => $this->amount,
            'status' => $status[0]['meaning'],
            'created_at' => $this->created_at,

        ];
    }
}
