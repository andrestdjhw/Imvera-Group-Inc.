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

const EMAILJS_SERVICE_ID = "service_9nox164"; // e.g. "service_xxxxxxx"
const EMAILJS_TEMPLATE_ID = "template_vfnpi35"; // e.g. "template_xxxxxxx"
const EMAILJS_PUBLIC_KEY = "eLgbIY6jJeClI38Z5"; // e.g. "xxxxxxxxxxxxxxxxxxxx"

// ── reCAPTCHA v2 config ───────────────────────────────────────
const RECAPTCHA_SITE_KEY = "6LeZGsUsAAAAAA28bhe_ldEX8X_9pgWrjK1mXXB7";

// ─────────────────────────────────────────────────────────────

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

// ── Style helpers ─────────────────────────────────────────────

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

// ── reCAPTCHA v2 helpers ──────────────────────────────────────

let recaptchaScriptLoaded = false;
function loadRecaptchaScript() {
  return new Promise(resolve => {
    if (recaptchaScriptLoaded || window.grecaptcha) {
      recaptchaScriptLoaded = true;
      resolve();
      return;
    }
    const script = document.createElement("script");
    script.src = "https://www.google.com/recaptcha/api.js?render=explicit";
    script.async = true;
    script.defer = true;
    script.onload = () => {
      recaptchaScriptLoaded = true;
      resolve();
    };
    document.head.appendChild(script);
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
  const [agreed, setAgreed] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [agreeErr, setAgreeErr] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [captchaErr, setCaptchaErr] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [status, setStatus] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null); // null | "sending" | "success" | "error"
  const [errMsg, setErrMsg] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("");
  const captchaRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null); // div where widget renders
  const widgetIdRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null); // grecaptcha widget ID

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

  // Load reCAPTCHA script and render widget when component mounts
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    let cancelled = false;
    async function init() {
      await loadRecaptchaScript();
      if (cancelled || !captchaRef.current || widgetIdRef.current !== null) return;

      // Poll until grecaptcha.render is ready
      const tryRender = () => {
        if (window.grecaptcha && window.grecaptcha.render) {
          widgetIdRef.current = window.grecaptcha.render(captchaRef.current, {
            sitekey: RECAPTCHA_SITE_KEY,
            theme: variant === "light" ? "light" : "dark",
            callback: () => setCaptchaErr(false),
            "expired-callback": () => {
              widgetIdRef.current = null;
            }
          });
        } else {
          setTimeout(tryRender, 100);
        }
      };
      tryRender();
    }
    init();
    return () => {
      cancelled = true;
    };
  }, []); // eslint-disable-line react-hooks/exhaustive-deps

  async function handleSubmit(e) {
    e.preventDefault();

    // 1. Terms check
    if (!agreed) {
      setAgreeErr(true);
      return;
    }
    setAgreeErr(false);

    // 2. reCAPTCHA v2 check
    const recaptchaToken = widgetIdRef.current !== null ? window.grecaptcha.getResponse(widgetIdRef.current) : window.grecaptcha?.getResponse();
    if (!recaptchaToken) {
      setCaptchaErr(true);
      return;
    }
    setCaptchaErr(false);
    setStatus("sending");
    setErrMsg("");
    try {
      // 3. Dynamic import EmailJS
      const emailjs = (await __webpack_require__.e(/*! import() */ "vendors-node_modules_emailjs_browser_es_index_js").then(__webpack_require__.bind(__webpack_require__, /*! @emailjs/browser */ "./node_modules/@emailjs/browser/es/index.js"))).default;

      // 4. Build template params — must match your EmailJS template variables
      const templateParams = {
        from_name: fields.full_name,
        company: fields.company,
        phone: fields.phone,
        reply_to: fields.email,
        service: fields.service || "Not specified",
        state: fields.state || "Not specified",
        message: fields.message || "—"
      };

      // 5. Send
      const result = await emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, templateParams, EMAILJS_PUBLIC_KEY);
      if (result.status === 200) {
        setStatus("success");
      } else {
        throw new Error(`EmailJS returned status ${result.status}`);
      }
    } catch (err) {
      console.error("ContactForm error:", err);
      setStatus("error");
      setErrMsg(err?.text || err?.message || "");
      // Reset reCAPTCHA so user can try again
      if (widgetIdRef.current !== null) {
        window.grecaptcha.reset(widgetIdRef.current);
      }
    }
  }
  const isDark = variant !== "light";
  const lblColor = labelColor(variant);
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
      onSubmit: handleSubmit,
      style: {
        display: "flex",
        flexDirection: "column",
        gap: "0.875rem"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
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
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          ref: captchaRef
        }), captchaErr && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
          style: {
            fontSize: "0.7rem",
            color: "#f87171",
            display: "flex",
            alignItems: "center",
            gap: "0.25rem",
            marginTop: "0.375rem"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            width: "12",
            height: "12",
            fill: "none",
            stroke: "currentColor",
            viewBox: "0 0 24 24",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              strokeLinecap: "round",
              strokeLinejoin: "round",
              strokeWidth: 2,
              d: "M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"
            })
          }), "Please complete the reCAPTCHA verification."]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("label", {
        style: {
          display: "flex",
          alignItems: "flex-start",
          gap: "0.625rem",
          cursor: "pointer",
          padding: "0.75rem",
          borderRadius: "0.5rem",
          border: `1px solid ${agreeErr ? "#f87171" : agreed ? "#2A9D93" : isDark ? "rgba(241,246,242,0.1)" : "#dde8e5"}`,
          background: agreeErr ? "rgba(248,113,113,0.06)" : agreed ? isDark ? "rgba(42,157,147,0.08)" : "rgba(42,157,147,0.05)" : isDark ? "rgba(241,246,242,0.03)" : "#F1F6F2",
          transition: "border-color 0.2s, background 0.2s"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          onClick: () => {
            setAgreed(prev => !prev);
            setAgreeErr(false);
          },
          style: {
            width: "1.125rem",
            height: "1.125rem",
            borderRadius: "0.25rem",
            flexShrink: 0,
            marginTop: "1px",
            border: `2px solid ${agreed ? "#2A9D93" : agreeErr ? "#f87171" : isDark ? "rgba(241,246,242,0.25)" : "#c5d0cc"}`,
            background: agreed ? "linear-gradient(135deg, #6FC061, #2A9D93)" : "transparent",
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            transition: "all 0.15s"
          },
          children: agreed && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            width: "10",
            height: "10",
            fill: "none",
            stroke: "white",
            viewBox: "0 0 24 24",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              strokeLinecap: "round",
              strokeLinejoin: "round",
              strokeWidth: 3,
              d: "M5 13l4 4L19 7"
            })
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
          style: {
            fontSize: "0.75rem",
            lineHeight: 1.5,
            color: isDark ? "#b8d4ce" : "#585858"
          },
          children: ["I have read and agree to the", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/privacy-policy",
            target: "_blank",
            rel: "noopener noreferrer",
            style: {
              color: "#2A9D93",
              textDecoration: "underline"
            },
            children: "Privacy Policy"
          }), " ", "and", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/terms-and-conditions",
            target: "_blank",
            rel: "noopener noreferrer",
            style: {
              color: "#2A9D93",
              textDecoration: "underline"
            },
            children: "Terms & Conditions"
          }), " ", "of Imvera Group Inc. *"]
        })]
      }), agreeErr && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
        style: {
          fontSize: "0.7rem",
          color: "#f87171",
          display: "flex",
          alignItems: "center",
          gap: "0.25rem",
          marginTop: "-0.25rem"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          width: "12",
          height: "12",
          fill: "none",
          stroke: "currentColor",
          viewBox: "0 0 24 24",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
            strokeLinecap: "round",
            strokeLinejoin: "round",
            strokeWidth: 2,
            d: "M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"
          })
        }), "You must agree to the Terms & Conditions and Privacy Policy to continue."]
      }), status === "error" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
        style: {
          fontSize: "0.75rem",
          color: "#f87171",
          textAlign: "center"
        },
        children: ["Something went wrong. Please try again or call us at 678-836-3266.", errMsg && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          style: {
            display: "block",
            opacity: 0.6,
            marginTop: "0.25rem"
          },
          children: errMsg
        })]
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
          fontSize: "0.7rem",
          color: isDark ? "#4d7069" : "#7fa89e",
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          gap: "0.375rem"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          width: "12",
          height: "12",
          fill: "none",
          stroke: "currentColor",
          viewBox: "0 0 24 24",
          style: {
            flexShrink: 0
          },
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
        @media (max-width: 540px) { .cf-grid-2 { grid-template-columns: 1fr !important; } }
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


