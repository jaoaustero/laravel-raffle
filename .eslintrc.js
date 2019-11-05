// https://eslint.org/docs/user-guide/configuring

module.exports = {
    root: true,
    parserOptions: {
        parser: 'babel-eslint',
    },
    env: {
        browser: true,
    },
    extends: [],
    plugins: [],
    // add your custom rules here
    rules: {
        // Force the curly brace new line
        // Reference: https://eslint.org/docs/rules/brace-style
        'brace-style': ['error', 'allman'],

        // CamelCase
        // Requires `camelcase` on properties
        // Reference: https://eslint.org/docs/rules/camelcase
        camelcase: 'off',

        // Trailing comma
        // Force you to add comma on multilines.
        // Reference: https://eslint.org/docs/rules/comma-dangle
        'comma-dangle': [
            'error',
            {
                arrays: 'always-multiline',
                objects: 'always-multiline',
                imports: 'never',
                exports: 'never',
                functions: 'never',
            },
        ],

        // Comma Spacing
        // Requires space after comma but it doesn't require
        // space before.
        // Reference: https://eslint.org/docs/rules/comma-spacing
        'comma-spacing': [
            'error',
            {
                before: false,
                after: true,
            },
        ],

        // Comma Style
        // It should be after, not on new line
        // Reference: https://eslint.org/docs/rules/comma-style
        'comma-style': ['error', 'last'],

        // Func Names
        // Allow to assigned name on functions if it's required
        // on es6 environment
        // Reference: https://eslint.org/docs/rules/func-names
        'func-names': ['error', 'as-needed'],

        // Prefer default edxport
        // We override the configuration of airbnb, because
        // Some cases we need to export named source.
        // Reference: https://github.com/benmosher/eslint-plugin-import/blob/master/docs/rules/prefer-default-export.md
        "import/prefer-default-export": "off",

        // Requires 4 space; We enforce case to have indent
        // level greater than switch
        // Reference: https://eslint.org/docs/rules/indent
        'indent': ['error', 4, { "SwitchCase": 1 }],

        // Line Break Style
        // Enforce consistent line ending
        // Reference: https://eslint.org/docs/rules/linebreak-style
        'linebreak-style': ["error", "windows"],

        // Max Len
        // Enforce to break the long line of code to make
        // the code readable but ignore some cases
        // Allow long path inside of import(...)
        // Reference:
        'max-len': [
            'error',
            {
                'code': 100,
                'ignoreTrailingComments': true,
                'ignoreUrls': true,
                'ignoreTemplateLiterals': true,
                "ignorePattern": 'import(.*)',
            }
        ],

        // Capital Letter
        // Require capital letter on constructor or new
        // Reference: https://eslint.org/docs/rules/new-cap
        'new-cap': [
            'error',
            {
                newIsCap: true,
                capIsNew: false,
                properties: false,
            },
        ],

        // No Console
        // Let console to be use for debugging,
        // before production make the `APP_DEBUG: false` @ .env
        // to hide consoles
        // Reference: https://eslint.org/docs/rules/no-console
        'no-console': [
            'error',
            {
                allow: ['log', 'warn', 'error', 'table'],
            },
        ],

        // No Empty
        // Doesn't allow empty conditions like try catch,
        // if else, while and switch case.
        // Reference: https://eslint.org/docs/rules/no-empty
        'no-empty': [
            'error',
            {
                allowEmptyCatch: false,
            },
        ],

        // No Empty Functions
        // Allow only empty on constructor
        // Reference: https://eslint.org/docs/rules/no-empty-function
        'no-empty-function': [
            'error',
            {
                allow: ['constructors'],
            },
        ],

        // No Mixed Spaces and Tabs
        // Disallow space and tabs together
        // Reference: https://eslint.org/docs/rules/no-mixed-spaces-and-tabs
        'no-mixed-spaces-and-tabs': ['error', 'smart-tabs'],

        // No Nested Ternary
        // Allow the short hard of if-else condition
        // because to use inside of `return`, jsx doesnt accept
        // if-else syntax condition inside only shorthand
        // Reference: https://eslint.org/docs/rules/no-nested-ternary
        'no-nested-ternary': 'off',

        // No Plusplus
        // Allow ++ over +=1 for team preference
        // and overrides the airbnb default config
        // Reference: https://eslint.org/docs/6.0.0/rules/no-plusplus
        "no-plusplus": 'off',

        // No Trailing Space
        // Disallow spaces after {}
        // Reference: https://eslint.org/docs/rules/no-trailing-spaces
        'no-trailing-spaces': [
            'error',
            {
                skipBlankLines: true,
                ignoreComments: false,
            },
        ],

        // Quote Props
        // Enforce all object properties should wrap
        // on single quotes
        // Reference: https://eslint.org/docs/rules/quote-props
        'quote-props': 'off',

        // Semi Style
        // Requires semi colon after function
        // Reference: https://eslint.org/docs/rules/semi-style
        'semi-style': ['error', 'last'],

        // don't require .vue extension when importing
        'import/extensions': [
            'error',
            'always',
            {
                js: 'never',
                vue: 'never',
            },
        ],

        // disallow reassignment of function parameters
        // disallow parameter object manipulation except for specific exclusions
        'no-param-reassign': [
            'error',
            {
                props: true,
                ignorePropertyModificationsFor: [
                    'state', // for vuex state
                    'acc', // for reduce accumulators
                    'e', // for e.returnvalue
                ],
            },
        ],

        // allow optionalDependencies
        'import/no-extraneous-dependencies': [
            'error',
            {
                optionalDependencies: ['test/unit/index.js'],
            },
        ],

        // allow debugger during development
        'no-debugger': process.env.NODE_ENV === 'production' ? 'error' : 'off',
    },
};
