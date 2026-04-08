import React, { useState, useEffect, useRef } from "react"

// ── Data ──────────────────────────────────────────────────────

const SERVICES = [
  {
    num:   "01",
    title: "ECO Grip Commercial Flooring",
    tag:   "Highest margin · Growth priority",
    href:  "/services/eco-grip-flooring",
    icon: (
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5}
        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
    ),
  },
  {
    num:   "02",
    title: "Cabinet & Countertop Installation",
    tag:   "High margin · Precision-driven",
    href:  "/services/cabinets-countertops",
    icon: (
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5}
        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
    ),
  },
  {
    num:   "03",
    title: "Acoustical Ceilings",
    tag:   "High output · Compliance-driven",
    href:  "/services/acoustical-ceilings",
    icon: (
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5}
        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
    ),
  },
  {
    num:   "04",
    title: "FRP Installation",
    tag:   "Specialty · Compliance-driven",
    href:  "/services/frp-installation",
    icon: (
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5}
        d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18" />
    ),
  },
  {
    num:   "05",
    title: "Drywall & Finishing",
    tag:   "Core volume trade",
    href:  "/services/drywall-finishing",
    icon: (
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5}
        d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
    ),
  },
  {
    num:   "06",
    title: "Metal Framing",
    tag:   "Core volume trade · Foundation scope",
    href:  "/services/metal-framing",
    icon: (
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5}
        d="M4 6h16M4 10h16M4 14h16M4 18h16" />
    ),
  },
]

const NAV_LINKS = [
  { label: "Home",            href: "/",                hasMega: false },
  { label: "About Us",        href: "/about-us",        hasMega: false },
  { label: "Services",        href: "/services",        hasMega: true  },
  { label: "Gallery",         href: "/gallery",         hasMega: false },
  { label: "Markets We Serve",href: "/markets-we-serve",hasMega: false },
  { label: "Contact Us",      href: "/contact-us",      hasMega: false },
]

const PHONE = "678-836-3266"
const EMAIL = "info@imveragroupinc.com"

// ── Mega Menu ─────────────────────────────────────────────────

