import globals from 'globals'
import pluginJs from '@eslint/js'
import pluginReact from 'eslint-plugin-react'
import pluginPrettier from 'eslint-plugin-prettier/recommended'

export default [
  pluginJs.configs.recommended,
  pluginReact.configs.flat.recommended,
  pluginPrettier,
  {
    languageOptions: { globals: globals.browser },
    files: ['**/*.{js,mjs,cjs,jsx}'],
    settings: {react: {version: 'detect'}},
    rules: {
      'react/react-in-jsx-scope': 'off',
      'react/prop-types': 'off',
      'no-undef': 'off'
    }
  },

]
