"use client";

import Link from "next/link";
import { usePathname } from "next/navigation";

const menuItems = [
  { label: "Alunos", href: "/alunos" },
  { label: "Turmas", href: "/turmas" },
  { label: "Matrículas", href: "/matriculas" },
];

export default function Sidebar() {
  const pathname = usePathname();

  return (
    <aside className="sidebar">
      <nav className="sidebar-nav" aria-label="Menu principal">
        <ul>
          {menuItems.map(({ label, href }) => {
            const isActive = pathname === href || pathname.startsWith(`${href}/`);

            return (
              <li key={href}>
                <Link
                  className={`sidebar-link${isActive ? " active" : ""}`}
                  href={href}
                  aria-current={isActive ? "page" : undefined}
                >
                  {label}
                </Link>
              </li>
            );
          })}
        </ul>
      </nav>
    </aside>
  );
}