
/*Created 2 January 2015
  By Reptitlehaus
  This example code is in the public domain.
  http://https://medium.com/@REPTILEHAUS/power-led-bulbs-with-arduino-php-part-2-1d564287e5de
/* 
/******************************************************************************************/
/*DESN37900 Interactive Objects and Environments 2: Physical Computing - Project 3 */
/*Purpose: LED flower using node.js and php  */
/* Modified by Jimin Chung, Adriana Rodriguez, Isabella Sulle*/
/* Added in to change rgb led at users request to expand the  primary colors of red,blue and green. */
/* Adjusted pin numbers and outputs to connect to node.js and set connect breadboard*/

/******************************************************************************************/



int redPin = 13;
int greenPin = 12;
int bluePin = 11;

void setup() {
    Serial.begin(9600);
    
    pinMode( redPin, OUTPUT );
    pinMode( greenPin, OUTPUT );
    pinMode( bluePin, OUTPUT );
}

void loop() {

    while (Serial.available() == 0); //wait until the serial connection is open
        int COM_value = Serial.read() - '0'; //read from the serial connection; the - '0' is to cast the values as the int and not the ASCII code
        Serial.println(COM_value); //print to the console for testing

        if( COM_value == 1 ) { //LED #1241
            Serial.println("Received a 1 - ON");
            digitalWrite( redPin, HIGH ); // HIGH VOLTAGE - TURNED ON
        }
        if( COM_value == 2 ) {
            Serial.println("Received a 2 - OFF");
            digitalWrite( bluePin, HIGH ); // HIGH VOLTAGE - TURNED ON
        }
        if( COM_value == 3 ) {
            Serial.println("Received a 2 - OFF");
            digitalWrite( greenPin, HIGH ); // HIG VOLTAGE - TURNED ON
        }
        if( COM_value == 4 ) {
            Serial.println("Received a 2 - OFF");
            digitalWrite( redPin, LOW ); // LOW VOLTAGE - TURNED OFF
           digitalWrite( greenPin, LOW ); // LOW VOLTAGE - TURNED OFF
           digitalWrite( bluePin, LOW ); // LOW VOLTAGE - TURNED OFF
        }
}
