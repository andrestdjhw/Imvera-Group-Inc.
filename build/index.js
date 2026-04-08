/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/ContactForm.js"
/*!************************************!*\
  !*** ./src/scripts/ContactForm.js ***!
  \************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


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

const SERVICES = [{
  value: "",
  label: "Select a service…",
  disabled: true
}, {
  value: "eco-grip",
  label: "ECO Grip Flooring"
}, {
  value: "cabinets",
  label: "Cabinets & Countertops"
}, {
  value: "acoustical",
  label: "Acoustical Ceilings"
}, {
  value: "frp",
  label: "FRP Installation"
}, {
  value: "drywall",
  label: "Drywall & Finishing"
}, {
  value: "metal-framing",
  label: "Metal Framing"
}, {
  value: "multi-trade",
  label: "Multi-Trade Package"
}];
const STATES = [{
  value: "",
  label: "Select a state…",
  disabled: true
}, {
  value: "GA",
  label: "Georgia"
}, {
  value: "NC",
  label: "North Carolina"
}, {
  value: "SC",
  label: "South Carolina"
}, {
  value: "TN",
  label: "Tennessee"
}, {
  value: "TX",
  label: "Texas"
}, {
  value: "KY",
  label: "Kentucky"
}, {
  value: "FL",
  label: "Florida"
}, {
  value: "other",
  label: "Other"
}];

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
    borderStyle: "solid"
  };
  if (variant === "light") {
    return {
      ...base,
      background: focused ? "#fff" : "#F1F6F2",
      borderColor: focused ? "#2A9D93" : "#dde8e5",
      color: "#162525"
    };
  }
  // dark
  return {
    ...base,
    background: focused ? "rgba(241,246,242,0.09)" : "rgba(241,246,242,0.06)",
    borderColor: focused ? "rgba(42,157,147,0.6)" : "rgba(241,246,242,0.1)",
    color: "#fff"
  };
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
    borderStyle: "solid"
  };
  if (variant === "light") {
    return {
      ...base,
      background: "#F1F6F2",
      borderColor: focused ? "#2A9D93" : "#dde8e5",
      color: "#162525"
    };
  }
  return {
    ...base,
    background: "#162525",
    borderColor: focused ? "rgba(42,157,147,0.6)" : "rgba(241,246,242,0.1)",
    color: "#b8d4ce"
  };
}
function labelColor(variant) {
  return variant === "light" ? "#162525" : "#7fa89e";
}

// ── Sub-components ────────────────────────────────────────────

function Field({
  label,
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
      style: {
        display: "block",
        fontSize: "0.75rem",
        fontWeight: 600,
        marginBottom: "0.375rem"
      },
      children: label
    }), children]
  });
}
function SelectWrapper({
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: {
      position: "relative"
    },
    children: [children, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        pointerEvents: "none",
        position: "absolute",
        inset: "0 0.75rem 0 auto",
        display: "flex",
        alignItems: "center"
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
        width: "16",
        height: "16",
        fill: "none",
        stroke: "#585858",
        viewBox: "0 0 24 24",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
          strokeLinecap: "round",
          strokeLinejoin: "round",
          strokeWidth: 2,
          d: "M19 9l-7 7-7-7"
        })
      })
    })]
  });
}

// ── Main component ────────────────────────────────────────────

function ContactForm({
  variant = "dark",
  title,
  subtitle
}) {
  const resolvedTitle = title || "Send an Inquiry";
  const resolvedSubtitle = subtitle || "Get a Response Within 1 Business Day";
  const [fields, setFields] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)({
    full_name: "",
    company: "",
    phone: "",
    email: "",
    service: "",
    state: "",
    message: ""
  });
  const [focused, setFocused] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)({});
  const [status, setStatus] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null); // null | "sending" | "success" | "error"

  const set = key => e => setFields(prev => ({
    ...prev,
    [key]: e.target.value
  }));
  const onFocus = key => () => setFocused(prev => ({
    ...prev,
    [key]: true
  }));
  const onBlur = key => () => setFocused(prev => ({
    ...prev,
    [key]: false
  }));
  async function handleSubmit(e) {
    e.preventDefault();
    setStatus("sending");
    try {
      const body = new FormData(e.target);
      const res = await fetch(e.target.action, {
        method: "POST",
        body
      });
      setStatus(res.ok ? "success" : "error");
    } catch {
      setStatus("error");
    }
  }
  const isDark = variant !== "light";
  const lblColor = labelColor(variant);

  // Wrapper background when used standalone (light variant gets a card look)
  const wrapperStyle = isDark ? {
    background: "rgba(241,246,242,0.04)",
    backdropFilter: "blur(8px)",
    border: "1px solid rgba(241,246,242,0.1)",
    borderRadius: "1rem",
    padding: "1.75rem"
  } : {
    background: "#fff",
    border: "1px solid #dde8e5",
    borderRadius: "1rem",
    padding: "2rem"
  };

  // ── Success state ─────────────────────────────────────────
  if (status === "success") {
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        ...wrapperStyle,
        textAlign: "center",
        padding: "3rem 2rem"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          width: "3rem",
          height: "3rem",
          borderRadius: "50%",
          background: "linear-gradient(135deg, #6FC061, #2A9D93)",
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          margin: "0 auto 1rem"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          width: "20",
          height: "20",
          fill: "none",
          stroke: "white",
          viewBox: "0 0 24 24",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
            strokeLinecap: "round",
            strokeLinejoin: "round",
            strokeWidth: 2.5,
            d: "M5 13l4 4L19 7"
          })
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          color: isDark ? "#fff" : "#162525",
          fontWeight: 700,
          fontSize: "1rem",
          marginBottom: "0.5rem"
        },
        children: "Inquiry Sent"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          color: isDark ? "#7fa89e" : "#585858",
          fontSize: "0.875rem",
          lineHeight: 1.6
        },
        children: "Thank you. A member of our team will respond within one business day."
      })]
    });
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: wrapperStyle,
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        display: "flex",
        alignItems: "center",
        gap: "0.5rem",
        marginBottom: "0.25rem"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          width: "1rem",
          height: "1rem",
          borderRadius: "0.2rem",
          background: "linear-gradient(135deg, #6FC061, #2A9D93)",
          flexShrink: 0
        }
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          fontSize: "0.75rem",
          fontWeight: 600,
          letterSpacing: "0.1em",
          textTransform: "uppercase",
          color: "#2A9D93"
        },
        children: resolvedSubtitle
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h2", {
      style: {
        color: isDark ? "#fff" : "#162525",
        fontSize: "1.25rem",
        fontWeight: 700,
        marginBottom: "1.25rem"
      },
      children: resolvedTitle
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
      action: window.imveraAjax?.url || "/wp-admin/admin-post.php",
      method: "POST",
      onSubmit: handleSubmit,
      style: {
        display: "flex",
        flexDirection: "column",
        gap: "0.875rem"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
        type: "hidden",
        name: "action",
        value: "imvera_inquiry"
      }), window.imveraAjax?.nonce && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
        type: "hidden",
        name: "imvera_inquiry_nonce",
        value: window.imveraAjax.nonce
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          display: "grid",
          gridTemplateColumns: "1fr 1fr",
          gap: "0.875rem"
        },
        className: "cf-grid-2",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
          label: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              color: lblColor
            },
            children: "Full Name *"
          }),
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            name: "full_name",
            required: true,
            placeholder: "John Smith",
            value: fields.full_name,
            onChange: set("full_name"),
            onFocus: onFocus("full_name"),
            onBlur: onBlur("full_name"),
            style: inputStyles(variant, focused.full_name)
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
          label: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              color: lblColor
            },
            children: "Company *"
          }),
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            name: "company",
            required: true,
            placeholder: "ABC Construction",
            value: fields.company,
            onChange: set("company"),
            onFocus: onFocus("company"),
            onBlur: onBlur("company"),
            style: inputStyles(variant, focused.company)
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          display: "grid",
          gridTemplateColumns: "1fr 1fr",
          gap: "0.875rem"
        },
        className: "cf-grid-2",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
          label: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              color: lblColor
            },
            children: "Phone *"
          }),
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "tel",
            name: "phone",
            required: true,
            placeholder: "(678) 000-0000",
            value: fields.phone,
            onChange: set("phone"),
            onFocus: onFocus("phone"),
            onBlur: onBlur("phone"),
            style: inputStyles(variant, focused.phone)
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
          label: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              color: lblColor
            },
            children: "Email *"
          }),
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "email",
            name: "email",
            required: true,
            placeholder: "john@company.com",
            value: fields.email,
            onChange: set("email"),
            onFocus: onFocus("email"),
            onBlur: onBlur("email"),
            style: inputStyles(variant, focused.email)
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          display: "grid",
          gridTemplateColumns: "1fr 1fr",
          gap: "0.875rem"
        },
        className: "cf-grid-2",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
          label: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              color: lblColor
            },
            children: "Service Needed"
          }),
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SelectWrapper, {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
              name: "service",
              value: fields.service,
              onChange: set("service"),
              onFocus: onFocus("service"),
              onBlur: onBlur("service"),
              style: selectStyles(variant, focused.service),
              children: SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
                value: s.value,
                disabled: s.disabled,
                children: s.label
              }, s.value))
            })
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
          label: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              color: lblColor
            },
            children: "State"
          }),
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SelectWrapper, {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
              name: "state",
              value: fields.state,
              onChange: set("state"),
              onFocus: onFocus("state"),
              onBlur: onBlur("state"),
              style: selectStyles(variant, focused.state),
              children: STATES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
                value: s.value,
                disabled: s.disabled,
                children: s.label
              }, s.value))
            })
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        label: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          style: {
            color: lblColor
          },
          children: "Message"
        }),
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
          name: "message",
          rows: 3,
          placeholder: "Briefly describe your project scope\u2026",
          value: fields.message,
          onChange: set("message"),
          onFocus: onFocus("message"),
          onBlur: onBlur("message"),
          style: {
            ...inputStyles(variant, focused.message),
            resize: "none"
          }
        })
      }), status === "error" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          fontSize: "0.75rem",
          color: "#f87171",
          textAlign: "center"
        },
        children: "Something went wrong. Please try again or call us directly."
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
        type: "submit",
        disabled: status === "sending",
        style: {
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
          transition: "opacity 0.2s"
        },
        onMouseEnter: e => {
          if (status !== "sending") e.currentTarget.style.opacity = "0.88";
        },
        onMouseLeave: e => {
          e.currentTarget.style.opacity = "1";
        },
        children: status === "sending" ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            width: "16",
            height: "16",
            fill: "none",
            stroke: "currentColor",
            viewBox: "0 0 24 24",
            style: {
              animation: "spin 1s linear infinite"
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              strokeLinecap: "round",
              strokeLinejoin: "round",
              strokeWidth: 2,
              d: "M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
            })
          }), "Sending\u2026"]
        }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            width: "16",
            height: "16",
            fill: "none",
            stroke: "currentColor",
            viewBox: "0 0 24 24",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              strokeLinecap: "round",
              strokeLinejoin: "round",
              strokeWidth: 2,
              d: "M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
            })
          }), "Send Inquiry"]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
        style: {
          textAlign: "center",
          fontSize: "0.75rem",
          color: isDark ? "#4d7069" : "#7fa89e",
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          gap: "0.375rem"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          width: "14",
          height: "14",
          fill: "none",
          stroke: "currentColor",
          viewBox: "0 0 24 24",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
            strokeLinecap: "round",
            strokeLinejoin: "round",
            strokeWidth: 2,
            d: "M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
          })
        }), "Your information is confidential and only used to respond to your inquiry."]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        @media (max-width: 540px) {
          .cf-grid-2 { grid-template-columns: 1fr !important; }
        }
        @keyframes spin { to { transform: rotate(360deg); } }
      `
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ContactForm);

/***/ },

