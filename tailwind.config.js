import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                "primary1": "#137fec",
                "background-light": "#f6f7f8",
                "background-dark": "#101922",
                "on-primary-fixed-variant": "#3323cc",
                "on-secondary": "#ffffff",
                "on-secondary-fixed-variant": "#2f2ebe",
                "tertiary": "#7e3000",
                "tertiary-fixed-dim": "#ffb695",
                "primary-fixed-dim": "#c3c0ff",
                "outline-variant": "#c7c4d8",
                "inverse-surface": "#2e3132",
                "inverse-primary": "#c3c0ff",
                "primary-fixed": "#e2dfff",
                "surface-dim": "#d9dadc",
                "outline": "#777587",
                "secondary-container": "#6063ee",
                "surface-variant": "#e1e2e4",
                "on-secondary-container": "#fffbff",
                "tertiary-fixed": "#ffdbcc",
                "secondary": "#4648d4",
                "secondary-fixed": "#e1e0ff",
                "on-tertiary-fixed": "#351000",
                "on-secondary-fixed": "#07006c",
                "inverse-on-surface": "#f0f1f3",
                "on-background": "#191c1e",
                "surface-container-high": "#e7e8ea",
                "on-primary": "#ffffff",
                "on-primary-container": "#dad7ff",
                "on-primary-fixed": "#0f0069",
                "background": "#f8f9fb",
                "secondary-fixed-dim": "#c0c1ff",
                "primary": "#3525cd",
                "surface-bright": "#f8f9fb",
                "on-surface-variant": "#464555",
                "surface": "#f8f9fb",
                "surface-container-highest": "#e1e2e4",
                "surface-container-low": "#f3f4f6",
                "on-tertiary-fixed-variant": "#7b2f00",
                "surface-tint": "#4d44e3",
                "surface-container-lowest": "#ffffff",
                "on-tertiary": "#ffffff",
                "on-error-container": "#93000a",
                "primary-container": "#4f46e5",
                "on-error": "#ffffff",
                "tertiary-container": "#a44100",
                "error-container": "#ffdad6",
                "on-tertiary-container": "#ffd2be",
                "on-surface": "#191c1e",
                "error": "#ba1a1a",
                "surface-container": "#edeef0"
            },
            fontFamily: {
                "display": ["Inter", "sans-serif"]
            },
            borderRadius: {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            "spacing": {
                "card-gap": "20px",
                "container-padding": "24px",
                "section-margin": "32px",
                "unit": "4px",
                "inline-element-gap": "12px"
            },
            "fontSize": {
                "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                "button": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
                "label-sm": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500" }],
                "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                "h2": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                "h3": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                "h1": ["30px", { "lineHeight": "38px", "letterSpacing": "-0.02em", "fontWeight": "700" }]
            }
        },
    },

    plugins: [forms],
};
