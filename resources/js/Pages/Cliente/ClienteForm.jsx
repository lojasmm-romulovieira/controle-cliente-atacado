import Select from '@/Components/Inputs/Select.jsx'
import {
  EM_PROSPECCAO,
  NAO,
  routeNames,
  SIM,
  SIM_NAO
} from '@/Pages/Cliente/Utils.jsx'
import CreatableSelect from 'react-select/creatable'
import { formatToCurrency } from '@/Utils/formatter'
import { isValueDefined } from '@/Utils/is-value-defined'
import { maskCellphone, maskCNPJ, maskCurrency, maskPhone } from '@/Utils/mask'
import { useForm } from '@inertiajs/react'
import { Button, Card, Label, Textarea, TextInput } from 'flowbite-react'

export function ClienteForm({ filtersOptions, cliente }) {
  const defaultPerfis = filtersOptions.perfisOptions.map((perfil) =>
    perfil.value.toString()
  )
  const defaultRamos = filtersOptions.ramosOptions.map((ramo) =>
    ramo.value.toString()
  )

  const { data, setData, post, put, errors } = useForm({
    cnpj: cliente?.cnpj ? maskCNPJ(cliente.cnpj) : '',
    razaosocial: cliente?.razaosocial ?? '',
    ramos: cliente?.ramos
      ? cliente?.ramos.map((ramo) => ramo.idramo.toString())
      : defaultRamos,
    idclassificacao: cliente?.idclassificacao ?? [EM_PROSPECCAO],
    nome: cliente?.nome ?? '',
    datanascimento: cliente?.datanascimento ?? '',
    idcidade: cliente?.idcidade ?? '',
    telefone: cliente?.telefone ? maskPhone(cliente.telefone) : '',
    telefone2: cliente?.telefone2 ? maskPhone(cliente.telefone2) : '',
    celular: cliente?.celular ? maskCellphone(cliente.celular) : '',
    email: cliente?.email ?? '',
    email2: cliente?.email2 ?? '',
    observacoes: cliente?.observacoes ?? '',
    cnpjagrupador: cliente?.cnpjagrupador
      ? cliente.cnpjagrupador.map((cnpj) => maskCNPJ(cnpj.cnpjagrupador))
      : [],
    numeroloja: cliente?.numeroloja ?? '',
    numerovendedor: cliente?.numerovendedor ?? '',
    arealoja: cliente?.arealoja ?? '',
    streetview: cliente?.streetview ?? '',
    limitecredito: cliente?.limitecredito
      ? formatToCurrency(cliente.limitecredito)
      : '',
    enviaremail: isValueDefined(cliente?.enviaremail)
      ? [Boolean(cliente.enviaremail)]
      : SIM,
    possuidividapendente: isValueDefined(cliente?.possuidividapendente)
      ? [Boolean(cliente.possuidividapendente)]
      : NAO,
    possuicompra: isValueDefined(cliente?.possuicompra)
      ? [Boolean(cliente.possuicompra)]
      : SIM,
    ativo: isValueDefined(cliente?.ativo) ? [Boolean(cliente.ativo)] : SIM,
    perfis: cliente?.perfis
      ? cliente?.perfis.map((perfil) => perfil.idperfil.toString())
      : defaultPerfis,
    possuiblu: isValueDefined(cliente?.possuiblu)
      ? [Boolean(cliente.possuiblu)]
      : NAO
  })

  const handlerSubmit = (e) => {
    e.preventDefault()

    if (cliente) {
      put(route(routeNames.clienteupdate, cliente.idcliente))
    } else {
      post(route(routeNames.clientestore))
    }
  }

  return (
    <form onSubmit={handlerSubmit} className="space-y-4">
      <Card>
        <h5 className="text-2xl font-bold tracking-tight text-gray-900">
          Dados Pessoais
        </h5>

        <div className="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="cnpj" value="CNPJ" />
            </div>
            <TextInput
              id="cnpj"
              type="text"
              placeholder="00.000.000/0000-00"
              required
              onChange={(e) => setData('cnpj', maskCNPJ(e.target.value))}
              value={data.cnpj}
              helperText={
                errors.cnpj && (
                  <span className="text-red-600">{errors.cnpj}</span>
                )
              }
            />
          </div>
          <div className="col-span-1 md:col-span-1 lg:col-span-3">
            <div className="mb-2">
              <Label htmlFor="razaosocial" value="Razão Social" />
            </div>
            <TextInput
              id="razaosocial"
              type="text"
              placeholder="Nome da Empresa"
              onChange={(e) => setData('razaosocial', e.target.value)}
              value={data.razaosocial}
              required
            />
          </div>

          <div className="col-span-1 md:col-span-2 lg:col-span-4">
            <div className="mb-2">
              <Label htmlFor="cnpjagrupador" value="CNPJ Agrupador" />
            </div>
            <CreatableSelect
              id="cnpjagrupador"
              placeholder="Digite o CNPJ"
              isClearable
              onInputChange={(e) => maskCNPJ(e)}
              onChange={(e) => {
                setData(
                  'cnpjagrupador',
                  e.map((item) => item.value)
                )
              }}
              value={data.cnpjagrupador.map((cnpj) => ({
                value: cnpj,
                label: cnpj
              }))}
              isMulti
              formatCreateLabel={(inputValue) =>
                `Adicionar CNPJ: ${inputValue}`
              }
            />
          </div>

          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="nome" value="Comprador" />
            </div>
            <TextInput
              id="nome"
              type="text"
              placeholder="Nome do Comprador"
              onChange={(e) => setData('nome', e.target.value)}
              value={data.nome}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="datanascimento" value="Data Nascimento" />
            </div>
            <TextInput
              id="datanascimento"
              type="date"
              onChange={(e) => setData('datanascimento', e.target.value)}
              value={data.datanascimento}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="limitecredito" value="Limite Crédito" />
            </div>
            <TextInput
              id="limitecredito"
              type="text"
              placeholder="R$ 0,00"
              onChange={(e) =>
                setData('limitecredito', maskCurrency(e.target.value))
              }
              value={data.limitecredito}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="idclassificacao" value="Nota" />
            </div>
            <Select
              rawOptions={filtersOptions.classificacoesOptions}
              labelKey="label"
              valueKey="value"
              value={data.idclassificacao}
              onChange={(e) => setData('idclassificacao', e.target.value)}
            />
          </div>

          <div className="col-span-1 md:col-span-2">
            <div className="mb-2">
              <Label htmlFor="perfis" value="Perfil de Compra" />
            </div>
            <Select
              rawOptions={filtersOptions.perfisOptions}
              labelKey="label"
              valueKey="value"
              value={data.perfis}
              onChange={(e) => setData('perfis', e.target.value)}
              isMulti
              hideSelecionarTodos={false}
            />
          </div>
          <div className="col-span-1 md:col-span-2">
            <div className="mb-2">
              <Label htmlFor="ramos" value="Ramos" />
            </div>
            <Select
              rawOptions={filtersOptions.ramosOptions}
              labelKey="label"
              valueKey="value"
              value={data.ramos}
              onChange={(e) => setData('ramos', e.target.value)}
              isMulti
            />
          </div>

          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="possuiblu" value="Tem BLU?" />
            </div>
            <Select
              rawOptions={SIM_NAO}
              labelKey="label"
              valueKey="value"
              value={data.possuiblu}
              onChange={(e) => setData('possuiblu', e.target.value)}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="possuidividapendente" value="Tem Dívida?" />
            </div>
            <Select
              rawOptions={SIM_NAO}
              labelKey="label"
              valueKey="value"
              value={data.possuidividapendente}
              onChange={(e) => setData('possuidividapendente', e.target.value)}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="possuicompra" value="Já Comprou?" />
            </div>
            <Select
              rawOptions={SIM_NAO}
              labelKey="label"
              valueKey="value"
              value={data.possuicompra}
              onChange={(e) => setData('possuicompra', e.target.value)}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="ativo" value="Situação Usuário" />
            </div>
            <Select
              rawOptions={filtersOptions.situacoesUsuariosOptions}
              labelKey="label"
              valueKey="value"
              value={data.ativo}
              onChange={(e) => setData('ativo', e.target.value)}
            />
          </div>

          <div className="col-span-1 md:col-span-2 lg:col-span-4">
            <div className="mb-2">
              <Label htmlFor="observacoes" value="Observações" />
            </div>
            <Textarea
              id="observacoes"
              type="text"
              placeholder="Observações"
              rows={6}
              onChange={(e) => setData('observacoes', e.target.value)}
              value={data.observacoes}
            />
          </div>
        </div>
      </Card>

      <Card>
        <h5 className="text-2xl font-bold tracking-tight text-gray-900">
          Contato
        </h5>

        <div className="grid grid-cols-1 gap-4 md:grid-cols-3">
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="telefone" value="Telefone" />
            </div>
            <TextInput
              id="telefone"
              type="text"
              placeholder="(00) 0000-0000"
              onChange={(e) => setData('telefone', maskPhone(e.target.value))}
              value={data.telefone}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="telefone2" value="Telefone 2" />
            </div>
            <TextInput
              id="telefone2"
              type="text"
              placeholder="(00) 0000-0000"
              onChange={(e) => setData('telefone2', maskPhone(e.target.value))}
              value={data.telefone2}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="celular" value="Celular" />
            </div>
            <TextInput
              id="celular"
              type="text"
              placeholder="(00) 00000-0000"
              onChange={(e) =>
                setData('celular', maskCellphone(e.target.value))
              }
              value={data.celular}
            />
          </div>

          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="email" value="Email" />
            </div>
            <TextInput
              id="email"
              type="email"
              placeholder="exemplo@gmail.com"
              onChange={(e) => setData('email', e.target.value)}
              value={data.email}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="email2" value="Email 2" />
            </div>
            <TextInput
              id="email2"
              type="email"
              placeholder="exemplo@gmail.com"
              onChange={(e) => setData('email2', e.target.value)}
              value={data.email2}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="enviaremail" value="Enviar Email" />
            </div>
            <Select
              rawOptions={SIM_NAO}
              labelKey="label"
              valueKey="value"
              value={data.enviaremail}
              onChange={(e) => setData('enviaremail', e.target.value)}
            />
          </div>
        </div>
      </Card>

      <Card>
        <h5 className="text-2xl font-bold tracking-tight text-gray-900">
          Localização
        </h5>

        <div className="grid grid-cols-1 gap-4 md:grid-cols-3">
          <div className="col-span-1 md:col-span-3">
            <div className="mb-2">
              <Label htmlFor="idcidade" value="Cidade" />
            </div>
            <Select
              rawOptions={filtersOptions.cidadesOptions}
              labelKey="label"
              valueKey="value"
              value={data.idcidade}
              onChange={(e) => setData('idcidade', e.target.value)}
            />
          </div>

          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="numeroloja" value="Nº Lojas" />
            </div>
            <TextInput
              id="numeroloja"
              type="text"
              placeholder="0"
              onChange={(e) => setData('numeroloja', e.target.value)}
              value={data.numeroloja}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="arealoja" value="Área m²" />
            </div>
            <TextInput
              id="arealoja"
              type="text"
              placeholder="0"
              onChange={(e) => setData('arealoja', e.target.value)}
              value={data.arealoja}
            />
          </div>
          <div className="col-span-1">
            <div className="mb-2">
              <Label htmlFor="numerovendedor" value="Qtde Vendedores" />
            </div>
            <TextInput
              id="numerovendedor"
              type="text"
              placeholder="0"
              onChange={(e) => setData('numerovendedor', e.target.value)}
              value={data.numerovendedor}
            />
          </div>

          <div className="col-span-1 md:col-span-3">
            <div className="mb-2">
              <Label htmlFor="streetview" value="StreetView (Maps)" />
            </div>
            <Textarea
              id="streetview"
              type="text"
              placeholder="Link do StreetView"
              rows={6}
              onChange={(e) => setData('streetview', e.target.value)}
              value={data.streetview}
            />
          </div>
        </div>
      </Card>

      <div className="flex gap-2">
        <Button
          className="ml-auto bg-gray-600"
          href={route('web.cliente.index')}
        >
          Voltar
        </Button>
        <Button className="bg-gray-600" type="submit">
          Salvar
        </Button>
      </div>
    </form>
  )
}
