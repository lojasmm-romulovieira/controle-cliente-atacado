import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head, useForm} from "@inertiajs/react";
import {Button, Card, Label, Textarea, TextInput} from "flowbite-react";
import Select from "@/Components/Inputs/Select.jsx";
import {ClienteForm} from "@/Pages/Cliente/ClienteForm.jsx";

export default function ClienteCreate(props) {
    const {filtersOptions, auth, flash} = props;

    return (
        <AuthenticatedLayout
            user={auth.user}
            flashMessages={flash}
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

                <ClienteForm filtersOptions={filtersOptions}/>

            </div>
        </AuthenticatedLayout>
    )
}
