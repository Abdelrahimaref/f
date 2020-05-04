import win32com.client as win32
import os
import time
import datetime

import firebase_admin
from firebase_admin import credentials , auth , exceptions , db

cred = credentials.Certificate("C:/Users/admins/Desktop/website/serviceAccountKey.json")
default_app = firebase_admin.initialize_app(cred, {
    'databaseURL': 'https://forex-amir.firebaseio.com/'
})
ref = db.reference('')
data = {
        "AUD":"",
        "CAD":"", 
        "CHF":"", 
        "EUR":"", 
        "GBP":"", 
        "JPY":"", 
        "NZD":"", 
        "USD":""
    	}
excel = win32.gencache.EnsureDispatch('Excel.Application')
excel.DisplayAlerts = False
wb = excel.Workbooks.Open(r'C:\\Users\\admins\\Desktop\\website\\forex profit money.xlsx') # opens "Test" file
ws=wb.Worksheets('Strength 28')
excel.Visible = True
now = datetime.datetime.now()
i = 0

while 1:
	try:
		now = datetime.datetime.now()
		alerts_ref = ref.child('alerts').child(now.strftime('%Y-%m-%d'))
		if now >= now.replace(hour=8, minute=0, second=0) and now <= now.replace(hour=19, minute=0, second=0):
			for var in range(4,12,1):
				currency = ws.Cells(18,var).Value 
				power = ws.Cells(19,var).Value*10;
				

				if power >= 70 and data[currency] != "buy":
					data[currency] = "buy"
					print (data[currency])
					alerts_ref.push({
		   				'currency': currency,
		    			'power': 'buy',
		    			'time': now.strftime('%H:%M'),
						})
				if power <= 20 and data[currency] != "sell":
					data[currency] = "sell"
					print (data[currency])
					alerts_ref.push({
		   				'currency': currency,
		    			'power': 'sell',
		    			'time': now.strftime('%H:%M'),
						})
		else :
			data = {
		       "AUD":"",
		        "CAD":"", 
		        "CHF":"", 
		        "EUR":"", 
		        "GBP":"", 
		        "JPY":"", 
		        "NZD":"", 
		        "USD":""
		    	}
		wb.Save()
		time.sleep(1)
	except Exception as e:
		print(e)
		
		continue
	

