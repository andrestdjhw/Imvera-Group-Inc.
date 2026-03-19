import React from "react"

const SERVICES = [
  "ECO Grip Flooring",
  "Cabinets & Countertops",
  "Acoustical Ceilings",
  "FRP Installation",
  "Drywall & Finishing",
  "Metal Framing",
]

const MARKETS = [
  "Atlanta, GA",
  "Charlotte, NC",
  "Nashville, TN",
  "Raleigh, NC",
  "And across the Southeast",
]

const NAV_LINKS = [
  { label: "Home", href: "/" },
  { label: "About Us", href: "/about-us" },
  { label: "Services", href: "/services" },
  { label: "Gallery", href: "/gallery" },
  { label: "Markets We Serve", href: "/markets-we-serve" },
  { label: "Contact Us", href: "/contact-us" },
]

const PHONE = "678-836-3266"
const HEADQUARTERS = "Duluth, Georgia"

function Footer() {
  return (
    <footer className="bg-[#0f1c2e] text-white mt-auto">

      {/* ── CTA Banner ── */}
      <div className="border-b border-white/10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col sm:flex-row items-center justify-between gap-4">
          <div>
            <p className="text-lg font-semibold text-white">Ready to start your next project?</p>
            <p className="text-sm text-gray-400 mt-0.5">Our team is ready to walk you through every detail.</p>
          </div>
          <a
            href="/contact-us"
            className="inline-flex items-center gap-2 bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] font-semibold text-sm px-6 py-3 rounded transition-colors duration-200 whitespace-nowrap flex-shrink-0"
          >
            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Request a Scope Review
          </a>
        </div>
      </div>

      {/* ── Main Footer Grid ── */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

          {/* Column 1 — Brand */}
          <div className="lg:col-span-1">
            <div className="flex items-center gap-2 mb-3">
              <div className="w-8 h-8 bg-[#d4a843] rounded flex items-center justify-center flex-shrink-0">
                <span className="text-[#0f1c2e] font-bold text-sm leading-none">IG</span>
              </div>
              <span className="font-bold text-white text-lg tracking-tight">
                Imvera<span className="text-[#d4a843]">.</span>
              </span>
            </div>
            <p className="text-sm font-semibold text-white">Imvera Group Inc.</p>
            <p className="text-xs text-gray-400 mt-1 leading-relaxed">
              Commercial Interior Construction<br />
              Southeast United States
            </p>
            <div className="mt-5 flex flex-col gap-2 text-xs text-gray-400">
              <a
                href={`tel:${PHONE.replace(/\D/g, "")}`}
                className="flex items-center gap-2 hover:text-white transition-colors duration-200"
              >
                <svg className="w-3.5 h-3.5 text-[#d4a843] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                {PHONE}
              </a>
              <div className="flex items-center gap-2">
                <svg className="w-3.5 h-3.5 text-[#d4a843] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                {HEADQUARTERS}
              </div>
            </div>
          </div>

          {/* Column 2 — Services */}
          <div>
            <h4 className="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-4">
              Our Services
            </h4>
            <ul className="flex flex-col gap-2">
              {SERVICES.map((service) => (
                <li key={service}>
                  <a
                    href="/services"
                    className="text-sm text-gray-400 hover:text-white transition-colors duration-200 flex items-center gap-2 group"
                  >
                    <span className="w-1 h-1 rounded-full bg-[#d4a843] flex-shrink-0 opacity-60 group-hover:opacity-100 transition-opacity" />
                    {service}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Column 3 — Markets */}
          <div>
            <h4 className="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-4">
              Markets We Serve
            </h4>
            <ul className="flex flex-col gap-2">
              {MARKETS.map((market) => (
                <li key={market}>
                  <a
                    href="/markets-we-serve"
                    className="text-sm text-gray-400 hover:text-white transition-colors duration-200 flex items-center gap-2 group"
                  >
                    <span className="w-1 h-1 rounded-full bg-[#d4a843] flex-shrink-0 opacity-60 group-hover:opacity-100 transition-opacity" />
                    {market}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Column 4 — Helpful Links */}
          <div>
            <h4 className="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-4">
              Helpful Links
            </h4>
            <ul className="flex flex-col gap-2">
              {NAV_LINKS.map((link) => (
                <li key={link.href}>
                  <a
                    href={link.href}
                    className="text-sm text-gray-400 hover:text-white transition-colors duration-200 flex items-center gap-2 group"
                  >
                    <span className="w-1 h-1 rounded-full bg-[#d4a843] flex-shrink-0 opacity-60 group-hover:opacity-100 transition-opacity" />
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

        </div>
      </div>

      {/* ── Bottom Bar ── */}
      <div className="border-t border-white/10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-gray-500">
          <p>© 2026 Imvera Group Inc. All Rights Reserved.</p>
          <div className="flex items-center gap-4">
            <a href="/privacy-policy" className="hover:text-gray-300 transition-colors duration-200">
              Privacy Policy
            </a>
            <span className="text-white/20">·</span>
            <a href="/terms-and-conditions" className="hover:text-gray-300 transition-colors duration-200">
              Terms &amp; Conditions
            </a>
          </div>
        </div>
      </div>

    </footer>
  )
}

export default Footer