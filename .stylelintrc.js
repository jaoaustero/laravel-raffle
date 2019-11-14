module.exports = {
    root: true,

    rules:
    {
        // Specify disallow at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-blacklist
        'at-rule-blacklist': null,

        // We require emptyline
        // Reference: https://stylelint.io/user-guide/rules/at-rule-empty-line-before
        'at-rule-empty-line-before': [
            'always',
            {
                'ignore': [
                    'after-comment',
                    'first-nested',
                    'inside-block',
                    'blockless-after-same-name-blockless',
                    'blockless-after-blockless',
                ],
            }
        ],

        // Use lowercase only on naming at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-case
        'at-rule-name-case': 'lower',

        // Allow multi line or not on at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-newline-after
        'at-rule-name-newline-after': 'always-multi-line',

        // We require space after at-rule
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-space-after
        'at-rule-name-space-after': 'always',

        // Disallow vendor prefix at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-no-vendor-prefix
        'at-rule-no-vendor-prefix': true,

        // Specify the require properties of at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-property-requirelist
        'at-rule-property-requirelist': {
            'font-face': [
                'font-display',
                'font-family',
                'src'
            ]
        },

        // We required new line after semicolon of at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-semicolon-newline-after
        'at-rule-semicolon-newline-after': 'always',

        // We don't want white-space before semicolon of at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-semicolon-space-before
        'at-rule-semicolon-space-before': 'never',

        // Allow at-rules on the list
        // Reference: https://stylelint.io/user-guide/rules/at-rule-whitelist
        'at-rule-whitelist': [
            'keyframes',
            'media',
            'include',
            'import',
            'each',
            'if',
            'else if',
            'else',
            'mixin',
            'function',
            'return',
            'warn',
            'error',
            'font-face',
            'supports'
        ],

        // We don't require empty line before closing brace
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-empty-line-before
        'block-closing-brace-empty-line-before': 'never',

        // We require newline after closing brace
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-newline-after
        'block-closing-brace-newline-after': 'always',

        // We want new line always before closing braces
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-newline-before
        'block-closing-brace-newline-before': 'always-multi-line',

        // Required whitespace every after closing brace if single line
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-space-after
        'block-closing-brace-space-after': 'always-single-line',

        // Required whitespace before closing of brace if single line only
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-space-before
        'block-closing-brace-space-before': 'always-single-line',

        // Disallow empty block of code
        // Reference: https://stylelint.io/user-guide/rules/block-no-empty
        'block-no-empty': true,

        // Disallow single line of style or whitespace after opening brace
        // Reference: https://stylelint.io/user-guide/rules/block-opening-brace-newline-after
        'block-opening-brace-newline-after': 'always',

        // Disallow new line of opening brace
        // Reference: https://stylelint.io/user-guide/rules/block-opening-brace-newline-before
        'block-opening-brace-newline-before': 'never-single-line',

        // Require space after opening brace when single line
        // Reference: https://stylelint.io/user-guide/rules/block-opening-brace-space-after
        'block-opening-brace-space-after': 'always-single-line',

        // Required whitespace before opening brace
        // Reference: https://stylelint.io/user-guide/rules/block-opening-brace-space-before
        'block-opening-brace-space-before': 'always',

        // Require upper case on hex color
        // Reference: https://stylelint.io/user-guide/rules/color-hex-case
        'color-hex-case': 'upper',

        // Require long hex code
        // Reference: https://stylelint.io/user-guide/rules/color-hex-length
        'color-hex-length': 'long',

        // We prefer hex code over named
        // Reference: https://stylelint.io/user-guide/rules/color-named
        'color-named': 'never',

        // Allow hex color
        // Reference: https://stylelint.io/user-guide/rules/color-no-hex
        'color-no-hex': null,

        // Disallow shorthand hex
        // Reference: https://stylelint.io/user-guide/rules/color-no-invalid-hex
        'color-no-invalid-hex': true,

        // We require empty line after comment to make it as divider or 
        // that comment is for the new line, But allows comment after brace
        // Reference: https://stylelint.io/user-guide/rules/comment-empty-line-before
        'comment-empty-line-before': [
            'always',
            {
                'except': ['first-nested']
            }
        ],

        // Disallow empty comments
        // Reference: https://stylelint.io/user-guide/rules/comment-no-empty
        'comment-no-empty': true,

        // We require space before the comment to have a clean
        // and readable comment
        // Reference: https://stylelint.io/user-guide/rules/comment-whitespace-inside
        'comment-whitespace-inside': 'always',

        // We don;t have any black listed words
        // Reference: https://stylelint.io/user-guide/rules/comment-word-blacklist
        'comment-word-blacklist': null,

        // Special patter for media
        // Reference: https://stylelint.io/user-guide/rules/custom-media-pattern
        'custom-media-pattern': null,

        // Require comment before the custom property to avoid confusing on the team
        // Reference: https://stylelint.io/user-guide/rules/custom-property-empty-line-before
        'custom-property-empty-line-before': [
            'always',
            {
                'except': [
                    'after-comment',
                    'after-custom-property',
                ]
            }
        ],

        // Require prefix `uis-` to maintain the proper and consistent naming on style
        // Reference: https://stylelint.io/user-guide/rules/custom-property-pattern
        'custom-property-pattern': 'uis-.+',

        // Disallow space after `!`
        // Reference: https://stylelint.io/user-guide/rules/declaration-bang-space-after
        'declaration-bang-space-after': 'never',

        // Require whitespace before `!`
        // Reference: https://stylelint.io/user-guide/rules/declaration-bang-space-before
        'declaration-bang-space-before': 'always',

        // Disallow duplicate properties, this will help the team
        // avoid duplication of property
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-no-duplicate-properties
        'declaration-block-no-duplicate-properties': true,

        // Require long hand, but ignore some short hand
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-no-redundant-longhand-properties
        'declaration-block-no-redundant-longhand-properties': [
            true,
            {
                'ignoreShorthands': [
                    'margin',
                    'padding',
                    'transition'
                ]
            }
        ],

        // Disallow shorthand properties that override related longhand property
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-no-shorthand-property-overrides
        'declaration-block-no-shorthand-property-overrides': true,

        // After first property `;` requires new line for another property or disallow whitespace after `;`
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-semicolon-newline-after
        'declaration-block-semicolon-newline-after': null,

        // Require new line after semicolon if multiple properties
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-semicolon-newline-before
        'declaration-block-semicolon-newline-before': null,

        // Requires whitespace after semicolon on single line
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-semicolon-space-after
        'declaration-block-semicolon-space-after': 'always-single-line',

        // Disallow whitespace before semicolon
        // Reference:https://stylelint.io/user-guide/rules/declaration-block-semicolon-space-before
        'declaration-block-semicolon-space-before': 'never',

        // Require 1 property per line
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-single-line-max-declarations
        'declaration-block-single-line-max-declarations': 1,

        // Requires trailing semicolon
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-trailing-semicolon
        'declaration-block-trailing-semicolon': 'always',

        // Requires multiple line  on multiple values to avoid long horizontal code and more readable
        // Reference: https://stylelint.io/user-guide/rules/declaration-colon-newline-after
        'declaration-colon-newline-after': 'always-multi-line',

        // Requires whitespace after colon
        // Reference: https://stylelint.io/user-guide/rules/declaration-colon-space-after
        'declaration-colon-space-after': 'always',

        // Disallow whitespace before colon
        // Reference: https://stylelint.io/user-guide/rules/declaration-colon-space-before
        'declaration-colon-space-before': 'never',

        // Disallow new line after properpty, except it has comment on top
        // Reference: https://stylelint.io/user-guide/rules/declaration-empty-line-before
        'declaration-empty-line-before': null,

        // Allow `!important` we use this mostly on overriding some style mostly on
        // themes and other utillities or 3rd party css, But don't abuse it
        // Reference: https://stylelint.io/user-guide/rules/declaration-no-important
        'declaration-no-important': null,

        // Specify blacklist properties
        // Reference: https://stylelint.io/user-guide/rules/declaration-property-unit-blacklist
        'declaration-property-unit-blacklist': null,

        // Specify allowed properties only
        // Reference: https://stylelint.io/user-guide/rules/declaration-property-unit-whitelist
        'declaration-property-unit-whitelist': null,

        // Specify black list value
        // Reference: https://stylelint.io/user-guide/rules/declaration-property-value-blacklist
        'declaration-property-value-blacklist': null,

        // Specify allowed value only
        // Reference: https://stylelint.io/user-guide/rules/declaration-property-value-whitelist
        'declaration-property-value-whitelist': null,

        // Requires quotes around every font name that is not keyword
        // Reference: https://stylelint.io/user-guide/rules/font-family-name-quotes
        'font-family-name-quotes': 'always-unless-keyword',

        // Prevent duplication of font family name
        // Reference: https://stylelint.io/user-guide/rules/font-family-no-duplicate-names
        'font-family-no-duplicate-names': true,

        // Disallow missing generic families in lists of fonts family names
        // Reference: https://stylelint.io/user-guide/rules/font-family-no-missing-generic-family-keyword
        'font-family-no-missing-generic-family-keyword': true,

        // Require numeric font weight
        // Reference: https://stylelint.io/user-guide/rules/font-weight-notation
        'font-weight-notation': 'numeric',

        // Specify black list functions
        // Reference: https://stylelint.io/user-guide/rules/function-blacklist
        'function-blacklist': null,

        // No invalid expression in calc
        // Reference: https://stylelint.io/user-guide/rules/function-calc-no-invalid
        'function-calc-no-invalid': true,

        // Requires space before and after of operator
        // Reference: https://stylelint.io/user-guide/rules/function-calc-no-unspaced-operator
        'function-calc-no-unspaced-operator': true,

        // Requires newline or disallow whitespace after commas when not multiline
        // Reference: https://stylelint.io/user-guide/rules/function-comma-newline-after
        'function-comma-newline-after': null,

        // Requires newline before comma
        // Reference: https://stylelint.io/user-guide/rules/function-comma-newline-before
        'function-comma-newline-before': null,

        // Requires space after comman when single line
        // Reference: https://stylelint.io/user-guide/rules/function-comma-space-after
        'function-comma-space-after': 'always-single-line',

        // Requires whitespace before comman in function
        // Reference: https://stylelint.io/user-guide/rules/function-comma-space-before
        'function-comma-space-before': null,

        // Prevent error on not valid direction in gradient
        // Reference: https://stylelint.io/user-guide/rules/function-linear-gradient-no-nonstandard-direction
        'function-linear-gradient-no-nonstandard-direction': true,

        // Disallow empty lines inside of functions
        // Reference: https://stylelint.io/user-guide/rules/function-max-empty-lines
        'function-max-empty-lines': 0,

        // Require all function in lowercase
        // Reference: https://stylelint.io/user-guide/rules/function-name-case
        'function-name-case': 'lower',

        // Require multiline on function parameters to make it more readable and avoid long
        // horizontal code if this multiline parameters
        // Reference: https://stylelint.io/user-guide/rules/function-parentheses-newline-inside
        'function-parentheses-newline-inside': 'always-multi-line',

        // Make it null because we require multiline always
        // Reference: https://stylelint.io/user-guide/rules/function-parentheses-space-inside
        'function-parentheses-space-inside': null,

        // Disallow scheme-relative urls
        // Reference: https://stylelint.io/user-guide/rules/function-url-no-scheme-relative
        'function-url-no-scheme-relative': true,

        // Require quotes for url
        // Reference: https://stylelint.io/user-guide/rules/function-url-quotes
        'function-url-quotes': 'always',

        // Specify blacklist url
        // Reference: https://stylelint.io/user-guide/rules/function-url-scheme-blacklist
        'function-url-scheme-blacklist': null,

        // Specify allowed or whitelist url
        // Reference: https://stylelint.io/user-guide/rules/function-url-scheme-whitelist
        'function-url-scheme-whitelist': null,

        // Specify allowed or whitelist functions
        // Reference: https://stylelint.io/user-guide/rules/function-whitelist
        'function-whitelist': null,

        // Requires whitespace on multiple functions in single line
        // Reference: https://stylelint.io/user-guide/rules/function-whitespace-after
        'function-whitespace-after': 'always',

        // Specify indention
        // Reference: https://stylelint.io/user-guide/rules/indentation
        'indentation': [
            4 | 'space',
            {
                'baseIndentLevel': 1,
            },
            {
                'indentInsideParens': 'twice',
            },
            {
                'indentClosingBrace': false,
            },
        ],

        // Disallow `!important` inside of keyframes
        // Reference: https://stylelint.io/user-guide/rules/keyframe-declaration-no-important
        'keyframe-declaration-no-important': true,

        // Specify pattern keyframes name to be consistent
        // Reference: https://stylelint.io/user-guide/rules/keyframes-name-pattern
        'keyframes-name-pattern': null,

        // Disallow units for zero length
        // Reference: https://stylelint.io/user-guide/rules/length-zero-no-unit
        'length-zero-no-unit': null,

        // Specify unix or windows linebreaks
        // Reference: https://stylelint.io/user-guide/rules/linebreaks
        'linebreaks': null,

        // Limit the number of adjacent empty lines
        // Reference: https://stylelint.io/user-guide/rules/max-empty-lines
        'max-empty-lines': 5,

        // Limit the length of the line
        // Reference: https://stylelint.io/user-guide/rules/max-line-length
        // 'max-line-length': [
        //     80,
        //     {
        //         'ignorePattern': [
        //             "/https?:\/\/[0-9,a-z]*.*/",
        //             "/data:image?:\/\/[0-9,a-z]*.*/",
        //             "/^\$.*[a-z].;$/g"
        //         ]
        //     }
        // ]

    }
}