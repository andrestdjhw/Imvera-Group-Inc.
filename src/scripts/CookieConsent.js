import React, { useEffect, useState } from "react"

// ── Config ────────────────────────────────────────────────────
const STORAGE_KEY     = "imvera_cookie_consent"
const PRIVACY_LINK    = "/privacy-policy"
const TERMS_LINK      = "/terms-and-conditions"

// ── Icon ──────────────────────────────────────────────────────

function CookieIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M21 12.5c0 5.25-4.25 8.5-9 8.5s-9-3.25-9-8.5C3 7.25 8 3 12 3c.4 0 .5.4.3.7-.3.5-.4 1.1-.1 1.6.4.7 1.3.9 2 .5.5-.3 1.1-.2 1.4.3.4.7 1.2.9 1.9.5.6-.3 1.3 0 1.5.6.3.9 1.1 1.5 2 1.5.6 0 1 .4 1 .8Z"
        stroke="currentColor" strokeWidth="1.6" strokeLinejoin="round" />
      <circle cx="9.2" cy="12.2" r="1" fill="currentColor" />
      <circle cx="13.2" cy="15.8" r="1" fill="currentColor" />
      <circle cx="12.5" cy="10.5" r="1" fill="currentColor" />
      <circle cx="8.8" cy="16.2" r="1" fill="currentColor" />
    </svg>
  )
}

// ── Component ─────────────────────────────────────────────────

function CookieConsent() {
  const [isOpen, setIsOpen] = useState(false)

  useEffect(() => {
    try {
      const stored = window.localStorage.getItem(STORAGE_KEY)
      if (!stored) setIsOpen(true)
    } catch (e) {
      // localStorage unavailable (private mode, etc.) — show the modal anyway
      setIsOpen(true)
    }
  }, [])

  function saveChoice(choice) {
    try {
      window.localStorage.setItem(STORAGE_KEY, JSON.stringify({ choice, date: new Date().toISOString() }))
    } catch (e) {
      // ignore — storage not available
    }
    setIsOpen(false)
  }

  if (!isOpen) return null

  return (
    <div className="fixed inset-0 z-[10000] flex items-end justify-center p-4 sm:items-center sm:p-6"
         role="dialog" aria-modal="true" aria-labelledby="cookie-consent-title">

      {/* Backdrop */}
      <div className="absolute inset-0" style={{ background: "rgba(22,37,37,0.55)", backdropFilter: "blur(2px)" }} />

      {/* Modal card */}
      <div className="relative w-full max-w-md overflow-hidden rounded-[24px]"
           style={{ boxShadow: "0 22px 50px rgba(22,37,37,0.28)", border: "1px solid rgba(22,37,37,0.12)", background: "#F1F6F2" }}>

        {/* Header */}
        <div className="relative overflow-hidden px-5 py-4 text-white"
             style={{ background: "linear-gradient(135deg, #162525 0%, #1e3333 50%, #2A9D93 130%)" }}>
          <div className="absolute inset-0 opacity-[0.06]"
               style={{ backgroundImage: "linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent)", backgroundSize: "18px 18px" }} />
          <div className="relative flex items-center gap-3">
            <div className="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full"
                 style={{ background: "rgba(42,157,147,0.2)", border: "1px solid rgba(42,157,147,0.4)" }}>
              <CookieIcon className="h-5 w-5" />
            </div>
            <h3 id="cookie-consent-title" className="text-[0.98rem] font-bold tracking-[-0.01em]">
              We value your privacy
            </h3>
          </div>
        </div>

        {/* Body */}
        <div className="px-5 py-4" style={{ background: "#F1F6F2" }}>
          <p className="m-0 text-[0.875rem] leading-6" style={{ color: "#162525" }}>
            Imvera Group uses cookies to improve your browsing experience, analyze site traffic, and personalize content.
            By clicking &ldquo;Accept&rdquo; you agree to our use of cookies as described in our{" "}
            <a href={PRIVACY_LINK}
               className="font-semibold underline decoration-1 underline-offset-2"
               style={{ color: "#2A9D93" }}>
              Privacy Policy
            </a>{" "}
            and{" "}
            <a href={TERMS_LINK}
               className="font-semibold underline decoration-1 underline-offset-2"
               style={{ color: "#2A9D93" }}>
              Terms &amp; Conditions
            </a>.
          </p>

          {/* Actions */}
          <div className="mt-5 flex flex-col-reverse gap-2.5 sm:flex-row sm:justify-end">
            <button type="button" onClick={() => saveChoice("rejected")}
                    className="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-bold transition"
                    style={{ background: "#F1F6F2", border: "1px solid rgba(22,37,37,0.18)", color: "#162525" }}
                    onMouseEnter={e => { e.currentTarget.style.borderColor = "#2A9D93"; e.currentTarget.style.color = "#2A9D93" }}
                    onMouseLeave={e => { e.currentTarget.style.borderColor = "rgba(22,37,37,0.18)"; e.currentTarget.style.color = "#162525" }}>
              Reject Non-Essential
            </button>
            <button type="button" onClick={() => saveChoice("accepted")}
                    className="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-bold text-white transition"
                    style={{ background: "linear-gradient(135deg, #6FC061, #2A9D93)", boxShadow: "0 8px 20px rgba(42,157,147,0.3)" }}
                    onMouseEnter={e => { e.currentTarget.style.opacity = "0.88" }}
                    onMouseLeave={e => { e.currentTarget.style.opacity = "1" }}>
              Accept All
            </button>
          </div>
        </div>

      </div>
    </div>
  )
}

export default CookieConsent
