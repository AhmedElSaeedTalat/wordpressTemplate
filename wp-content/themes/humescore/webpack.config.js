var webpack = require("webpack");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
module.exports = {
	entry:{
		sass:[	
				"./sass/index.js",
				"./sass/index.scss"
				]
},
	output:{
		path:__dirname,
		filename:"bundle.js"
},
module:{
	rules:[
	{
		test:/\.s[ca]ss$/,
		use:ExtractTextPlugin.extract({
			use:["css-loader","sass-loader"],
			fallback:"style-loader"
			})

	},


	  

	]
},
plugins: [new ExtractTextPlugin("style.css"),]
}
if(process.env.NODE_ENV==='production'){
	module.exports.plugins.push(new webpack.optimize.UglifyJsPlugin() )
}
