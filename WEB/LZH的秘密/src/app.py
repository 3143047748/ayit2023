from flask import Flask
from flask import request
from flask import render_template_string
from flask import render_template

app = Flask(__name__)

@app.route('/')
def hello_ssti():
    lzh = {
        'name': 'hello',
        'secret': 'flag{AF896865-0D17-EED5-580B-A0A23040E0D4}'
    }
    if request.args.get('name'):
        lzh['name'] = request.args.get('name')#获取查询参数name的值

    template = '<h2>Hello %s!</h2>' % lzh['name']

    return render_template_string(template, lzh=lzh)

if __name__ == "__main__":
    app.run(debug=True,host='0.0.0.0',port=5000)
