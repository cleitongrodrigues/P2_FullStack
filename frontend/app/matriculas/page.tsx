import RowActions from "@/components/ui/RowActions";
import Link from "next/link";

const matriculas = [
  {
    id: 1,
    aluno: "Aluno 1",
    turma: "Turma A",
    dataMatricula: "2026-11-10T09:30:00-03:00",
  },
  {
    id: 2,
    aluno: "Aluno 2",
    turma: "Turma B",
    dataMatricula: "2026-11-11T14:15:00-03:00",
  },
  {
    id: 3,
    aluno: "Aluno 3",
    turma: "Turma C",
    dataMatricula: "2026-11-12T08:00:00-03:00",
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
              <th scope="col">Aluno</th>
              <th scope="col">Turma</th>
              <th scope="col">Data da matrícula</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            {matriculas.map((matricula) => (
              <tr key={matricula.id}>
                <td>{matricula.id}</td>
                <td>{matricula.aluno}</td>
                <td>{matricula.turma}</td>
                <td>
                  <time dateTime={matricula.dataMatricula}>
                    {dateFormatter.format(new Date(matricula.dataMatricula))}
                  </time>
                </td>
                <td>
                  <RowActions
                    label={matricula.turma}
                    editHref={`/turmas/${matricula.turma}/editar`}
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