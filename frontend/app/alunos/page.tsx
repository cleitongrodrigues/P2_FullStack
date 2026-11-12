import Link from "next/link";
import Card from "@/components/ui/Card";

const alunos = [
  { id: 1, nome: "Ana Silva", email: "ana@email.com", telefone: "(11) 99999-1234" },
  { id: 2, nome: "Bruno Costa", email: "bruno@email.com", telefone: "(11) 98888-5678" },
  { id: 3, nome: "Carla Souza", email: "carla@email.com", telefone: "(11) 97777-2345" },
  { id: 4, nome: "Daniel Lima", email: "daniel@email.com", telefone: "(11) 96666-3456" },
  { id: 5, nome: "Eva Martins", email: "eva@email.com", telefone: "(11) 95555-4567" },
  { id: 6, nome: "Felipe Rocha", email: "felipe@email.com", telefone: "(11) 94444-5678" },
];

export default function AlunosPage() {
  return (
    <section>
      <header className="page-header">
        <div>
          <h1>Alunos</h1>
          <p>Consulte os alunos cadastrados.</p>
        </div>

        <Link className="button-primary" href="/alunos/cadastro">Novo aluno</Link>
      </header>

      <div className="card-grid">
        {alunos.map((aluno) => (
          <Card key={aluno.id}>
            <h2>{aluno.nome}</h2>
            <p>{aluno.email}</p>
            <p>{aluno.telefone}</p>
          </Card>
        ))}
      </div>
    </section>
  );
}