<?php

namespace App\Http\Resources;

use App\Models\Bank;
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
        $bank = Bank::where('bank_id', $this->bank_id)->get('bank_name');

        return [
         //   'bank_id' => $bank[0]['bank_name'],
            'id' => $this->id,
            'bank_id' => $bank,
            'personnel' => $this->user,
            'percent' => $this->percent,
            'description' => $this->description,
            'amount' => $this->amount,
           // 'status' => $status[0]['meaning'],
            'status' => $status,
            'created_at' => $this->created_at,

        ];
    }
}
