module.exports = {
    extends: ['eslint:recommended', 'prettier'],
    plugins: ['prettier'],
    env: {
        browser: true,
        node: true,
        es6: true,
    },
    parser: '@babel/eslint-parser',
    parserOptions: {
        //sourceType: 'module',
        requireConfigFile: false,
    },
    ignorePatterns: ['**/js/libs/*.js'],
    rules: {
        // enable additional rules
        indent: ['error', 4],
        'linebreak-style': ['error', 'unix'],
        quotes: ['error', 'single'],
        semi: ['error', 'always'],
        // override configuration set by extending "eslint:recommended"
        //"no-empty": "warn",
        //"no-cond-assign": ["error", "always"],
        'prettier/prettier': [
            'error',
            {
                singleQuote: true,
                trailingComma: 'all',
                printWidth: 120,
                tabWidth: 4,
            },
        ],
    },
};
