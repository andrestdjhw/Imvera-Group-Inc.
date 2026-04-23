import React, { useState, useEffect, useRef } from "react"

/*
 * ContactForm — Standalone reusable component
 * ─────────────────────────────────────────────────────────────
 * Dependencies:
 *   npm install @emailjs/browser
 *
 * Setup:
 *   1. Replace the three EmailJS constants below with your real values
 *   2. Replace RECAPTCHA_SITE_KEY with your reCAPTCHA v2 site key
 *   3. In your EmailJS template, map these variables:
 *      {{from_name}}, {{company}}, {{phone}}, {{reply_to}},
 *      {{service}}, {{state}}, {{message}}
 * ─────────────────────────────────────────────────────────────
 */

// ── EmailJS config ────────────────────────────────────────────
const EMAILJS_SERVICE_ID  = "service_9nox164"   // e.g. "service_xxxxxxx"
const EMAILJS_TEMPLATE_ID = "template_vfnpi35"  // e.g. "template_xxxxxxx"
const EMAILJS_PUBLIC_KEY  = "eLgbIY6jJeClI38Z5"   // e.g. "xxxxxxxxxxxxxxxxxxxx"

// ── reCAPTCHA v2 config ───────────────────────────────────────
const RECAPTCHA_SITE_KEY  = "6LeZGsUsAAAAAA28bhe_ldEX8X_9pgWrjK1mXXB7"

// ─────────────────────────────────────────────────────────────

const SERVICES = [
  { value: "",               label: "Select a service…",   disabled: true },
  { value: "eco-grip",       label: "ECO Grip Flooring" },
  { value: "cabinets",       label: "Cabinets & Countertops" },
  { value: "acoustical",     label: "Acoustical Ceilings" },
  { value: "frp",            label: "FRP Installation" },
  { value: "drywall",        label: "Drywall & Finishing" },
  { value: "metal-framing",  label: "Metal Framing" },
  { value: "multi-trade",    label: "Multi-Trade Package" },
]

const STATES = [
  { value: "",      label: "Select a state…", disabled: true },
  { value: "GA",    label: "Georgia" },
  { value: "NC",    label: "North Carolina" },
  { value: "SC",    label: "South Carolina" },
  { value: "TN",    label: "Tennessee" },
  { value: "TX",    label: "Texas" },
  { value: "KY",    label: "Kentucky" },
  { value: "FL",    label: "Florida" },
  { value: "other", label: "Other" },
]

// ── Style helpers ─────────────────────────────────────────────

function inputStyles(variant, focused) {
  const base = {
    width: "100%", borderRadius: "0.5rem", padding: "0.75rem 1rem",
    fontSize: "0.875rem", outline: "none",
    transition: "border-color 0.2s, background 0.2s",
    borderWidth: "1px", borderStyle: "solid",
  }
  if (variant === "light") {
    return { ...base, background: focused ? "#fff" : "#F1F6F2", borderColor: focused ? "#2A9D93" : "#dde8e5", color: "#162525" }
  }
  return { ...base, background: focused ? "rgba(241,246,242,0.09)" : "rgba(241,246,242,0.06)", borderColor: focused ? "rgba(42,157,147,0.6)" : "rgba(241,246,242,0.1)", color: "#fff" }
}

function selectStyles(variant, focused) {
  const base = {
    width: "100%", borderRadius: "0.5rem", padding: "0.75rem 1rem",
    fontSize: "0.875rem", outline: "none", appearance: "none",
    cursor: "pointer", transition: "border-color 0.2s",
    borderWidth: "1px", borderStyle: "solid",
  }
  if (variant === "light") {
    return { ...base, background: "#F1F6F2", borderColor: focused ? "#2A9D93" : "#dde8e5", color: "#162525" }
  }
  return { ...base, background: "#162525", borderColor: focused ? "rgba(42,157,147,0.6)" : "rgba(241,246,242,0.1)", color: "#b8d4ce" }
}

function labelColor(variant) {
  return variant === "light" ? "#162525" : "#7fa89e"
}

// ── Sub-components ────────────────────────────────────────────

function Field({ label, children }) {
  return (
    <div>
      <label style={{ display: "block", fontSize: "0.75rem", fontWeight: 600, marginBottom: "0.375rem" }}>
        {label}
      </label>
      {children}
    </div>
  )
}

function SelectWrapper({ children }) {
  return (
    <div style={{ position: "relative" }}>
      {children}
      <div style={{ pointerEvents: "none", position: "absolute", inset: "0 0.75rem 0 auto", display: "flex", alignItems: "center" }}>
        <svg width="16" height="16" fill="none" stroke="#585858" viewBox="0 0 24 24">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
        </svg>
      </div>
    </div>
  )
}

// ── reCAPTCHA v2 helpers ──────────────────────────────────────