/***/ "./src/scripts/Footer.js"
/*!*******************************!*\
  !*** ./src/scripts/Footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const SERVICES = ["ECO Grip Flooring", "Cabinets & Countertops", "Acoustical Ceilings", "FRP Installation", "Drywall & Finishing", "Metal Framing"];
const MARKETS = ["Atlanta, GA", "Charlotte, NC", "Nashville, TN", "Raleigh, NC", "And across the Southeast"];
const NAV_LINKS = [{
  label: "Home",
  href: "/"
}, {
  label: "About Us",
  href: "/about-us"
}, {
  label: "Services",
  href: "/services"
}, {
  label: "Gallery",
  href: "/gallery"
}, {
  label: "Markets We Serve",
  href: "/markets-we-serve"
}, {
  label: "Contact Us",
  href: "/contact-us"
}];
const PHONE = "678-836-3266";
const HEADQUARTERS = "Duluth, Georgia";
function Footer() {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
    style: {
      backgroundColor: "#162525",
      color: "white"
    },
    className: "mt-auto",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        borderBottom: "1px solid rgba(241,246,242,0.08)"
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col sm:flex-row items-center justify-between gap-4",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            className: "text-lg font-semibold text-white",
            children: "Ready to start your next project?"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            className: "text-sm mt-0.5",
            style: {
              color: "#7fa89e"
            },
            children: "Our team is ready to walk you through every detail."
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "/contact-us",
          className: "inline-flex items-center gap-2 font-semibold text-sm px-6 py-3 rounded transition-colors duration-200 whitespace-nowrap flex-shrink-0",
          style: {
            backgroundColor: "#2A9D93",
            color: "#F1F6F2"
          },
          onMouseEnter: e => e.currentTarget.style.backgroundColor = "#238c83",
          onMouseLeave: e => e.currentTarget.style.backgroundColor = "#2A9D93",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            className: "w-4 h-4",
            fill: "none",
            stroke: "currentColor",
            viewBox: "0 0 24 24",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              strokeLinecap: "round",
              strokeLinejoin: "round",
              strokeWidth: 2,
              d: "M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
            })
          }), "Request a Scope Review"]
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "lg:col-span-1",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex items-center gap-2 mb-3",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "w-8 h-8 rounded flex items-center justify-center flex-shrink-0",
              style: {
                backgroundColor: "#1e3333"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "font-bold text-sm leading-none",
                style: {
                  color: "#6FC061"
                },
                children: "IG"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
              className: "font-bold text-white text-lg tracking-tight",
              children: ["Imvera", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  color: "#2A9D93"
                },
                children: "."
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            className: "text-sm font-semibold text-white",
            children: "Imvera Group Inc."
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
            className: "text-xs mt-1 leading-relaxed",
            style: {
              color: "#7fa89e"
            },
            children: ["Commercial Interior Construction", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("br", {}), "Southeast United States"]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "mt-5 flex flex-col gap-2 text-xs",
            style: {
              color: "#7fa89e"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: `tel:${PHONE.replace(/\D/g, "")}`,
              className: "flex items-center gap-2 transition-colors duration-200",
              style: {
                color: "inherit"
              },
              onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
              onMouseLeave: e => e.currentTarget.style.color = "#7fa89e",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                className: "w-3.5 h-3.5 flex-shrink-0",
                style: {
                  color: "#2A9D93"
                },
                fill: "none",
                stroke: "currentColor",
                viewBox: "0 0 24 24",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                })
              }), PHONE]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "flex items-center gap-2",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
                className: "w-3.5 h-3.5 flex-shrink-0",
                style: {
                  color: "#2A9D93"
                },
                fill: "none",
                stroke: "currentColor",
                viewBox: "0 0 24 24",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                })]
              }), HEADQUARTERS]
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h4", {
            className: "text-xs font-semibold tracking-widest uppercase mb-4",
            style: {
              color: "#2A9D93"
            },
            children: "Our Services"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
            className: "flex flex-col gap-2",
            children: SERVICES.map(service => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: "/services",
                className: "text-sm flex items-center gap-2 transition-colors duration-200 group",
                style: {
                  color: "#7fa89e"
                },
                onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
                onMouseLeave: e => e.currentTarget.style.color = "#7fa89e",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "w-1 h-1 rounded-full flex-shrink-0 transition-opacity",
                  style: {
                    backgroundColor: "#6FC061",
                    opacity: 0.6
                  }
                }), service]
              })
            }, service))
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h4", {
            className: "text-xs font-semibold tracking-widest uppercase mb-4",
            style: {
              color: "#2A9D93"
            },
            children: "Markets We Serve"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
            className: "flex flex-col gap-2",
            children: MARKETS.map(market => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: "/markets-we-serve",
                className: "text-sm flex items-center gap-2 transition-colors duration-200",
                style: {
                  color: "#7fa89e"
                },
                onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
                onMouseLeave: e => e.currentTarget.style.color = "#7fa89e",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "w-1 h-1 rounded-full flex-shrink-0",
                  style: {
                    backgroundColor: "#6FC061",
                    opacity: 0.6
                  }
                }), market]
              })
            }, market))
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h4", {
            className: "text-xs font-semibold tracking-widest uppercase mb-4",
            style: {
              color: "#2A9D93"
            },
            children: "Helpful Links"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
            className: "flex flex-col gap-2",
            children: NAV_LINKS.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: link.href,
                className: "text-sm flex items-center gap-2 transition-colors duration-200",
                style: {
                  color: "#7fa89e"
                },
                onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
                onMouseLeave: e => e.currentTarget.style.color = "#7fa89e",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "w-1 h-1 rounded-full flex-shrink-0",
                  style: {
                    backgroundColor: "#6FC061",
                    opacity: 0.6
                  }
                }), link.label]
              })
            }, link.href))
          })]
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        borderTop: "1px solid rgba(241,246,242,0.08)"
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs",
        style: {
          color: "#4d7069"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          children: "\xA9 2026 Imvera Group Inc. All Rights Reserved."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex items-center gap-4",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/privacy-policy",
            className: "transition-colors duration-200",
            style: {
              color: "inherit"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#7fa89e",
            onMouseLeave: e => e.currentTarget.style.color = "#4d7069",
            children: "Privacy Policy"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              color: "rgba(241,246,242,0.15)"
            },
            children: "\xB7"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/terms-and-conditions",
            className: "transition-colors duration-200",
            style: {
              color: "inherit"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#7fa89e",
            onMouseLeave: e => e.currentTarget.style.color = "#4d7069",
            children: "Terms & Conditions"
          })]
        })]
      })
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Footer);

/***/ },

