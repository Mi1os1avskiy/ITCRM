/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')


module.exports = {
	content: [
		// "./node_modules/tailwindcss/**/*.{html,js}",
		"./public/src/**/*.{html,js}",
		"./templates/**/*.twig",
	],
	theme: {
		extend: {
			// fontFamily: {
				// sans: ['Inter var', ...defaultTheme.fontFamily.sans],
			// },
		}
	},
	plugins: [
		require("@tailwindcss/forms")
	],
}