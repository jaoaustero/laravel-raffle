module.exports = {
    root: true,

    rules:
    {
        // A list that we don't want to
        // use on the scss file
        // Reference: https://stylelint.io/user-guide/rules/at-rule-blacklist
        'at-rule-blacklist': [
            'extend'
        ],

        // We require emptyline
        // Reference: https://stylelint.io/user-guide/rules/at-rule-empty-line-before
        'at-rule-empty-line-before': {
            'ignore': [
                'after-comment',
                'first-nested',
                'inside-block',
                'blockless-after-same-name-blockless',
                'blockless-after-blockless',
            ]
        },

        // Use lowercase only on naming at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-case
        'at-rule-name-case': 'lower',

        // Allow multi line or not on at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-newline-after
        'at-rule-name-newline-after': 'always-multi-line',

        // We require space after at-rule
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-space-after
        'at-rule-name-space-after': 'always',

        // We `false` this rule because SCSS use different at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-no-unknown
        'at-rule-no-unknown': false,

        // Disallow vendor prefix at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-no-vendor-prefix
        'at-rule-no-vendor-prefix': true,

        // Specify the require properties of at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-property-requirelist
        'at-rule-property-requirelist': {
            'font-face': ['font-display', 'font-family', 'src']
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

        // Required whitespace when single line
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-space-after
        'block-closing-brace-space-after': 'always-single-line',


        // We require empty line after comment to make it as divider or 
        // that comment is for the new line, But allows comment after brace
        // Reference: https://stylelint.io/user-guide/rules/comment-empty-line-before
        'comment-empty-line-before': {
            'except': ['first-nested']
        },

        // Disallow empty comments
        // Reference: https://stylelint.io/user-guide/rules/comment-no-empty
        'comment-no-empty': 'true',

        // We require space before the comment to have a clean
        // and readable comment
        // Reference: https://stylelint.io/user-guide/rules/comment-whitespace-inside
        'comment-whitespace-inside': 'always',
    }
}