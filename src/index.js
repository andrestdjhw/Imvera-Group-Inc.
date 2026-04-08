import React from "react"
import ReactDOM from "react-dom/client"
import Navbar from "./scripts/Navbar"
import Footer from "./scripts/Footer"
import ContactForm from "./scripts/ContactForm"

// ── Navbar ────────────────────────────────────────────────────
if (document.querySelector("#render-navbar-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-navbar-here"))
  root.render(<Navbar />)
}

// ── Footer ────────────────────────────────────────────────────
if (document.querySelector("#render-footer-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-footer-here"))
  root.render(<Footer />)
}

// ── ContactForm — mount every instance found on the page ──────
//
// Reads data attributes from the mount div to configure each instance:
//   data-variant  = "dark" | "light"   (default: "dark")
//   data-title    = custom heading
//   data-subtitle = custom subheading / eyebrow label
//
document.querySelectorAll("[id^='render-contact-form']").forEach((el) => {
  const root = ReactDOM.createRoot(el)
  root.render(
    <ContactForm
      variant={el.dataset.variant || "dark"}
      title={el.dataset.title || undefined}
      subtitle={el.dataset.subtitle || undefined}
    />
  )
})