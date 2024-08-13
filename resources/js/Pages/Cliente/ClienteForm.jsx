import {Button, Card, Label, Textarea, TextInput} from "flowbite-react";
import Select from "@/Components/Inputs/Select.jsx";
import {useForm} from "@inertiajs/react";
import {formatarToCurrency, formatCelular, formatCnpj, formatTelefone} from "@/Utils/Format.jsx";
import {EM_PROSPECCAO, NAO, routeNames, SIM, SIM_NAO} from "@/Pages/Cliente/Utils.jsx";
import CreatableSelect from "react-select/creatable";

export function ClienteForm(props) {
    const {filtersOptions, cliente} = props;
    const defaultPerfis = filtersOptions.perfisOptions.map(perfil => perfil.value.toString());
    const defaultRamos = filtersOptions.ramosOptions.map(ramo => ramo.value.toString())

    const validateValue = (value) => {
        return value !== null && value !== undefined;
    }

    const {data, setData, post, put, errors} = useForm({
        cnpj: cliente?.cnpj ? formatCnpj(cliente.cnpj) : '',
        razaosocial: cliente?.razaosocial ?? '',
        ramos: cliente?.ramos ? cliente?.ramos.map(ramo => ramo.idramo.toString()) : defaultRamos,
        idclassificacao: cliente?.idclassificacao ?? [EM_PROSPECCAO],
        nome: cliente?.nome ?? '',
        datanascimento: cliente?.datanascimento ?? '',
        idcidade: cliente?.idcidade ?? '',
        telefone: cliente?.telefone ? formatTelefone(cliente.telefone) : '',
        telefone2: cliente?.telefone2 ? formatTelefone(cliente.telefone2) : '',
        celular: cliente?.celular ? formatCelular(cliente.celular) : '',
        email: cliente?.email ?? '',
        email2: cliente?.email2 ?? '',
        observacoes: cliente?.observacoes ?? '',
        cnpjagrupador: cliente?.cnpjagrupador ? cliente.cnpjagrupador.map(cnpj => formatCnpj(cnpj.cnpjagrupador)) : [],
        numeroloja: cliente?.numeroloja ?? '',
        numerovendedor: cliente?.numerovendedor ?? '',
        arealoja: cliente?.arealoja ?? '',
        streetview: cliente?.streetview ?? '',
        limitecredito: cliente?.limitecredito ? formatarToCurrency(cliente.limitecredito) : '',
        enviaremail: validateValue(cliente?.enviaremail) ? [Boolean(cliente.enviaremail)] : SIM,
        possuidividapendente: validateValue(cliente?.possuidividapendente) ? [Boolean(cliente.possuidividapendente)] : NAO,
        possuicompra: validateValue(cliente?.possuicompra) ? [Boolean(cliente.possuicompra)] : SIM,
        ativo: validateValue(cliente?.ativo) ? [Boolean(cliente.ativo)] : SIM,
        perfis: cliente?.perfis ? cliente?.perfis.map(perfil => perfil.idperfil.toString()) : defaultPerfis,
        possuiblu: validateValue(cliente?.possuiblu) ? [Boolean(cliente.possuiblu)] : NAO,
    });

    const handleCnpjChange = (event) => {
        const {value} = event.target;
        const maskedCnpj = value
            .replace(/\D/g, '')
            .replace(/^(\d{2})(\d)/, '$1.$2')
            .replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3')
            .replace(/\.(\d{3})(\d)/, '.$1/$2')
            .replace(/(\d{4})(\d)/, '$1-$2')
            .replace(/(-\d{2})\d+?$/, '$1');

        setData('cnpj', maskedCnpj);
    };

    const handleCurrencyChange = (event) => {
        const {value} = event.target;
        const maskedCurrency = value
            .replace(/\D/g, '')
            .replace(/(\d{2})$/, ',$1')
            .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');

        setData('limitecredito', maskedCurrency);
    }

    const handleTelefoneChange = (event) => {
        const {value} = event.target;
        const maskedTelefone = value
            .replace(/\D/g, '')
            .replace(/^(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{4})(\d)/, '$1-$2')
            .replace(/(-\d{4})(\d)/, '$1');

        setData('telefone', maskedTelefone);
    }

    const handleTelefone2Change = (event) => {
        const {value} = event.target;
        const maskedTelefone = value
            .replace(/\D/g, '')
            .replace(/^(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{4})(\d)/, '$1-$2')
            .replace(/(-\d{4})(\d)/, '$1');

        setData('telefone2', maskedTelefone);
    }

    const handlerCelularChange = (event) => {
        const {value} = event.target;
        const maskedCelular = value
            .replace(/\D/g, '')
            .replace(/^(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{5})(\d)/, '$1-$2')
            .replace(/(-\d{4})(\d)/, '$1');

        setData('celular', maskedCelular);
    }

    const handlerSubmit = (e) => {
        e.preventDefault();

        if (cliente) {
            put(route(routeNames.clienteupdate, cliente.idcliente))
        } else {
            post(route(routeNames.clientestore));
        }
    }

    return (
        <form className="" onSubmit={handlerSubmit}>
            <Card className="mb-11">
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Dados Pessoais
                </h5>
                <div className="flex gap-10">
                    <div className="w-1/4">
                        <div className="mb-2">
                            <Label htmlFor="cnpj" value="CNPJ"/>
                        </div>
                        <TextInput
                            id="cnpj"
                            type="text"
                            placeholder="00.000.000/0000-00"
                            required
                            onChange={(e) => handleCnpjChange(e)}
                            value={data.cnpj}
                            color='failure'
                            helperText={
                                errors.cnpj ?? (
                                    <span className="font-medium">{errors.cnpj}</span>
                                )
                            }
                        />
                    </div>
                    <div className="w-3/4">
                        <div className="mb-2">
                            <Label htmlFor="razaosocial" value="Razão Social"/>
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
                </div>

                <div>
                    <div className="mb-2">
                        <Label htmlFor="cnpjagrupador" value="CNPJ Agrupador"/>
                    </div>
                    <CreatableSelect
                        id="cnpjagrupador"
                        placeholder="Digite o CNPJ"
                        isClearable
                        onInputChange={(e) => formatCnpj(e)}
                        onChange={(e) => {
                            setData('cnpjagrupador', e.map(item => item.value));
                        }}
                        value={data.cnpjagrupador.map(cnpj => ({value: cnpj, label: cnpj}))}
                        isMulti
                        formatCreateLabel={(inputValue) => `Adicionar CNPJ: ${inputValue}`}
                    />
                </div>

                <div className="grid grid-cols-4 gap-10">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="nome" value="Comprador"/>
                        </div>
                        <TextInput
                            id="nome"
                            type="text"
                            placeholder="Nome do Comprador"
                            onChange={(e) => setData('nome', e.target.value)}
                            value={data.nome}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="datanascimento" value="Data Nascimento"/>
                        </div>
                        <TextInput
                            id="datanascimento"
                            type="date"
                            onChange={(e) => setData('datanascimento', e.target.value)}
                            value={data.datanascimento}
                        />
                    </div>

                    <div>
                        <div className="mb-2">
                            <Label htmlFor="limitecredito" value="Limite Crédito"/>
                        </div>
                        <TextInput
                            id="limitecredito"
                            type="text"
                            placeholder="R$ 0,00"
                            onChange={(e) => handleCurrencyChange(e)}
                            value={data.limitecredito}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="idclassificacao" value="Nota"/>
                        </div>
                        <Select
                            rawOptions={filtersOptions.classificacoesOptions}
                            labelKey="label"
                            valueKey="value"
                            value={data.idclassificacao}
                            onChange={e => setData('idclassificacao', e.target.value)}
                        />
                    </div>
                </div>
                <div className="grid grid-cols-2 gap-10">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="perfis" value="Perfil de Compra"/>
                        </div>
                        <Select
                            rawOptions={filtersOptions.perfisOptions}
                            labelKey="label"
                            valueKey="value"
                            value={data.perfis}
                            onChange={e => setData('perfis', e.target.value)}
                            isMulti
                            hideSelecionarTodos={false}
                        />
                    </div>

                    <div>
                        <div className="mb-2">
                            <Label htmlFor="ramos" value="Ramos"/>
                        </div>
                        <Select
                            rawOptions={filtersOptions.ramosOptions}
                            labelKey="label"
                            valueKey="value"
                            value={data.ramos}
                            onChange={e => setData('ramos', e.target.value)}
                            isMulti
                        />
                    </div>
                </div>
                <div className="grid grid-cols-4 gap-10">

                    <div>
                        <div className="mb-2">
                            <Label htmlFor="possuiblu" value="Tem BLU?"/>
                        </div>
                        <Select
                            rawOptions={SIM_NAO}
                            labelKey="label"
                            valueKey="value"
                            value={data.possuiblu}
                            onChange={e => setData('possuiblu', e.target.value)}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="possuidividapendente" value="Tem Dívida?"/>
                        </div>
                        <Select
                            rawOptions={SIM_NAO}
                            labelKey="label"
                            valueKey="value"
                            value={data.possuidividapendente}
                            onChange={e => setData('possuidividapendente', e.target.value)}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="possuicompra" value="Já Comprou?"/>
                        </div>
                        <Select
                            rawOptions={SIM_NAO}
                            labelKey="label"
                            valueKey="value"
                            value={data.possuicompra}
                            onChange={e => setData('possuicompra', e.target.value)}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="ativo" value="Situação Usuário"/>
                        </div>
                        <Select
                            rawOptions={filtersOptions.situacoesUsuariosOptions}
                            labelKey="label"
                            valueKey="value"
                            value={data.ativo}
                            onChange={e => setData('ativo', e.target.value)}
                        />
                    </div>
                </div>

                <div className="">
                    <div className="mb-2">
                        <Label htmlFor="observacoes" value="Observações"/>
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
            </Card>
            <Card className="mb-11">
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Contato
                </h5>
                <div className="grid grid-cols-3 gap-10">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="telefone" value="Telefone"/>
                        </div>
                        <TextInput
                            id="telefone"
                            type="text"
                            placeholder="(00) 0000-0000"
                            onChange={(e) => handleTelefoneChange(e)}
                            value={data.telefone}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="telefone2" value="Telefone 2"/>
                        </div>
                        <TextInput
                            id="telefone2"
                            type="text"
                            placeholder="(00) 0000-0000"
                            onChange={(e) => handleTelefone2Change(e)}
                            value={data.telefone2}
                        />
                    </div>

                    <div>
                        <div className="mb-2">
                            <Label htmlFor="celular" value="Celular"/>
                        </div>
                        <TextInput
                            id="celular"
                            type="text"
                            placeholder="(00) 00000-0000"
                            onChange={(e) => handlerCelularChange(e)}
                            value={data.celular}
                        />
                    </div>
                </div>

                <div className="grid grid-cols-3 gap-10">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="email" value="Email"/>
                        </div>
                        <TextInput
                            id="email"
                            type="email"
                            placeholder="exemplo@gmail.com"
                            onChange={(e) => setData('email', e.target.value)}
                            value={data.email}
                        />
                    </div>

                    <div>
                        <div className="mb-2">
                            <Label htmlFor="email2" value="Email 2"/>
                        </div>
                        <TextInput
                            id="email2"
                            type="email"
                            placeholder="exemplo@gmail.com"
                            onChange={(e) => setData('email2', e.target.value)}
                            value={data.email2}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="enviaremail" value="Enviar Email"/>
                        </div>
                        <Select
                            rawOptions={SIM_NAO}
                            labelKey="label"
                            valueKey="value"
                            value={data.enviaremail}
                            onChange={e => setData('enviaremail', e.target.value)}
                        />
                    </div>
                </div>
            </Card>

            <Card className="mb-11">
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Localização
                </h5>
                <div>
                    <div className="mb-2">
                        <Label htmlFor="idcidade" value="Cidade"/>
                    </div>
                    <Select
                        rawOptions={filtersOptions.cidadesOptions}
                        labelKey="label"
                        valueKey="value"
                        value={data.idcidade}
                        onChange={e => setData('idcidade', e.target.value)}
                    />
                </div>
                <div className="grid grid-cols-3 gap-10">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="numeroloja" value="Nº Lojas"/>
                        </div>
                        <TextInput
                            id="numeroloja"
                            type="text"
                            placeholder="0"
                            onChange={(e) => setData('numeroloja', e.target.value)}
                            value={data.numeroloja}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="arealoja" value="Área m²"/>
                        </div>
                        <TextInput
                            id="arealoja"
                            type="text"
                            placeholder="0"
                            onChange={(e) => setData('arealoja', e.target.value)}
                            value={data.arealoja}
                        />
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="numerovendedor" value="Qtde Vendedores"/>
                        </div>
                        <TextInput
                            id="numerovendedor"
                            type="text"
                            placeholder="0"
                            onChange={(e) => setData('numerovendedor', e.target.value)}
                            value={data.numerovendedor}
                        />
                    </div>
                </div>
                <div className="grid gap-10">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="streetview" value="StreetView (Maps)"/>
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
            <div className="flex gap-4">
                <Button className="bg-gray-600 ml-auto" href={route('web.cliente.index')}>
                    Voltar
                </Button>
                <Button className="bg-gray-600" type="submit">
                    Salvar
                </Button>
            </div>
        </form>
    )
}