let recaptchaScriptLoaded = false

function loadRecaptchaScript() {
  return new Promise((resolve) => {
    if (recaptchaScriptLoaded || window.grecaptcha) {
      recaptchaScriptLoaded = true
      resolve()
      return
    }
    const script = document.createElement("script")
    script.src   = "https://www.google.com/recaptcha/api.js?render=explicit"
    script.async = true
    script.defer = true
    script.onload = () => { recaptchaScriptLoaded = true; resolve() }
    document.head.appendChild(script)
  })
}

// ── Main component ────────────────────────────────────────────

function ContactForm({ variant = "dark", title, subtitle }) {

  const resolvedTitle    = title    || "Send an Inquiry"
  const resolvedSubtitle = subtitle || "Get a Response Within 1 Business Day"

  const [fields,      setFields]      = useState({ full_name: "", company: "", phone: "", email: "", service: "", state: "", message: "" })
  const [focused,     setFocused]     = useState({})
  const [agreed,      setAgreed]      = useState(false)
  const [agreeErr,    setAgreeErr]    = useState(false)
  const [captchaErr,  setCaptchaErr]  = useState(false)
  const [status,      setStatus]      = useState(null) // null | "sending" | "success" | "error"
  const [errMsg,      setErrMsg]      = useState("")

  const captchaRef    = useRef(null)   // div where widget renders
  const widgetIdRef   = useRef(null)   // grecaptcha widget ID

  const set     = (key) => (e) => setFields((prev) => ({ ...prev, [key]: e.target.value }))
  const onFocus = (key) => () => setFocused((prev) => ({ ...prev, [key]: true }))
  const onBlur  = (key) => () => setFocused((prev) => ({ ...prev, [key]: false }))

  // Load reCAPTCHA script and render widget when component mounts
  useEffect(() => {
    let cancelled = false

    async function init() {
      await loadRecaptchaScript()
      if (cancelled || !captchaRef.current || widgetIdRef.current !== null) return

      // Poll until grecaptcha.render is ready
      const tryRender = () => {
        if (window.grecaptcha && window.grecaptcha.render) {
          widgetIdRef.current = window.grecaptcha.render(captchaRef.current, {
            sitekey: RECAPTCHA_SITE_KEY,
            theme:   variant === "light" ? "light" : "dark",
            callback:        () => setCaptchaErr(false),
            "expired-callback": () => { widgetIdRef.current = null },
          })
        } else {
          setTimeout(tryRender, 100)
        }
      }
      tryRender()
    }

    init()
    return () => { cancelled = true }
  }, []) // eslint-disable-line react-hooks/exhaustive-deps

  async function handleSubmit(e) {
    e.preventDefault()

    // 1. Terms check
    if (!agreed) { setAgreeErr(true); return }
    setAgreeErr(false)

    // 2. reCAPTCHA v2 check
    const recaptchaToken = widgetIdRef.current !== null
      ? window.grecaptcha.getResponse(widgetIdRef.current)
      : window.grecaptcha?.getResponse()

    if (!recaptchaToken) { setCaptchaErr(true); return }
    setCaptchaErr(false)

    setStatus("sending")
    setErrMsg("")

    try {
      // 3. Dynamic import EmailJS
      const emailjs = (await import("@emailjs/browser")).default

      // 4. Build template params — must match your EmailJS template variables
      const templateParams = {
        from_name: fields.full_name,
        company:   fields.company,
        phone:     fields.phone,
        reply_to:  fields.email,
        service:   fields.service || "Not specified",
        state:     fields.state   || "Not specified",
        message:   fields.message || "—",
      }

      // 5. Send
      const result = await emailjs.send(
        EMAILJS_SERVICE_ID,
        EMAILJS_TEMPLATE_ID,
        templateParams,
        EMAILJS_PUBLIC_KEY
      )

      if (result.status === 200) {
        setStatus("success")
      } else {
        throw new Error(`EmailJS returned status ${result.status}`)
      }

    } catch (err) {
      console.error("ContactForm error:", err)
      setStatus("error")
      setErrMsg(err?.text || err?.message || "")
      // Reset reCAPTCHA so user can try again
      if (widgetIdRef.current !== null) {
        window.grecaptcha.reset(widgetIdRef.current)
      }
    }
  }

  const isDark       = variant !== "light"
  const lblColor     = labelColor(variant)
  const wrapperStyle = isDark
    ? { background: "rgba(241,246,242,0.04)", backdropFilter: "blur(8px)", border: "1px solid rgba(241,246,242,0.1)", borderRadius: "1rem", padding: "1.75rem" }
    : { background: "#fff", border: "1px solid #dde8e5", borderRadius: "1rem", padding: "2rem" }

  // ── Success state ─────────────────────────────────────────
  if (status === "success") {
    return (
      <div style={{ ...wrapperStyle, textAlign: "center", padding: "3rem 2rem" }}>
        <div style={{ width: "3rem", height: "3rem", borderRadius: "50%", background: "linear-gradient(135deg, #6FC061, #2A9D93)", display: "flex", alignItems: "center", justifyContent: "center", margin: "0 auto 1rem" }}>
          <svg width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2.5} d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <p style={{ color: isDark ? "#fff" : "#162525", fontWeight: 700, fontSize: "1rem", marginBottom: "0.5rem" }}>Inquiry Sent</p>
        <p style={{ color: isDark ? "#7fa89e" : "#585858", fontSize: "0.875rem", lineHeight: 1.6 }}>
          Thank you. A member of our team will respond within one business day.
        </p>
      </div>
    )
  }

  return (
    <div style={wrapperStyle}>

      {/* Header */}
      <div style={{ display: "flex", alignItems: "center", gap: "0.5rem", marginBottom: "0.25rem" }}>
        <div style={{ width: "1rem", height: "1rem", borderRadius: "0.2rem", background: "linear-gradient(135deg, #6FC061, #2A9D93)", flexShrink: 0 }} />
        <p style={{ fontSize: "0.75rem", fontWeight: 600, letterSpacing: "0.1em", textTransform: "uppercase", color: "#2A9D93" }}>
          {resolvedSubtitle}
        </p>
      </div>
      <h2 style={{ color: isDark ? "#fff" : "#162525", fontSize: "1.25rem", fontWeight: 700, marginBottom: "1.25rem" }}>
        {resolvedTitle}
      </h2>

      <form onSubmit={handleSubmit} style={{ display: "flex", flexDirection: "column", gap: "0.875rem" }}>

        {/* Row 1: Name + Company */}
        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "0.875rem" }} className="cf-grid-2">
          <Field label={<span style={{ color: lblColor }}>Full Name *</span>}>
            <input type="text" required placeholder="John Smith"
              value={fields.full_name} onChange={set("full_name")}
              onFocus={onFocus("full_name")} onBlur={onBlur("full_name")}
              style={inputStyles(variant, focused.full_name)} />
          </Field>
          <Field label={<span style={{ color: lblColor }}>Company *</span>}>
            <input type="text" required placeholder="ABC Construction"
              value={fields.company} onChange={set("company")}
              onFocus={onFocus("company")} onBlur={onBlur("company")}
              style={inputStyles(variant, focused.company)} />
          </Field>
        </div>

        {/* Row 2: Phone + Email */}
        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "0.875rem" }} className="cf-grid-2">
          <Field label={<span style={{ color: lblColor }}>Phone *</span>}>
            <input type="tel" required placeholder="(678) 000-0000"
              value={fields.phone} onChange={set("phone")}
              onFocus={onFocus("phone")} onBlur={onBlur("phone")}
              style={inputStyles(variant, focused.phone)} />
          </Field>
          <Field label={<span style={{ color: lblColor }}>Email *</span>}>
            <input type="email" required placeholder="john@company.com"
              value={fields.email} onChange={set("email")}
              onFocus={onFocus("email")} onBlur={onBlur("email")}
              style={inputStyles(variant, focused.email)} />
          </Field>
        </div>

        {/* Row 3: Service + State */}
        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "0.875rem" }} className="cf-grid-2">
          <Field label={<span style={{ color: lblColor }}>Service Needed</span>}>
            <SelectWrapper>
              <select value={fields.service} onChange={set("service")}
                onFocus={onFocus("service")} onBlur={onBlur("service")}
                style={selectStyles(variant, focused.service)}>
                {SERVICES.map((s) => <option key={s.value} value={s.value} disabled={s.disabled}>{s.label}</option>)}
              </select>
            </SelectWrapper>
          </Field>
          <Field label={<span style={{ color: lblColor }}>State</span>}>
            <SelectWrapper>
              <select value={fields.state} onChange={set("state")}
                onFocus={onFocus("state")} onBlur={onBlur("state")}
                style={selectStyles(variant, focused.state)}>
                {STATES.map((s) => <option key={s.value} value={s.value} disabled={s.disabled}>{s.label}</option>)}
              </select>
            </SelectWrapper>
          </Field>
        </div>

        {/* Message */}
        <Field label={<span style={{ color: lblColor }}>Message</span>}>
          <textarea rows={3} placeholder="Briefly describe your project scope…"
            value={fields.message} onChange={set("message")}
            onFocus={onFocus("message")} onBlur={onBlur("message")}
            style={{ ...inputStyles(variant, focused.message), resize: "none" }} />
        </Field>

        {/* reCAPTCHA v2 widget */}
        <div>
          <div ref={captchaRef} />
          {captchaErr && (
            <p style={{ fontSize: "0.7rem", color: "#f87171", display: "flex", alignItems: "center", gap: "0.25rem", marginTop: "0.375rem" }}>
              <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
              </svg>
              Please complete the reCAPTCHA verification.
            </p>
          )}
        </div>

        {/* Terms & Privacy checkbox */}
        <label style={{
          display: "flex", alignItems: "flex-start", gap: "0.625rem", cursor: "pointer",
          padding: "0.75rem", borderRadius: "0.5rem",
          border: `1px solid ${agreeErr ? "#f87171" : agreed ? "#2A9D93" : isDark ? "rgba(241,246,242,0.1)" : "#dde8e5"}`,
          background: agreeErr ? "rgba(248,113,113,0.06)" : agreed ? (isDark ? "rgba(42,157,147,0.08)" : "rgba(42,157,147,0.05)") : (isDark ? "rgba(241,246,242,0.03)" : "#F1F6F2"),
          transition: "border-color 0.2s, background 0.2s",
        }}>
          <div onClick={() => { setAgreed(prev => !prev); setAgreeErr(false) }}
            style={{
              width: "1.125rem", height: "1.125rem", borderRadius: "0.25rem", flexShrink: 0, marginTop: "1px",
              border: `2px solid ${agreed ? "#2A9D93" : agreeErr ? "#f87171" : isDark ? "rgba(241,246,242,0.25)" : "#c5d0cc"}`,
              background: agreed ? "linear-gradient(135deg, #6FC061, #2A9D93)" : "transparent",
              display: "flex", alignItems: "center", justifyContent: "center", transition: "all 0.15s",
            }}>
            {agreed && <svg width="10" height="10" fill="none" stroke="white" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={3} d="M5 13l4 4L19 7" /></svg>}
          </div>
          <span style={{ fontSize: "0.75rem", lineHeight: 1.5, color: isDark ? "#b8d4ce" : "#585858" }}>
            I have read and agree to the{" "}
            <a href="/privacy-policy" target="_blank" rel="noopener noreferrer" style={{ color: "#2A9D93", textDecoration: "underline" }}>Privacy Policy</a>
            {" "}and{" "}
            <a href="/terms-and-conditions" target="_blank" rel="noopener noreferrer" style={{ color: "#2A9D93", textDecoration: "underline" }}>Terms &amp; Conditions</a>
            {" "}of Imvera Group Inc. *
          </span>
        </label>

        {/* Checkbox error */}
        {agreeErr && (
          <p style={{ fontSize: "0.7rem", color: "#f87171", display: "flex", alignItems: "center", gap: "0.25rem", marginTop: "-0.25rem" }}>
            <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
            </svg>
            You must agree to the Terms &amp; Conditions and Privacy Policy to continue.
          </p>
        )}

        {/* Send error */}
        {status === "error" && (
          <p style={{ fontSize: "0.75rem", color: "#f87171", textAlign: "center" }}>
            Something went wrong. Please try again or call us at 678-836-3266.
            {errMsg && <span style={{ display: "block", opacity: 0.6, marginTop: "0.25rem" }}>{errMsg}</span>}
          </p>
        )}

        {/* Submit */}
        <button type="submit" disabled={status === "sending"}
          style={{
            width: "100%",
            background: status === "sending" ? "rgba(42,157,147,0.5)" : "linear-gradient(135deg, #6FC061, #2A9D93)",
            color: "#F1F6F2", fontWeight: 700, padding: "0.875rem",
            borderRadius: "0.5rem", border: "none",
            cursor: status === "sending" ? "not-allowed" : "pointer",
            fontSize: "0.875rem", letterSpacing: "0.03em",
            display: "flex", alignItems: "center", justifyContent: "center", gap: "0.5rem",
            transition: "opacity 0.2s",
          }}
          onMouseEnter={(e) => { if (status !== "sending") e.currentTarget.style.opacity = "0.88" }}
          onMouseLeave={(e) => { e.currentTarget.style.opacity = "1" }}>
          {status === "sending" ? (
            <>
              <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   style={{ animation: "spin 1s linear infinite" }}>
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
              </svg>
              Sending…
            </>
          ) : (
            <>
              <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
              </svg>
              Send Inquiry
            </>
          )}
        </button>

        {/* Privacy note */}
        <p style={{ textAlign: "center", fontSize: "0.7rem", color: isDark ? "#4d7069" : "#7fa89e", display: "flex", alignItems: "center", justifyContent: "center", gap: "0.375rem" }}>
          <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24" style={{ flexShrink: 0 }}>
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg>
          Your information is confidential and only used to respond to your inquiry.
        </p>

      </form>

      <style>{`
        @media (max-width: 540px) { .cf-grid-2 { grid-template-columns: 1fr !important; } }
        @keyframes spin { to { transform: rotate(360deg); } }
      `}</style>
    </div>
  )
}

export default ContactForm