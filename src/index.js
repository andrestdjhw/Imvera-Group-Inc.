import Navbar from "./scripts/Navbar"
import React from "react"
import ReactDOM from "react-dom/client"
import Footer from "./scripts/Footer"

if (document.querySelector("#render-navbar-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-navbar-here"))
  root.render(<Navbar />)
}

if (document.querySelector("#render-footer-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-footer-here"))
  root.render(<Footer />)
}