/***/ "./src/scripts/Navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/Navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ── Data ──────────────────────────────────────────────────────

const SERVICES = [{
  num: "01",
  title: "ECO Grip Commercial Flooring",
  tag: "Highest margin · Growth priority",
  href: "/services/eco-grip-flooring",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    strokeWidth: 1.5,
    d: "M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
  })
}, {
  num: "02",
  title: "Cabinet & Countertop Installation",
  tag: "High margin · Precision-driven",
  href: "/services/cabinets-countertops",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    strokeWidth: 1.5,
    d: "M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
  })
}, {
  num: "03",
  title: "Acoustical Ceilings",
  tag: "High output · Compliance-driven",
  href: "/services/acoustical-ceilings",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    strokeWidth: 1.5,
    d: "M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
  })
}, {
  num: "04",
  title: "FRP Installation",
  tag: "Specialty · Compliance-driven",
  href: "/services/frp-installation",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    strokeWidth: 1.5,
    d: "M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"
  })
}, {
  num: "05",
  title: "Drywall & Finishing",
  tag: "Core volume trade",
  href: "/services/drywall-finishing",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    strokeWidth: 1.5,
    d: "M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"
  })
}, {
  num: "06",
  title: "Metal Framing",
  tag: "Core volume trade · Foundation scope",
  href: "/services/metal-framing",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    strokeWidth: 1.5,
    d: "M4 6h16M4 10h16M4 14h16M4 18h16"
  })
}];
const NAV_LINKS = [{
  label: "Home",
  href: "/",
  hasMega: false
}, {
  label: "About Us",
  href: "/about-us",
  hasMega: false
}, {
  label: "Services",
  href: "/services",
  hasMega: true
}, {
  label: "Gallery",
  href: "/gallery",
  hasMega: false
}, {
  label: "Markets We Serve",
  href: "/markets-we-serve",
  hasMega: false
}, {
  label: "Contact Us",
  href: "/contact-us",
  hasMega: false
}];
const PHONE = "678-836-3266";
const EMAIL = "info@imveragroupinc.com";

