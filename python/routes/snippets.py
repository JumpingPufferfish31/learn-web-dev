from flask import Blueprint, render_template


snippets = Blueprint('snippets', __name__, url_prefix='/snippets')

@snippets.route('/text-input-live-preview')
def text_input_live_preview():
    return render_template('text_input_live_preview.html')
