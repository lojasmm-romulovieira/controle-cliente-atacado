import React, { useMemo } from 'react'
import formatarDataHora from '@/Utils/FormatarDataHora.jsx'
import { getBadgeTrueOrFalse } from '@/Utils/Badges.jsx'
import { MdDelete } from 'react-icons/md'
import TableFlowbite from '@/Components/TableFlowbite.jsx'
import { Inertia } from '@inertiajs/inertia'
import { routeNames } from '@/Pages/Cliente/Utils.jsx'

export default function TableRecados(props) {
  const { recados } = props

  const handlerDelete = (idrecadocliente) => {
    if (confirm('Deseja realmente excluir este registro?')) {
      Inertia.delete(route(routeNames.recadodestroy, idrecadocliente))
    }
  }

  const columns = useMemo(
    () => [
      {
        label: 'CLIENTE',
        accessor: 'cliente'
      },
      {
        label: 'RECADO',
        accessor: 'recado'
      },
      {
        label: 'Data Cadastro',
        accessor: 'datacadastro'
      },
      {
        label: 'Retornar em',
        accessor: 'retornarem'
      },
      {
        label: 'RECADO EM ATRASO',
        accessor: 'recadoematraso',
        minWidth: 200
      },
      {
        label: 'Ação',
        accessor: 'acao'
      }
    ],
    []
  )

  const rows = useMemo(
    () =>
      recados.map((row) => {
        const dataHoraRetorno = new Date(row.datahoraretorno)
        const dataAtual = new Date()
        const emAtraso = dataAtual > dataHoraRetorno
        return {
          ...row,
          cliente: row.cliente.razaosocial,
          recado: row.recado,
          retornarem: formatarDataHora(dataHoraRetorno),
          recadoematraso: getBadgeTrueOrFalse(
            emAtraso,
            'bg-red-500',
            'bg-green-500'
          ),
          datacadastro: formatarDataHora(row.created_at),
          acao: (
            <div className="flex items-center">
              <button className="text-red-500">
                <MdDelete
                  className="text-2xl"
                  onClick={() => handlerDelete(row.idrecadocliente)}
                />
              </button>
            </div>
          )
        }
      }),
    [recados]
  )

  return (
    <TableFlowbite
      columns={columns}
      rows={rows}
      title="Recados"
      subtitle="Lista de Recados"
    />
  )
}
