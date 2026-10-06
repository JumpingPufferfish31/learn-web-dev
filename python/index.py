from flask import Flask


app = Flask("learn_web_dev")

@app.route('/')
def hello_world():
    return "<p>Hello, flask!</p>"
