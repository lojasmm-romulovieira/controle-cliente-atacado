<?php

namespace App\DTO;

class RecadoDTO
{
    public function __construct(
        public int    $idcliente,
        public int    $idusuario,
        public string $recado,
        public string $datahoraretorno
    )
    {
    }

    public static function getInstanciaDTO(array $data): RecadoDTO
    {
        $data = collect($data);

        return new RecadoDTO(
            idcliente: $data->get('idcliente'),
            idusuario: auth()->id(),
            recado: $data->get('recado'),
            datahoraretorno: $data->get('datahoraretorno')
        );
    }
}
