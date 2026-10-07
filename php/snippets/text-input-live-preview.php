<?php
require_once __DIR__ . '/../config.php';

$title = "Text input live preview";
$stylesheets = '
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css">
';
$scripts = '
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js"></script>
    <script src="' . BASE_URL . 'static/js/text-input-live-preview.js"></script>
';
require_once APP_ROOT . '/includes/header.php';
?>
<h2>Text input live preview</h2>
<div class="column-wrapper">
    <div class="column">
        <h3>Input:</h3>
        <textarea id="text-input-textarea">
Markdown: **bold**, *italic*, `inline code`, [link](www.google.com), etc.

Inline latex: $f(x) = 4x^2$

Block latex:
$$
\sum_{i=1}^{n} i = \frac{n(n+1)}{2}
$$</textarea>
    </div>
    <div class="column">
        <h3>Preview:</h3>
        <div id="text-input-preview"></div>
    </div>
</div>
<?php
require_once APP_ROOT . '/includes/footer.php';
?>
