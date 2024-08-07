import Modal from "@/Components/Modal.jsx";
import {Label, Textarea, TextInput} from "flowbite-react";
import Select from "@/Components/Inputs/Select.jsx";
import SecondaryButton from "@/Components/SecondaryButton.jsx";
import PrimaryButton from "@/Components/PrimaryButton.jsx";
import React from "react";
import {useForm} from "@inertiajs/react";
import {routeNames} from "@/Pages/Cliente/Utils.jsx";

export default function ModalRecadoForm({show, onClose, filtersOptions}) {

    const {setData, processing, data, post, errors} = useForm({
        idcliente: '',
        datahoraretorno: '',
        recado: '',
    });

    const handlerOnSubmit = (e) => {
        e.preventDefault();
        post(route(routeNames.recadostore));

        if (!errors.idcliente && !errors.datahoraretorno && !errors.recado) {
            onClose();
        }
    }

    return (
        <Modal show={show} onClose={onClose}>
            <div className="mt-4 ml-6">
                <span slot="title" className="font-bold">Novo Recado:</span>
            </div>
            <form onSubmit={handlerOnSubmit} className="p-6">
                <div className="grid grid-cols-2 gap-4 mb-2">
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="cliente" value="Cliente"/>
                        </div>
                        <Select
                            rawOptions={filtersOptions.clientesOptions}
                            labelKey="label"
                            valueKey="value"
                            value={data.idcliente}
                            onChange={e => setData('idcliente', e.target.value)}
                            isRequired
                        />
                        {errors.idcliente && <div className="text-red-500 text-sm">{errors.idcliente}</div>}
                    </div>
                    <div>
                        <div className="mb-2">
                            <Label htmlFor="datahoraretorno" value="Data e Hora do Retorno"/>
                        </div>
                        <TextInput
                            id="datahoraretorno"
                            type="datetime-local"
                            onChange={(e) => setData('datahoraretorno', e.target.value)}
                            value={data.datahoraretorno}
                            required
                        />
                        {errors.datahoraretorno && <div className="text-red-500 text-sm">{errors.datahoraretorno}</div>}
                    </div>
                </div>
                <div>
                    <div className="mb-2">
                        <Label htmlFor="recado" value="Recado"/>
                    </div>
                    <Textarea
                        id="recado"
                        type="text"
                        placeholder="Digite aqui o recado..."
                        rows={6}
                        onChange={(e) => setData('recado', e.target.value)}
                        value={data.recado}
                        required
                    />
                    {errors.recado && <div className="text-red-500 text-sm">{errors.recado}</div>}
                </div>
                <div className="mt-6 flex justify-end">
                    <SecondaryButton onClick={onClose}>
                        Cancelar
                    </SecondaryButton>
                    <PrimaryButton className="ms-3" disabled={processing}>
                        Salvar Recado
                    </PrimaryButton>
                </div>
            </form>
        </Modal>
    )
}
