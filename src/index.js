import Navbar from "./scripts/Navbar"
import React from "react"
import ReactDOM from "react-dom/client"

if (document.querySelector("#render-navbar-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-navbar-here"))
  root.render(<Navbar />)
}