import React from "react"
import ReactDOM from "react-dom/client"
import Navbar from "./scripts/Navbar"
import Footer from "./scripts/Footer"
import ContactForm from "./scripts/ContactForm"
import ImveraChatbot from "./scripts/ImveraChatbot"

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

// ── Chatbot — mounted once into a persistent div in footer.php ─
// Add this to footer.php before wp_footer():
//   <div id="render-chatbot-here"></div>
if (document.querySelector("#render-chatbot-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-chatbot-here"))
  root.render(<ImveraChatbot />)
}