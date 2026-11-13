export type AlunoFormValues = {
  nome: string;
  telefone: string;
  email: string;
  dataNascimento: string;
};

export type AlunoErrors = Partial<
  Record<keyof AlunoFormValues, string>
>;

export function validarAluno(aluno: AlunoFormValues): AlunoErrors {
  const erros: AlunoErrors = {};

  if (!aluno.nome.trim()) {
    erros.nome = "Informe o nome do aluno.";
  }

  if (!aluno.telefone.trim()) {
    erros.telefone = "Informe o telefone do aluno.";
  }

  const email = aluno.email.trim();

  if (!email) {
    erros.email = "Informe o email do aluno.";
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    erros.email = "Informe um email válido.";
  }

  if (!aluno.dataNascimento) {
    erros.dataNascimento = "Informe a data de nascimento.";
  } else {
    const agora = new Date();
    const hoje = [
      agora.getFullYear(),
      String(agora.getMonth() + 1).padStart(2, "0"),
      String(agora.getDate()).padStart(2, "0"),
    ].join("-");

    if (aluno.dataNascimento > hoje) {
      erros.dataNascimento = "A data de nascimento não pode ser futura.";
    }
  }

  return erros;
}