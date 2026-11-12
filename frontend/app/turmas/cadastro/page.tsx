import Button from "../../../components/ui/Button";
import Input from "../../../components/ui/Input";
import Select from "../../../components/ui/Select";
import Memo from "../../../components/ui/Memo";

export default function TurmasPage() {
    return (
        <section>
            <h1>Cadastro de Turmas</h1>
            <form>
                <Input
                    label="Nome da Turma"
                    name="nomeTurma"
                    placeholder="Digite o nome da turma"
                    required
                />

                <Select
                    label="Período"
                    name="periodo"
                    options={[
                        { value: "M", label: "Matutino" },
                        { value: "N", label: "Noturno" },
                        { value: "D", label: "Diurno" }
                    ]}
                    required
                />

                <Memo
                    label="Descrição"
                    name="descricao"
                    placeholder="Digite a descrição da turma"
                    rows={6}
                    required
                />

                <Input
                    label="Capacidade"
                    name="capacidade"
                    placeholder="Digite a capacidade da turma"
                    required
                />

                <Input
                    label="Data de Início"
                    name="dataInicio"
                    type="date"
                    placeholder="Digite a data de início da turma"
                    required
                />

                <Input
                    label="Data de Término"
                    name="dataFim"
                    type="date"
                    placeholder="Digite a data de término da turma"
                    required
                />

                <Button label="Cadastrar Turma" type="submit" />
            </form>
        </section>
    );
}