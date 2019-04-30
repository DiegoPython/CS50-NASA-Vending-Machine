import cv2 as cv
import numpy as np
import sys
import time
import serial, time
import cv2
import numpy as np
import pyzbar.pyzbar as pyzbar
while True:
    cap = cv2.VideoCapture(0)
    for i in range(4):
        cap.grab()
    ret, frame = cap.read()
    cap.release()
    cv2.imshow(" ", frame)
    if cv2.waitKey(2000) != -1:
        break