import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from "@inertiajs/react";
import {Button, Card} from "flowbite-react";
import {ClienteForm} from "@/Pages/Cliente/ClienteForm.jsx";
import {routeNames} from "@/Pages/Cliente/Utils.jsx";
import React from "react";
import {IoReturnUpBack} from "react-icons/io5";

export default function ClienteCreate(props) {
    const {filtersOptions, auth, flash} = props;

    return (
        <AuthenticatedLayout
            user={auth.user}
            flashMessages={flash}
        >
            <Head title="Novo Cliente"/>
            <Card>
                <div className="">
                    <div className="flex justify-between items-center mb-12">
                        <nav className="flex" aria-label="Breadcrumb">
                            <ol className="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                <li className="inline-flex items-center">
                                    <span className="text-4xl text-gray-600">Novo Cliente</span>
                                </li>
                            </ol>
                        </nav>
                        <Button className="bg-gray-600 ml-auto" href={route(routeNames.clienteindex)}>
                            <IoReturnUpBack className="w-4 h-4 me-2"/>
                            Voltar
                        </Button>
                    </div>

                    <ClienteForm filtersOptions={filtersOptions}/>

                </div>
            </Card>
        </AuthenticatedLayout>
    )
}
