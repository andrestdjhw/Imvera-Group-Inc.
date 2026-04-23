import React, { useEffect, useMemo, useRef, useState } from "react"

// ── Config ────────────────────────────────────────────────────
const PHONE_DISPLAY  = "678-836-3266"
const PHONE_LINK     = "tel:6788363266"
const EMAIL_DISPLAY  = "info@imveragroup.com"
const EMAIL_LINK     = "mailto:info@imveragroup.com"
const CONTACT_LINK   = "/contact-us"
const SERVICES_LINK  = "/services"
const MARKETS_LINK   = "/markets-we-serve"
const ABOUT_LINK     = "/about-us"

// ── Icons ─────────────────────────────────────────────────────

function BotIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z"
        stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
      <path d="M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2"
        stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
      <circle cx="9.25" cy="10.25" r="1" fill="currentColor" />
      <circle cx="14.75" cy="10.25" r="1" fill="currentColor" />
    </svg>
  )
}

function CloseIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M6 6L18 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
      <path d="M18 6L6 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
    </svg>
  )
}

function SendIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M21 3L10 14" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" />
      <path d="M21 3L14 21L10 14L3 10L21 3Z" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" />
    </svg>
  )
}

function PhoneIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z"
        stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
    </svg>
  )
}

function LinkIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M14 5H19V10" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
      <path d="M10 14L19 5" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
      <path d="M19 14V18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1H10"
        stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
    </svg>
  )
}

// ── Bot logic ─────────────────────────────────────────────────

function msg(text, links = []) {
  return { id: Date.now() + Math.random(), text, sender: "bot", timestamp: new Date(), links }
}

