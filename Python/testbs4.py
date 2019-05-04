from bs4 import BeautifulSoup
import requests

source = requests.get('https://nasavendingmachine.000webhostapp.com/').text

soup = BeautifulSoup(source, 'lxml')

stock = soup.find('div', class_='inner').h6.text

gaeta = stock.split(" ")

print(gaeta[1])

x = int(gaeta[1]) * 1000

print(x)