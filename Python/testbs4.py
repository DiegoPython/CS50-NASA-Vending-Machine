from bs4 import BeautifulSoup
import requests

source = requests.get('https://nasavendingmachine.000webhostapp.com/').text

stock = []

soup = BeautifulSoup(source, 'lxml')
for products in soup.find_all('div', class_='inner'):
    global stock
    stocks = products.find('h6').text
    el = stocks.split(" ")
    stock.append(el[0])
    stock.append(int(el[1]))



print(stock[1])

