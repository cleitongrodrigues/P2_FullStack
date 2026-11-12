import Link from "next/link";

export default function Sidebar() {
  return (
    <aside className="sidebar">
      <nav className="sidebar-nav">
        <ul>
          <li>
            <Link className="sidebar-link" href="/alunos">Alunos</Link>
          </li>
          <li>
            <Link className="sidebar-link" href="/turmas">Turmas</Link>
          </li>
          <li>
            <Link className="sidebar-link" href="/matriculas">Matrículas</Link>
          </li>
        </ul>
      </nav>
    </aside>
  );
}