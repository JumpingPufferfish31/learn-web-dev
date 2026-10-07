from flask import Flask, render_template

from routes.snippets import snippets


app = Flask("learn_web_dev")
app.register_blueprint(snippets)

@app.route('/')
def hello_world():
    return render_template('index.html')