function MegaMenu({ visible }) {
  return (
    <div
      style={{
        position:   "absolute",
        top:        "100%",
        left:       "50%",
        transform:  "translateX(-50%)",
        width:      "min(860px, 96vw)",
        backgroundColor: "#fff",
        border:     "1px solid #dde8e5",
        borderRadius: "1rem",
        boxShadow:  "0 16px 48px rgba(22,37,37,0.14)",
        opacity:    visible ? 1 : 0,
        pointerEvents: visible ? "auto" : "none",
        transform:  visible
          ? "translateX(-50%) translateY(0)"
          : "translateX(-50%) translateY(-6px)",
        transition: "opacity 0.18s ease, transform 0.18s ease",
        zIndex:     100,
        overflow:   "hidden",
      }}
    >
      {/* Top row: label + view all */}
      <div style={{
        display:        "flex",
        alignItems:     "center",
        justifyContent: "space-between",
        padding:        "1rem 1.5rem 0.75rem",
        borderBottom:   "1px solid #f0f4f2",
      }}>
        <p style={{ fontSize: "0.7rem", fontWeight: 700, letterSpacing: "0.12em", textTransform: "uppercase", color: "#2A9D93" }}>
          Our Six Trade Disciplines
        </p>
        <a href="/services"
           style={{ fontSize: "0.75rem", fontWeight: 600, color: "#585858", display: "flex", alignItems: "center", gap: "0.25rem", textDecoration: "none" }}
           onMouseEnter={e => e.currentTarget.style.color = "#2A9D93"}
           onMouseLeave={e => e.currentTarget.style.color = "#585858"}>
          View All Services
          <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>

      {/* Service grid */}
      <div style={{
        display:             "grid",
        gridTemplateColumns: "repeat(3, 1fr)",
        gap:                 "0",
      }}>
        {SERVICES.map((s, i) => {
          const isRightCol  = (i + 1) % 3 === 0
          const isBottomRow = i >= 3
          return (
            <a
              key={s.href}
              href={s.href}
              style={{
                display:       "flex",
                alignItems:    "flex-start",
                gap:           "0.75rem",
                padding:       "1rem 1.25rem",
                textDecoration:"none",
                transition:    "background 0.15s",
                borderRight:   isRightCol  ? "none" : "1px solid #f0f4f2",
                borderBottom:  isBottomRow ? "none" : "1px solid #f0f4f2",
              }}
              onMouseEnter={e => e.currentTarget.style.background = "#f7fbf9"}
              onMouseLeave={e => e.currentTarget.style.background = "transparent"}
            >
              {/* Icon box */}
              <div style={{
                width:          "2.25rem",
                height:         "2.25rem",
                borderRadius:   "0.5rem",
                background:     "linear-gradient(135deg, rgba(111,192,97,0.12), rgba(42,157,147,0.12))",
                display:        "flex",
                alignItems:     "center",
                justifyContent: "center",
                flexShrink:     0,
                marginTop:      "1px",
              }}>
                <svg width="16" height="16" fill="none" stroke="#2A9D93" viewBox="0 0 24 24">
                  {s.icon}
                </svg>
              </div>

              {/* Text */}
              <div>
                <div style={{ display: "flex", alignItems: "center", gap: "0.4rem", marginBottom: "0.2rem" }}>
                  <span style={{ fontSize: "0.65rem", fontWeight: 700, color: "rgba(42,157,147,0.6)", letterSpacing: "0.05em" }}>
                    {s.num}
                  </span>
                  <div style={{ width: "1.5rem", height: "1px", background: "linear-gradient(to right, #6FC061, #2A9D93)", opacity: 0.4 }} />
                </div>
                <p style={{ fontSize: "0.8125rem", fontWeight: 600, color: "#162525", lineHeight: 1.3, marginBottom: "0.2rem" }}>
                  {s.title}
                </p>
                <p style={{ fontSize: "0.7rem", color: "#7fa89e", lineHeight: 1.4 }}>
                  {s.tag}
                </p>
              </div>
            </a>
          )
        })}
      </div>

      {/* Bottom CTA strip */}
      <div style={{
        borderTop:      "1px solid #f0f4f2",
        padding:        "0.875rem 1.5rem",
        display:        "flex",
        alignItems:     "center",
        justifyContent: "space-between",
        gap:            "1rem",
        background:     "linear-gradient(135deg, rgba(111,192,97,0.05), rgba(42,157,147,0.05))",
      }}>
        <p style={{ fontSize: "0.8rem", color: "#585858", margin: 0 }}>
          All six trades self-performed by dedicated crews. One contract. One point of accountability.
        </p>
        <a
          href="/contact-us"
          style={{
            display:        "inline-flex",
            alignItems:     "center",
            gap:            "0.375rem",
            background:     "linear-gradient(135deg, #6FC061, #2A9D93)",
            color:          "#F1F6F2",
            fontWeight:     700,
            fontSize:       "0.75rem",
            padding:        "0.5rem 1rem",
            borderRadius:   "0.5rem",
            textDecoration: "none",
            whiteSpace:     "nowrap",
            flexShrink:     0,
            transition:     "opacity 0.2s",
          }}
          onMouseEnter={e => e.currentTarget.style.opacity = "0.88"}
          onMouseLeave={e => e.currentTarget.style.opacity = "1"}
        >
          Request a Scope Review
          <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  )
}

// ── Navbar ────────────────────────────────────────────────────

