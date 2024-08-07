import Modal from "@/Components/Modal.jsx";
import {Label, Textarea} from "flowbite-react";
import Select from "@/Components/Inputs/Select.jsx";
import SecondaryButton from "@/Components/SecondaryButton.jsx";
import PrimaryButton from "@/Components/PrimaryButton.jsx";
import React from "react";
import {useForm} from "@inertiajs/react";
import {routeNames, SIM, SIM_NAO} from "@/Pages/Cliente/Utils.jsx";

export default function ModalHistoricoLigacaoForm({show, onClose, cliente}) {

    const {setData, processing, data, post, errors} = useForm({
        idcliente: cliente.idcliente,
        fezpedido: '',
        atendeuligacao: SIM.toString(),
        observacao: ''
    });

    const handlerOnSubmit = (e) => {
        e.preventDefault();
        post(route(routeNames.historicoligacaostore));
        onClose();
    }

    return (
        <Modal show={show} onClose={onClose}>
            <div className="mt-4 ml-6">
                <span slot="title" className="font-bold">Nova Ligação:</span>
            </div>
            <form onSubmit={handlerOnSubmit} className="p-6">
                <div className="grid grid-cols-2 gap-4 mb-2">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="fezpedido" value="Fez Pedido"/>
                        </div>
                        <Select
                            rawOptions={SIM_NAO}
                            labelKey="label"
                            valueKey="value"
                            value={data.fezpedido}
                            onChange={e => setData('fezpedido', e.target.value)}
                            isRequired
                        />
                        {errors.fezpedido && <div className="text-red-500 text-sm">{errors.fezpedido}</div>}
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="atendeuligacao" value="Atendeu Ligação"/>
                        </div>
                        <Select
                            rawOptions={SIM_NAO}
                            labelKey="label"
                            valueKey="value"
                            value={data.atendeuligacao}
                            onChange={e => setData('atendeuligacao', e.target.value)}
                            isRequired
                        />
                        {errors.atendeuligacao && <div className="text-red-500 text-sm">{errors.atendeuligacao}</div>}
                    </div>
                </div>
                <div className="grid gap-10">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="observacao" value="Observação"/>
                        </div>
                        <Textarea
                            id="observacao"
                            type="text"
                            placeholder="Registre aqui o que falou na Ligação"
                            rows={6}
                            onChange={(e) => setData('observacao', e.target.value)}
                            value={data.observacao}
                            required
                        />
                    </div>
                </div>
                <div className="mt-6 flex justify-end">
                    <SecondaryButton onClick={onClose}>
                        Cancelar
                    </SecondaryButton>
                    <PrimaryButton className="ms-3" disabled={processing}>
                        Salvar Ligação
                    </PrimaryButton>
                </div>
            </form>
        </Modal>
    )
}
