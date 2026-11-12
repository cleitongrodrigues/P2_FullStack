import Select from "../../../components/ui/Select";
import Button from "../../../components/ui/Button";

export default function MatriculasPage() {
  return (
    <section className="form-page">
      <h1>Matricular aluno</h1>

      <form className="app-form">
        <Select
          label="Aluno"
          name="alunoId"
          options={[
            { value: "1", label: "Ana Silva" },
            { value: "2", label: "Bruno Costa" },
          ]}
          required
        />

        <Select
          label="Turma"
          name="turmaId"
          options={[
            { value: "1", label: "Turma da manhã" },
            { value: "2", label: "Turma da tarde" },
          ]}
          required
        />

        <Button label="Matricular" type="submit" />
      </form>
    </section>
  );
}