function Navbar() {
  const [menuOpen,    setMenuOpen]    = useState(false)
  const [scrolled,    setScrolled]    = useState(false)
  const [megaOpen,    setMegaOpen]    = useState(false)
  const [mobileServices, setMobileSvc] = useState(false)

  // Delay-close so moving cursor into the panel doesn't close it
  const closeTimer = useRef(null)

  const openMega  = () => { clearTimeout(closeTimer.current); setMegaOpen(true)  }
  const closeMega = () => { closeTimer.current = setTimeout(() => setMegaOpen(false), 120) }

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 10)
    window.addEventListener("scroll", handleScroll)
    return () => {
      window.removeEventListener("scroll", handleScroll)
      clearTimeout(closeTimer.current)
    }
  }, [])

  return (
    <header className="w-full" style={{ position: "relative", zIndex: 50 }}>

      {/* ── Top Bar ── */}
      <div style={{ backgroundColor: "#162525" }} className="text-white text-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-10">

          <div className="flex items-center gap-5" style={{ color: "#a8bfbb" }}>
            <a href={`tel:${PHONE.replace(/\D/g, "")}`}
               className="flex items-center gap-1.5 transition-colors duration-200"
               style={{ color: "inherit" }}
               onMouseEnter={e => e.currentTarget.style.color = "#F1F6F2"}
               onMouseLeave={e => e.currentTarget.style.color = "#a8bfbb"}>
              <svg className="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span className="hidden sm:inline">{PHONE}</span>
            </a>
            <a href={`mailto:${EMAIL}`}
               className="flex items-center gap-1.5 transition-colors duration-200"
               style={{ color: "inherit" }}
               onMouseEnter={e => e.currentTarget.style.color = "#F1F6F2"}
               onMouseLeave={e => e.currentTarget.style.color = "#a8bfbb"}>
              <svg className="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span className="hidden sm:inline">{EMAIL}</span>
            </a>
          </div>

          <a href="/contact-us"
             className="inline-flex items-center gap-1.5 text-xs font-semibold px-4 py-1.5 rounded transition-colors duration-200 tracking-wide whitespace-nowrap"
             style={{ backgroundColor: "#2A9D93", color: "#F1F6F2" }}
             onMouseEnter={e => e.currentTarget.style.backgroundColor = "#238c83"}
             onMouseLeave={e => e.currentTarget.style.backgroundColor = "#2A9D93"}>
            <svg className="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Request a Scope Review
          </a>
        </div>
      </div>

      {/* ── Main Nav ── */}
      <nav
        style={{
          backgroundColor: "#F1F6F2",
          borderBottom:    scrolled ? "none" : "1px solid #dde8e5",
          boxShadow:       scrolled ? "0 2px 12px rgba(22,37,37,0.08)" : "none",
          transition:      "box-shadow 0.3s",
          position:        "relative",
          zIndex:          50,
        }}
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16 lg:h-[70px]">

            {/* Logo */}
            <a href="/" className="flex items-center gap-2.5 flex-shrink-0">
              <div className="w-8 h-8 rounded flex items-center justify-center" style={{ backgroundColor: "#162525" }}>
                <span className="font-bold text-sm leading-none" style={{ color: "#6FC061" }}>IG</span>
              </div>
              <span className="font-bold text-lg tracking-tight leading-tight hidden sm:block" style={{ color: "#162525" }}>
                Imvera<span style={{ color: "#2A9D93" }}>.</span>
              </span>
            </a>

            {/* Desktop Nav */}
            <ul className="hidden lg:flex items-center gap-1" style={{ position: "relative" }}>
              {NAV_LINKS.map((link) => {
                if (!link.hasMega) {
                  return (
                    <li key={link.href}>
                      <a
                        href={link.href}
                        className="relative text-sm font-medium px-3 py-2 rounded transition-colors duration-200 group block"
                        style={{ color: "#585858" }}
                        onMouseEnter={e => e.currentTarget.style.color = "#162525"}
                        onMouseLeave={e => e.currentTarget.style.color = "#585858"}
                      >
                        {link.label}
                        <span className="absolute bottom-0 left-3 right-3 h-[2px] scale-x-0 group-hover:scale-x-100 transition-transform duration-200 origin-left rounded-full"
                              style={{ backgroundColor: "#2A9D93" }} />
                      </a>
                    </li>
                  )
                }

                // Services — mega menu trigger
                return (
                  <li key={link.href} style={{ position: "relative" }}
                      onMouseEnter={openMega}
                      onMouseLeave={closeMega}>
                    <button
                      style={{
                        position:        "relative",
                        display:         "flex",
                        alignItems:      "center",
                        gap:             "0.25rem",
                        fontSize:        "0.875rem",
                        fontWeight:      500,
                        color:           megaOpen ? "#162525" : "#585858",
                        background:      "none",
                        border:          "none",
                        cursor:          "pointer",
                        padding:         "0.5rem 0.75rem",
                        borderRadius:    "0.375rem",
                        transition:      "color 0.2s",
                      }}
                    >
                      {link.label}
                      <svg
                        width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        style={{ transition: "transform 0.2s", transform: megaOpen ? "rotate(180deg)" : "rotate(0deg)", color: megaOpen ? "#2A9D93" : "inherit" }}
                      >
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                      </svg>
                      {/* Active underline */}
                      <span style={{
                        position:   "absolute",
                        bottom:     0,
                        left:       "0.75rem",
                        right:      "0.75rem",
                        height:     "2px",
                        borderRadius: "9999px",
                        background: "#2A9D93",
                        transform:  megaOpen ? "scaleX(1)" : "scaleX(0)",
                        transformOrigin: "left",
                        transition: "transform 0.2s",
                      }} />
                    </button>

                    <MegaMenu visible={megaOpen} />
                  </li>
                )
              })}
            </ul>

            {/* Desktop CTA */}
            <a href="/contact-us"
               className="hidden lg:inline-flex items-center gap-1.5 text-white text-sm font-semibold px-5 py-2.5 rounded transition-colors duration-200"
               style={{ backgroundColor: "#162525" }}
               onMouseEnter={e => e.currentTarget.style.backgroundColor = "#2A9D93"}
               onMouseLeave={e => e.currentTarget.style.backgroundColor = "#162525"}>
              Get in Touch
            </a>

            {/* Mobile Hamburger */}
            <button
              className="lg:hidden p-2 rounded transition-colors"
              style={{ color: "#585858" }}
              onClick={() => setMenuOpen(prev => !prev)}
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
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              )}
            </button>
          </div>
        </div>

        {/* ── Mobile Menu ── */}
        <div
          className={`lg:hidden overflow-hidden transition-all duration-300 ease-in-out ${menuOpen ? "max-h-[700px]" : "max-h-0"}`}
          style={{ borderTop: menuOpen ? "1px solid #dde8e5" : "none" }}
        >
          <div className="px-4 pb-4 pt-2 flex flex-col gap-1" style={{ backgroundColor: "#F1F6F2" }}>

            {/* Contact info */}
            <div className="flex flex-col gap-1.5 py-2 mb-1 text-xs" style={{ borderBottom: "1px solid #dde8e5", color: "#585858" }}>
              <a href={`tel:${PHONE.replace(/\D/g, "")}`}
                 className="flex items-center gap-2"
                 onMouseEnter={e => e.currentTarget.style.color = "#162525"}
                 onMouseLeave={e => e.currentTarget.style.color = "#585858"}>
                <svg className="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                {PHONE}
              </a>
              <a href={`mailto:${EMAIL}`}
                 className="flex items-center gap-2"
                 onMouseEnter={e => e.currentTarget.style.color = "#162525"}
                 onMouseLeave={e => e.currentTarget.style.color = "#585858"}>
                <svg className="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                {EMAIL}
              </a>
            </div>

            {/* Nav links — Services gets accordion */}
            {NAV_LINKS.map((link) => {
              if (!link.hasMega) {
                return (
                  <a key={link.href} href={link.href}
                     className="text-sm font-medium px-3 py-2.5 rounded transition-colors duration-150"
                     style={{ color: "#585858" }}
                     onMouseEnter={e => { e.currentTarget.style.color = "#162525"; e.currentTarget.style.backgroundColor = "#dde8e5" }}
                     onMouseLeave={e => { e.currentTarget.style.color = "#585858"; e.currentTarget.style.backgroundColor = "transparent" }}
                     onClick={() => setMenuOpen(false)}>
                    {link.label}
                  </a>
                )
              }

              return (
                <div key={link.href}>
                  {/* Accordion toggle */}
                  <button
                    onClick={() => setMobileSvc(prev => !prev)}
                    style={{
                      width:           "100%",
                      display:         "flex",
                      alignItems:      "center",
                      justifyContent:  "space-between",
                      padding:         "0.625rem 0.75rem",
                      borderRadius:    "0.375rem",
                      fontSize:        "0.875rem",
                      fontWeight:      500,
                      color:           mobileServices ? "#162525" : "#585858",
                      background:      mobileServices ? "#dde8e5" : "transparent",
                      border:          "none",
                      cursor:          "pointer",
                      transition:      "background 0.15s, color 0.15s",
                    }}
                  >
                    {link.label}
                    <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         style={{ transition: "transform 0.2s", transform: mobileServices ? "rotate(180deg)" : "rotate(0)" }}>
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                    </svg>
                  </button>

                  {/* Accordion body */}
                  <div style={{
                    maxHeight:  mobileServices ? "600px" : "0",
                    overflow:   "hidden",
                    transition: "max-height 0.3s ease",
                  }}>
                    <div style={{
                      margin:       "0.25rem 0 0.25rem 0.75rem",
                      paddingLeft:  "0.75rem",
                      borderLeft:   "2px solid #dde8e5",
                      display:      "flex",
                      flexDirection:"column",
                      gap:          "0.125rem",
                    }}>
                      {SERVICES.map((s) => (
                        <a key={s.href} href={s.href}
                           onClick={() => { setMenuOpen(false); setMobileSvc(false) }}
                           style={{
                             display:        "flex",
                             alignItems:     "flex-start",
                             gap:            "0.625rem",
                             padding:        "0.5rem 0.5rem",
                             borderRadius:   "0.375rem",
                             textDecoration: "none",
                             transition:     "background 0.15s",
                           }}
                           onMouseEnter={e => e.currentTarget.style.background = "#dde8e5"}
                           onMouseLeave={e => e.currentTarget.style.background = "transparent"}
                        >
                          <span style={{ fontSize: "0.65rem", fontWeight: 700, color: "#2A9D93", marginTop: "2px", minWidth: "1.5rem" }}>
                            {s.num}
                          </span>
                          <div>
                            <p style={{ fontSize: "0.8125rem", fontWeight: 600, color: "#162525", margin: 0, lineHeight: 1.3 }}>
                              {s.title}
                            </p>
                            <p style={{ fontSize: "0.7rem", color: "#7fa89e", margin: "0.1rem 0 0", lineHeight: 1.3 }}>
                              {s.tag}
                            </p>
                          </div>
                        </a>
                      ))}
                      <a href="/services"
                         onClick={() => { setMenuOpen(false); setMobileSvc(false) }}
                         style={{
                           display:        "flex",
                           alignItems:     "center",
                           gap:            "0.375rem",
                           padding:        "0.5rem 0.5rem",
                           fontSize:       "0.8rem",
                           fontWeight:     700,
                           color:          "#2A9D93",
                           textDecoration: "none",
                         }}>
                        View All Services →
                      </a>
                    </div>
                  </div>
                </div>
              )
            })}

            <a href="/contact-us"
               className="mt-2 text-center text-sm font-semibold px-5 py-3 rounded transition-colors duration-200"
               style={{ background: "linear-gradient(135deg, #6FC061, #2A9D93)", color: "#F1F6F2" }}
               onMouseEnter={e => e.currentTarget.style.opacity = "0.88"}
               onMouseLeave={e => e.currentTarget.style.opacity = "1"}>
              Request a Scope Review
            </a>
          </div>
        </div>
      </nav>
    </header>
  )
}

export default Navbar