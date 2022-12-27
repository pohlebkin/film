module.exports = {
	env: {
		browser: true,
		es2021: true
	},
	extends: [
		'plugin:react/recommended',
		'standard-with-typescript',
		'prettier'
	],
	overrides: [
		{
			files: ['*.ts', '*.tsx'],
			parserOptions: {
				project: ['./tsconfig.json']
			}
		}
	],
	parserOptions: {
		ecmaVersion: 'latest',
		sourceType: 'module'
	},
	plugins: [
		'react',
		'@typescript-eslint',
	],
	rules: {
		'@typescript-eslint/explicit-function-return-type': "off",
		'react/function-component-definition': [
			2,
			{
				namedComponents: 'arrow-function',
				unnamedComponents: 'arrow-function'
			}
		],
		'semi': ['warn', 'always'],
		'import/prefer-default-export': 0,
		'react/jsx-props-no-spreading': 0,
		'react/require-default-props': 0,
		'react/button-has-type': 0,
		"react/react-in-jsx-scope": "off",
		'react/no-unstable-nested-components': [2, { allowAsProps: true }],
		'react/no-array-index-key': 0,
		'no-param-reassign': 0,
	}
}