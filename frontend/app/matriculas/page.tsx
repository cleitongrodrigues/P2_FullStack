import Input from "../../components/ui/Input";

export default function MatriculasPage() {
    return (
        <section>
            <h1>Matrícular Aluno</h1>
            <form>
                <Input
                    label="Nome do Aluno"
                    name="nomeAluno"
                    placeholder="Digite o nome do aluno"
                    required
                />

                <Input
                    label="Nome da Turma"
                    name="nomeTurma"
                    placeholder="Digite o nome da turma"
                    required
                />
            </form>            
        </section>
    );
}