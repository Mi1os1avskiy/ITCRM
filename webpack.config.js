const path = require("path");
const {CleanWebpackPlugin} = require('clean-webpack-plugin');

module.exports = env => {
	return {
		entry: {
			'main': ['./frontend/index.ts'],
		}, stats: {
			preset: 'normal'
		}, mode: 'production', module: {
			rules: [{
				test: /\.tsx?$/, exclude: /node_modules/, use: [{
					loader: "ts-loader", options: {
						configFile: 'tsconfig.json'
					},
				}]
			},]
		}, resolve: {
			extensions: [".ts", ".js", ".vue", ".json"], alias: {
				vue$: "vue/dist/vue.esm.js",
			},
		}, plugins: [...(() => {
			return env && env.noclean ? [] : [new CleanWebpackPlugin({
				cleanOnceBeforeBuildPatterns: [path.resolve(__dirname, "build")]
			})]
		})(),
		], optimization: {
			minimize: false, minimizer: [], splitChunks: {
				chunks: 'all', cacheGroups: {
					vendor: {
						test: /[\\/]node_modules[\\/]/, name: 'vendors'
					},
				},
			}
		}, output: {
			filename: `js/[name].js`, path: path.resolve(__dirname, "public/dist")
		}
	};
}
