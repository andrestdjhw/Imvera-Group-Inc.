import React, { useState, useEffect } from "react"

const NAV_LINKS = [
  { label: "Home", href: "/" },
  { label: "About Us", href: "/about-us" },
  { label: "Services", href: "/services" },
  { label: "Gallery", href: "/gallery" },
  { label: "Markets We Serve", href: "/markets-we-serve" },
  { label: "Contact Us", href: "/contact-us" },
]

const PHONE = "678-836-3266"
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
      <div style={{ backgroundColor: "#162525" }} className="text-white text-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-10">

          {/* Left: Phone + Email */}
          <div className="flex items-center gap-5" style={{ color: "#a8bfbb" }}>
            <a
              href={`tel:${PHONE.replace(/\D/g, "")}`}
              className="flex items-center gap-1.5 transition-colors duration-200"
              style={{ color: "inherit" }}
              onMouseEnter={e => e.currentTarget.style.color = "#F1F6F2"}
              onMouseLeave={e => e.currentTarget.style.color = "#a8bfbb"}
            >
              <svg className="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span className="hidden sm:inline">{PHONE}</span>
            </a>
            <a
              href={`mailto:${EMAIL}`}
              className="flex items-center gap-1.5 transition-colors duration-200"
              style={{ color: "inherit" }}
              onMouseEnter={e => e.currentTarget.style.color = "#F1F6F2"}
              onMouseLeave={e => e.currentTarget.style.color = "#a8bfbb"}
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
            className="inline-flex items-center gap-1.5 text-xs font-semibold px-4 py-1.5 rounded transition-colors duration-200 tracking-wide whitespace-nowrap"
            style={{ backgroundColor: "#2A9D93", color: "#F1F6F2" }}
            onMouseEnter={e => e.currentTarget.style.backgroundColor = "#238c83"}
            onMouseLeave={e => e.currentTarget.style.backgroundColor = "#2A9D93"}
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
        className={`w-full z-50 transition-shadow duration-300 ${scrolled ? "shadow-md" : ""}`}
        style={{
          backgroundColor: "#F1F6F2",
          borderBottom: scrolled ? "none" : "1px solid #dde8e5",
        }}
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16 lg:h-[70px]">

            {/* Logo */}
            <a href="/" className="flex items-center gap-2.5 flex-shrink-0">
              <div
                className="w-8 h-8 rounded flex items-center justify-center"
                style={{ backgroundColor: "#162525" }}
              >
                <span className="font-bold text-sm leading-none" style={{ color: "#6FC061" }}>IG</span>
              </div>
              <span className="font-bold text-lg tracking-tight leading-tight hidden sm:block" style={{ color: "#162525" }}>
                Imvera<span style={{ color: "#2A9D93" }}>.</span>
              </span>
            </a>

            {/* Desktop Nav Links */}
            <ul className="hidden lg:flex items-center gap-1">
              {NAV_LINKS.map((link) => (
                <li key={link.href}>
                  <a
                    href={link.href}
                    className="relative text-sm font-medium px-3 py-2 rounded transition-colors duration-200 group block"
                    style={{ color: "#585858" }}
                    onMouseEnter={e => e.currentTarget.style.color = "#162525"}
                    onMouseLeave={e => e.currentTarget.style.color = "#585858"}
                  >
                    {link.label}
                    {/* Animated underline */}
                    <span
                      className="absolute bottom-0 left-3 right-3 h-[2px] scale-x-0 group-hover:scale-x-100 transition-transform duration-200 origin-left rounded-full"
                      style={{ backgroundColor: "#2A9D93" }}
                    />
                  </a>
                </li>
              ))}
            </ul>

            {/* Desktop CTA */}
            <a
              href="/contact-us"
              className="hidden lg:inline-flex items-center gap-1.5 text-white text-sm font-semibold px-5 py-2.5 rounded transition-colors duration-200"
              style={{ backgroundColor: "#162525" }}
              onMouseEnter={e => e.currentTarget.style.backgroundColor = "#2A9D93"}
              onMouseLeave={e => e.currentTarget.style.backgroundColor = "#162525"}
            >
              Get in Touch
            </a>

            {/* Mobile Hamburger */}
            <button
              className="lg:hidden p-2 rounded transition-colors"
              style={{ color: "#585858" }}
              onClick={() => setMenuOpen((prev) => !prev)}
              aria-label="Toggle menu"
              aria-expanded={menuOpen}
              onMouseEnter={e => e.currentTarget.style.backgroundColor = "#dde8e5"}
              onMouseLeave={e => e.currentTarget.style.backgroundColor = "transparent"}
            >
              {menuOpen ? (
                <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                </svg>
              ) : (
                <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" stroke-Width={2} d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              )}
            </button>
          </div>
        </div>

        {/* ── Mobile Menu ── */}
        <div
          className={`lg:hidden overflow-hidden transition-all duration-300 ease-in-out ${
            menuOpen ? "max-h-[500px]" : "max-h-0"
          }`}
          style={{ borderTop: menuOpen ? "1px solid #dde8e5" : "none" }}
        >
          <div className="px-4 pb-4 pt-2 flex flex-col gap-1" style={{ backgroundColor: "#F1F6F2" }}>

            {/* Contact info on mobile */}
            <div className="flex flex-col gap-1.5 py-2 mb-1 text-xs" style={{ borderBottom: "1px solid #dde8e5", color: "#585858" }}>
              <a
                href={`tel:${PHONE.replace(/\D/g, "")}`}
                className="flex items-center gap-2 transition-colors duration-150"
                onMouseEnter={e => e.currentTarget.style.color = "#162525"}
                onMouseLeave={e => e.currentTarget.style.color = "#585858"}
              >
                <svg className="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                {PHONE}
              </a>
              <a
                href={`mailto:${EMAIL}`}
                className="flex items-center gap-2 transition-colors duration-150"
                onMouseEnter={e => e.currentTarget.style.color = "#162525"}
                onMouseLeave={e => e.currentTarget.style.color = "#585858"}
              >
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
                className="text-sm font-medium px-3 py-2.5 rounded transition-colors duration-150"
                style={{ color: "#585858" }}
                onMouseEnter={e => {
                  e.currentTarget.style.color = "#162525"
                  e.currentTarget.style.backgroundColor = "#dde8e5"
                }}
                onMouseLeave={e => {
                  e.currentTarget.style.color = "#585858"
                  e.currentTarget.style.backgroundColor = "transparent"
                }}
                onClick={() => setMenuOpen(false)}
              >
                {link.label}
              </a>
            ))}

            <a
              href="/contact-us"
              className="mt-2 text-center text-sm font-semibold px-5 py-3 rounded transition-colors duration-200"
              style={{ backgroundColor: "#2A9D93", color: "#F1F6F2" }}
              onMouseEnter={e => e.currentTarget.style.backgroundColor = "#238c83"}
              onMouseLeave={e => e.currentTarget.style.backgroundColor = "#2A9D93"}
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