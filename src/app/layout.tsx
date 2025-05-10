import type { Metadata } from "next";
import "./globals.css";
import Navbar from "./components/Navbar";
import LayoutClient from "./components/LayoutClient";

export const metadata: Metadata = {
  title: "Solusi Bisnis Anda",
  description: "Solusi teknologi untuk bisnis anda di indonesia",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body>
        <Navbar />
        <LayoutClient>{children}</LayoutClient>
      </body>
    </html>
  );
}
