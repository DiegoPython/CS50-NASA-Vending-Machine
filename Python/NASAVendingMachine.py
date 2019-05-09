import cv2 as cv
import numpy as np
import sys
import time
import serial, time
import cv2
import numpy as np
import pyzbar.pyzbar as pyzbar

cap = cv2.VideoCapture(0)
font = cv2.FONT_HERSHEY_PLAIN
cap.set(3,640)
cap.set(4,480)
#160.0 x 120.0
#176.0 x 144.0
#320.0 x 240.0S
#352.0 x 288.0
#640.0 x 480.0
#1024.0 x 768.0
#1280.0 x 1024.0
data = "x"
rep_flag = True
arduino = serial.Serial("COM6", 9600)
time.sleep(2)

while True:
    _, frame = cap.read()
    decodedObjects = pyzbar.decode(frame)
    global data
    if(decodedObjects and rep_flag):
        for obj in decodedObjects:
            #print("Data", obj.data)
            cv2.putText(frame, str(obj.data), (50, 50), font, 2, (255, 0, 255), 3)
            data = str(obj.data)
            print("RETIRE CÓDIGO ")
            
    elif(not decodedObjects and str(data) != "x"):
        if(str(data) == "b'Hello :)'"):
            data = "x"
            print("Espere...")
            arduino.write(b'9')
            print("Exito :)")
            rep_flag = False
            time.sleep(7)
        else:
            data = "x"
            print("Espere...")
            arduino.write(b'8')
            print("CÓDIGO INVALIDO")
            rep_flag = False
            time.sleep(7)
    else:
        arduino.write(b'7')
        rep_flag = True
        print("MUESTRE CÓDIGO")        
            
    #print(data)        
    cv2.imshow("Frame", frame)

    key = cv2.waitKey(1)
    if key == 27:
        break
arduino.close()