import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                // Index - Gibran
                button: "#098ddb",
                button2: "#0aa1fa",
                bg: "#F2F4F7",

                // Index - Hex Names Groups
                // Exclusive Group
                "seashell-pink": "#F8F1F1",
                "bright-turqoise": "#E3F4F4",
                // Gray Group
                "dark-gray": "#545454",
                "very-dark-gray": "#4a4a4a",
                "grayish-cyan": "#9c9d9d",
                "grayish-blue": "#d5d7d9",
                "light-grayish-blue": "#e4e5e8",
                "light-gray": "#F8F9F9",
                // Red Group
                "bright-red": "#FA3E3E",
                "soft-red": "#fa5151",
                // Green Group
                "lime-green": "#76d51f",
            },
            fontFamily: {
                sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins"],
            },
            borderRadius: {
                "4xl": "32px",
                "5xl": "40px",
                "6xl": "48px",
            },
        },
    },

    plugins: [forms],
};
