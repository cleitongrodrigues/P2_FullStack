import Sidebar from "../components/layout/Sidebar";
import "./globals.css";

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="pt-BR">
      <body className="layout">
        <Sidebar />
        <main className="conteudo">{children}</main>
      </body>
    </html>
  );
}