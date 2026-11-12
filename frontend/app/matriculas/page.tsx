import Link from "next/link";

const matriculas = [
  {
    id: 1,
    alunoId: 1,
    turmaId: 1,
    dataMatricula: "2026-11-10T09:30:00-03:00",
    ativo: true,
  },
  {
    id: 2,
    alunoId: 2,
    turmaId: 2,
    dataMatricula: "2026-11-11T14:15:00-03:00",
    ativo: true,
  },
  {
    id: 3,
    alunoId: 1,
    turmaId: 2,
    dataMatricula: "2026-11-12T08:00:00-03:00",
    ativo: false,
  },
];

const dateFormatter = new Intl.DateTimeFormat("pt-BR", {
  dateStyle: "short",
  timeStyle: "short",
});

export default function MatriculasPage() {
  return (
    <section>
      <header className="page-header">
        <div>
          <h1>Matrículas</h1>
          <p>Consulte os alunos matriculados em cada turma.</p>
        </div>

        <Link className="button-primary" href="/matriculas/cadastro">
          Nova matrícula
        </Link>
      </header>

      <div className="table-container">
        <table className="data-table">
          <caption className="visually-hidden">Lista de matrículas</caption>
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">AlunoID</th>
              <th scope="col">TurmaID</th>
              <th scope="col">Data da matrícula</th>
              <th scope="col">Ativo</th>
            </tr>
          </thead>
          <tbody>
            {matriculas.map((matricula) => (
              <tr key={matricula.id}>
                <td>{matricula.id}</td>
                <td>{matricula.alunoId}</td>
                <td>{matricula.turmaId}</td>
                <td>
                  <time dateTime={matricula.dataMatricula}>
                    {dateFormatter.format(new Date(matricula.dataMatricula))}
                  </time>
                </td>
                <td>
                  <span
                    className={`status-badge ${
                      matricula.ativo ? "status-active" : "status-inactive"
                    }`}
                  >
                    {matricula.ativo ? "Ativa" : "Inativa"}
                  </span>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </section>
  );
}