import { Button, Label } from 'flowbite-react'
import { useForm } from '@inertiajs/react'
import { useEffect } from 'react'
import Select from '@/Components/Inputs/Select.jsx'

export function ClienteFilter(props) {
  const { filtersOptions, filters } = props

  const { get, setData, data } = useForm({
    ramos: [],
    estados: [],
    ativos: []
  })

  useEffect(() => {
    if (!Array.isArray(filters)) {
      const { ramos, estados, ativos } = filters

      data.ramos = ramos ?? []
      data.estados = estados ?? []
      data.ativos = ativos ?? []

      setData('ramos', ramos)
    }
  }, [filters])

  const handlerSubmit = (e) => {
    e.preventDefault()

    get(route('web.cliente.index'))
  }

  return (
    <>
      <div className="mb-4 flex flex-wrap">
        <form className="flex w-full flex-wrap gap-4" onSubmit={handlerSubmit}>
          <div className="flex-grow">
            <div className="mb-2 block">
              <Label value="Perfil" />
            </div>
            <Select
              rawOptions={filtersOptions.ramosOptions}
              labelKey="label"
              valueKey="value"
              isMulti
              value={data.ramos}
              onChange={(e) => setData('ramos', e.target.value)}
            />
          </div>
          <div className="flex-grow">
            <div className="mb-2 block">
              <Label value="Estado" />
            </div>
            <Select
              rawOptions={filtersOptions.estadosOptions}
              labelKey="label"
              valueKey="value"
              isMulti
              value={data.estados}
              onChange={(e) => setData('estados', e.target.value)}
            />
          </div>
          <div className="mb flex-grow">
            <div className="mb-2 block">
              <Label value="Situação Usuário" />
            </div>
            <Select
              rawOptions={filtersOptions.situacoesUsuariosOptions}
              labelKey="label"
              valueKey="value"
              isMulti
              value={data.ativos}
              onChange={(e) => setData('ativos', e.target.value)}
            />
          </div>

          <div className="flex-grow-0">
            <Button className="mt-8 bg-blue-700" type="submit">
              Pesquisar
            </Button>
          </div>
        </form>
      </div>

      <div className="mb-4 flex flex-wrap">
        <a
          href={route('web.cliente.index', { ultimos30DiasComPedido: 'true' })}
          className="flex-grow p-2 text-center font-medium text-green-600 hover:underline"
        >
          01-30 dias Com Compra /
        </a>
        <a
          href={route('web.cliente.index', { maior31DiasSemPedido: 'true' })}
          className="flex-grow p-2 text-center font-medium text-yellow-500 hover:underline"
        >
          31-44 dias Sem Compra /
        </a>
        <a
          href={route('web.cliente.index', { maior45DiasSemPedido: 'true' })}
          className="flex-grow p-2 text-center font-medium text-orange-500 hover:underline"
        >
          45-60 dias Sem Compra /
        </a>
        <a
          href={route('web.cliente.index', { maior61DiasSemPedido: 'true' })}
          className="flex-grow p-2 text-center font-medium text-red-600 hover:underline"
        >
          +61 dias Sem Compra /
        </a>
        <a
          href={route('web.cliente.index', { prospeccaoSemPedido: 'true' })}
          className="flex-grow p-2 text-center font-medium text-blue-600 hover:underline"
        >
          Prospecção Sem Venda /
        </a>
        <a
          href={route('web.cliente.index', { semPedidoEsteMes: 'true' })}
          className="flex-grow p-2 text-center font-medium text-gray-600 hover:underline"
        >
          Sem Venda neste Mês /
        </a>
        <a
          href={route('web.cliente.index', { inativosSemEmail: 'true' })}
          className="flex-grow p-2 text-center font-medium text-gray-600 hover:underline"
        >
          Clientes Inativos sem E-MAIL /
        </a>
      </div>

      <div className="flex flex-wrap pb-3">
        <Button className="m-1 bg-blue-400" href={route('web.cliente.index')}>
          Todos
        </Button>
        <Button
          className="m-1 bg-green-600"
          href={route('web.cliente.index', {
            somenteClientesComClassificacaoA: 'true'
          })}
        >
          Somente clientes A
        </Button>
        <Button
          className="m-1 bg-yellow-500"
          href={route('web.cliente.index', {
            somenteClientesComClassificacaoB: 'true'
          })}
        >
          Somente clientes B
        </Button>
        <Button
          className="m-1 bg-red-600"
          href={route('web.cliente.index', {
            somenteClientesComClassificacaoC: 'true'
          })}
        >
          Somente clientes C
        </Button>
        <Button
          className="m-1 bg-blue-600"
          href={route('web.cliente.index', {
            somenteClientesComClassificacaoEmProspeccao: 'true'
          })}
        >
          Somente clientes em prospecção
        </Button>
        <Button
          className="m-1 bg-gray-600"
          href={route('web.cliente.index', { somenteClientesSemEmail: 'true' })}
        >
          Somente clientes sem email
        </Button>
      </div>
    </>
  )
}
