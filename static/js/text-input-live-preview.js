$(document).ready(function() {
    var input = $('#text-input-textarea');
    var output = $('#text-input-preview');

    function updatePreview() {
        var rawText = input.val();
        var preview = marked.parse(rawText);
        output.html(preview);
        renderMathInElement(output[0], {
            delimiters: [
                {
                    left: '$$',
                    right: '$$',
                    display: true,
                },
                {
                    left: '$',
                    right: '$',
                    display: false,
                },
            ],
            throwOnError: false
        });
    }

    input.on('input', updatePreview);
    updatePreview();  // run once on initial load
});
