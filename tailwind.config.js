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
			keyframes: {
				fadeIn: {
					from : {
						opacity: 0
					},
					to: {
						opacity: 1
					}
				}
			},
			colors: {
				myColor: '#1db8f5'
			}
		}
	},
	animation: {
		fade: 'fadeIn .5s ease-in-out'
	},
	keyframes: {
		slideLeft: {
			"0%": { transform: "translate-x-full" },
			"100%": { transform: "translate-x-0" }
		}
	},
	plugins: [
		require("@tailwindcss/forms"),
		require("@tailwindcss/line-clamp")
	],
}