import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head, useForm} from "@inertiajs/react";
import {Button, Card, Label, Textarea, TextInput} from "flowbite-react";
import {TiPlus} from "react-icons/ti";
import Select from "@/Components/Inputs/Select.jsx";

export default function ClienteCreate(props) {
    const {filtersOptions, auth} = props;
    const defaultPerfis = filtersOptions.perfisOptions.map(perfil => perfil.value.toString());

    const {data, setData} = useForm({
        cnpj: '',
        cnpjagrupador: '',
        razaosocial: '',
        comprador: '',
        limitecredito: '',
        perfil: defaultPerfis,
        nota: [4],
        blu: [0],
        comprou: [0],
        divida: [0],
        inativo: [1],
        observacoes: '',
        telefone: '',
        telefone2: '',
        celular: '',
        email: '',
        email2: '',
        enviaremail: [1],
        cidade: '',
        streetview: '',
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

    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Novo Cliente"/>


            <div className="flex justify-between items-center mb-12">
                <nav className="flex" aria-label="Breadcrumb">
                    <ol className="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li className="inline-flex items-center">
                            <span className="text-4xl text-gray-600">Novo Cliente</span>
                        </li>
                    </ol>
                </nav>
                <Button className="bg-gray-600 ml-auto" href={route('web.cliente.create')}>
                    <TiPlus className="w-4 h-4 me-2"/>
                    Cadastrar
                </Button>
            </div>

            <form className="">
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
                            <TextInput id="cnpjagrupador" type="text" placeholder="00.000.000/0000-00"/>
                        </div>
                        <div className="w-2/4">
                            <div className="mb-2">
                                <Label htmlFor="razaosocial" value="Razão Social"/>
                            </div>
                            <TextInput id="razaosocial" type="text" placeholder="Nome da Empresa" required/>
                        </div>
                    </div>

                    <div className="grid grid-cols-4 gap-10">
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="comprador" value="Comprador"/>
                            </div>
                            <TextInput id="comprador" type="text" placeholder="Nome do Comprador"/>
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
                                <Label htmlFor="perfil" value="Perfil de Compra"/>
                            </div>
                            <Select
                                rawOptions={filtersOptions.perfisOptions}
                                labelKey="label"
                                valueKey="value"
                                value={data.perfil}
                                onChange={e => setData('perfil', e.target.value)}
                                isMulti
                                hideSelecionarTodos={false}
                            />
                        </div>
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="nota" value="Nota"/>
                            </div>
                            <Select
                                rawOptions={filtersOptions.classificacoesOptions}
                                labelKey="label"
                                valueKey="value"
                                value={data.nota}
                                onChange={e => setData('nota', e.target.value)}
                            />
                        </div>
                    </div>

                    <div className="grid grid-cols-4 gap-10">

                        <div>
                            <div className="mb-2">
                                <Label htmlFor="blu" value="Tem BLU?"/>
                            </div>
                            <Select
                                rawOptions={[
                                    {label: 'Sim', value: 1},
                                    {label: 'Não', value: 0}
                                ]}
                                labelKey="label"
                                valueKey="value"
                                value={data.blu}
                                onChange={e => setData('blu', e.target.value)}
                            />
                        </div>
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="divida" value="Tem Dívida?"/>
                            </div>
                            <Select
                                rawOptions={[
                                    {label: 'Sim', value: 1},
                                    {label: 'Não', value: 0}
                                ]}
                                labelKey="label"
                                valueKey="value"
                                value={data.divida}
                                onChange={e => setData('divida', e.target.value)}
                            />
                        </div>
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="comprou" value="Já Comprou?"/>
                            </div>
                            <Select
                                rawOptions={[
                                    {label: 'Sim', value: 1},
                                    {label: 'Não', value: 0}
                                ]}
                                labelKey="label"
                                valueKey="value"
                                value={data.comprou}
                                onChange={e => setData('comprou', e.target.value)}
                            />
                        </div>
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="inativo" value="Situação Usuário"/>
                            </div>
                            <Select
                                rawOptions={filtersOptions.situacoesUsuariosOptions}
                                labelKey="label"
                                valueKey="value"
                                value={data.inativo}
                                onChange={e => setData('inativo', e.target.value)}
                            />
                        </div>
                    </div>

                    <div className="">
                        <div className="mb-2">
                            <Label htmlFor="observacoes" value="Observações"/>
                        </div>
                        <Textarea id="observacoes" type="text" placeholder="Observações" rows={6}/>
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
                                required
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
                            <TextInput id="celular" type="text" placeholder="(00) 00000-0000"/>
                        </div>
                    </div>

                    <div className="grid grid-cols-3 gap-10">
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="email" value="Email"/>
                            </div>
                            <TextInput id="email" type="email" placeholder="exemplo@gmail.com"/>
                        </div>

                        <div>
                            <div className="mb-2">
                                <Label htmlFor="email2" value="Email 2"/>
                            </div>
                            <TextInput id="email2" type="email" placeholder="exemplo@gmail.com"/>
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
                            <Label htmlFor="cidade" value="Cidade"/>
                        </div>
                        <Select
                            rawOptions={filtersOptions.cidadesOptions}
                            labelKey="label"
                            valueKey="value"
                            value={data.cidade}
                            onChange={e => setData('cidade', e.target.value)}
                        />
                    </div>
                    <div className="grid grid-cols-3 gap-10">
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="numeroLojas" value="Nº Lojas"/>
                            </div>
                            <TextInput id="numeroLojas" type="text" placeholder="0"/>
                        </div>
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="area" value="Área m²"/>
                            </div>
                            <TextInput id="area" type="text" placeholder="0"/>
                        </div>
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="qtdeVendedores" value="Qtde Vendedores"/>
                            </div>
                            <TextInput id="qtdeVendedores" type="text" placeholder="0"/>
                        </div>
                    </div>
                    <div className="gridgap-10">
                        <div>
                            <div className="mb-2">
                                <Label htmlFor="streetview" value="StreetView (Maps)"/>
                            </div>
                            <Textarea id="streetview" type="text" placeholder="Link do StreetView" rows={6}/>
                        </div>
                    </div>
                </Card>

            </form>
        </AuthenticatedLayout>
    )
}
