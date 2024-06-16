module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                cyan: {
                    500: '#00bcd4',
                    400: '#26c6da',
                },
                darkpurple: '#4b0082',
                gold: '#ffd700',
                customBackground: 'radial-gradient(circle, rgba(63, 61, 86, 0.5), rgba(10, 0, 17, 0.7))',
            },
        },
    },
    plugins: [],
}
