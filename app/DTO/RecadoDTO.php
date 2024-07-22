<?php

namespace App\DTO;

class RecadoDTO
{
    public function __construct(
        public int    $idcliente,
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
            recado: $data->get('recado'),
            datahoraretorno: $data->get('datahoraretorno')
        );
    }
}