// ── Mega Menu ─────────────────────────────────────────────────

function MegaMenu({
  visible
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: {
      position: "absolute",
      top: "100%",
      left: "50%",
      transform: "translateX(-50%)",
      width: "min(860px, 96vw)",
      backgroundColor: "#fff",
      border: "1px solid #dde8e5",
      borderRadius: "1rem",
      boxShadow: "0 16px 48px rgba(22,37,37,0.14)",
      opacity: visible ? 1 : 0,
      pointerEvents: visible ? "auto" : "none",
      transform: visible ? "translateX(-50%) translateY(0)" : "translateX(-50%) translateY(-6px)",
      transition: "opacity 0.18s ease, transform 0.18s ease",
      zIndex: 100,
      overflow: "hidden"
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        display: "flex",
        alignItems: "center",
        justifyContent: "space-between",
        padding: "1rem 1.5rem 0.75rem",
        borderBottom: "1px solid #f0f4f2"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          fontSize: "0.7rem",
          fontWeight: 700,
          letterSpacing: "0.12em",
          textTransform: "uppercase",
          color: "#2A9D93"
        },
        children: "Our Six Trade Disciplines"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: "/services",
        style: {
          fontSize: "0.75rem",
          fontWeight: 600,
          color: "#585858",
          display: "flex",
          alignItems: "center",
          gap: "0.25rem",
          textDecoration: "none"
        },
        onMouseEnter: e => e.currentTarget.style.color = "#2A9D93",
        onMouseLeave: e => e.currentTarget.style.color = "#585858",
        children: ["View All Services", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          width: "12",
          height: "12",
          fill: "none",
          stroke: "currentColor",
          viewBox: "0 0 24 24",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
            strokeLinecap: "round",
            strokeLinejoin: "round",
            strokeWidth: 2,
            d: "M17 8l4 4m0 0l-4 4m4-4H3"
          })
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        display: "grid",
        gridTemplateColumns: "repeat(3, 1fr)",
        gap: "0"
      },
      children: SERVICES.map((s, i) => {
        const isRightCol = (i + 1) % 3 === 0;
        const isBottomRow = i >= 3;
        return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: s.href,
          style: {
            display: "flex",
            alignItems: "flex-start",
            gap: "0.75rem",
            padding: "1rem 1.25rem",
            textDecoration: "none",
            transition: "background 0.15s",
            borderRight: isRightCol ? "none" : "1px solid #f0f4f2",
            borderBottom: isBottomRow ? "none" : "1px solid #f0f4f2"
          },
          onMouseEnter: e => e.currentTarget.style.background = "#f7fbf9",
          onMouseLeave: e => e.currentTarget.style.background = "transparent",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            style: {
              width: "2.25rem",
              height: "2.25rem",
              borderRadius: "0.5rem",
              background: "linear-gradient(135deg, rgba(111,192,97,0.12), rgba(42,157,147,0.12))",
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              flexShrink: 0,
              marginTop: "1px"
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "16",
              height: "16",
              fill: "none",
              stroke: "#2A9D93",
              viewBox: "0 0 24 24",
              children: s.icon
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              style: {
                display: "flex",
                alignItems: "center",
                gap: "0.4rem",
                marginBottom: "0.2rem"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  fontSize: "0.65rem",
                  fontWeight: 700,
                  color: "rgba(42,157,147,0.6)",
                  letterSpacing: "0.05em"
                },
                children: s.num
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                style: {
                  width: "1.5rem",
                  height: "1px",
                  background: "linear-gradient(to right, #6FC061, #2A9D93)",
                  opacity: 0.4
                }
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              style: {
                fontSize: "0.8125rem",
                fontWeight: 600,
                color: "#162525",
                lineHeight: 1.3,
                marginBottom: "0.2rem"
              },
              children: s.title
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              style: {
                fontSize: "0.7rem",
                color: "#7fa89e",
                lineHeight: 1.4
              },
              children: s.tag
            })]
          })]
        }, s.href);
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        borderTop: "1px solid #f0f4f2",
        padding: "0.875rem 1.5rem",
        display: "flex",
        alignItems: "center",
        justifyContent: "space-between",
        gap: "1rem",
        background: "linear-gradient(135deg, rgba(111,192,97,0.05), rgba(42,157,147,0.05))"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          fontSize: "0.8rem",
          color: "#585858",
          margin: 0
        },
        children: "All six trades self-performed by dedicated crews. One contract. One point of accountability."
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: "/contact-us",
        style: {
          display: "inline-flex",
          alignItems: "center",
          gap: "0.375rem",
          background: "linear-gradient(135deg, #6FC061, #2A9D93)",
          color: "#F1F6F2",
          fontWeight: 700,
          fontSize: "0.75rem",
          padding: "0.5rem 1rem",
          borderRadius: "0.5rem",
          textDecoration: "none",
          whiteSpace: "nowrap",
          flexShrink: 0,
          transition: "opacity 0.2s"
        },
        onMouseEnter: e => e.currentTarget.style.opacity = "0.88",
        onMouseLeave: e => e.currentTarget.style.opacity = "1",
        children: ["Request a Scope Review", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          width: "12",
          height: "12",
          fill: "none",
          stroke: "currentColor",
          viewBox: "0 0 24 24",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
            strokeLinecap: "round",
            strokeLinejoin: "round",
            strokeWidth: 2,
            d: "M17 8l4 4m0 0l-4 4m4-4H3"
          })
        })]
      })]
    })]
  });
}

