import {Button, Label, Select} from "flowbite-react";
import {FaPlus} from "react-icons/fa6";

export function ClienteFilter() {
    return (
        <>
            <div className="flex flex-wrap pb-10">
                <Button className="m-1 bg-blue-400" href={route('web.cliente.index')}>Todos</Button>
                <Button className="m-1 bg-green-600"
                        href={route('web.cliente.index', {somenteClientesComClassificacaoA: 'true'})}>Somente clientes
                    A</Button>
                <Button className="m-1 bg-yellow-500"
                        href={route('web.cliente.index', {somenteClientesComClassificacaoB: 'true'})}>Somente clientes
                    B</Button>
                <Button className="m-1 bg-red-600"
                        href={route('web.cliente.index', {somenteClientesComClassificacaoC: 'true'})}>Somente clientes
                    C</Button>
                <Button className="m-1 bg-blue-600"
                        href={route('web.cliente.index', {somenteClientesComClassificacaoEmProspeccao: 'true'})}>Somente
                    clientes em prospecção</Button>
                <Button className="m-1 bg-gray-600"
                        href={route('web.cliente.index', {somenteClientesSemEmail: 'true'})}>Somente clientes sem
                    email</Button>

                <Button className="m-1 bg-blue-700 ml-auto flex items-center justify-center">
                    <FaPlus className="mr-2 flex-shrink-0" size={20}/>
                    <span className="flex-grow">Novo Cliente</span>
                </Button>

            </div>

            <div className="flex flex-wrap pb-3">
                <a href={route('web.cliente.index', {ultimos30DiasComPedido: 'true'})}
                   className="font-medium text-green-600 hover:underline p-2 flex-grow text-center">01-30 dias Com
                    Compra /</a>
                <a href={route('web.cliente.index', {maior31DiasSemPedido: 'true'})}
                   className="font-medium text-yellow-500 hover:underline p-2 flex-grow text-center">31-44 dias Sem
                    Compra /</a>
                <a href={route('web.cliente.index', {maior45DiasSemPedido: 'true'})}
                   className="font-medium text-orange-500 hover:underline p-2 flex-grow text-center">45-60 dias Sem
                    Compra /</a>
                <a href={route('web.cliente.index', {maior61DiasSemPedido: 'true'})}
                   className="font-medium text-red-600 hover:underline p-2 flex-grow text-center">+61 dias Sem Compra
                    /</a>
                <a href={route('web.cliente.index', {prospeccaoSemPedido: 'true'})}
                   className="font-medium text-blue-600 hover:underline p-2 flex-grow text-center">Prospecção Sem Venda
                    /</a>
                <a href={route('web.cliente.index', {semPedidoEsteMes: 'true'})}
                   className="font-medium text-gray-600 hover:underline p-2 flex-grow text-center">Sem Venda neste Mês
                    /</a>
                <a href={route('web.cliente.index', {inativosSemEmail: 'true'})}
                   className="font-medium text-gray-600 hover:underline p-2 flex-grow text-center">Clientes Inativos sem
                    E-MAIL /</a>
            </div>

            <div className="flex flex-wrap gap-4 pb-10">
                <form className="w-full flex flex-wrap gap-4">
                    <div className="flex-1 min-w-[200px]">
                        <div className="mb-2 block">
                            <Label value="Perfil"/>
                        </div>
                        <Select id="idramo" required>
                            <option>Lojista</option>
                            <option>Prospecção</option>
                            <option>Uso/Consumo</option>
                        </Select>
                    </div>
                    <div className="flex-1 min-w-[200px]">
                        <div className="mb-2 block">
                            <Label value="Estado"/>
                        </div>
                        <Select id="idestado" required>
                            <option>PR</option>
                            <option>SC</option>
                        </Select>
                    </div>
                    <div className="flex-1 min-w-[200px]">
                        <div className="mb-2 block">
                            <Label value="Extras"/>
                        </div>
                        <Select id="idextras" required>
                            <option>Exibir Inativos</option>
                            <option>Exibir Performance</option>
                        </Select>
                    </div>
                </form>
            </div>
        </>
    )
}
