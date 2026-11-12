import Link from "next/link";

const alunos = [
  { id: 1, nome: "Ana Silva", email: "ana@email.com", telefone: "(11) 99999-1234", dataNascimento: "2000-01-01", dataCadastro: "2023-01-01" },
  { id: 2, nome: "Bruno Costa", email: "bruno@email.com", telefone: "(11) 98888-5678", dataNascimento: "2000-02-02", dataCadastro: "2023-02-02" },
  { id: 3, nome: "Carla Souza", email: "carla@email.com", telefone: "(11) 97777-2345", dataNascimento: "2000-03-03", dataCadastro: "2023-03-03" },
  { id: 4, nome: "Daniel Lima", email: "daniel@email.com", telefone: "(11) 96666-3456", dataNascimento: "2000-04-04", dataCadastro: "2023-04-04" },
  { id: 5, nome: "Eva Martins", email: "eva@email.com", telefone: "(11) 95555-4567", dataNascimento: "2000-05-05", dataCadastro: "2023-05-05" },
  { id: 6, nome: "Felipe Rocha", email: "felipe@email.com", telefone: "(11) 94444-5678", dataNascimento: "2000-06-06", dataCadastro: "2023-06-06" },
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

      <div className="table-container">
        <table className="data-table">
          <caption className="visually-hidden">Lista de alunos</caption>
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Telefone</th>
              <th scope="col">E-mail</th>          
              <th scope="col">Data de Nascimento</th>    
              <th scope="col">Data de Cadastro</th>
            </tr>
          </thead>
          <tbody>
            {alunos.map((aluno) => (
              <tr key={aluno.id}>
                <td>{aluno.id}</td>
                <td>{aluno.nome}</td>
                <td>{aluno.telefone}</td>
                <td>{aluno.email}</td>
                <td>{aluno.dataNascimento}</td>
                <td>{aluno.dataCadastro}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </section>
  );
}