// ── Navbar ────────────────────────────────────────────────────

function Navbar() {
  const [menuOpen, setMenuOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [scrolled, setScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [megaOpen, setMegaOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [mobileServices, setMobileSvc] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);

  // Delay-close so moving cursor into the panel doesn't close it
  const closeTimer = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const openMega = () => {
    clearTimeout(closeTimer.current);
    setMegaOpen(true);
  };
  const closeMega = () => {
    closeTimer.current = setTimeout(() => setMegaOpen(false), 120);
  };
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const handleScroll = () => setScrolled(window.scrollY > 10);
    window.addEventListener("scroll", handleScroll);
    return () => {
      window.removeEventListener("scroll", handleScroll);
      clearTimeout(closeTimer.current);
    };
  }, []);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("header", {
    className: "w-full",
    style: {
      position: "relative",
      zIndex: 50
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        backgroundColor: "#162525"
      },
      className: "text-white text-sm",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-10",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex items-center gap-5",
          style: {
            color: "#a8bfbb"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: `tel:${PHONE.replace(/\D/g, "")}`,
            className: "flex items-center gap-1.5 transition-colors duration-200",
            style: {
              color: "inherit"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
            onMouseLeave: e => e.currentTarget.style.color = "#a8bfbb",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              className: "w-3.5 h-3.5 flex-shrink-0",
              fill: "none",
              stroke: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                strokeLinecap: "round",
                strokeLinejoin: "round",
                strokeWidth: 2,
                d: "M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "hidden sm:inline",
              children: PHONE
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: `mailto:${EMAIL}`,
            className: "flex items-center gap-1.5 transition-colors duration-200",
            style: {
              color: "inherit"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
            onMouseLeave: e => e.currentTarget.style.color = "#a8bfbb",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              className: "w-3.5 h-3.5 flex-shrink-0",
              fill: "none",
              stroke: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                strokeLinecap: "round",
                strokeLinejoin: "round",
                strokeWidth: 2,
                d: "M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "hidden sm:inline",
              children: EMAIL
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "/contact-us",
          className: "inline-flex items-center gap-1.5 text-xs font-semibold px-4 py-1.5 rounded transition-colors duration-200 tracking-wide whitespace-nowrap",
          style: {
            backgroundColor: "#2A9D93",
            color: "#F1F6F2"
          },
          onMouseEnter: e => e.currentTarget.style.backgroundColor = "#238c83",
          onMouseLeave: e => e.currentTarget.style.backgroundColor = "#2A9D93",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            className: "w-3.5 h-3.5 flex-shrink-0",
            fill: "none",
            stroke: "currentColor",
            viewBox: "0 0 24 24",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              strokeLinecap: "round",
              strokeLinejoin: "round",
              strokeWidth: 2,
              d: "M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
            })
          }), "Request a Scope Review"]
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("nav", {
      style: {
        backgroundColor: "#F1F6F2",
        borderBottom: scrolled ? "none" : "1px solid #dde8e5",
        boxShadow: scrolled ? "0 2px 12px rgba(22,37,37,0.08)" : "none",
        transition: "box-shadow 0.3s",
        position: "relative",
        zIndex: 50
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex items-center justify-between h-16 lg:h-[70px]",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: "/",
            className: "flex items-center gap-2.5 flex-shrink-0",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "w-8 h-8 rounded flex items-center justify-center",
              style: {
                backgroundColor: "#162525"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "font-bold text-sm leading-none",
                style: {
                  color: "#6FC061"
                },
                children: "IG"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
              className: "font-bold text-lg tracking-tight leading-tight hidden sm:block",
              style: {
                color: "#162525"
              },
              children: ["Imvera", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  color: "#2A9D93"
                },
                children: "."
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
            className: "hidden lg:flex items-center gap-1",
            style: {
              position: "relative"
            },
            children: NAV_LINKS.map(link => {
              if (!link.hasMega) {
                return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                    href: link.href,
                    className: "relative text-sm font-medium px-3 py-2 rounded transition-colors duration-200 group block",
                    style: {
                      color: "#585858"
                    },
                    onMouseEnter: e => e.currentTarget.style.color = "#162525",
                    onMouseLeave: e => e.currentTarget.style.color = "#585858",
                    children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                      className: "absolute bottom-0 left-3 right-3 h-[2px] scale-x-0 group-hover:scale-x-100 transition-transform duration-200 origin-left rounded-full",
                      style: {
                        backgroundColor: "#2A9D93"
                      }
                    })]
                  })
                }, link.href);
              }

              // Services — mega menu trigger
              return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
                style: {
                  position: "relative"
                },
                onMouseEnter: openMega,
                onMouseLeave: closeMega,
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                  style: {
                    position: "relative",
                    display: "flex",
                    alignItems: "center",
                    gap: "0.25rem",
                    fontSize: "0.875rem",
                    fontWeight: 500,
                    color: megaOpen ? "#162525" : "#585858",
                    background: "none",
                    border: "none",
                    cursor: "pointer",
                    padding: "0.5rem 0.75rem",
                    borderRadius: "0.375rem",
                    transition: "color 0.2s"
                  },
                  children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                    width: "12",
                    height: "12",
                    fill: "none",
                    stroke: "currentColor",
                    viewBox: "0 0 24 24",
                    style: {
                      transition: "transform 0.2s",
                      transform: megaOpen ? "rotate(180deg)" : "rotate(0deg)",
                      color: megaOpen ? "#2A9D93" : "inherit"
                    },
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      strokeLinecap: "round",
                      strokeLinejoin: "round",
                      strokeWidth: 2,
                      d: "M19 9l-7 7-7-7"
                    })
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    style: {
                      position: "absolute",
                      bottom: 0,
                      left: "0.75rem",
                      right: "0.75rem",
                      height: "2px",
                      borderRadius: "9999px",
                      background: "#2A9D93",
                      transform: megaOpen ? "scaleX(1)" : "scaleX(0)",
                      transformOrigin: "left",
                      transition: "transform 0.2s"
                    }
                  })]
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MegaMenu, {
                  visible: megaOpen
                })]
              }, link.href);
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/contact-us",
            className: "hidden lg:inline-flex items-center gap-1.5 text-white text-sm font-semibold px-5 py-2.5 rounded transition-colors duration-200",
            style: {
              backgroundColor: "#162525"
            },
            onMouseEnter: e => e.currentTarget.style.backgroundColor = "#2A9D93",
            onMouseLeave: e => e.currentTarget.style.backgroundColor = "#162525",
            children: "Get in Touch"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            className: "lg:hidden p-2 rounded transition-colors",
            style: {
              color: "#585858"
            },
            onClick: () => setMenuOpen(prev => !prev),
            "aria-label": "Toggle menu",
            "aria-expanded": menuOpen,
            onMouseEnter: e => e.currentTarget.style.backgroundColor = "#dde8e5",
            onMouseLeave: e => e.currentTarget.style.backgroundColor = "transparent",
            children: menuOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              className: "w-6 h-6",
              fill: "none",
              stroke: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                strokeLinecap: "round",
                strokeLinejoin: "round",
                strokeWidth: 2,
                d: "M6 18L18 6M6 6l12 12"
              })
            }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              className: "w-6 h-6",
              fill: "none",
              stroke: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                strokeLinecap: "round",
                strokeLinejoin: "round",
                strokeWidth: 2,
                d: "M4 6h16M4 12h16M4 18h16"
              })
            })
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: `lg:hidden overflow-hidden transition-all duration-300 ease-in-out ${menuOpen ? "max-h-[700px]" : "max-h-0"}`,
        style: {
          borderTop: menuOpen ? "1px solid #dde8e5" : "none"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "px-4 pb-4 pt-2 flex flex-col gap-1",
          style: {
            backgroundColor: "#F1F6F2"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex flex-col gap-1.5 py-2 mb-1 text-xs",
            style: {
              borderBottom: "1px solid #dde8e5",
              color: "#585858"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: `tel:${PHONE.replace(/\D/g, "")}`,
              className: "flex items-center gap-2",
              onMouseEnter: e => e.currentTarget.style.color = "#162525",
              onMouseLeave: e => e.currentTarget.style.color = "#585858",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                className: "w-3.5 h-3.5",
                fill: "none",
                stroke: "currentColor",
                viewBox: "0 0 24 24",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                })
              }), PHONE]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: `mailto:${EMAIL}`,
              className: "flex items-center gap-2",
              onMouseEnter: e => e.currentTarget.style.color = "#162525",
              onMouseLeave: e => e.currentTarget.style.color = "#585858",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                className: "w-3.5 h-3.5",
                fill: "none",
                stroke: "currentColor",
                viewBox: "0 0 24 24",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                })
              }), EMAIL]
            })]
          }), NAV_LINKS.map(link => {
            if (!link.hasMega) {
              return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: link.href,
                className: "text-sm font-medium px-3 py-2.5 rounded transition-colors duration-150",
                style: {
                  color: "#585858"
                },
                onMouseEnter: e => {
                  e.currentTarget.style.color = "#162525";
                  e.currentTarget.style.backgroundColor = "#dde8e5";
                },
                onMouseLeave: e => {
                  e.currentTarget.style.color = "#585858";
                  e.currentTarget.style.backgroundColor = "transparent";
                },
                onClick: () => setMenuOpen(false),
                children: link.label
              }, link.href);
            }
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                onClick: () => setMobileSvc(prev => !prev),
                style: {
                  width: "100%",
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "space-between",
                  padding: "0.625rem 0.75rem",
                  borderRadius: "0.375rem",
                  fontSize: "0.875rem",
                  fontWeight: 500,
                  color: mobileServices ? "#162525" : "#585858",
                  background: mobileServices ? "#dde8e5" : "transparent",
                  border: "none",
                  cursor: "pointer",
                  transition: "background 0.15s, color 0.15s"
                },
                children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  width: "14",
                  height: "14",
                  fill: "none",
                  stroke: "currentColor",
                  viewBox: "0 0 24 24",
                  style: {
                    transition: "transform 0.2s",
                    transform: mobileServices ? "rotate(180deg)" : "rotate(0)"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    strokeLinecap: "round",
                    strokeLinejoin: "round",
                    strokeWidth: 2,
                    d: "M19 9l-7 7-7-7"
                  })
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                style: {
                  maxHeight: mobileServices ? "600px" : "0",
                  overflow: "hidden",
                  transition: "max-height 0.3s ease"
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                  style: {
                    margin: "0.25rem 0 0.25rem 0.75rem",
                    paddingLeft: "0.75rem",
                    borderLeft: "2px solid #dde8e5",
                    display: "flex",
                    flexDirection: "column",
                    gap: "0.125rem"
                  },
                  children: [SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                    href: s.href,
                    onClick: () => {
                      setMenuOpen(false);
                      setMobileSvc(false);
                    },
                    style: {
                      display: "flex",
                      alignItems: "flex-start",
                      gap: "0.625rem",
                      padding: "0.5rem 0.5rem",
                      borderRadius: "0.375rem",
                      textDecoration: "none",
                      transition: "background 0.15s"
                    },
                    onMouseEnter: e => e.currentTarget.style.background = "#dde8e5",
                    onMouseLeave: e => e.currentTarget.style.background = "transparent",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                      style: {
                        fontSize: "0.65rem",
                        fontWeight: 700,
                        color: "#2A9D93",
                        marginTop: "2px",
                        minWidth: "1.5rem"
                      },
                      children: s.num
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                        style: {
                          fontSize: "0.8125rem",
                          fontWeight: 600,
                          color: "#162525",
                          margin: 0,
                          lineHeight: 1.3
                        },
                        children: s.title
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                        style: {
                          fontSize: "0.7rem",
                          color: "#7fa89e",
                          margin: "0.1rem 0 0",
                          lineHeight: 1.3
                        },
                        children: s.tag
                      })]
                    })]
                  }, s.href)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                    href: "/services",
                    onClick: () => {
                      setMenuOpen(false);
                      setMobileSvc(false);
                    },
                    style: {
                      display: "flex",
                      alignItems: "center",
                      gap: "0.375rem",
                      padding: "0.5rem 0.5rem",
                      fontSize: "0.8rem",
                      fontWeight: 700,
                      color: "#2A9D93",
                      textDecoration: "none"
                    },
                    children: "View All Services \u2192"
                  })]
                })
              })]
            }, link.href);
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/contact-us",
            className: "mt-2 text-center text-sm font-semibold px-5 py-3 rounded transition-colors duration-200",
            style: {
              background: "linear-gradient(135deg, #6FC061, #2A9D93)",
              color: "#F1F6F2"
            },
            onMouseEnter: e => e.currentTarget.style.opacity = "0.88",
            onMouseLeave: e => e.currentTarget.style.opacity = "1",
            children: "Request a Scope Review"
          })]
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ },

