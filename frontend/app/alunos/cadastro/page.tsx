"use client";

import { useState, type FormEvent } from "react";
import Button from "../../../components/ui/Button";
import Input from "../../../components/ui/Input";
import {
    validarAluno,
    type AlunoErrors,
    type AlunoFormValues,
} from "../../../lib/validations";

export default function AlunosPage() {
    const [errors, setErrors] = useState<AlunoErrors>({});

    function handleSubmit(event: FormEvent<HTMLFormElement>) {
        event.preventDefault();

        const formData = new FormData(event.currentTarget);
        const aluno: AlunoFormValues = {
            nome: String(formData.get("nome") ?? ""),
            telefone: String(formData.get("telefone") ?? ""),
            email: String(formData.get("email") ?? ""),
            dataNascimento: String(formData.get("dataNascimento") ?? ""),
        };
        const validationErrors = validarAluno(aluno);

        setErrors(validationErrors);
    }

    return (
        <section className="form-page">
            <h1>Cadastro de Alunos</h1>
            <form className="app-form" noValidate onSubmit={handleSubmit}>
                <Input 
                    label="Nome"
                    name="nome"
                    placeholder="Digite o nome do aluno" 
                    required 
                    error={errors.nome}
                />

                <Input 
                    label="Telefone"
                    name="telefone"
                    placeholder="Digite o telefone do aluno" 
                    required 
                    error={errors.telefone}
                />

                <Input 
                    label="Email"
                    name="email"
                    type="email"
                    placeholder="Digite o email do aluno" 
                    required 
                    error={errors.email}
                />     

                <Input
                    label="Data de nascimento"
                    name="dataNascimento"
                    type="date"
                    required
                    error={errors.dataNascimento}
                />        

                <Button label="Cadastrar Aluno" type="submit" />  
            </form>
        </section>
    );
}