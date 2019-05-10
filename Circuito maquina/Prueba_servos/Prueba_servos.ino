#include <Servo.h>
 
Servo servo1;
Servo servo2; 
Servo servo3;
Servo servo4;
int vel = 0;
void setup() {
  // put your setup code here, to run once:
servo1.attach(3);
servo2.attach(5);
servo3.attach(6);
servo4.attach(10);
Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:

servo1.write(26);
delay (1040);
servo1.write(90);
delay (1000);


}