/***/ "./node_modules/react-dom/client.js"
/*!******************************************!*\
  !*** ./node_modules/react-dom/client.js ***!
  \******************************************/
(__unused_webpack_module, exports, __webpack_require__) {



var m = __webpack_require__(/*! react-dom */ "react-dom");
if (false) // removed by dead control flow
{} else {
  var i = m.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
  exports.createRoot = function(c, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.createRoot(c, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
  exports.hydrateRoot = function(c, h, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.hydrateRoot(c, h, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
}


/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var _scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Navbar */ "./src/scripts/Navbar.js");
/* harmony import */ var _scripts_Footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/Footer */ "./src/scripts/Footer.js");
/* harmony import */ var _scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/ContactForm */ "./src/scripts/ContactForm.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__);






// ── Navbar ────────────────────────────────────────────────────

if (document.querySelector("#render-navbar-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#render-navbar-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}

// ── Footer ────────────────────────────────────────────────────
if (document.querySelector("#render-footer-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#render-footer-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}

// ── ContactForm — mount every instance found on the page ──────
//
// Reads data attributes from the mount div to configure each instance:
//   data-variant  = "dark" | "light"   (default: "dark")
//   data-title    = custom heading
//   data-subtitle = custom subheading / eyebrow label
//
document.querySelectorAll("[id^='render-contact-form']").forEach(el => {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(el);
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {
    variant: el.dataset.variant || "dark",
    title: el.dataset.title || undefined,
    subtitle: el.dataset.subtitle || undefined
  }));
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map