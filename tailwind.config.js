module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false,
    variants: {
        extend: {},
    },
    theme: {
        fontFamily: {
            'sans': ['Poppins', 'ui-sans-serif', 'system-ui'],
        },
        extend: {},
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
    ],
}