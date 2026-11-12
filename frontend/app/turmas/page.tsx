import Link from "next/link";
import RowActions from "../../components/ui/RowActions";

const turmas = [
  { id: 1, nome: "Turma A", descricao: "Descrição da Turma A", periodo: "Diurno", capacidade: 30, dataInicio: "2023-01-01", dataTermino: "2023-06-30", ativo: true },
  { id: 2, nome: "Turma B", descricao: "Descrição da Turma B", periodo: "Matutino", capacidade: 25, dataInicio: "2023-01-01", dataTermino: "2023-06-30", ativo: true },
  { id: 3, nome: "Turma C", descricao: "Descrição da Turma C", periodo: "Noturno", capacidade: 20, dataInicio: "2023-01-01", dataTermino: "2023-06-30", ativo: true },
  { id: 4, nome: "Turma D", descricao: "Descrição da Turma D", periodo: "Diurno", capacidade: 30, dataInicio: "2023-01-01", dataTermino: "2023-06-30", ativo: false },
  { id: 5, nome: "Turma E", descricao: "Descrição da Turma E", periodo: "Matutino", capacidade: 25, dataInicio: "2023-01-01", dataTermino: "2023-06-30", ativo: true },
  { id: 6, nome: "Turma F", descricao: "Descrição da Turma F", periodo: "Noturno", capacidade: 20, dataInicio: "2023-01-01", dataTermino: "2023-06-30", ativo: false },
];

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

  <div className="table-container">
    <table className="data-table">
      <caption className="visually-hidden">Lista de turmas</caption>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Período</th>
          <th scope="col">Capacidade</th>
          <th scope="col">Data de Início</th>
          <th scope="col">Data de Término</th>
          <th scope="col">Descrição</th>
          <th scope="col">Status</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        {turmas.map((turma) => (
          <tr key={turma.id}>
            <td>{turma.id}</td>
            <td>{turma.nome}</td>
            <td>{turma.periodo}</td>
            <td>{turma.capacidade}</td>
            <td>{turma.dataInicio}</td>
            <td>{turma.dataTermino}</td>
            <td>{turma.descricao}</td>
            <td>
              <span className={`status-badge ${
                  turma.ativo ? "status-active" : "status-inactive"
                }`}
              >
                {turma.ativo ? "Ativa" : "Inativa"}
              </span>
            </td>
            <td>
              <RowActions
                label={turma.nome}
                editHref={`/turmas/${turma.id}/editar`}
              />
            </td>
          </tr>
        ))}
      </tbody>
    </table>
  </div>
</section>
  );
}