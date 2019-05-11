int redPin= 24;
int greenPin = 22;
int bluePin = 26;
void setup() {
  pinMode(redPin, OUTPUT);
  pinMode(greenPin, OUTPUT);
  pinMode(bluePin, OUTPUT);
}
void loop() {
  setColor(255, 0, 0);
  delay(.1);    
  setColor(255, 255, 0);
  delay(.1);
  setColor(0, 255, 0);
  delay(.1);
  setColor(0, 255, 255);
  delay(.1);
  setColor(0, 0, 255);
  delay(.1);
  setColor(255, 0, 255);
  delay(.1);
}
void setColor(int redValue, int greenValue, int blueValue) {
  analogWrite(redPin, redValue);
  analogWrite(greenPin, greenValue);
  analogWrite(bluePin, blueValue);
}
