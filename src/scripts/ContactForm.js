import React, { useState } from "react"

/*
 * ContactForm — Standalone reusable component
 * ─────────────────────────────────────────────────────────────
 * Props:
 *   variant   "dark"  (default) — for use on dark/hero backgrounds (#162525)
 *             "light"           — for use on light backgrounds (#F1F6F2 / white)
 *   title     string  — overrides the default heading
 *   subtitle  string  — overrides the default subheading
 *
 * Usage in PHP templates:
 *   <div id="render-contact-form-here"
 *        data-variant="dark"
 *        data-title="Send an Inquiry"
 *        data-subtitle="Get a Response Within 1 Business Day">
 *   </div>
 * ─────────────────────────────────────────────────────────────
 */

const SERVICES = [
  { value: "",               label: "Select a service…",    disabled: true },
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

// ── Shared style helpers ──────────────────────────────────────

function inputStyles(variant, focused) {
  const base = {
    width: "100%",
    borderRadius: "0.5rem",
    padding: "0.75rem 1rem",
    fontSize: "0.875rem",
    outline: "none",
    transition: "border-color 0.2s, background 0.2s",
    borderWidth: "1px",
    borderStyle: "solid",
  }
  if (variant === "light") {
    return {
      ...base,
      background: focused ? "#fff" : "#F1F6F2",
      borderColor: focused ? "#2A9D93" : "#dde8e5",
      color: "#162525",
    }
  }
  // dark
  return {
    ...base,
    background: focused ? "rgba(241,246,242,0.09)" : "rgba(241,246,242,0.06)",
    borderColor: focused ? "rgba(42,157,147,0.6)" : "rgba(241,246,242,0.1)",
    color: "#fff",
  }
}

function selectStyles(variant, focused) {
  const base = {
    width: "100%",
    borderRadius: "0.5rem",
    padding: "0.75rem 1rem",
    fontSize: "0.875rem",
    outline: "none",
    appearance: "none",
    cursor: "pointer",
    transition: "border-color 0.2s",
    borderWidth: "1px",
    borderStyle: "solid",
  }
  if (variant === "light") {
    return {
      ...base,
      background: "#F1F6F2",
      borderColor: focused ? "#2A9D93" : "#dde8e5",
      color: "#162525",
    }
  }
  return {
    ...base,
    background: "#162525",
    borderColor: focused ? "rgba(42,157,147,0.6)" : "rgba(241,246,242,0.1)",
    color: "#b8d4ce",
  }
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

// ── Main component ────────────────────────────────────────────

function ContactForm({ variant = "dark", title, subtitle }) {

  const resolvedTitle    = title    || "Send an Inquiry"
  const resolvedSubtitle = subtitle || "Get a Response Within 1 Business Day"

  const [fields, setFields]   = useState({
    full_name: "", company: "", phone: "", email: "",
    service: "", state: "", message: "",
  })
  const [focused,  setFocused]  = useState({})
  const [agreed,   setAgreed]   = useState(false)
  const [agreeErr, setAgreeErr] = useState(false)
  const [status,   setStatus]   = useState(null) // null | "sending" | "success" | "error"

  const set = (key) => (e) => setFields((prev) => ({ ...prev, [key]: e.target.value }))
  const onFocus = (key) => () => setFocused((prev) => ({ ...prev, [key]: true }))
  const onBlur  = (key) => () => setFocused((prev) => ({ ...prev, [key]: false }))

  async function handleSubmit(e) {
    e.preventDefault()
    if (!agreed) { setAgreeErr(true); return }
    setAgreeErr(false)
    setStatus("sending")
    try {
      const body = new FormData(e.target)
      const res  = await fetch(e.target.action, { method: "POST", body })
      setStatus(res.ok ? "success" : "error")
    } catch {
      setStatus("error")
    }
  }

  const isDark  = variant !== "light"
  const lblColor = labelColor(variant)

  // Wrapper background when used standalone (light variant gets a card look)
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

      <form
        action={window.imveraAjax?.url || "/wp-admin/admin-post.php"}
        method="POST"
        onSubmit={handleSubmit}
        style={{ display: "flex", flexDirection: "column", gap: "0.875rem" }}
      >
        <input type="hidden" name="action" value="imvera_inquiry" />
        {window.imveraAjax?.nonce && <input type="hidden" name="imvera_inquiry_nonce" value={window.imveraAjax.nonce} />}

        {/* Row 1: Name + Company */}
        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "0.875rem" }}
             className="cf-grid-2">
          <Field label={<span style={{ color: lblColor }}>Full Name *</span>}>
            <input
              type="text" name="full_name" required placeholder="John Smith"
              value={fields.full_name} onChange={set("full_name")}
              onFocus={onFocus("full_name")} onBlur={onBlur("full_name")}
              style={inputStyles(variant, focused.full_name)}
            />
          </Field>
          <Field label={<span style={{ color: lblColor }}>Company *</span>}>
            <input
              type="text" name="company" required placeholder="ABC Construction"
              value={fields.company} onChange={set("company")}
              onFocus={onFocus("company")} onBlur={onBlur("company")}
              style={inputStyles(variant, focused.company)}
            />
          </Field>
        </div>

        {/* Row 2: Phone + Email */}
        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "0.875rem" }}
             className="cf-grid-2">
          <Field label={<span style={{ color: lblColor }}>Phone *</span>}>
            <input
              type="tel" name="phone" required placeholder="(678) 000-0000"
              value={fields.phone} onChange={set("phone")}
              onFocus={onFocus("phone")} onBlur={onBlur("phone")}
              style={inputStyles(variant, focused.phone)}
            />
          </Field>
          <Field label={<span style={{ color: lblColor }}>Email *</span>}>
            <input
              type="email" name="email" required placeholder="john@company.com"
              value={fields.email} onChange={set("email")}
              onFocus={onFocus("email")} onBlur={onBlur("email")}
              style={inputStyles(variant, focused.email)}
            />
          </Field>
        </div>

        {/* Row 3: Service + State */}
        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "0.875rem" }}
             className="cf-grid-2">
          <Field label={<span style={{ color: lblColor }}>Service Needed</span>}>
            <SelectWrapper>
              <select
                name="service"
                value={fields.service} onChange={set("service")}
                onFocus={onFocus("service")} onBlur={onBlur("service")}
                style={selectStyles(variant, focused.service)}
              >
                {SERVICES.map((s) => (
                  <option key={s.value} value={s.value} disabled={s.disabled}>{s.label}</option>
                ))}
              </select>
            </SelectWrapper>
          </Field>
          <Field label={<span style={{ color: lblColor }}>State</span>}>
            <SelectWrapper>
              <select
                name="state"
                value={fields.state} onChange={set("state")}
                onFocus={onFocus("state")} onBlur={onBlur("state")}
                style={selectStyles(variant, focused.state)}
              >
                {STATES.map((s) => (
                  <option key={s.value} value={s.value} disabled={s.disabled}>{s.label}</option>
                ))}
              </select>
            </SelectWrapper>
          </Field>
        </div>

        {/* Message */}
        <Field label={<span style={{ color: lblColor }}>Message</span>}>
          <textarea
            name="message" rows={3}
            placeholder="Briefly describe your project scope…"
            value={fields.message} onChange={set("message")}
            onFocus={onFocus("message")} onBlur={onBlur("message")}
            style={{ ...inputStyles(variant, focused.message), resize: "none" }}
          />
        </Field>

        {/* Terms & Privacy checkbox */}
        <label style={{
          display:    "flex",
          alignItems: "flex-start",
          gap:        "0.625rem",
          cursor:     "pointer",
          padding:    "0.75rem",
          borderRadius: "0.5rem",
          border:     `1px solid ${agreeErr ? "#f87171" : agreed ? "#2A9D93" : isDark ? "rgba(241,246,242,0.1)" : "#dde8e5"}`,
          background: agreeErr
            ? "rgba(248,113,113,0.06)"
            : agreed
              ? isDark ? "rgba(42,157,147,0.08)" : "rgba(42,157,147,0.05)"
              : isDark ? "rgba(241,246,242,0.03)" : "#F1F6F2",
          transition: "border-color 0.2s, background 0.2s",
        }}>
          {/* Custom checkbox */}
          <div
            onClick={() => { setAgreed(prev => !prev); setAgreeErr(false) }}
            style={{
              width:          "1.125rem",
              height:         "1.125rem",
              borderRadius:   "0.25rem",
              border:         `2px solid ${agreed ? "#2A9D93" : agreeErr ? "#f87171" : isDark ? "rgba(241,246,242,0.25)" : "#c5d0cc"}`,
              background:     agreed ? "linear-gradient(135deg, #6FC061, #2A9D93)" : "transparent",
              flexShrink:     0,
              marginTop:      "1px",
              display:        "flex",
              alignItems:     "center",
              justifyContent: "center",
              transition:     "all 0.15s",
            }}
          >
            {agreed && (
              <svg width="10" height="10" fill="none" stroke="white" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={3} d="M5 13l4 4L19 7" />
              </svg>
            )}
          </div>
          <span style={{ fontSize: "0.75rem", lineHeight: 1.5, color: isDark ? "#b8d4ce" : "#585858" }}>
            I have read and agree to the{" "}
            <a href="/privacy-policy" target="_blank" rel="noopener noreferrer"
               style={{ color: "#2A9D93", textDecoration: "underline" }}>
              Privacy Policy
            </a>
            {" "}and{" "}
            <a href="/terms-and-conditions" target="_blank" rel="noopener noreferrer"
               style={{ color: "#2A9D93", textDecoration: "underline" }}>
              Terms &amp; Conditions
            </a>
            {" "}of Imvera Group Inc. *
          </span>
        </label>

        {/* Checkbox error message */}
        {agreeErr && (
          <p style={{ fontSize: "0.7rem", color: "#f87171", display: "flex", alignItems: "center", gap: "0.25rem", marginTop: "-0.25rem" }}>
            <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
            </svg>
            You must agree to the Terms &amp; Conditions and Privacy Policy to continue.
          </p>
        )}

        {/* Error state */}
        {status === "error" && (
          <p style={{ fontSize: "0.75rem", color: "#f87171", textAlign: "center" }}>
            Something went wrong. Please try again or call us directly.
          </p>
        )}

        {/* Submit */}
        <button
          type="submit"
          disabled={status === "sending"}
          style={{
            width: "100%",
            background: status === "sending" ? "rgba(42,157,147,0.5)" : "linear-gradient(135deg, #6FC061, #2A9D93)",
            color: "#F1F6F2",
            fontWeight: 700,
            padding: "0.875rem",
            borderRadius: "0.5rem",
            border: "none",
            cursor: status === "sending" ? "not-allowed" : "pointer",
            fontSize: "0.875rem",
            letterSpacing: "0.03em",
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            gap: "0.5rem",
            transition: "opacity 0.2s",
          }}
          onMouseEnter={(e) => { if (status !== "sending") e.currentTarget.style.opacity = "0.88" }}
          onMouseLeave={(e) => { e.currentTarget.style.opacity = "1" }}
        >
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

        <p style={{ textAlign: "center", fontSize: "0.75rem", color: isDark ? "#4d7069" : "#7fa89e", display: "flex", alignItems: "center", justifyContent: "center", gap: "0.375rem" }}>
          <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg>
          Your information is confidential and only used to respond to your inquiry.
        </p>

      </form>

      {/* Responsive grid fallback */}
      <style>{`
        @media (max-width: 540px) {
          .cf-grid-2 { grid-template-columns: 1fr !important; }
        }
        @keyframes spin { to { transform: rotate(360deg); } }
      `}</style>
    </div>
  )
}

export default ContactForm