function getBotResponse(rawInput) {
  const i = rawInput.toLowerCase()

  // ECO Grip
  if (i.includes("eco grip") || i.includes("flooring") || i.includes("floor") || i.includes("kitchen floor")) {
    return msg(
      "ECO Grip is Imvera's highest-margin service and a key differentiator. We are a certified ECO Grip installer — one of a select group authorized in the Southeast. Our crews handle demolition, adhesive application, seam sealing, drain integration, and full equipment reinstallation. 480 sq ft per day with a 3-person crew.",
      [{ label: "ECO Grip Service", href: "/services/eco-grip-flooring" }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Cabinets & Countertops
  if (i.includes("cabinet") || i.includes("countertop") || i.includes("corian") || i.includes("casework")) {
    return msg(
      "Imvera installs Corian countertops and commercial casework to a zero-defect finishing standard. Our installation crews are dedicated to this trade — not rotated from framing or drywall. No errors, no exceptions. This is the highest-visibility finish work on any commercial interior.",
      [{ label: "Cabinets & Countertops", href: "/services/cabinets-countertops" }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Acoustical Ceilings
  if (i.includes("ceiling") || i.includes("acoustical") || i.includes("armstrong") || i.includes("usg") || i.includes("t-bar")) {
    return msg(
      "Imvera installs Armstrong and USG acoustical ceiling systems with a 2-person crew capable of 1,400 sq ft per day. We also fix what other contractors leave behind — re-cutting tile reveals, re-leveling grids, and coordinating MEP. We pass inspection first time.",
      [{ label: "Acoustical Ceilings", href: "/services/acoustical-ceilings" }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // FRP
  if (i.includes("frp") || i.includes("fiberglass") || i.includes("wall panel") || i.includes("food service wall")) {
    return msg(
      "Imvera installs Southern Building Products FRP wall panels using Fast Grab adhesive for commercial kitchens, restrooms, healthcare, and retail environments. 480 sq ft per day with a 3-person crew. Cove base available where specified. No trim moldings.",
      [{ label: "FRP Installation", href: "/services/frp-installation" }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Drywall
  if (i.includes("drywall") || i.includes("finishing") || i.includes("hanging") || i.includes("taping") || i.includes("mudding") || i.includes("smooth wall")) {
    return msg(
      "Imvera self-performs all phases — hanging, taping, mudding, and patching — with dedicated crews. Fire-rated and moisture-resistant assemblies. Smooth walls only, no textures. 480 sheets per week with a 2-person crew. Clean tools, formal job starts, no phones on site.",
      [{ label: "Drywall & Finishing", href: "/services/drywall-finishing" }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Metal Framing
  if (i.includes("framing") || i.includes("metal framing") || i.includes("steel") || i.includes("gauge") || i.includes("partition")) {
    return msg(
      "Imvera provides non-structural interior metal framing in 16, 18, and 20 gauge steel, executed from structural drawings. English-speaking foreman on every project. Full PPE on every site. Layouts verified before framing starts. We pass framing and ACT inspections first submission.",
      [{ label: "Metal Framing", href: "/services/metal-framing" }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Multi-trade
  if (i.includes("multi") || i.includes("multiple trade") || i.includes("all trades") || i.includes("single contract") || i.includes("package")) {
    return msg(
      "Multi-trade execution under one contract is one of Imvera's core advantages. Framing, drywall, ceilings, flooring, FRP, and cabinetry can all be scoped together — one contract, one point of contact, one execution standard across the entire interior package.",
      [{ label: "View All Services", href: SERVICES_LINK }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Warranty
  if (i.includes("warranty") || i.includes("guarantee") || i.includes("workmanship")) {
    return msg(
      "All completed installations are backed by a 1-year workmanship warranty. Imvera stands behind every scope we execute.",
      [{ label: "About Us", href: ABOUT_LINK }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // ECO Grip certification
  if (i.includes("certified") || i.includes("certification") || i.includes("authorized")) {
    return msg(
      "Yes — Imvera holds certified installer status for ECO Grip commercial flooring systems. This certification is required by leading national food service operators before awarding flooring contracts. It is not common among Southeast commercial flooring contractors.",
      [{ label: "ECO Grip Service", href: "/services/eco-grip-flooring" }, { label: "About Us", href: ABOUT_LINK }]
    )
  }

  // Communication / daily updates
  if (i.includes("communication") || i.includes("update") || i.includes("photo") || i.includes("daily") || i.includes("report")) {
    return msg(
      "GC partners receive daily progress updates with photo documentation throughout every active project. Issues are reported immediately before they affect schedule. You receive information without having to ask for it.",
      [{ label: "About Us", href: ABOUT_LINK }]
    )
  }

  // Self-performed / crews
  if (i.includes("self-perform") || i.includes("brokered") || i.includes("crew") || i.includes("labor") || i.includes("workers")) {
    return msg(
      "Every trade Imvera executes is self-performed by our own dedicated crews — not brokered to third-party labor. Dedicated means accountable. The same execution standard on every project, in every state.",
      [{ label: "About Us", href: ABOUT_LINK }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Markets / states / locations
  if (i.includes("state") || i.includes("market") || i.includes("location") || i.includes("atlanta") || i.includes("charlotte") || i.includes("nashville") || i.includes("raleigh") || i.includes("georgia") || i.includes("florida") || i.includes("texas") || i.includes("kentucky") || i.includes("carolina") || i.includes("tennessee") || i.includes("southeast")) {
    return msg(
      "Imvera maintains active operations across Georgia, North Carolina, South Carolina, Tennessee, Texas, Kentucky, and Florida. Primary markets are Atlanta, Charlotte, Nashville, and the Raleigh-Durham Triangle. The same execution standard in every location.",
      [{ label: "Markets We Serve", href: MARKETS_LINK }, { label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Quote / scope review
  if (i.includes("quote") || i.includes("estimate") || i.includes("scope") || i.includes("bid") || i.includes("proposal")) {
    return msg(
      "You can request a scope review through the contact page. Imvera responds to all project inquiries within one business day with a direct response — no auto-replies.",
      [{ label: "Request a Scope Review", href: CONTACT_LINK }]
    )
  }

  // Contact
  if (i.includes("contact") || i.includes("phone") || i.includes("email") || i.includes("call") || i.includes("reach")) {
    return msg(
      "You can reach Imvera Group by phone or through the contact form. All project inquiries receive a direct response within one business day.",
      [{ label: PHONE_DISPLAY, href: PHONE_LINK }, { label: "Contact Us", href: CONTACT_LINK }]
    )
  }

  // Gallery
  if (i.includes("gallery") || i.includes("photo") || i.includes("project") || i.includes("work") || i.includes("example")) {
    return msg(
      "The gallery shows completed commercial interior projects across all six trades — ECO Grip flooring, drywall, framing, ceilings, FRP, and casework — executed across the Southeast.",
      [{ label: "View Gallery", href: GALLERY_LINK }]
    )
  }

  // Default
  return msg(
    "I can help with ECO Grip flooring, cabinets & countertops, acoustical ceilings, FRP installation, drywall & finishing, metal framing, multi-trade scopes, service areas, certification, or requesting a scope review.",
    [{ label: "Request a Scope Review", href: CONTACT_LINK }, { label: "Call Us", href: PHONE_LINK }]
  )
}

// ── Component ─────────────────────────────────────────────────

function ImveraChatbot() {
  const [isOpen,        setIsOpen]        = useState(false)
  const [inputMessage,  setInputMessage]  = useState("")
  const [isTyping,      setIsTyping]      = useState(false)
  const [messages,      setMessages]      = useState([
    {
      id: 1,
      text: "Hi — I'm the Imvera Group assistant. I can help with our six commercial interior trades, service areas, certifications, and requesting a scope review.",
      sender: "bot",
      timestamp: new Date(),
      links: [
        { label: "Request a Scope Review", href: CONTACT_LINK },
        { label: "Call Us", href: PHONE_LINK },
      ]
    }
  ])

  const endRef = useRef(null)

  const quickActions = useMemo(() => [
    { text: "ECO Grip Flooring",      icon: "🏗️" },
    { text: "Acoustical Ceilings",    icon: "🔲" },
    { text: "Drywall & Finishing",    icon: "🧱" },
    { text: "Metal Framing",          icon: "⚙️" },
    { text: "FRP Installation",       icon: "🛡️" },
    { text: "Cabinets & Countertops", icon: "🪵" },
  ], [])

  useEffect(() => {
    endRef.current?.scrollIntoView({ behavior: "smooth" })
  }, [messages, isTyping])

  function handleSend(e) {
    e?.preventDefault?.()
    if (!inputMessage.trim()) return
    const text = inputMessage.trim()
    setMessages(prev => [...prev, { id: Date.now(), text, sender: "user", timestamp: new Date() }])
    setInputMessage("")
    setIsTyping(true)
    setTimeout(() => {
      setMessages(prev => [...prev, getBotResponse(text)])
      setIsTyping(false)
    }, 650)
  }

  return (
    <div className="fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5">

      {/* ── Chat window ── */}
      {isOpen && (
        <div className="mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden rounded-[24px] sm:h-[33rem]"
             style={{ boxShadow: "0 22px 50px rgba(22,37,37,0.18)", border: "1px solid rgba(22,37,37,0.12)", background: "#F1F6F2" }}>

          {/* Header */}
          <div className="relative overflow-hidden px-4 py-3 text-white"
               style={{ background: "linear-gradient(135deg, #162525 0%, #1e3333 50%, #2A9D93 130%)", borderBottom: "1px solid rgba(241,246,242,0.1)" }}>
            {/* Subtle grid texture */}
            <div className="absolute inset-0 opacity-[0.06]"
                 style={{ backgroundImage: "linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent)", backgroundSize: "18px 18px" }} />

            <div className="relative flex items-start justify-between gap-3">
              <div className="flex items-center gap-3">
                <div className="flex h-10 w-10 items-center justify-center rounded-full"
                     style={{ background: "rgba(42,157,147,0.2)", border: "1px solid rgba(42,157,147,0.4)" }}>
                  <BotIcon className="h-5 w-5" />
                </div>
                <div>
                  <p className="text-[11px] font-black uppercase tracking-[0.18em]"
                     style={{ color: "#2A9D93" }}>
                    Execution. Certainty. No Drama.
                  </p>
                  <h3 className="mt-1 text-[0.92rem] font-bold tracking-[-0.01em]">
                    Imvera Group Assistant
                  </h3>
                  <div className="mt-0.5 flex items-center gap-1.5">
                    <span className="h-1.5 w-1.5 rounded-full"
                          style={{ background: "#6FC061" }} />
                    <p className="text-[11px] font-semibold uppercase tracking-[0.14em]"
                       style={{ color: "rgba(241,246,242,0.7)" }}>Online now</p>
                  </div>
                </div>
              </div>

              <button type="button" onClick={() => setIsOpen(false)}
                      className="inline-flex h-8 w-8 items-center justify-center rounded-full transition"
                      style={{ background: "rgba(241,246,242,0.1)", border: "1px solid rgba(241,246,242,0.15)" }}
                      onMouseEnter={e => { e.currentTarget.style.background = "#F1F6F2"; e.currentTarget.style.color = "#162525" }}
                      onMouseLeave={e => { e.currentTarget.style.background = "rgba(241,246,242,0.1)"; e.currentTarget.style.color = "white" }}
                      aria-label="Close chat">
                <CloseIcon className="h-4 w-4" />
              </button>
            </div>
          </div>

          {/* Messages */}
          <div className="flex-1 overflow-y-auto px-3 py-3" style={{ background: "#F1F6F2" }}>
            <div className="space-y-3">
              {messages.map(message => (
                <div key={message.id} className={`flex ${message.sender === "user" ? "justify-end" : "justify-start"}`}>
                  <div className={`max-w-[88%] rounded-[18px] px-3.5 py-3 text-[0.875rem] leading-6`}
                       style={message.sender === "user"
                         ? { background: "#162525", color: "#F1F6F2", borderRadius: "18px 18px 4px 18px", boxShadow: "0 2px 8px rgba(22,37,37,0.18)" }
                         : { background: "#fff", color: "#162525", borderRadius: "18px 18px 18px 4px", border: "1px solid rgba(22,37,37,0.08)", boxShadow: "0 2px 6px rgba(22,37,37,0.06)" }}>
                    <p className="m-0">{message.text}</p>
                    {message.links?.length > 0 && (
                      <div className="mt-3 flex flex-wrap gap-2">
                        {message.links.map(link => (
                          <a key={`${message.id}-${link.href}`} href={link.href}
                             className="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1.5 text-[11px] font-bold transition"
                             style={{ background: "#F1F6F2", border: "1px solid rgba(22,37,37,0.1)", color: "#2A9D93" }}
                             onMouseEnter={e => { e.currentTarget.style.borderColor = "#2A9D93"; e.currentTarget.style.color = "#162525" }}
                             onMouseLeave={e => { e.currentTarget.style.borderColor = "rgba(22,37,37,0.1)"; e.currentTarget.style.color = "#2A9D93" }}>
                            <LinkIcon className="h-3.5 w-3.5" />
                            <span>{link.label}</span>
                          </a>
                        ))}
                      </div>
                    )}
                  </div>
                </div>
              ))}

              {/* Typing indicator */}
              {isTyping && (
                <div className="flex justify-start">
                  <div className="rounded-[18px] px-4 py-3"
                       style={{ background: "#fff", border: "1px solid rgba(22,37,37,0.08)", borderRadius: "18px 18px 18px 4px", boxShadow: "0 2px 6px rgba(22,37,37,0.06)" }}>
                    <div className="flex gap-1.5">
                      <span className="h-2.5 w-2.5 animate-pulse rounded-full" style={{ background: "#162525" }} />
                      <span className="h-2.5 w-2.5 animate-pulse rounded-full" style={{ background: "#2A9D93", animationDelay: "0.2s" }} />
                      <span className="h-2.5 w-2.5 animate-pulse rounded-full" style={{ background: "#6FC061", animationDelay: "0.4s" }} />
                    </div>
                  </div>
                </div>
              )}

              <div ref={endRef} />
            </div>
          </div>

          {/* Quick actions (first message only) */}
          {messages.length === 1 && (
            <div className="border-t px-3 py-3" style={{ borderColor: "rgba(22,37,37,0.08)", background: "#fff" }}>
              <p className="mb-2 text-[0.68rem] font-black uppercase tracking-[0.12em]" style={{ color: "#2A9D93" }}>
                Our six trades
              </p>
              <div className="flex flex-wrap gap-2">
                {quickActions.map(action => (
                  <button key={action.text} type="button"
                          onClick={() => setInputMessage(action.text)}
                          className="rounded-full px-2.5 py-1.5 text-[11px] font-bold transition"
                          style={{ background: "#F1F6F2", border: "1px solid rgba(22,37,37,0.1)", color: "#162525" }}
                          onMouseEnter={e => { e.currentTarget.style.borderColor = "#2A9D93"; e.currentTarget.style.background = "rgba(42,157,147,0.08)"; e.currentTarget.style.color = "#2A9D93" }}
                          onMouseLeave={e => { e.currentTarget.style.borderColor = "rgba(22,37,37,0.1)"; e.currentTarget.style.background = "#F1F6F2"; e.currentTarget.style.color = "#162525" }}>
                    <span className="mr-1">{action.icon}</span>
                    {action.text}
                  </button>
                ))}
              </div>
            </div>
          )}

          {/* Input */}
          <div className="border-t p-3" style={{ borderColor: "rgba(22,37,37,0.08)", background: "#fff" }}>
            <form onSubmit={handleSend} className="flex items-center gap-2">
              <input
                type="text"
                value={inputMessage}
                onChange={e => setInputMessage(e.target.value)}
                placeholder="Ask about our trades or services…"
                className="min-w-0 flex-1 rounded-full px-4 py-2.5 text-sm outline-none transition"
                style={{ background: "#F1F6F2", border: "1px solid rgba(22,37,37,0.1)", color: "#162525" }}
                onFocus={e => { e.currentTarget.style.borderColor = "#2A9D93"; e.currentTarget.style.background = "#fff" }}
                onBlur={e => { e.currentTarget.style.borderColor = "rgba(22,37,37,0.1)"; e.currentTarget.style.background = "#F1F6F2" }}
              />
              <button type="submit" disabled={!inputMessage.trim()}
                      className="inline-flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full text-white transition"
                      style={{ background: "linear-gradient(135deg, #6FC061, #2A9D93)", boxShadow: "0 8px 20px rgba(42,157,147,0.3)" }}
                      onMouseEnter={e => { e.currentTarget.style.opacity = "0.88" }}
                      onMouseLeave={e => { e.currentTarget.style.opacity = "1" }}
                      aria-label="Send message">
                <SendIcon className="h-4 w-4" />
              </button>
            </form>

            <div className="mt-3 flex flex-wrap items-center gap-3 text-[11px] font-semibold" style={{ color: "rgba(22,37,37,0.5)" }}>
              <a href={PHONE_LINK} className="inline-flex items-center gap-1.5 transition"
                 onMouseEnter={e => e.currentTarget.style.color = "#2A9D93"}
                 onMouseLeave={e => e.currentTarget.style.color = "rgba(22,37,37,0.5)"}>
                <PhoneIcon className="h-3.5 w-3.5" />
                <span>{PHONE_DISPLAY}</span>
              </a>
              <a href={EMAIL_LINK} className="truncate transition"
                 onMouseEnter={e => e.currentTarget.style.color = "#2A9D93"}
                 onMouseLeave={e => e.currentTarget.style.color = "rgba(22,37,37,0.5)"}>
                {EMAIL_DISPLAY}
              </a>
            </div>
          </div>

        </div>
      )}

      {/* ── FAB button ── */}
      <button type="button" onClick={() => setIsOpen(prev => !prev)}
              className="group relative flex h-14 w-14 items-center justify-center rounded-full text-white transition-all duration-300"
              style={{
                background: isOpen ? "#162525" : "linear-gradient(135deg, #162525 0%, #2A9D93 80%, #6FC061 140%)",
                boxShadow: "0 18px 40px rgba(22,37,37,0.28)",
              }}
              onMouseEnter={e => { e.currentTarget.style.transform = "scale(1.05)" }}
              onMouseLeave={e => { e.currentTarget.style.transform = "scale(1)" }}
              aria-label={isOpen ? "Close chat" : "Open chat"}>

        {/* Ping dot */}
        {!isOpen && (
          <span className="absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5">
            <span className="absolute inline-flex h-full w-full animate-ping rounded-full opacity-75"
                  style={{ background: "#6FC061" }} />
            <span className="relative inline-flex h-3.5 w-3.5 rounded-full"
                  style={{ background: "#6FC061" }} />
          </span>
        )}

        {isOpen ? <CloseIcon className="h-5 w-5" /> : <BotIcon className="h-6 w-6" />}
      </button>

    </div>
  )
}

export default ImveraChatbot