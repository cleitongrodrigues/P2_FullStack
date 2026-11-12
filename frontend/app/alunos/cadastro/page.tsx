import Button from "../../../components/ui/Button";
import Input from "../../../components/ui/Input";

export default function AlunosPage() {
    return (
        <section>
            <h1>Cadastro de Alunos</h1>
            <form>
                <Input 
                    label="Nome"
                    name="nome"
                    placeholder="Digite o nome do aluno" 
                    required 
                />

                <Input 
                    label="Telefone"
                    name="telefone"
                    placeholder="Digite o telefone do aluno" 
                    required 
                />

                <Input 
                    label="Email"
                    name="email"
                    type="email"
                    placeholder="Digite o email do aluno" 
                    required 
                />     

                <Input
                    label="Data de nascimento"
                    name="dataNascimento"
                    type="date"
                    required
                />        

                <Button label="Cadastrar Aluno" type="submit" />  
            </form>
        </section>
    );
}