const SERVICES = ["ECO Grip Flooring", "Cabinets & Countertops", "Acoustical Ceilings", "FRP Installation", "Drywall & Finishing", "Metal Framing", "Post-Construction Cleaning"];
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
const HEADQUARTERS = "2975 Breckinridge Blvd Suite 11, Duluth, GA 30096";
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
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/",
            className: "inline-flex mb-4",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              src: "/wp-content/uploads/2026/04/IMVERA_Imagotipo_Horizontal-Blanco.png",
              alt: "Imvera Group Inc.",
              style: {
                height: "32px",
                width: "auto",
                display: "block"
              }
            })
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
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "mailto:info@imveragroup.com",
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
                  d: "M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                })
              }), "info@imveragroup.com"]
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
                  className: "w-1 h-1 rounded-full flex-shrink-0",
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

/***/ "./src/scripts/ImveraChatbot.js"
/*!**************************************!*\
  !*** ./src/scripts/ImveraChatbot.js ***!
  \**************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ── Config ────────────────────────────────────────────────────

const PHONE_DISPLAY = "678-836-3266";
const PHONE_LINK = "tel:6788363266";
const EMAIL_DISPLAY = "info@imveragroup.com";
const EMAIL_LINK = "mailto:info@imveragroup.com";
const CONTACT_LINK = "/contact-us";
const SERVICES_LINK = "/services";
const MARKETS_LINK = "/markets-we-serve";
const ABOUT_LINK = "/about-us";

// ── Icons ─────────────────────────────────────────────────────

function BotIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "9.25",
      cy: "10.25",
      r: "1",
      fill: "currentColor"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "14.75",
      cy: "10.25",
      r: "1",
      fill: "currentColor"
    })]
  });
}
function CloseIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M6 6L18 18",
      stroke: "currentColor",
      strokeWidth: "1.9",
      strokeLinecap: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M18 6L6 18",
      stroke: "currentColor",
      strokeWidth: "1.9",
      strokeLinecap: "round"
    })]
  });
}
function SendIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 3L10 14",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 3L14 21L10 14L3 10L21 3Z",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}
function PhoneIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })
  });
}
function LinkIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M14 5H19V10",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M10 14L19 5",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M19 14V18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1H10",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}

// ── Bot logic ─────────────────────────────────────────────────

function msg(text, links = []) {
  return {
    id: Date.now() + Math.random(),
    text,
    sender: "bot",
    timestamp: new Date(),
    links
  };
}
function getBotResponse(rawInput) {
  const i = rawInput.toLowerCase();

  // ECO Grip
  if (i.includes("eco grip") || i.includes("flooring") || i.includes("floor") || i.includes("kitchen floor")) {
    return msg("ECO Grip is Imvera's highest-margin service and a key differentiator. We are a certified ECO Grip installer — one of a select group authorized in the Southeast. Our crews handle demolition, adhesive application, seam sealing, drain integration, and full equipment reinstallation. 480 sq ft per day with a 3-person crew.", [{
      label: "ECO Grip Service",
      href: "/services/eco-grip-flooring"
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Cabinets & Countertops
  if (i.includes("cabinet") || i.includes("countertop") || i.includes("corian") || i.includes("casework")) {
    return msg("Imvera installs Corian countertops and commercial casework to a zero-defect finishing standard. Our installation crews are dedicated to this trade — not rotated from framing or drywall. No errors, no exceptions. This is the highest-visibility finish work on any commercial interior.", [{
      label: "Cabinets & Countertops",
      href: "/services/cabinets-countertops"
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Acoustical Ceilings
  if (i.includes("ceiling") || i.includes("acoustical") || i.includes("armstrong") || i.includes("usg") || i.includes("t-bar")) {
    return msg("Imvera installs Armstrong and USG acoustical ceiling systems with a 2-person crew capable of 1,400 sq ft per day. We also fix what other contractors leave behind — re-cutting tile reveals, re-leveling grids, and coordinating MEP. We pass inspection first time.", [{
      label: "Acoustical Ceilings",
      href: "/services/acoustical-ceilings"
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // FRP
  if (i.includes("frp") || i.includes("fiberglass") || i.includes("wall panel") || i.includes("food service wall")) {
    return msg("Imvera installs Southern Building Products FRP wall panels using Fast Grab adhesive for commercial kitchens, restrooms, healthcare, and retail environments. 480 sq ft per day with a 3-person crew. Cove base available where specified. No trim moldings.", [{
      label: "FRP Installation",
      href: "/services/frp-installation"
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Drywall
  if (i.includes("drywall") || i.includes("finishing") || i.includes("hanging") || i.includes("taping") || i.includes("mudding") || i.includes("smooth wall")) {
    return msg("Imvera self-performs all phases — hanging, taping, mudding, and patching — with dedicated crews. Fire-rated and moisture-resistant assemblies. Smooth walls only, no textures. 480 sheets per week with a 2-person crew. Clean tools, formal job starts, no phones on site.", [{
      label: "Drywall & Finishing",
      href: "/services/drywall-finishing"
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Metal Framing
  if (i.includes("framing") || i.includes("metal framing") || i.includes("steel") || i.includes("gauge") || i.includes("partition")) {
    return msg("Imvera provides non-structural interior metal framing in 16, 18, and 20 gauge steel, executed from structural drawings. English-speaking foreman on every project. Full PPE on every site. Layouts verified before framing starts. We pass framing and ACT inspections first submission.", [{
      label: "Metal Framing",
      href: "/services/metal-framing"
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Multi-trade
  if (i.includes("multi") || i.includes("multiple trade") || i.includes("all trades") || i.includes("single contract") || i.includes("package")) {
    return msg("Multi-trade execution under one contract is one of Imvera's core advantages. Framing, drywall, ceilings, flooring, FRP, and cabinetry can all be scoped together — one contract, one point of contact, one execution standard across the entire interior package.", [{
      label: "View All Services",
      href: SERVICES_LINK
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Warranty
  if (i.includes("warranty") || i.includes("guarantee") || i.includes("workmanship")) {
    return msg("All completed installations are backed by a 1-year workmanship warranty. Imvera stands behind every scope we execute.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // ECO Grip certification
  if (i.includes("certified") || i.includes("certification") || i.includes("authorized")) {
    return msg("Yes — Imvera holds certified installer status for ECO Grip commercial flooring systems. This certification is required by leading national food service operators before awarding flooring contracts. It is not common among Southeast commercial flooring contractors.", [{
      label: "ECO Grip Service",
      href: "/services/eco-grip-flooring"
    }, {
      label: "About Us",
      href: ABOUT_LINK
    }]);
  }

  // Communication / daily updates
  if (i.includes("communication") || i.includes("update") || i.includes("photo") || i.includes("daily") || i.includes("report")) {
    return msg("GC partners receive daily progress updates with photo documentation throughout every active project. Issues are reported immediately before they affect schedule. You receive information without having to ask for it.", [{
      label: "About Us",
      href: ABOUT_LINK
    }]);
  }

  // Self-performed / crews
  if (i.includes("self-perform") || i.includes("brokered") || i.includes("crew") || i.includes("labor") || i.includes("workers")) {
    return msg("Every trade Imvera executes is self-performed by our own dedicated crews — not brokered to third-party labor. Dedicated means accountable. The same execution standard on every project, in every state.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Markets / states / locations
  if (i.includes("state") || i.includes("market") || i.includes("location") || i.includes("atlanta") || i.includes("charlotte") || i.includes("nashville") || i.includes("raleigh") || i.includes("georgia") || i.includes("florida") || i.includes("texas") || i.includes("kentucky") || i.includes("carolina") || i.includes("tennessee") || i.includes("southeast")) {
    return msg("Imvera maintains active operations across Georgia, North Carolina, South Carolina, Tennessee, Texas, Kentucky, and Florida. Primary markets are Atlanta, Charlotte, Nashville, and the Raleigh-Durham Triangle. The same execution standard in every location.", [{
      label: "Markets We Serve",
      href: MARKETS_LINK
    }, {
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Quote / scope review
  if (i.includes("quote") || i.includes("estimate") || i.includes("scope") || i.includes("bid") || i.includes("proposal")) {
    return msg("You can request a scope review through the contact page. Imvera responds to all project inquiries within one business day with a direct response — no auto-replies.", [{
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }]);
  }

  // Contact
  if (i.includes("contact") || i.includes("phone") || i.includes("email") || i.includes("call") || i.includes("reach")) {
    return msg("You can reach Imvera Group by phone or through the contact form. All project inquiries receive a direct response within one business day.", [{
      label: PHONE_DISPLAY,
      href: PHONE_LINK
    }, {
      label: "Contact Us",
      href: CONTACT_LINK
    }]);
  }

  // Gallery
  if (i.includes("gallery") || i.includes("photo") || i.includes("project") || i.includes("work") || i.includes("example")) {
    return msg("The gallery shows completed commercial interior projects across all six trades — ECO Grip flooring, drywall, framing, ceilings, FRP, and casework — executed across the Southeast.", [{
      label: "View Gallery",
      href: GALLERY_LINK
    }]);
  }

  // Default
  return msg("I can help with ECO Grip flooring, cabinets & countertops, acoustical ceilings, FRP installation, drywall & finishing, metal framing, multi-trade scopes, service areas, certification, or requesting a scope review.", [{
    label: "Request a Scope Review",
    href: CONTACT_LINK
  }, {
    label: "Call Us",
    href: PHONE_LINK
  }]);
}

// ── Component ─────────────────────────────────────────────────

function ImveraChatbot() {
  const [isOpen, setIsOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [inputMessage, setInputMessage] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("");
  const [isTyping, setIsTyping] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [messages, setMessages] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)([{
    id: 1,
    text: "Hi — I'm the Imvera Group assistant. I can help with our six commercial interior trades, service areas, certifications, and requesting a scope review.",
    sender: "bot",
    timestamp: new Date(),
    links: [{
      label: "Request a Scope Review",
      href: CONTACT_LINK
    }, {
      label: "Call Us",
      href: PHONE_LINK
    }]
  }]);
  const endRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const quickActions = (0,react__WEBPACK_IMPORTED_MODULE_0__.useMemo)(() => [{
    text: "ECO Grip Flooring",
    icon: "🏗️"
  }, {
    text: "Acoustical Ceilings",
    icon: "🔲"
  }, {
    text: "Drywall & Finishing",
    icon: "🧱"
  }, {
    text: "Metal Framing",
    icon: "⚙️"
  }, {
    text: "FRP Installation",
    icon: "🛡️"
  }, {
    text: "Cabinets & Countertops",
    icon: "🪵"
  }], []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    endRef.current?.scrollIntoView({
      behavior: "smooth"
    });
  }, [messages, isTyping]);
  function handleSend(e) {
    e?.preventDefault?.();
    if (!inputMessage.trim()) return;
    const text = inputMessage.trim();
    setMessages(prev => [...prev, {
      id: Date.now(),
      text,
      sender: "user",
      timestamp: new Date()
    }]);
    setInputMessage("");
    setIsTyping(true);
    setTimeout(() => {
      setMessages(prev => [...prev, getBotResponse(text)]);
      setIsTyping(false);
    }, 650);
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5",
    children: [isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden rounded-[24px] sm:h-[33rem]",
      style: {
        boxShadow: "0 22px 50px rgba(22,37,37,0.18)",
        border: "1px solid rgba(22,37,37,0.12)",
        background: "#F1F6F2"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "relative overflow-hidden px-4 py-3 text-white",
        style: {
          background: "linear-gradient(135deg, #162525 0%, #1e3333 50%, #2A9D93 130%)",
          borderBottom: "1px solid rgba(241,246,242,0.1)"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "absolute inset-0 opacity-[0.06]",
          style: {
            backgroundImage: "linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent)",
            backgroundSize: "18px 18px"
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "relative flex items-start justify-between gap-3",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex items-center gap-3",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "flex h-10 w-10 items-center justify-center rounded-full",
              style: {
                background: "rgba(42,157,147,0.2)",
                border: "1px solid rgba(42,157,147,0.4)"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
                className: "h-5 w-5"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "text-[11px] font-black uppercase tracking-[0.18em]",
                style: {
                  color: "#2A9D93"
                },
                children: "Execution. Certainty. No Drama."
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                className: "mt-1 text-[0.92rem] font-bold tracking-[-0.01em]",
                children: "Imvera Group Assistant"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "mt-0.5 flex items-center gap-1.5",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-1.5 w-1.5 rounded-full",
                  style: {
                    background: "#6FC061"
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  className: "text-[11px] font-semibold uppercase tracking-[0.14em]",
                  style: {
                    color: "rgba(241,246,242,0.7)"
                  },
                  children: "Online now"
                })]
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            onClick: () => setIsOpen(false),
            className: "inline-flex h-8 w-8 items-center justify-center rounded-full transition",
            style: {
              background: "rgba(241,246,242,0.1)",
              border: "1px solid rgba(241,246,242,0.15)"
            },
            onMouseEnter: e => {
              e.currentTarget.style.background = "#F1F6F2";
              e.currentTarget.style.color = "#162525";
            },
            onMouseLeave: e => {
              e.currentTarget.style.background = "rgba(241,246,242,0.1)";
              e.currentTarget.style.color = "white";
            },
            "aria-label": "Close chat",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
              className: "h-4 w-4"
            })
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "flex-1 overflow-y-auto px-3 py-3",
        style: {
          background: "#F1F6F2"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "space-y-3",
          children: [messages.map(message => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: `flex ${message.sender === "user" ? "justify-end" : "justify-start"}`,
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: `max-w-[88%] rounded-[18px] px-3.5 py-3 text-[0.875rem] leading-6`,
              style: message.sender === "user" ? {
                background: "#162525",
                color: "#F1F6F2",
                borderRadius: "18px 18px 4px 18px",
                boxShadow: "0 2px 8px rgba(22,37,37,0.18)"
              } : {
                background: "#fff",
                color: "#162525",
                borderRadius: "18px 18px 18px 4px",
                border: "1px solid rgba(22,37,37,0.08)",
                boxShadow: "0 2px 6px rgba(22,37,37,0.06)"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "m-0",
                children: message.text
              }), message.links?.length > 0 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "mt-3 flex flex-wrap gap-2",
                children: message.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: link.href,
                  className: "inline-flex items-center gap-1.5 rounded-full px-2.5 py-1.5 text-[11px] font-bold transition",
                  style: {
                    background: "#F1F6F2",
                    border: "1px solid rgba(22,37,37,0.1)",
                    color: "#2A9D93"
                  },
                  onMouseEnter: e => {
                    e.currentTarget.style.borderColor = "#2A9D93";
                    e.currentTarget.style.color = "#162525";
                  },
                  onMouseLeave: e => {
                    e.currentTarget.style.borderColor = "rgba(22,37,37,0.1)";
                    e.currentTarget.style.color = "#2A9D93";
                  },
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(LinkIcon, {
                    className: "h-3.5 w-3.5"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    children: link.label
                  })]
                }, `${message.id}-${link.href}`))
              })]
            })
          }, message.id)), isTyping && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex justify-start",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "rounded-[18px] px-4 py-3",
              style: {
                background: "#fff",
                border: "1px solid rgba(22,37,37,0.08)",
                borderRadius: "18px 18px 18px 4px",
                boxShadow: "0 2px 6px rgba(22,37,37,0.06)"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "flex gap-1.5",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full",
                  style: {
                    background: "#162525"
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full",
                  style: {
                    background: "#2A9D93",
                    animationDelay: "0.2s"
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full",
                  style: {
                    background: "#6FC061",
                    animationDelay: "0.4s"
                  }
                })]
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            ref: endRef
          })]
        })
      }), messages.length === 1 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t px-3 py-3",
        style: {
          borderColor: "rgba(22,37,37,0.08)",
          background: "#fff"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "mb-2 text-[0.68rem] font-black uppercase tracking-[0.12em]",
          style: {
            color: "#2A9D93"
          },
          children: "Our six trades"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "flex flex-wrap gap-2",
          children: quickActions.map(action => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
            type: "button",
            onClick: () => setInputMessage(action.text),
            className: "rounded-full px-2.5 py-1.5 text-[11px] font-bold transition",
            style: {
              background: "#F1F6F2",
              border: "1px solid rgba(22,37,37,0.1)",
              color: "#162525"
            },
            onMouseEnter: e => {
              e.currentTarget.style.borderColor = "#2A9D93";
              e.currentTarget.style.background = "rgba(42,157,147,0.08)";
              e.currentTarget.style.color = "#2A9D93";
            },
            onMouseLeave: e => {
              e.currentTarget.style.borderColor = "rgba(22,37,37,0.1)";
              e.currentTarget.style.background = "#F1F6F2";
              e.currentTarget.style.color = "#162525";
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "mr-1",
              children: action.icon
            }), action.text]
          }, action.text))
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t p-3",
        style: {
          borderColor: "rgba(22,37,37,0.08)",
          background: "#fff"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
          onSubmit: handleSend,
          className: "flex items-center gap-2",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            value: inputMessage,
            onChange: e => setInputMessage(e.target.value),
            placeholder: "Ask about our trades or services\u2026",
            className: "min-w-0 flex-1 rounded-full px-4 py-2.5 text-sm outline-none transition",
            style: {
              background: "#F1F6F2",
              border: "1px solid rgba(22,37,37,0.1)",
              color: "#162525"
            },
            onFocus: e => {
              e.currentTarget.style.borderColor = "#2A9D93";
              e.currentTarget.style.background = "#fff";
            },
            onBlur: e => {
              e.currentTarget.style.borderColor = "rgba(22,37,37,0.1)";
              e.currentTarget.style.background = "#F1F6F2";
            }
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "submit",
            disabled: !inputMessage.trim(),
            className: "inline-flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full text-white transition",
            style: {
              background: "linear-gradient(135deg, #6FC061, #2A9D93)",
              boxShadow: "0 8px 20px rgba(42,157,147,0.3)"
            },
            onMouseEnter: e => {
              e.currentTarget.style.opacity = "0.88";
            },
            onMouseLeave: e => {
              e.currentTarget.style.opacity = "1";
            },
            "aria-label": "Send message",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SendIcon, {
              className: "h-4 w-4"
            })
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "mt-3 flex flex-wrap items-center gap-3 text-[11px] font-semibold",
          style: {
            color: "rgba(22,37,37,0.5)"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: PHONE_LINK,
            className: "inline-flex items-center gap-1.5 transition",
            onMouseEnter: e => e.currentTarget.style.color = "#2A9D93",
            onMouseLeave: e => e.currentTarget.style.color = "rgba(22,37,37,0.5)",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {
              className: "h-3.5 w-3.5"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              children: PHONE_DISPLAY
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: EMAIL_LINK,
            className: "truncate transition",
            onMouseEnter: e => e.currentTarget.style.color = "#2A9D93",
            onMouseLeave: e => e.currentTarget.style.color = "rgba(22,37,37,0.5)",
            children: EMAIL_DISPLAY
          })]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
      type: "button",
      onClick: () => setIsOpen(prev => !prev),
      className: "group relative flex h-14 w-14 items-center justify-center rounded-full text-white transition-all duration-300",
      style: {
        background: isOpen ? "#162525" : "linear-gradient(135deg, #162525 0%, #2A9D93 80%, #6FC061 140%)",
        boxShadow: "0 18px 40px rgba(22,37,37,0.28)"
      },
      onMouseEnter: e => {
        e.currentTarget.style.transform = "scale(1.05)";
      },
      onMouseLeave: e => {
        e.currentTarget.style.transform = "scale(1)";
      },
      "aria-label": isOpen ? "Close chat" : "Open chat",
      children: [!isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
        className: "absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "absolute inline-flex h-full w-full animate-ping rounded-full opacity-75",
          style: {
            background: "#6FC061"
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "relative inline-flex h-3.5 w-3.5 rounded-full",
          style: {
            background: "#6FC061"
          }
        })]
      }), isOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
        className: "h-5 w-5"
      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
        className: "h-6 w-6"
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ImveraChatbot);

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
}, {
  num: "07",
  title: "Post-Construction Cleaning",
  tag: "Closeout service · Inspection-ready",
  href: "/services/post-construction-cleaning",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    strokeWidth: 1.5,
    d: "M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
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
const EMAIL = "info@imveragroup.com";

// ── Mega Menu ─────────────────────────────────────────────────

function MegaMenu({
  visible
}) {
  // First 6 go in the 3-col grid, 7th spans full width
  const gridServices = SERVICES.slice(0, 6);
  const lastService = SERVICES[6];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: {
      position: "absolute",
      top: "100%",
      left: "50%",
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
        children: "Our Seven Trade Disciplines"
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
        gridTemplateColumns: "repeat(3, 1fr)"
      },
      children: gridServices.map((s, i) => {
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
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
      href: lastService.href,
      style: {
        display: "flex",
        alignItems: "center",
        gap: "1rem",
        padding: "0.875rem 1.25rem",
        textDecoration: "none",
        transition: "background 0.15s",
        borderTop: "1px solid #f0f4f2",
        background: "linear-gradient(135deg, rgba(111,192,97,0.04), rgba(42,157,147,0.04))"
      },
      onMouseEnter: e => e.currentTarget.style.background = "linear-gradient(135deg, rgba(111,192,97,0.09), rgba(42,157,147,0.09))",
      onMouseLeave: e => e.currentTarget.style.background = "linear-gradient(135deg, rgba(111,192,97,0.04), rgba(42,157,147,0.04))",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          width: "2.25rem",
          height: "2.25rem",
          borderRadius: "0.5rem",
          flexShrink: 0,
          background: "linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15))",
          display: "flex",
          alignItems: "center",
          justifyContent: "center"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          width: "16",
          height: "16",
          fill: "none",
          stroke: "#2A9D93",
          viewBox: "0 0 24 24",
          children: lastService.icon
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          flex: 1
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            display: "flex",
            alignItems: "center",
            gap: "0.4rem",
            marginBottom: "0.15rem"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              fontSize: "0.65rem",
              fontWeight: 700,
              color: "rgba(42,157,147,0.6)",
              letterSpacing: "0.05em"
            },
            children: lastService.num
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
            margin: 0
          },
          children: lastService.title
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          style: {
            fontSize: "0.7rem",
            color: "#7fa89e",
            lineHeight: 1.4,
            margin: 0
          },
          children: lastService.tag
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          fontSize: "0.6rem",
          fontWeight: 700,
          letterSpacing: "0.1em",
          textTransform: "uppercase",
          padding: "0.2rem 0.6rem",
          borderRadius: "9999px",
          flexShrink: 0,
          background: "linear-gradient(135deg, #6FC061, #2A9D93)",
          color: "#F1F6F2"
        },
        children: "New"
      })]
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
        children: "All seven trades self-performed by dedicated crews. One contract. One point of accountability."
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
        className: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-12",
        style: {
          display: "grid",
          gridTemplateColumns: "1fr auto 1fr",
          alignItems: "center"
        },
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
          href: "https://maps.google.com/?q=2975+Breckinridge+Blvd+Suite+11+Duluth+GA+30096",
          target: "_blank",
          rel: "noopener noreferrer",
          className: "hidden md:flex items-center gap-1.5 transition-colors duration-200",
          style: {
            color: "#7fa89e",
            textDecoration: "none"
          },
          onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
          onMouseLeave: e => e.currentTarget.style.color = "#7fa89e",
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
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              fontSize: "0.75rem",
              fontWeight: 500
            },
            children: "2975 Breckinridge Blvd Suite 11, Duluth, GA 30096"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex items-center gap-3 justify-end",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://www.linkedin.com/company/imvera-group",
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "LinkedIn",
            style: {
              color: "#a8bfbb",
              transition: "color 0.2s"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
            onMouseLeave: e => e.currentTarget.style.color = "#a8bfbb",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "15",
              height: "15",
              fill: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://www.facebook.com/imveragroup",
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "Facebook",
            style: {
              color: "#a8bfbb",
              transition: "color 0.2s"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
            onMouseLeave: e => e.currentTarget.style.color = "#a8bfbb",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "15",
              height: "15",
              fill: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://www.instagram.com/imveragroup",
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "Instagram",
            style: {
              color: "#a8bfbb",
              transition: "color 0.2s"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
            onMouseLeave: e => e.currentTarget.style.color = "#a8bfbb",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "15",
              height: "15",
              fill: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            style: {
              width: "1px",
              height: "14px",
              background: "rgba(241,246,242,0.12)",
              flexShrink: 0
            }
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://www.google.com/search?kgmid=/g/11wp99r0g4&hl=en-US&q=IMCV+Construction+Services+LLC&shem=rimspwouoe&shndl=30&source=sh/x/loc/osrp/m5/1&kgs=c796cb2699b58fb2&utm_source=rimspwouoe,sh/x/loc/osrp/m5/1",
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "Google My Business",
            style: {
              color: "#a8bfbb",
              transition: "color 0.2s"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
            onMouseLeave: e => e.currentTarget.style.color = "#a8bfbb",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "15",
              height: "15",
              viewBox: "0 0 24 24",
              fill: "currentColor",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://www.bbb.org/us/ga/norcross/profile/framing-contractors/imcv-construction-services-0443-28146361",
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "Better Business Bureau",
            style: {
              color: "#a8bfbb",
              transition: "color 0.2s"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#F1F6F2",
            onMouseLeave: e => e.currentTarget.style.color = "#a8bfbb",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "15",
              height: "15",
              viewBox: "0 0 24 24",
              fill: "currentColor",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-.5 17.5H8V7h3.5c1.933 0 3 .933 3 2.5 0 .867-.4 1.567-1.067 2 .867.367 1.4 1.133 1.4 2.167 0 1.766-1.2 2.833-3.333 2.833zm.167-7.5H9.5v2h2.167c.8 0 1.333-.4 1.333-1s-.533-1-1.333-1zm.166 3.5H9.5v2.167h2.333c.9 0 1.5-.433 1.5-1.083s-.6-1.084-1.5-1.084z"
              })
            })
          })]
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
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/",
            className: "flex items-center flex-shrink-0",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              src: "/wp-content/uploads/2026/04/IMVERA_Imagotipo_Horizontal.png",
              alt: "Imvera Group Inc.",
              style: {
                height: "36px",
                width: "auto",
                display: "block"
              }
            })
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
            children: "Request a Scope Review"
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
        className: `lg:hidden overflow-hidden transition-all duration-300 ease-in-out ${menuOpen ? "max-h-[800px]" : "max-h-0"}`,
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
                  maxHeight: mobileServices ? "700px" : "0",
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
                      padding: "0.5rem",
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
                      padding: "0.5rem",
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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
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
/******/ 	/* webpack/runtime/ensure chunk */
/******/ 	(() => {
/******/ 		__webpack_require__.f = {};
/******/ 		// This file contains only the entry chunk.
/******/ 		// The chunk loading function for additional chunks
/******/ 		__webpack_require__.e = (chunkId) => {
/******/ 			return Promise.all(Object.keys(__webpack_require__.f).reduce((promises, key) => {
/******/ 				__webpack_require__.f[key](chunkId, promises);
/******/ 				return promises;
/******/ 			}, []));
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/get javascript chunk filename */
/******/ 	(() => {
/******/ 		// This function allow to reference async chunks
/******/ 		__webpack_require__.u = (chunkId) => {
/******/ 			// return url for filenames based on template
/******/ 			return "" + chunkId + ".js?ver=" + "9d152a63020dacc3303a" + "";
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/get mini-css chunk filename */
/******/ 	(() => {
/******/ 		// This function allow to reference async chunks
/******/ 		__webpack_require__.miniCssF = (chunkId) => {
/******/ 			// return url for filenames based on template
/******/ 			return undefined;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/load script */
/******/ 	(() => {
/******/ 		var inProgress = {};
/******/ 		var dataWebpackPrefix = "brads-boilerplate-theme:";
/******/ 		// loadScript function to load a script via script tag
/******/ 		__webpack_require__.l = (url, done, key, chunkId) => {
/******/ 			if(inProgress[url]) { inProgress[url].push(done); return; }
/******/ 			var script, needAttach;
/******/ 			if(key !== undefined) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				for(var i = 0; i < scripts.length; i++) {
/******/ 					var s = scripts[i];
/******/ 					if(s.getAttribute("src") == url || s.getAttribute("data-webpack") == dataWebpackPrefix + key) { script = s; break; }
/******/ 				}
/******/ 			}
/******/ 			if(!script) {
/******/ 				needAttach = true;
/******/ 				script = document.createElement('script');
/******/ 		
/******/ 				script.charset = 'utf-8';
/******/ 				if (__webpack_require__.nc) {
/******/ 					script.setAttribute("nonce", __webpack_require__.nc);
/******/ 				}
/******/ 				script.setAttribute("data-webpack", dataWebpackPrefix + key);
/******/ 		
/******/ 				script.src = url;
/******/ 			}
/******/ 			inProgress[url] = [done];
/******/ 			var onScriptComplete = (prev, event) => {
/******/ 				// avoid mem leaks in IE.
/******/ 				script.onerror = script.onload = null;
/******/ 				clearTimeout(timeout);
/******/ 				var doneFns = inProgress[url];
/******/ 				delete inProgress[url];
/******/ 				script.parentNode && script.parentNode.removeChild(script);
/******/ 				doneFns && doneFns.forEach((fn) => (fn(event)));
/******/ 				if(prev) return prev(event);
/******/ 			}
/******/ 			var timeout = setTimeout(onScriptComplete.bind(null, undefined, { type: 'timeout', target: script }), 120000);
/******/ 			script.onerror = onScriptComplete.bind(null, script.onerror);
/******/ 			script.onload = onScriptComplete.bind(null, script.onload);
/******/ 			needAttach && document.head.appendChild(script);
/******/ 		};
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
/******/ 	/* webpack/runtime/publicPath */
/******/ 	(() => {
/******/ 		var scriptUrl;
/******/ 		if (globalThis.importScripts) scriptUrl = globalThis.location + "";
/******/ 		var document = globalThis.document;
/******/ 		if (!scriptUrl && document) {
/******/ 			if (document.currentScript && document.currentScript.tagName.toUpperCase() === 'SCRIPT')
/******/ 				scriptUrl = document.currentScript.src;
/******/ 			if (!scriptUrl) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				if(scripts.length) {
/******/ 					var i = scripts.length - 1;
/******/ 					while (i > -1 && (!scriptUrl || !/^http(s?):/.test(scriptUrl))) scriptUrl = scripts[i--].src;
/******/ 				}
/******/ 			}
/******/ 		}
/******/ 		// When supporting browsers where an automatic publicPath is not supported you must specify an output.publicPath manually via configuration
/******/ 		// or pass an empty string ("") and set the __webpack_public_path__ variable from your code to use your own logic.
/******/ 		if (!scriptUrl) throw new Error("Automatic publicPath is not supported in this browser");
/******/ 		scriptUrl = scriptUrl.replace(/^blob:/, "").replace(/#.*$/, "").replace(/\?.*$/, "").replace(/\/[^\/]+$/, "/");
/******/ 		__webpack_require__.p = scriptUrl;
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"index": 0
/******/ 		};
/******/ 		
/******/ 		__webpack_require__.f.j = (chunkId, promises) => {
/******/ 				// JSONP chunk loading for javascript
/******/ 				var installedChunkData = __webpack_require__.o(installedChunks, chunkId) ? installedChunks[chunkId] : undefined;
/******/ 				if(installedChunkData !== 0) { // 0 means "already installed".
/******/ 		
/******/ 					// a Promise means "currently loading".
/******/ 					if(installedChunkData) {
/******/ 						promises.push(installedChunkData[2]);
/******/ 					} else {
/******/ 						if(true) { // all chunks have JS
/******/ 							// setup Promise in chunk cache
/******/ 							var promise = new Promise((resolve, reject) => (installedChunkData = installedChunks[chunkId] = [resolve, reject]));
/******/ 							promises.push(installedChunkData[2] = promise);
/******/ 		
/******/ 							// start chunk loading
/******/ 							var url = __webpack_require__.p + __webpack_require__.u(chunkId);
/******/ 							// create error before stack unwound to get useful stacktrace later
/******/ 							var error = new Error();
/******/ 							var loadingEnded = (event) => {
/******/ 								if(__webpack_require__.o(installedChunks, chunkId)) {
/******/ 									installedChunkData = installedChunks[chunkId];
/******/ 									if(installedChunkData !== 0) installedChunks[chunkId] = undefined;
/******/ 									if(installedChunkData) {
/******/ 										var errorType = event && (event.type === 'load' ? 'missing' : event.type);
/******/ 										var realSrc = event && event.target && event.target.src;
/******/ 										error.message = 'Loading chunk ' + chunkId + ' failed.\n(' + errorType + ': ' + realSrc + ')';
/******/ 										error.name = 'ChunkLoadError';
/******/ 										error.type = errorType;
/******/ 										error.request = realSrc;
/******/ 										installedChunkData[1](error);
/******/ 									}
/******/ 								}
/******/ 							};
/******/ 							__webpack_require__.l(url, loadingEnded, "chunk-" + chunkId, chunkId);
/******/ 						}
/******/ 					}
/******/ 				}
/******/ 		};
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		// no on chunks loaded
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 		
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = globalThis["webpackChunkbrads_boilerplate_theme"] = globalThis["webpackChunkbrads_boilerplate_theme"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
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
/* harmony import */ var _scripts_ImveraChatbot__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/ImveraChatbot */ "./src/scripts/ImveraChatbot.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__);







// ── Navbar ────────────────────────────────────────────────────

if (document.querySelector("#render-navbar-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#render-navbar-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}

// ── Footer ────────────────────────────────────────────────────
if (document.querySelector("#render-footer-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#render-footer-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}

// ── ContactForm — mount every instance found on the page ──────
document.querySelectorAll("[id^='render-contact-form']").forEach(el => {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(el);
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {
    variant: el.dataset.variant || "dark",
    title: el.dataset.title || undefined,
    subtitle: el.dataset.subtitle || undefined
  }));
});

// ── Chatbot — mounted once into a persistent div in footer.php ─
// Add this to footer.php before wp_footer():
//   <div id="render-chatbot-here"></div>
if (document.querySelector("#render-chatbot-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#render-chatbot-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_ImveraChatbot__WEBPACK_IMPORTED_MODULE_5__["default"], {}));
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map