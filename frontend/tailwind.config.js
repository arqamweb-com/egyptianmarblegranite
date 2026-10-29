/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "class", // Enables dark mode using a CSS class
  content: ["../*.php", "../**/*.php", "./src/**/*.{js,ts,jsx,tsx,html}"],
  corePlugins: {
    preflight: false,
  },
  theme: {
    extend: {
      colors: {
        border: "#e2e8f080",
        borderDark: "#0f172a1a",
        "border-focus": "hsl(var(--ring))",
        input: "hsl(var(--input))",
        ring: "hsl(var(--ring))",
        background: "#ffffff",
        foreground: "hsl(var(--foreground))",
        primary: {
          DEFAULT: "#0f172a",
          foreground: "#f8fafc",
        },
        secondary: {
          DEFAULT: "#f1f5f9",
          foreground: "#ffffff",
        },
        alt: {
          DEFAULT: "#f7f7f7",
          foreground: "#ffffff",
        },
        destructive: {
          DEFAULT: "hsl(var(--destructive))",
          foreground: "hsl(var(--destructive-foreground))",
        },
        muted: {
          DEFAULT: "hsl(var(--muted))",
          foreground: "hsl(var(--muted-foreground))",
        },
        accent: {
          DEFAULT: "#8bd4f8",
          foreground: "hsl(var(--accent-foreground))",
        },
        popover: {
          DEFAULT: "hsl(var(--popover))",
          foreground: "hsl(var(--popover-foreground))",
        },
        card: {
          DEFAULT: "hsl(var(--card))",
          foreground: "hsl(var(--card-foreground))",
        },
        sidebar: {
          DEFAULT: "hsl(var(--sidebar-background))",
          foreground: "hsl(var(--sidebar-foreground))",
          primary: "hsl(var(--sidebar-primary))",
          "primary-foreground": "hsl(var(--sidebar-primary-foreground))",
          accent: "hsl(var(--sidebar-accent))",
          "accent-foreground": "hsl(var(--sidebar-accent-foreground))",
          border: "hsl(var(--sidebar-border))",
          ring: "hsl(var(--sidebar-ring))",
        },

        olive: {
          50: "#f7f8f5",
          100: "#eef0ea",
          200: "#dde2d5",
          300: "#c4cdb7",
          400: "#a7b595",
          500: "#8e9e78",
          600: "#718460",
          700: "#5a6a4d",
          800: "#495540",
          900: "#3d4736",
        },
        beige: {
          50: "#faf9f6",
          100: "#f4f2ed",
          200: "#e8e4da",
          300: "#d9d2c1",
          400: "#c7bca4",
          500: "#b5a388",
          600: "#a08c70",
          700: "#86735d",
          800: "#6f5f4e",
          900: "#5a4f42",
        },
      },
      borderRadius: {
        lg: "var(--radius)",
        md: "calc(var(--radius) - 2px)",
        sm: "calc(var(--radius) - 4px)",
      },
      keyframes: {
        "accordion-down": {
          from: {
            height: "0",
          },
          to: {
            height: "var(--radix-accordion-content-height)",
          },
        },
        "accordion-up": {
          from: {
            height: "var(--radix-accordion-content-height)",
          },
          to: {
            height: "0",
          },
        },
        "fade-in": {
          from: {
            opacity: "0",
            transform: "translateY(10px)",
          },
          to: {
            opacity: "1",
            transform: "translateY(0)",
          },
        },
        "slide-in": {
          from: {
            opacity: "0",
            transform: "translateX(-20px)",
          },
          to: {
            opacity: "1",
            transform: "translateX(0)",
          },
        },
        "zoom-in": {
          "0%": { transform: "scale(1)" },
          "100%": { transform: "scale(1.15)" },
        },
      },
      animation: {
        "accordion-down": "accordion-down 0.2s ease-out",
        "accordion-up": "accordion-up 0.2s ease-out",
        "fade-in": "fade-in 0.5s ease-out forwards",
        "slide-in": "slide-in 0.5s ease-out forwards",
        "zoom-in": "zoom-in 20s ease-in-out infinite alternate",
      },
    },
  },

  plugins: [require("tailwindcss-animate")],
};
