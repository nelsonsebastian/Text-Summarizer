import urllib.request 
from bs4 import BeautifulSoup

file=open("url.txt","r",encoding='utf-8')
url=file.read()
file.close()
x=[]

#url = "https://www.booking.com/index.html?aid=1743217"

# opening the url for reading
html = urllib.request.urlopen(url)
# parsing the html file
htmlParse = BeautifulSoup(html, 'html.parser')


# getting all the paragraphs
for para in htmlParse.find_all("p"):
    x.append(para.get_text())
	
text=""
for i in x:
    text+=" "+str(i)
text=text.strip()

file=open("output.txt","w")
file.write(text)
file.close()