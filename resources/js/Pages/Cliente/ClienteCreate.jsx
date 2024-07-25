import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head, useForm} from "@inertiajs/react";
import {Button, Card, Label, Textarea, TextInput} from "flowbite-react";
import Select from "@/Components/Inputs/Select.jsx";

export default function ClienteCreate(props) {
    const {filtersOptions, auth} = props;
    const defaultPerfis = filtersOptions.perfisOptions.map(perfil => perfil.value.toString());
    const defaultRamos = filtersOptions.ramosOptions.map(ramo => ramo.value.toString());
    const EM_PROSPECCAO = 4;
    const SIM = 1;
    const NAO = 0;

    // const {data, setData} = useForm({
    //     cnpj: '',
    //     razaosocial: '',
    //     ramos: defaultRamos,
    //     idclassificacao: [EM_PROSPECCAO],
    //     nome: '',
    //     datanascimento: '',
    //     idcidade: '',
    //     telefone: '',
    //     telefone2: '',
    //     celular: '',
    //     email: '',
    //     email2: '',
    //     observacoes: '',
    //     cnpjagrupador: '',
    //     numeroloja: '',
    //     numerovendedor: '',
    //     streetview: '',
    //     limitecredito: '',
    //     enviaremail: [SIM],
    //     possuidividapendente: [NAO],
    //     possuicompra: [NAO],
    //     ativo: [SIM],
    //     perfis: defaultPerfis,
    //     possuiblu: [NAO],
    // });

    const {data, setData, post} = useForm({
        cnpj: '00.000.000/0000-00',
        razaosocial: 'Empresa Teste',
        ramos: defaultRamos,
        idclassificacao: [EM_PROSPECCAO],
        nome: 'Comprador Teste',
        datanascimento: '2021-01-01',
        idcidade: [1],
        telefone: '(00) 0000-0000',
        telefone2: '(00) 0000-0000',
        celular: '(00) 00000-0000',
        email: 'exemple@gmail.com',
        email2: 'exemple2@gmail.com',
        observacoes: 'Observações',
        cnpjagrupador: '11111111000111',
        numeroloja: '1',
        numerovendedor: '1',
        streetview: 'http://maps.google.com',
        limitecredito: '1000',
        enviaremail: [SIM],
        possuidividapendente: [NAO],
        possuicompra: [NAO],
        ativo: [SIM],
        perfis: defaultPerfis,
        possuiblu: [NAO],
        area: '100',
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

        console.log(data);
        post(route('web.cliente.store'))
    }

    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Novo Cliente"/>

            <div className="container mx-auto ">
                <div className="flex justify-between items-center mb-12">
                    <nav className="flex" aria-label="Breadcrumb">
                        <ol className="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li className="inline-flex items-center">
                                <span className="text-4xl text-gray-600">Novo Cliente</span>
                            </li>
                        </ol>
                    </nav>
                </div>

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
                                    required onChange={(e) => handleCnpjChange(e)}
                                    value={data.cnpj}
                                />
                            </div>
                            <div className="w-1/4">
                                <div className="mb-2">
                                    <Label htmlFor="cnpjagrupador" value="CNPJ Agrupador"/>
                                </div>
                                <TextInput
                                    id="cnpjagrupador"
                                    type="text"
                                    placeholder="00.000.000/0000-00"
                                    onChange={(e) => setData('cnpjagrupador', e.target.value)}
                                    value={data.cnpjagrupador}
                                />
                            </div>
                            <div className="w-2/4">
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
                                    rawOptions={[
                                        {label: 'Sim', value: 1},
                                        {label: 'Não', value: 0}
                                    ]}
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
                                    rawOptions={[
                                        {label: 'Sim', value: 1},
                                        {label: 'Não', value: 0}
                                    ]}
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
                                    rawOptions={[
                                        {label: 'Sim', value: 1},
                                        {label: 'Não', value: 0}
                                    ]}
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
                                    rawOptions={[
                                        {label: 'Sim', value: 1},
                                        {label: 'Não', value: 0}
                                    ]}
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
                                    <Label htmlFor="area" value="Área m²"/>
                                </div>
                                <TextInput
                                    id="area"
                                    type="text"
                                    placeholder="0"
                                    onChange={(e) => setData('area', e.target.value)}
                                    value={data.area}
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
                        <div className="gridgap-10">
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
            </div>
        </AuthenticatedLayout>
    )
}
