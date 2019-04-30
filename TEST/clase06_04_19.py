import os 
import cv2
import numpy as np
import matplotlib.pyplot as plt

tipo_imagen = ["speaker","headphones","watch"]

cap = cv2.VideoCapture(0)
cap_height = 500
imagenes1 = []
imagenes2 = []
imagenes3 = []

while(True):
    _,frame = cap.read()

    cv2.rectangle(frame, (300,75), (650,425), (0,255,0), 2)
    cv2.imshow("JAJA, SIMÓN", frame)

    aspect = frame.shape[1] / float(frame.shape[0])
    res = int (aspect * cap_height)
    frame2 = cv2.resize(frame, (res,cap_height))
    cv2.rectangle(frame, (300,75), (650,425), (0,255,0), 2)
    cv2.imshow("JAJA, SIMÓN", frame)
    key = cv2.waitKey(1)
    
    if(key & 0xFF == ord("q")):
        break
    elif(key & 0xFF == ord("1")):
        imagenes1.append(frame2)
        print("GUARDADO EN speaker, PERRO")
    elif(key & 0xFF == ord("2")):
        imagenes2.append(frame2)
        print("GUARDADO EN headphones, PERRO")
    elif(key & 0xFF == ord("3")):
        imagenes3.append(frame2)
        print("GUARDADO EN watch, PERRO")

cap.release
cv2.destroyAllWindows

img_width = 399
img_height = 399

dir1 = "./data/img/speaker"
os.makedirs(dir1, exist_ok=True)
dir2 = "./data/img/headphones"
os.makedirs(dir2, exist_ok=True)
dir3 = "./data/img/watch"
os.makedirs(dir3, exist_ok=True)

for i, frame2 in enumerate(imagenes1):
    roi = frame2[75+2:425-2,300+2:650-2]  
    roi = cv2.cvtColor(roi, cv2.COLOR_RGB2BGR)
    roi = cv2.resize(roi, (img_width, img_height))
    cv2.imwrite("./data/img/speaker/a{}.bmp".format(i), cv2.cvtColor(roi, cv2.COLOR_BGR2RGB))

for i, frame2 in enumerate(imagenes2):
    roi = frame2[75+2:425-2,300+2:650-2]
    roi = cv2.cvtColor(roi, cv2.COLOR_RGB2BGR)
    roi = cv2.resize(roi, (img_width, img_height))
    cv2.imwrite("./data/img/headphones/b{}.bmp".format(i), cv2.cvtColor(roi, cv2.COLOR_BGR2RGB))

for i, frame2 in enumerate(imagenes1):
    roi = frame2[75+2:425-2,300+2:650-2]
    roi = cv2.cvtColor(roi, cv2.COLOR_RGB2BGR)
    roi = cv2.resize(roi, (img_width, img_height))
    cv2.imwrite("./data/img/watch/c{}.bmp".format(i), cv2.cvtColor(roi, cv2.COLOR_BGR2RGB))
