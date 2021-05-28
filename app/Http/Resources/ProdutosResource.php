<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'descricao' => $this->descricao,
            'detalhes' => $this->detalhes,
            'id_categoria' => $this->id_categoria,
            'id_tamanho' => $this->id_tamanho,
            'valor' => $this->valor,
            'desconto' => $this->desconto
        ];
    }
}
