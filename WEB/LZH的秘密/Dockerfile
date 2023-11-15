FROM python:3.7-alpine

COPY ./src /app

RUN pip install flask -i https://pypi.tuna.tsinghua.edu.cn/simple
WORKDIR  /app
CMD python app.py
