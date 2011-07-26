#!/usr/bin/env python
import sys
sys.path.insert(0, '/home/FLX_PROJECT_NAME/')
sys.path.insert(0, '/home/FLX_PROJECT_NAME/app')

print sys.path

from flup.server.fcgi import WSGIServer
from app import app

if __name__ == '__main__':
    WSGIServer(app).run()
