import Link from "next/link";
import Card from "../../components/ui/Card";

const turmas = [
    { id: 1, nome: "Turma A", descricao: "Descrição da Turma A", periodo: "Manhã", capacidade: 30},
    { id: 2, nome: "Turma B", descricao: "Descrição da Turma B", periodo: "Tarde", capacidade: 25},
    { id: 3, nome: "Turma C", descricao: "Descrição da Turma C", periodo: "Noite", capacidade: 20},
    { id: 4, nome: "Turma D", descricao: "Descrição da Turma D", periodo: "Manhã", capacidade: 30},
    { id: 5, nome: "Turma E", descricao: "Descrição da Turma E", periodo: "Tarde", capacidade: 25},
    { id: 6, nome: "Turma F", descricao: "Descrição da Turma F", periodo: "Noite", capacidade: 20},
]

export default function TurmasPage() {
    return (
        <section>
            <header className="page-header">
                <div>
                    <h1>Turmas</h1>
                    <p>Consulte as turmas cadastradas.</p>
                </div>

                <Link className="button-primary" href="/turmas/cadastro">Nova turma</Link>
            </header>

            <div className="card-grid">
                {turmas.map((turma) => (
                    <Card key={turma.id}>
                        <h2>{turma.nome}</h2>                        
                        <p>Período: {turma.periodo}</p>
                        <p>Capacidade: {turma.capacidade}</p>
                        <p>{turma.descricao}</p>
                    </Card>
                ))}
            </div>
        </section>
    );
}