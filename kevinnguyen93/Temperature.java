
/**
 * Class that maintains a Celsius or Fahrenheit temperature value
 */

class Temperature {

    /**
     * Temperature value
     */

    private double value;


    /**
     * Scale, either "C" for Celsius or "F" for Fahrenheit
     */

    private char scale;


    public Temperature() {
        this.value = 0;
        this.scale = 'C';
    }
    public Temperature(double value) {
        this.value = value;
        this.scale = 'C';
    }
    public Temperature(char scale) {
        this.value = 0;
        this.scale = scale;
    }
    public Temperature(double value,char scale) {
        this.value = value;
        this.scale = scale;
    }

    // --------------------------------

    // ----- ENTER YOUR CODE HERE -----

    // --------------------------------


    // --------------------------------

    // --------- END USER CODE --------

    // --------------------------------


    /**
     * Returns a string containing the value and scale of the Temperature
     */

    public String toString() {

        return Double.toString(value) + scale;

    }


}


/**
 * Demo class to exercise the methods in the Temperature class.
 */

public class TemperatureDemo {


    public static void main(String[] args) {

        // Create temperatures using each constructor

        Temperature freezingC = new Temperature(0.0, 'C');

        System.err.println("Water freezes at " + freezingC.toString());


        Temperature freezingF = new Temperature(32.0, 'F');

        freezingF.setScale('F');

        System.err.println("Water freezes at " + freezingF.toString());


        Temperature coldC = new Temperature();

        coldC.setValue(-40.0);


        Temperature coldF = new Temperature();

        coldF.setScale('F');

        coldF.setValue(-40.0);


        System.out.println(coldC + " (" + coldF + ") is very cold.");


        Temperature boilingF = new Temperature('F');

        boilingF.setValue(212.0);

        Temperature boilingC = new Temperature(100.0);

        boilingC.setValue(100.0);

        System.out.println(

                "Water boils at " + boilingF + " (" + boilingC + ")");

        System.out.println();


        // Test equals

        System.out.println(

                boilingF + " = " + boilingF + " ? " + boilingF.equals(boilingF));

        System.out.println(

                freezingC + " = " + freezingF + " ? " + freezingC.equals(freezingF));

        System.out.println(

                boilingF + " = " + boilingC + " ? " + boilingF.equals(boilingC));

        System.out.println(

                boilingC + " = " + boilingF + " ? " + boilingC.equals(boilingF));

        System.out.println(

                coldC + " = " + coldF + " ? " + coldC.equals(coldF));

        System.out.println();


        // Test greater than and less than

        System.out.println(

                coldC + " < " + boilingC + " ? " + coldC.isLessThan(boilingC));

        System.out.println(

                coldC + " > " + boilingC + " ? " + coldC.isGreaterThan(boilingC));

        System.out.println(

                coldC + " < " + freezingF + " ? " + coldC.isLessThan(freezingF));

        System.out.println(

                coldC + " > " + freezingF + " ? " + coldC.isGreaterThan(freezingF));

    }


}
