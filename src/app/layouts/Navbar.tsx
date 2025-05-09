"use client";
// import Image from "next/image";
import { useEffect, useState } from "react";
import { Menu, X } from "lucide-react";

export default function Navbar() {
  const [scrolled, setScrolled] = useState(false);
  const [menuOpen, setMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 50);
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  return (
    <header
      className={`fixed top-0 left-0 w-full z-50 transition-all duration-300 ${
        scrolled ? "bg-white shadow-md text-black" : "bg-transparent text-white"
      }`}
    >
      <div className="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        {/* Logo */}
        <div className="flex items-center space-x-2">
          {/* <Image src="/logo.png" alt="Proland" width={40} height={40} /> */}
          <span className="text-xl font-bold">SolTech</span>
        </div>

        {/* Desktop Navigation */}
        <nav className="hidden md:flex space-x-6 font-semibold text-sm">
          <a href="#" className="hover:text-pink-500 transition">
            PRODUCT
          </a>
          <a href="#" className="hover:text-pink-500 transition">
            FEATURES
          </a>
          <a href="#" className="hover:text-pink-500 transition">
            REVIEWS
          </a>
          <a href="#" className="hover:text-pink-500 transition">
            PAGES
          </a>
          <a href="#" className="hover:text-pink-500 transition">
            CONTACT
          </a>
        </nav>

        {/* CTA button (desktop) */}
        <a
          href="#"
          className={`hidden md:inline-block px-5 py-2 rounded-full text-sm font-bold transition ${
            scrolled
              ? "bg-orange-500 hover:bg-orange-600 text-white"
              : "bg-orange-500 hover:bg-orange-600 text-white"
          }`}
        >
          BACK THIS PROJECT
        </a>

        {/* Hamburger Menu (mobile) */}
        <button
          className="md:hidden text-2xl"
          onClick={() => setMenuOpen(!menuOpen)}
          aria-label="Toggle Menu"
        >
          {menuOpen ? <X size={28} /> : <Menu size={28} />}
        </button>
      </div>

      {/* Mobile Menu */}
      <div
        className={`md:hidden px-6 py-4 space-y-4 transition-all duration-300 ease-out transform ${
          menuOpen
            ? "opacity-100 translate-y-0 visible"
            : "opacity-0 -translate-y-2 invisible pointer-events-none"
        } bg-white text-black shadow-md`}
      >
        <a href="#" className="block font-medium hover:text-pink-500">
          PRODUCT
        </a>
        <a href="#" className="block font-medium hover:text-pink-500">
          FEATURES
        </a>
        <a href="#" className="block font-medium hover:text-pink-500">
          REVIEWS
        </a>
        <a href="#" className="block font-medium hover:text-pink-500">
          PAGES
        </a>
        <a href="#" className="block font-medium hover:text-pink-500">
          CONTACT
        </a>
        <a
          href="#"
          className="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 rounded-full font-bold mt-2"
        >
          BACK THIS PROJECT
        </a>
      </div>
    </header>
  );
}
