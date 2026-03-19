import React, { useState, useEffect } from "react"

const NAV_LINKS = [
  { label: "Home", href: "/" },
  { label: "About Us", href: "/about-us" },
  { label: "Services", href: "/services" },
  { label: "Gallery", href: "/gallery" },
  { label: "Markets We Serve", href: "/markets-we-serve" },
  { label: "Contact Us", href: "/contact-us" },
]

const PHONE = "(555) 123-4567"
const EMAIL = "info@imveragroupinc.com"

function Navbar() {
  const [menuOpen, setMenuOpen] = useState(false)
  const [scrolled, setScrolled] = useState(false)

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 10)
    window.addEventListener("scroll", handleScroll)
    return () => window.removeEventListener("scroll", handleScroll)
  }, [])

  return (
    <header className="w-full">

      {/* ── Top Bar ── */}
      <div className="bg-[#0f1c2e] text-white text-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-10">

          {/* Left: Phone + Email */}
          <div className="flex items-center gap-5 text-gray-300">
            <a
              href={`tel:${PHONE.replace(/\D/g, "")}`}
              className="flex items-center gap-1.5 hover:text-white transition-colors duration-200"
            >
              <svg className="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span className="hidden sm:inline">{PHONE}</span>
            </a>
            <a
              href={`mailto:${EMAIL}`}
              className="flex items-center gap-1.5 hover:text-white transition-colors duration-200"
            >
              <svg className="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span className="hidden sm:inline">{EMAIL}</span>
            </a>
          </div>

          {/* Right: CTA Button */}
          <a
            href="/contact-us"
            className="inline-flex items-center gap-1.5 bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] text-xs font-semibold px-4 py-1.5 rounded transition-colors duration-200 tracking-wide whitespace-nowrap"
          >
            <svg className="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Request a Scope Review
          </a>
        </div>
      </div>

      {/* ── Main Nav ── */}
      <nav
        className={`bg-white w-full z-50 transition-shadow duration-300 ${
          scrolled ? "shadow-md" : "border-b border-gray-100"
        }`}
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16 lg:h-[70px]">

            {/* Logo */}
            <a href="/" className="flex items-center gap-2 flex-shrink-0">
              {/* Replace this with your actual logo <img> if available */}
              <div className="flex items-center gap-2">
                <div className="w-8 h-8 bg-[#0f1c2e] rounded flex items-center justify-center">
                  <span className="text-[#d4a843] font-bold text-sm leading-none">IG</span>
                </div>
                <span className="font-bold text-[#0f1c2e] text-lg tracking-tight leading-tight hidden sm:block">
                  Imvera<span className="text-[#d4a843]">.</span>
                </span>
              </div>
            </a>

            {/* Desktop Nav Links */}
            <ul className="hidden lg:flex items-center gap-1">
              {NAV_LINKS.map((link) => (
                <li key={link.href}>
                  <a
                    href={link.href}
                    className="relative text-sm font-medium text-gray-600 hover:text-[#0f1c2e] px-3 py-2 rounded transition-colors duration-200 group"
                  >
                    {link.label}
                    <span className="absolute bottom-0 left-3 right-3 h-[2px] bg-[#d4a843] scale-x-0 group-hover:scale-x-100 transition-transform duration-200 origin-left rounded-full" />
                  </a>
                </li>
              ))}
            </ul>

            {/* Desktop CTA (repeated for nav level) */}
            <a
              href="/contact-us"
              className="hidden lg:inline-flex items-center gap-1.5 bg-[#0f1c2e] hover:bg-[#1a2f4a] text-white text-sm font-semibold px-5 py-2.5 rounded transition-colors duration-200"
            >
              Get in Touch
            </a>

            {/* Mobile Hamburger */}
            <button
              className="lg:hidden p-2 rounded text-gray-600 hover:text-[#0f1c2e] hover:bg-gray-100 transition-colors"
              onClick={() => setMenuOpen((prev) => !prev)}
              aria-label="Toggle menu"
              aria-expanded={menuOpen}
            >
              {menuOpen ? (
                <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                </svg>
              ) : (
                <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              )}
            </button>
          </div>
        </div>

        {/* ── Mobile Menu ── */}
        <div
          className={`lg:hidden overflow-hidden transition-all duration-300 ease-in-out ${
            menuOpen ? "max-h-[500px] border-t border-gray-100" : "max-h-0"
          }`}
        >
          <div className="bg-white px-4 pb-4 pt-2 flex flex-col gap-1">
            {/* Contact info on mobile */}
            <div className="flex flex-col gap-1 py-2 mb-1 border-b border-gray-100 text-xs text-gray-400">
              <a href={`tel:${PHONE.replace(/\D/g, "")}`} className="hover:text-gray-700 flex items-center gap-2">
                <svg className="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                {PHONE}
              </a>
              <a href={`mailto:${EMAIL}`} className="hover:text-gray-700 flex items-center gap-2">
                <svg className="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                {EMAIL}
              </a>
            </div>

            {NAV_LINKS.map((link) => (
              <a
                key={link.href}
                href={link.href}
                className="text-sm font-medium text-gray-700 hover:text-[#0f1c2e] hover:bg-gray-50 px-3 py-2.5 rounded transition-colors duration-150"
                onClick={() => setMenuOpen(false)}
              >
                {link.label}
              </a>
            ))}

            <a
              href="/contact-us"
              className="mt-2 text-center bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] text-sm font-semibold px-5 py-3 rounded transition-colors duration-200"
            >
              Request a Scope Review
            </a>
          </div>
        </div>
      </nav>
    </header>
  )
}

export default Navbar