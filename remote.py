import urllib.request
import json

a=input('a=')
b=input('b=')
url="#"+a+'$b='+b

jsonData=urllib.request.urlopen("#")
data=json.load(jsonData)
print(data)